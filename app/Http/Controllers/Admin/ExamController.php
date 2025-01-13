<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\Teacher_subject;
use App\Models\Teacher_grade;
use App\Models\Grade_subject;
use App\Models\Grade_exam;
use App\Models\Subject_exam;
use App\Models\Exam_relation;
use App\Models\Type_exam;
use App\Models\Score;
use App\Models\Student_exam;
use App\Models\Relationship;
use App\Models\Chinese_higher;
use App\Models\Chinese_lower;
use App\Models\Student_relationship;


use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ExamController extends Controller
{
   public function index(Request $request)
   {
      try {
         session()->flash('page',  $page = (object)[
            'page' => 'database scorings',
            'child' => 'database scorings',
         ]);

         $subjects = Subject::orderBy('name_subject', 'asc')->get();
         $grades = Grade::all();
         $teachers = Teacher::orderBy('name')->get();
         $type = Type_exam::orderBy('name')->get();

         $form = (object) [
            'subjects' => $request->subject ?? 'all',
            'grades' => $request->grade ?? 'all',
            'teachers' => $request->teacher ?? 'all',
            'type' => $request->type ?? 'all',
            'search' => $request->search ?? null,
         ];

         $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
            ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
            ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
            ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
            ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
            ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
            ->where('exams.semester', session('semester'))
            ->where('exams.academic_year', session('academic_year'))
            ->orderByRaw('exams.is_active = 0 ASC');

         // Jika search diisi, abaikan filter lainnya
         if (!is_null($form->search)) {
            $data->where('exams.name_exam', 'like', '%' . $form->search . '%');
         } else {
            // Jika search tidak diisi, gunakan filter lainnya
            if ($form->subjects !== 'all') {
               $data->where('subjects.id', $form->subjects);
            }
            if ($form->grades !== 'all') {
               $data->where('grades.id', $form->grades);
            }
            if ($form->teachers !== 'all') {
               $data->where('teachers.id', $form->teachers);
            }
            if ($form->type !== 'all') {
               $data->where('type_exams.id', $form->type);
            }
         }

         // Akhir dari query
         $data = $data->orderBy('grades.id', 'asc')
            ->select(
               'exams.*',
               'grades.name as grade_name',
               'grades.class as grade_class',
               'subjects.name_subject as subject_name',
               'teachers.name as teacher_name',
               'type_exams.name as type_exam'
            )
            ->paginate(15);



         return view('components.exam.data-exam', [
            'data' => $data,
            'form' => $form,
            'grades' => $grades,
            'subjects' => $subjects,
            'teachers' => $teachers,
            'type' => $type,
         ]);

      } catch (Exception $err) {
         return dd($err);
      }
   }

   public function getById($id)
   {
      session()->flash('page',  $page = (object)[
         'page' => 'database scorings',
         'child' => 'database Scorings',
      ]);

      try {
         $data = Exam::select('exams.*', 'grades.name as grade_name', 'subjects.name_subject')
            ->join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
            ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
            ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
            ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
            ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
            ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
            ->where('exams.id', $id)
            ->where('exams.academic_year', session('academic_year'))
            ->select('exams.*', 'grades.name as grade_name', 'grades.class as grade_class', 'subjects.name_subject as subject_name', 'teachers.name as teacher_name', 'type_exams.name as type_exam')
            ->first();

         if(session('role') == 'superadmin' || session('role') == 'admin'){
            return view('components.exam.detail-exam')->with('data', $data);
         }
         elseif (session('role') == 'teacher') {
            return view('components.teacher.detail-exam-teacher')->with('data', $data);
         }
      } catch (Exception $err) {  
         dd($err);
         return abort(404);
      }
   }

   public function getByIdSession()
   {
      session()->flash('page',  $page = (object)[
         'page' => 'assessments',
         'child' => 'assessments',
      ]);

      $id = session('exam_id');

      try {
         $data = Exam::select('exams.*', 'grades.name as grade_name', 'subjects.name_subject')
            ->join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
            ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
            ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
            ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
            ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
            ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
            ->join('scores', 'exams.id', '=', 'scores.exam_id')
            ->where('exams.id', $id)
            ->where('exams.academic_year', session('academic_year'))
            ->select('exams.*', 'grades.name as grade_name', 'grades.class as grade_class', 'subjects.name_subject as subject_name', 'teachers.name as teacher_name', 'type_exams.name as type_exam', 'scores.score as score') 
            ->first();

         if (session('role') == 'student' || 'parent'){
            return view('components.student.detail-exam-student')->with('data', $data);
         }
      } catch (Exception $err) {  
         dd($err);
         return abort(404);
      }
   }

   public function teacherExam()
   {
      try {
         session()->flash('page',  $page = (object)[
            'page' => 'scorings',
            'child' => 'scorings',
         ]);

         $getIdTeacher = Teacher::where('user_id', session('id_user'))->value('id');

         $data = Exam::select('exams.*', 'grades.name as grade_name', 'subjects.name_subject')
            ->join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
            ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
            ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
            ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
            ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
            ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
            ->where('exams.teacher_id', $getIdTeacher)
            ->where('exams.semester', session('semester'))
            ->where('exams.academic_year', session('academic_year'))
            ->select('exams.*', 'grades.name as grade_name', 'grades.class as grade_class', 'subjects.name_subject as subject_name', 'teachers.name as teacher_name', 'type_exams.name as type_exam')
            ->orderBy('exams.created_at', 'desc')
            ->paginate(10);

         // dd($data);

         return view('components.teacher.data-exam-teacher')->with('data', $data);

      } catch (Exception $err) {
         return dd($err);
      }
   }

   public function detailTeacherExam($id)
   {
      session()->flash('page',  $page = (object)[
         'page' => 'database exam',
         'child' => 'database exam',
      ]);

      try {
         $data = Exam::select('exams.*', 'grades.name as grade_name', 'subjects.name_subject')
            ->join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
            ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
            ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
            ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
            ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
            ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
            ->where('exams.id', $id)
            ->where('exams.academic_year', session('academic_year'))
            ->select('exams.*', 'grades.name as grade_name', 'grades.class as grade_class', 'subjects.name_subject as subject_name', 'teachers.name as teacher_name', 'type_exams.name as type_exam')
            ->first();

         // dd($data);

         return view('components.teacher.detail-exam')->with('data', $data);
      } catch (Exception $err) {  
         dd($err);
         return abort(404);
      }
   }

   public function gradeExam(Request $request)
   {
      try {
         session()->flash('page',  $page = (object)[
               'page' => 'assessments',
               'child' => 'assessments',
         ]);

         $form = (object) [
            'sort' => $request->order ?? 'all',
         ];
         $sort = $request->order ?? 'all';

         if(session('role') == 'parent')
         {
            $getIdUser         = session('id_user');
            $id                = Relationship::where('user_id', $getIdUser)->value('id');
            $getIdStudent      = session('studentId');
            $gradeIdStudent    = Student::where('students.id', $getIdStudent)->value('grade_id');
            $subjects          = Grade::with(['subject' => function($query){
               $query->orderBy('name_subject', 'asc');
            }])
            ->where('grades.id', $gradeIdStudent)
            ->first();

            $data = Score::join('exams', 'exams.id', '=', 'scores.exam_id')
               ->join('grades', 'scores.grade_id', '=', 'grades.id')
               ->join('subjects', 'scores.subject_id', '=', 'subjects.id')
               ->join('teachers', 'scores.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'scores.type_exam_id', '=', 'type_exams.id')
               ->join('students', 'scores.student_id', '=', 'students.id')
               ->where('scores.student_id', $getIdStudent)
               ->where('scores.semester', session('semester'))
               ->where('scores.academic_year', session('academic_year'))
               ->when($sort !== 'all', function ($query) use ($sort) {
                  return $query->where('scores.subject_id', $sort);
              })
               ->select('exams.*', 'grades.name as grade_name', 'grades.class as grade_class',
                  'subjects.name_subject as subject_name', 'teachers.name as teacher_name',
                  'type_exams.name as type_exam' , 'scores.score as score', 'students.name as student_name')
               ->orderBy('created_at', 'desc')
               ->paginate(15);
         } 

         elseif (session('role') == 'student') 
         {
            $getIdUser     = session('id_user');
            $id            = Student::where('user_id', $getIdUser)->value('grade_id');
            $getIdStudent  = Student::where('user_id', $getIdUser)->value('id');

            $gradeIdStudent    = Student::where('students.id', $getIdStudent)->value('grade_id');
            $subjects          = Grade::with(['subject' => function($query){
               $query->orderBy('name_subject', 'asc');
            }])
            ->where('grades.id', $id)
            ->first();
   
            $data = Score::join('exams', 'exams.id', '=', 'scores.exam_id')
               ->join('grades', 'scores.grade_id', '=', 'grades.id')
               ->join('subjects', 'scores.subject_id', '=', 'subjects.id')
               ->join('teachers', 'scores.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'scores.type_exam_id', '=', 'type_exams.id')
               ->join('students', 'scores.student_id', '=', 'students.id')
               ->where('scores.student_id', $getIdStudent)
               ->where('scores.semester', session('semester'))
               ->where('scores.academic_year', session('academic_year'))
               ->when($sort !== 'all', function ($query) use ($sort) {
                  return $query->where('scores.subject_id', $sort);
               })
               ->select('exams.*', 'grades.name as grade_name', 'grades.class as grade_class',
                  'subjects.name_subject as subject_name', 'teachers.name as teacher_name',
                  'type_exams.name as type_exam' , 'scores.score as score', 'students.name as student_name')
               ->orderBy('created_at', 'desc')
               ->paginate(15);
         }

         return view('components.student.data-exam-student', [
            "data" => $data,
            "form" => $form,
            "subjects" => $subjects,
         ]);

      } catch (Exception $err) {
         return dd($err);
      }
   }

   public function detailGradeExam($id)
   {
      session()->flash('page',  $page = (object)[
         'page' => 'database exam',
         'child' => 'database exam',
      ]);

      try {
         $data = Exam::select('exams.*', 'grades.name as grade_name', 'subjects.name_subject')
            ->join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
            ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
            ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
            ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
            ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
            ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
            ->where('exams.id', $id)
            ->where('exams.academic_year', session('academic_year'))
            ->select('exams.*', 'grades.name as grade_name', 'grades.class as grade_class', 'subjects.name_subject as subject_name', 'teachers.name as teacher_name', 'type_exams.name as type_exam')
            ->first();

         // dd($data);

         return view('components.teacher.detail-exam')->with('data', $data);
      } catch (Exception $err) {  
         dd($err);
         return abort(404);
      }
   }
   
   public function setAssessmentId(Request $request)
   {
      session(['exam_id' => $request->id]);

      return response()->json(['success' => true]);
   }
}