<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\Grade_subject;
use App\Models\Grade_exam;
use App\Models\Teacher_grade;
use App\Models\Teacher_subject;

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Constraint\Constraint;
use Illuminate\Support\Facades\Log;

class GradeController extends Controller
{
   public function index()
   {
      try {
         //code...
         session()->flash('page',  $page = (object)[
            'page' => 'grades',
            'child' => 'database grades',
         ]);

         $data = Grade::with(['student', 'teacher' => function($query){
               $query->where('teacher_grades.academic_year', session('academic_year'));
            } , 'exam' => function($query){
               $query->where('grade_exams.academic_year', session('academic_year'));
            }, 'subject' => function($query){
               $query->where('grade_subjects.academic_year', session('academic_year'));
            }])
            ->withCount([
               'student as active_student_count',
               'teacher as active_teacher_count' => function ($query) {
                     $query->where('teacher_grades.academic_year', session('academic_year')); // Pastikan tabel 'teachers'
               },
               'exam as active_exam_count' => function ($query) {
                     $query->where('grade_exams.academic_year', session('academic_year')); // Pastikan tabel 'exams'
               },
               'subject as active_subject_count' => function ($query) {
                     $query->where('grade_subjects.academic_year', session('academic_year')); // Pastikan tabel 'subjects'
               }
            ])
            ->get();


         // dd($data);
         return view('components.grade.data-grade')->with('data', $data);

      } catch (Exception $err) {
         return dd($err);
      }
   }
   public function detailGrade($id){
      
      try {
         session()->flash('page',  $page = (object)[
            'page' => 'grades',
            'child' => 'database grades',
         ]);
   
         $grade = Grade::where('id', $id)
            ->select('grades.name as grade_name', 'grades.class as grade_class')
            ->first();
   
         $gradeTeacher = Teacher_grade::where('grade_id',$id)
            ->join('teachers', 'teachers.id', '=', 'teacher_grades.teacher_id')
            ->where('academic_year', session('academic_year'))
            ->get();
   
         $gradeExam = Grade_exam::join('exams', 'exams.id','=', 'grade_exams.exam_id')
            ->join('type_exams', 'type_exams.id', '=', 'exams.type_exam')
            ->select('exams.*', 'type_exams.name as type_exam_name')
            ->where('grade_exams.grade_id', $id)
            ->where('grade_exams.academic_year', session('academic_year'))
            ->get();
   
         $gradeSubject = Teacher_subject::where('grade_id', $id)
            ->leftJoin('subjects', 'teacher_subjects.subject_id', '=', 'subjects.id')
            ->leftJoin('teachers', 'teacher_subjects.teacher_id', '=', 'teachers.id')
            ->select(
               'teacher_subjects.*',
               'teacher_subjects.grade_id as grade_id',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id'
            )
            ->where('academic_year', session('academic_year'))
            ->get();
   
         // dd($gradeSubject);
   
         $subjectTeacher = Teacher_subject::where('grade_id', $id)
            ->join('teachers', 'teachers.id', 'teacher_subjects.teacher_id')
            ->join('subjects', 'subjects.id', 'teacher_subjects.subject_id')
            ->select('subjects.id as subject_id','teachers.name as teacher_name')
            ->get();
   
         $gradeStudent = Student::where('grade_id', $id)->where('is_active', true)
            ->orderBy('name', 'ASC')
            ->get();

         $data = (object)[
            'grade'        => $grade,
            'gradeTeacher' => $gradeTeacher,
            'gradeStudent' => $gradeStudent,
            'gradeSubject' => $gradeSubject,
            'gradeExam'    => $gradeExam, 
            'subjectTeacher' => $subjectTeacher, 
         ];

         // dd($data);
         return view('components.grade.detail-grade')->with('data', $data);
      } catch (Exception $err) {
         
         dd($err);
         return abort(404);
      }
   }

   public function teacherGrade()
   {
      try {
         //code...
         session()->flash('page',  $page = (object)[
            'page' => 'teacher grades',
            'child' => 'database teacher grades',
         ]);

         $getIdTeacher = Teacher::where('user_id', session('id_user'))->value('id');

         $gradeTeacher = Teacher_grade::where('teacher_id', $getIdTeacher)
            ->join('grades', 'grades.id', '=', 'teacher_grades.grade_id')
            ->select('grades.*', )
            ->where('academic_year', session('academic_year'))
            ->get();

            foreach ($gradeTeacher as $gt) {
               $gt->students = Student::where('grade_id', $gt->id)->where('is_active', true)->get();
           }

         $data = [
            'gradeTeacher' => $gradeTeacher,
         ];

         // dd($data);

         return view('components.teacher.data-grade-teacher')->with('data', $data);

      } catch (Exception $err) {
         return dd($err);
      }
   }

   public function studentGrade($id)
   {
      try {
         //code...
         session()->flash('page',  $page = (object)[
            'page' => 'student grades',
            'child' => 'database student grades',
         ]);

         $getIdTeacher = Teacher::where('user_id', $id)->value('id');

         $gradeTeacher = Teacher_grade::where('teacher_id', $getIdTeacher)
            ->join('grades', 'grades.id', '=', 'teacher_grades.grade_id')
            ->select('grades.*', )
            ->get();

            foreach ($gradeTeacher as $gt) {
               $gt->students = Student::where('grade_id', $gt->id)->where('is_active', true)->get();
           }

         $data = [
            'gradeTeacher' => $gradeTeacher,
         ];

         return view('components.teacher.data-grade-teacher')->with('data', $data);

      } catch (Exception $err) {
         return dd($err);
      }
   }
}