<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\Subject_exam;
use App\Models\Chinese_higher;
use App\Models\Chinese_lower;

use Exception;

class ScoreController extends Controller
{
   public function score($id)
   {
      try {
         session()->flash('page',  $page = (object)[
            'page' => 'scorings',
            'child' => 'scorings',
         ]);

         $checkSubject = Subject_exam::where('subject_exams.exam_id', '=', $id)->value('subject_id');
         $subject = Subject::where('id', $checkSubject)->value('name_subject');

         // dd($subject);

         if (strtolower($subject) == "religion islamic") {
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
               ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
               ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
               ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
               ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
               ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
               ->join('students', 'student_exams.student_id', '=', 'students.id')
               ->join('scores', function($join) {
                  $join->on('student_exams.student_id', '=', 'scores.student_id')
                     ->on('exams.id', '=', 'scores.exam_id');
               })
               ->where('exams.id', $id, 'exams.is_active')
               ->where('students.religion', '=', 'islam')
               ->where('students.is_active', true)
               ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
               'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id', 
               'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
               'students.id as student_id', 'students.name as student_name',
               'scores.score as score')
               ->orderBy('student_name', 'asc')
               ->get();
         }
         elseif (strtolower($subject) == "religion catholic") {
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
               ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
               ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
               ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
               ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
               ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
               ->join('students', 'student_exams.student_id', '=', 'students.id')
               ->join('scores', function($join) {
                  $join->on('student_exams.student_id', '=', 'scores.student_id')
                     ->on('exams.id', '=', 'scores.exam_id');
               })
               ->where('exams.id', $id, 'exams.is_active')
               ->where('students.religion', '=', 'Catholic Christianity')
               ->where('students.is_active', true)
               ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
               'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id', 
               'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
               'students.id as student_id', 'students.name as student_name',
               'scores.score as score')
               ->orderBy('student_name', 'asc')
               ->get();
         }
         elseif (strtolower($subject) == "religion christian") {
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
               ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
               ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
               ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
               ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
               ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
               ->join('students', 'student_exams.student_id', '=', 'students.id')
               ->join('scores', function($join) {
                  $join->on('student_exams.student_id', '=', 'scores.student_id')
                     ->on('exams.id', '=', 'scores.exam_id');
               })
               ->where('exams.id', $id, 'exams.is_active')
               ->where('students.religion', '=', 'Protestant Christianity')
               ->where('students.is_active', true)
               ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
               'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id', 
               'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
               'students.id as student_id', 'students.name as student_name',
               'scores.score as score')
               ->orderBy('student_name', 'asc')
               ->get();
         }
         elseif (strtolower($subject) == "religion buddhism") {
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
               ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
               ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
               ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
               ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
               ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
               ->join('students', 'student_exams.student_id', '=', 'students.id')
               ->join('scores', function($join) {
                  $join->on('student_exams.student_id', '=', 'scores.student_id')
                     ->on('exams.id', '=', 'scores.exam_id');
               })
               ->where('exams.id', $id, 'exams.is_active')
               ->where('students.religion', '=', 'Buddhism')
               ->where('students.is_active', true)
               ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
               'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id', 
               'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
               'students.id as student_id', 'students.name as student_name',
               'scores.score as score')
               ->orderBy('student_name', 'asc')
               ->get();
         }
         elseif (strtolower($subject) == "religion hinduism") {
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
               ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
               ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
               ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
               ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
               ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
               ->join('students', 'student_exams.student_id', '=', 'students.id')
               ->join('scores', function($join) {
                  $join->on('student_exams.student_id', '=', 'scores.student_id')
                     ->on('exams.id', '=', 'scores.exam_id');
               })
               ->where('exams.id', $id, 'exams.is_active')
               ->where('students.religion', '=', 'Hinduism')
               ->where('students.is_active', true)
               ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
               'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id', 
               'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
               'students.id as student_id', 'students.name as student_name',
               'scores.score as score')
               ->orderBy('student_name', 'asc')
               ->get();
         }
         elseif (strtolower($subject) == "religion confucianism") {
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
               ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
               ->where('students.is_active', true)
               ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
               ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
               ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
               ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
               ->join('students', 'student_exams.student_id', '=', 'students.id')
               ->join('scores', function($join) {
                  $join->on('student_exams.student_id', '=', 'scores.student_id')
                     ->on('exams.id', '=', 'scores.exam_id');
               })
               ->where('exams.id', $id, 'exams.is_active')
               ->where('students.religion', '=', 'Confucianism')
               ->where('students.is_active', true)
               ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
               'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id', 
               'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
               'students.id as student_id', 'students.name as student_name',
               'scores.score as score')
               ->orderBy('student_name', 'asc')
               ->get();
         }
         elseif (strtolower($subject) == "chinese lower") {
            $chineseLowerStudent = Chinese_lower::pluck('student_id')->toArray();
            
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
               ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
               ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
               ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
               ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
               ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
               ->join('students', 'student_exams.student_id', '=', 'students.id')
               ->join('scores', function($join) {
                  $join->on('student_exams.student_id', '=', 'scores.student_id')
                     ->on('exams.id', '=', 'scores.exam_id');
               })
               ->where('exams.id', $id, 'exams.is_active')
               ->whereIn('students.id', $chineseLowerStudent)
               ->where('students.is_active', true)
               ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
               'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id', 
               'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
               'students.id as student_id', 'students.name as student_name',
               'scores.score as score')
               ->orderBy('student_name', 'asc')
               ->get();
        }
        elseif (strtolower($subject) == "chinese higher") {
            $chineseHigherStudent = Chinese_higher::pluck('student_id')->toArray();

            // dd($chineseHigherStudent);
            
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
               ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
               ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
               ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
               ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
               ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
               ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
               ->join('students', 'student_exams.student_id', '=', 'students.id')
               ->join('scores', function($join) {
                  $join->on('student_exams.student_id', '=', 'scores.student_id')
                     ->on('exams.id', '=', 'scores.exam_id');
               })
               ->where('exams.id', $id, 'exams.is_active')
               ->whereIn('students.id', $chineseHigherStudent)
               ->where('students.is_active', true)
               ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
               'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
               'subjects.name_subject as subject_name', 'subjects.id as subject_id',
               'teachers.name as teacher_name', 'teachers.id as teacher_id', 
               'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
               'students.id as student_id', 'students.name as student_name',
               'scores.score as score')
               ->orderBy('student_name', 'asc')
               ->get();

            // dd($data);
        }
         else{
            $data = Exam::join('grade_exams', 'exams.id', '=', 'grade_exams.exam_id')
            ->join('grades', 'grade_exams.grade_id', '=', 'grades.id')
            ->join('subject_exams', 'exams.id', '=', 'subject_exams.exam_id')
            ->join('subjects', 'subject_exams.subject_id', '=', 'subjects.id')
            ->join('teachers', 'exams.teacher_id', '=', 'teachers.id')
            ->join('type_exams', 'exams.type_exam', '=', 'type_exams.id')
            ->join('student_exams', 'exams.id', '=', 'student_exams.exam_id')
            ->join('students', 'student_exams.student_id', '=', 'students.id')
            ->join('scores', function($join) {
               $join->on('student_exams.student_id', '=', 'scores.student_id')
                  ->on('exams.id', '=', 'scores.exam_id');
            })
            ->where('exams.id', $id, 'exams.is_active')
            ->where('students.is_active', true)
            ->select('exams.id as exam_id', 'exams.name_exam as exam_name', 'exams.date_exam as date_exam',
            'grades.id as grade_id','grades.name as grade_name', 'grades.class as grade_class',
            'subjects.name_subject as subject_name', 'subjects.id as subject_id',
            'teachers.name as teacher_name', 'teachers.id as teacher_id', 
            'type_exams.name as type_exam', 'type_exams.id as type_exam_id',
            'students.id as student_id', 'students.name as student_name',
            'scores.score as score')
            ->orderBy('student_name', 'asc')
            ->get();
         }

         // dd($data);

         return view('components.exam.data-exam-score')->with('data', $data);

      } catch (Exception $err) {
         return dd($err);
      }
   }
}
