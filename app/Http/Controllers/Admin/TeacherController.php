<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Teacher;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher_grade;
use App\Models\Teacher_subject;
use App\Models\Grade_subject;
use App\Models\User;

use Exception;

class TeacherController extends Controller
{
   public function index(Request $request)
   {
      session()->flash('page',  $page = (object)[
         'page' => 'teachers',
         'child' => 'database teachers',
      ]);
      
      try {

         $form = (object) [
            'sort' => $request->sort? $request->sort : null,
            'order' => $request->order? $request->order : null,
            'status' => $request->status? $request->status : null,
            'search' => $request->search? $request->search : null,
            'type' => $request->type? $request->type:  null,
         ];

         $data = [];

         $order = $request->sort ? $request->sort : 'asc';
         $status = $request->status? ($request->status == 'true' ? true : false) : true;
         
         if($request->type && $request->search && $request->order)
         {
            $data = Teacher::where($request->type,'LIKE','%'. $request->search .'%')->orderBy($request->order, $order)->paginate(15);
            $count = Teacher::with(['subject', 'grade', 'exam'])
               ->withCount(['subject as active_subject_count', 'grade as active_grade_count', 'exam as active_exam_count'])
               ->orderBy($request->order, $order)
               ->get();
         } 
         else if($request->type && $request->search)
         {
            $data = Teacher::where($request->type,'LIKE','%'. $request->search .'%')->orderBy('created_at', $order)->paginate(15);
            $count = Teacher::with(['subject', 'grade', 'exam'])
               ->withCount(['subject as active_subject_count', 'grade as active_grade_count', 'exam as active_exam_count'])
               ->orderBy('created_at', $order)
               ->get();
         }
         else if($request->order) 
         {
            $data  = Teacher::orderBy($request->order, $order)->paginate(15);
            $count = Teacher::with(['subject', 'grade', 'exam'])
               ->withCount(['subject as active_subject_count', 'grade as active_grade_count', 'exam as active_exam_count'])
               ->orderBy($request->order, $order)
               ->get();
         } 
         else 
         {
            $data = Teacher::orderBy('name', 'asc')->paginate(15);
            $count = Teacher::with(['subject', 'grade', 'exam'])
               ->withCount(['subject as active_subject_count', 'grade as active_grade_count', 'exam as active_exam_count'])
               ->orderBy('name', 'asc')
               ->get();
         }

         return view('components.teacher.data-teacher')->with('data', $data)->with('count', $count)->with('form', $form);

      } catch (Exception $err) {
         return dd($err);
      }
   }

   public function getById($id)
   {
      session()->flash('page',  $page = (object)[
         'page' => 'teachers',
         'child' => 'detail teachers',
      ]);

      try {

         // CHECK ROLE
         if(session('role') == 'admin' || session('role') == 'superadmin')
         {
            $dataTeacher = Teacher::where('unique_id', $id)->first();
            $getIdTeacher = Teacher::where('unique_id', $id)->value('id');
   
            $teacherGrade = DB::table('teacher_grades')
               ->join('grades', 'teacher_grades.grade_id', '=', 'grades.id')
               ->where('teacher_grades.teacher_id', $getIdTeacher)
               ->select('grades.id','grades.name','grades.class')
               ->get();
   
            $teacherSubject = DB::table('teacher_subjects')
               ->join('subjects', 'teacher_subjects.subject_id', '=', 'subjects.id')
               ->join('grades', 'teacher_subjects.grade_id', '=', 'grades.id')
               ->where('teacher_subjects.teacher_id', $getIdTeacher)
               ->select('teacher_subjects.*','subjects.id', 'subjects.name_subject', 'grades.name', 'grades.class')
               ->get();
   
            $user = DB::table('teachers')
               ->join('users', 'teachers.user_id', '=', 'users.id')
               ->join('roles', 'users.role_id', '=', 'roles.id')
               ->where('teachers.id', $getIdTeacher)
               ->select('users.*', 'roles.name as role_name')
               ->first();
   
            $data = [
               'teacher' => $dataTeacher,
               'teacherGrade' => $teacherGrade,
               'teacherSubject' => $teacherSubject,
               'user' => $user,
            ];
   
            // dd($data);
            return view('components.teacher.detail-teacher')->with('data', $data);
         }
         elseif (session('role') == 'teacher') {
            $dataTeacher = Teacher::where('user_id', $id)->first();
            $getIdTeacher = Teacher::where('user_id', $id)->value('id');

            $teacherGrade = DB::table('teacher_grades')
               ->join('grades', 'teacher_grades.grade_id', '=', 'grades.id')
               ->where('teacher_grades.teacher_id', $getIdTeacher)
               ->select('grades.id','grades.name','grades.class')
               ->get();

            $teacherSubject = DB::table('teacher_subjects')
               ->join('subjects', 'teacher_subjects.subject_id', '=', 'subjects.id')
               ->join('grades', 'teacher_subjects.grade_id', '=', 'grades.id')
               ->where('teacher_subjects.teacher_id', $getIdTeacher)
               ->select('subjects.id', 'subjects.name_subject', 'grades.name', 'grades.class')
               ->get();

            $user = DB::table('teachers')
               ->join('users', 'teachers.user_id', '=', 'users.id')
               ->join('roles', 'users.role_id', '=', 'roles.id')
               ->where('teachers.id', $getIdTeacher)
               ->select('users.*', 'roles.name as role_name')
               ->first();

            $data = [
               'teacher' => $dataTeacher,
               'teacherGrade' => $teacherGrade,
               'teacherSubject' => $teacherSubject,
               'user' => $user,
            ];

            // dd($data);
            return view('components.teacher.detail-teacher')->with('data', $data);
         }
         
      } catch (Exception $err) {
         return dd($err);
      }
   }

   public function getByIdTeacher()
   {
      session()->flash('page',  $page = (object)[
         'page' => 'teachers',
         'child' => 'detail teachers',
      ]);

      try {

         $dataTeacher = Teacher::where('user_id', session('id_user'))->first();
         $getIdTeacher = Teacher::where('user_id', session('id_user'))->value('id');

         $teacherGrade = DB::table('teacher_grades')
            ->join('grades', 'teacher_grades.grade_id', '=', 'grades.id')
            ->where('teacher_grades.teacher_id', $getIdTeacher)
            ->select('grades.id','grades.name','grades.class')
            ->get();

         $teacherSubject = DB::table('teacher_subjects')
            ->join('subjects', 'teacher_subjects.subject_id', '=', 'subjects.id')
            ->join('grades', 'teacher_subjects.grade_id', '=', 'grades.id')
            ->where('teacher_subjects.teacher_id', $getIdTeacher)
            ->select('teacher_subjects.*','subjects.id', 'subjects.name_subject', 'grades.name', 'grades.class')
            ->get();

         $user = DB::table('teachers')
            ->join('users', 'teachers.user_id', '=', 'users.id')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->where('teachers.id', $getIdTeacher)
            ->select('users.*', 'roles.name as role_name')
            ->first();

         $data = [
            'teacher' => $dataTeacher,
            'teacherGrade' => $teacherGrade,
            'teacherSubject' => $teacherSubject,
            'user' => $user,
         ];

         return view('components.teacher.detail-teacher')->with('data', $data);
         
      } catch (Exception $err) {
         return dd($err);
      }
   }
}