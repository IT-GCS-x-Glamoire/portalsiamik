<?php

use App\Http\Controllers\Admin\{
   AdminController,
   DashboardController,
   GradeController,
   TeacherController,
   RelationController,
   ExamController,
   ScoreController,
};

use App\Livewire\Assessment;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AttendanceController;

use App\Http\Controllers\SuperAdmin\{
   SuperAdminController,
   StudentController as SuperStudentController
};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Schedule;
use App\Models\Type_schedule;
use Illuminate\Support\Facades\DB;


Route::get('/', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'actionLogin'])->name('actionLogin');
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/get-all-schedulemidexam-filter/{teacher?}/{grade?}/{day?}', function($teacher = null, $grade = null, $day = null) {
   $lesson = Type_schedule::where('name', '=', 'Mid Exam')->value('id');

   $query = Schedule::leftJoin('teachers', 'schedules.teacher_id', '=', 'teachers.id')
      ->leftJoin('teachers as t2', 't2.id', '=', 'schedules.teacher_companion')
      ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
      ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
      ->where('type_schedule_id', $lesson)
      ->where('semester', session('semester'))
      ->orderBy('grade_id', 'asc')
      ->orderBy('day', 'asc')
      ->orderBy('start_time', 'asc');

   if ($teacher !== 'null') {
       $query->where('teacher_id', $teacher);
   }

   if ($grade !== 'null') {
       $query->where('grade_id', $grade);
   }

   if ($day !== 'null') {
       $query->where('day', $day);
   }

   $schedules = $query->select(
       'schedules.*',
       'teachers.name as teacher_name',
       't2.name as assisstant',
       DB::raw("CONCAT(grades.name, ' - ', grades.class) as grade_name"),
       'subjects.name_subject as subject_name'
   )->get();

   // Define day names
   $dayNames = [
       1 => 'Monday',
       2 => 'Tuesday',
       3 => 'Wednesday',
       4 => 'Thursday',
       5 => 'Friday'
   ];

   // Group schedules by day and grade_name
   $groupedSchedules = $schedules->groupBy('day')->mapWithKeys(function($group, $day) use ($dayNames) {
       $dayName = $dayNames[$day] ?? 'Unknown';

       $gradeGrouped = $group->groupBy('grade_name')->map(function($gradeGroup) {
           return $gradeGroup->map(function($schedule) {
               return [
                   'id' => $schedule->id,
                   'subject_name' => $schedule->subject_name,
                   'teacher_name' => $schedule->teacher_name,
                   'assisstant' => $schedule->assisstant,
                   'day' => $schedule->day,
                   'start_time' => $schedule->start_time,
                   'end_time' => $schedule->end_time,
                   'notes' => $schedule->note
               ];
           })->values();
       });

       return [$dayName => $gradeGrouped];
   });

   return response()->json($groupedSchedules);
});

Route::get('/get-all-schedulefinalexam-filter/{teacher?}/{grade?}/{day?}', function($teacher = null, $grade = null, $day = null) {
   $lesson = Type_schedule::where('name', '=', 'Final Exam')->value('id');

   $query = Schedule::leftJoin('teachers', 'schedules.teacher_id', '=', 'teachers.id')
      ->leftJoin('teachers as t2', 't2.id', '=', 'schedules.teacher_companion')
      ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
      ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
      ->where('type_schedule_id', $lesson)
      ->where('semester', session('semester'))
      ->orderBy('grade_id', 'asc')
      ->orderBy('day', 'asc')
      ->orderBy('start_time', 'asc');

   if ($teacher !== 'null') {
       $query->where('teacher_id', $teacher);
   }

   if ($grade !== 'null') {
       $query->where('grade_id', $grade);
   }

   if ($day !== 'null') {
       $query->where('day', $day);
   }

   $schedules = $query->select(
       'schedules.*',
       'teachers.name as teacher_name',
       't2.name as assisstant',
       DB::raw("CONCAT(grades.name, ' - ', grades.class) as grade_name"),
       'subjects.name_subject as subject_name'
   )->get();

   // Define day names
   $dayNames = [
       1 => 'Monday',
       2 => 'Tuesday',
       3 => 'Wednesday',
       4 => 'Thursday',
       5 => 'Friday'
   ];

   // Group schedules by day and grade_name
   $groupedSchedules = $schedules->groupBy('day')->mapWithKeys(function($group, $day) use ($dayNames) {
       $dayName = $dayNames[$day] ?? 'Unknown';

       $gradeGrouped = $group->groupBy('grade_name')->map(function($gradeGroup) {
           return $gradeGroup->map(function($schedule) {
               return [
                   'id' => $schedule->id,
                   'subject_name' => $schedule->subject_name,
                   'teacher_name' => $schedule->teacher_name,
                   'assisstant' => $schedule->assisstant,
                   'day' => $schedule->day,
                   'start_time' => $schedule->start_time,
                   'end_time' => $schedule->end_time,
                   'notes' => $schedule->note
               ];
           })->values();
       });

       return [$dayName => $gradeGrouped];
   });

   return response()->json($groupedSchedules);
});

Route::get('/get-schedule-filter/{teacher?}/{grade?}/{day?}', function($teacher = null, $grade = null, $day = null) {
   $lesson = Type_schedule::where('name', '=', 'Lesson')->value('id');

   $query = Schedule::leftJoin('teachers', 'schedules.teacher_id', '=', 'teachers.id')
      ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
      ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
      ->where('type_schedule_id', $lesson)
      ->where('semester', session('semester'))
      ->orderBy('grade_id', 'asc')
      ->orderBy('day', 'asc')
      ->orderBy('start_time', 'asc');

   if ($teacher !== 'null') {
      $query->where('teacher_id', $teacher);
   }

   if ($grade !== 'null') {
      $query->where('grade_id', $grade);
   }

   if ($day !== 'null') {
      $query->where('day', $day);
   }

   $schedules = $query->select(
      'schedules.*',
      'teachers.name as teacher_name',
      DB::raw("CONCAT(grades.name, ' - ', grades.class) as grade_name"),
      'subjects.name_subject as subject_name'
   )->get();

   return response()->json($schedules);
});

Route::get('/get-schedule-assist-filter/{teacher?}/{grade?}/{day?}', function($teacher = null, $grade = null, $day = null) {
   $lesson = Type_schedule::where('name', '=', 'Lesson')->value('id');

   $query = Schedule::leftJoin('teachers', 'schedules.teacher_companion', '=', 'teachers.id')
      ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
      ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
      ->where('type_schedule_id', $lesson)
      ->where('semester', session('semester'))
      ->where('academic_year', session('academic_year'))
      ->orderBy('grade_id', 'asc')
      ->orderBy('day', 'asc')
      ->orderBy('start_time', 'asc');

   if ($teacher !== 'null') {
      $query->where('teacher_companion', $teacher);
   }

   if ($grade !== 'null') {
      $query->where('grade_id', $grade);
   }

   if ($day !== 'null') {
      $query->where('day', $day);
   }

   $schedules = $query->select(
      'schedules.*',
      'teachers.name as teacher_name',
      DB::raw("CONCAT(grades.name, ' - ', grades.class) as grade_name"),
      'subjects.name_subject as subject_name'
   )->get();

   return response()->json($schedules);
});
// END

Route::get('/get-schedule-companion/{day}/{startTime}/{endTime}', function($day, $startTime, $endTime) {
   $teacher = request('teacher');
   $grade = request('grade');

   $query = Schedule::where('day', $day)
       ->where('start_time', '>=', '08:00')
       ->where('end_time', '<', '14:00')
       ->where('note', '=', NULL)
       ->where('teacher_companion', '!=', null)
       ->leftJoin('teachers', 'schedules.teacher_companion', '=', 'teachers.id')
       ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
       ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
       ->select(
           'schedules.*',
           'teachers.id as teacher_id',
           'teachers.name as teacher_companion',
           'grades.id as grade_id',
           'grades.name as grade_name',
           'grades.class as grade_class',
           'subjects.id as subject_id',
           'subjects.name_subject as subject_name'
       );

   if ($teacher) {
       $query->where('teachers.id', $teacher);
   }

   if ($grade) {
       $query->where('grades.id', $grade);
   }

   $schedules = $query->get();

   return response()->json($schedules);
});
// END

Route::get('/get-schedule-companion-filter/{teacher?}/{grade?}', function($teacher = null, $grade = null) {
   $query = Schedule::leftJoin('teachers', 'schedules.teacher_companion', '=', 'teachers.id')
      ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
      ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
      ->select(
         'schedules.*',
         'teachers.id as teacher_id',
         'teachers.name as teacher_companion',
         'grades.id as grade_id',
         'grades.name as grade_name',
         'grades.class as grade_class',
         'subjects.id as subject_id',
         'subjects.name_subject as subject_name'
      )
      ->where('semester', session('semester'))
      ->where('academic_year', session('academic_year'))
      ->orderBy('grade_id', 'asc')
      ->orderBy('day', 'asc')
      ->orderBy('start_time', 'asc');

   if ($teacher !== 'null') {
      $query->where('teacher_id', $teacher);
   }

   if ($grade !== 'null') {
      $query->where('grade_id', $grade);
   }

   $schedules = $query->get();

   return response()->json($schedules);
});
// END

// Filter di mid & final exam
Route::get('/get-schedulemidexam-edit/{teacher?}/{grade?}', function($teacher = null, $grade = null) {
   $exam = session('semester') == 1 ? "mid exam semester 1" : "mid exam semester 2";

   $query = Schedule::leftJoin('teachers', 'schedules.teacher_id', '=', 'teachers.id')
      ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
      ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
      ->where('note', $exam);

   if ($teacher !== 'null') {
      $query->where('teacher_id', $teacher);
   }

   if ($grade !== 'null') {
      $query->where('grade_id', $grade);
   }

   $schedules = $query->select(
      'schedules.*',
      'teachers.name as teacher_name',
      DB::raw("CONCAT(grades.name, ' - ', grades.class) as grade_name"),
      'subjects.name_subject as subject_name'
   )->get();

   return response()->json($schedules);
});

Route::get('/get-schedulefinalexam-edit/{teacher?}/{grade?}', function($teacher = null, $grade = null) {
   $exam = session('semester') == 1 ? "final exam semester 1" : "final exam semester 2";

   $query = Schedule::leftJoin('teachers', 'schedules.teacher_id', '=', 'teachers.id')
      ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
      ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
      ->where('note', $exam);

   if ($teacher !== 'null') {
      $query->where('teacher_id', $teacher);
   }

   if ($grade !== 'null') {
      $query->where('grade_id', $grade);
   }

   $schedules = $query->select(
      'schedules.*',
      'teachers.name as teacher_name',
      DB::raw("CONCAT(grades.name, ' - ', grades.class) as grade_name"),
      'subjects.name_subject as subject_name'
   )->get();

   return response()->json($schedules);
});
// END


Route::get('/get-schedule-companion-edit/{day}/{teacher}/{grade}', function($day, $teacher, $grade) {
   $query = Schedule::leftJoin('teachers', 'schedules.teacher_companion', '=', 'teachers.id')
       ->leftJoin('grades', 'schedules.grade_id', '=', 'grades.id')
       ->leftJoin('subjects', 'schedules.subject_id', '=', 'subjects.id')
       ->where('schedules.day', '=', $day)
       ->select(
           'schedules.*',
           'teachers.id as teacher_id',
           'teachers.name as teacher_companion',
           'grades.id as grade_id',
           'grades.name as grade_name',
           'grades.class as grade_class',
           'subjects.id as subject_id',
           'subjects.name_subject as subject_name'
       );

   if ($teacher !== 'null') {
       $query->where('teachers.id', $teacher);
   }

   if ($grade !== 'null') {
       $query->where('grades.id', $grade);
   }

   $schedules = $query->get();

   return response()->json($schedules);
});


// Route untuk mengambil data other schedule
Route::get('/get-schedule/{id}', function($id){
   $schedule = Schedule::where('schedules.id', $id)->first();

   return response()->json($schedule);
});

Route::post('/save-semester-session', [UserController::class, 'saveSemesterToSession'])->name('save.semester.session');


// Route untuk save semester kedalam session
Route::post('/save-studentId-session', [UserController::class, 'saveStudentIdToSession'])->name('save.student.session');

// Route::middleware(['auth.login', 'role:superadmin'])->prefix('/superadmin')->group(function () {

//    Route::prefix('/teachers')->group(function () {
//       Route::get('/', [TeacherController::class, 'index']);
//       Route::get('/detail/{id}', [TeacherController::class, 'getById']);
//    });
   
//    Route::prefix('/dashboard')->group(function () {
//       Route::get('/', [DashboardController::class, 'index']);
//    });
   
//    Route::prefix('/detail')->group(function () {
//       Route::get('/{id}', [StudentController::class, 'detail']);
//    });

//    Route::prefix('/users')->group(function () {
//       Route::get('/', [SuperAdminController::class, 'getUser']);
//       Route::get('/register-user', [SuperAdminController::class, 'registerUser']);
//       Route::get('/{id}', [SuperAdminController::class, 'getById']);
//       Route::post('/register-action', [SuperAdminController::class, 'registerUserAction']);
//       Route::put('/change-password/{id}',[SuperAdminController::class, 'changePassword'])->name('user.editPassword');
//       Route::get('delete/{id}', [SuperAdminController::class, 'deleteUser']);
//    });

//    Route::prefix('/list')->group(function () {
//       Route::get('/', [StudentController::class, 'index']);
//       Route::get('/detail/{id}', [StudentController::class, 'detail']);
//    }); 

//    Route::prefix('/relations')->group(function () {
//       Route::get('/', [RelationController::class, 'index']);
//       Route::get('/detail/{id}', [RelationController::class, 'getById']);
//       Route::get('/edit/{id}', [RelationController::class, 'editPage']);
//       Route::put('/edit/{id}', [RelationController::class, 'actionEdit'])->name('actionUpdateRelation');
//    });

//    Route::prefix('/grades')->group(function () {
//       Route::get('/', [GradeController::class, 'index']);
//       Route::get('/{id}', [GradeController::class, 'detailGrade']);
//    });

//    Route::prefix('/exams')->group(function () {
//       Route::get('/', [ExamController::class, 'index']);
//       Route::get('/{id}', [ExamController::class, 'getById']);
//       Route::get('/pdf/{id}', [ExamController::class, 'pagePDF']);
//    });

//    Route::prefix('/subjects')->group(function () {
//       Route::get('/', [SubjectController::class, 'index']);
//    });

//    Route::prefix('/majorSubjects')->group(function () {
//       Route::get('/', [MajorSubjectController::class, 'index']);
//    });

//    Route::prefix('/minorSubjects')->group(function () {
//       Route::get('/', [MinorSubjectController::class, 'index']);
//    });

//    Route::prefix('/supplementarySubjects')->group(function () {
//       Route::get('/', [SupplementarySubjectController::class, 'index']);
//    });
   
//    Route::prefix('/typeExams')->group(function () {
//       Route::get('/', [TypeExamController::class, 'index']);
//    });

//    Route::prefix('/reports')->group(function () {
//       Route::get('/', [ReportController::class, 'index']);
//       Route::get('detail/{id}', [ReportController::class, 'detailSubjectClass']);
//       Route::get('detailSec/{id}', [ReportController::class, 'detailSubjectClassSec']);
//       Route::get('detailSubject/student/{gradeId}/{subjectId}', [ReportController::class, 'detailSubjectClassStudentTeacher']);
//       Route::get('detailSubjectSec/student/{gradeId}/{subjectId}', [ReportController::class, 'detailSubjectClassStudentSecTeacher']);

//       Route::get('acar/detail/{id}', [ReportController::class, 'acarPrimary']);
//       Route::get('acar/detailSec/{id}', [ReportController::class, 'acarSecondary']);

//       Route::get('sooa/detail/{id}', [ReportController::class, 'sooaPrimary']);
//       Route::get('sooa/detailSec/{id}', [ReportController::class, 'sooaSecondary']);
//       Route::get('tcop/detail/{id}', [ReportController::class, 'tcopPrimary']);

//       Route::get('midcard/semestersatu/{id}', [ReportController::class, 'cardSemesterMid']);
//       Route::get('semestersatu/detail/{id}', [ReportController::class, 'cardSemester1']);
//       Route::get('semesterdua/detail/{id}', [ReportController::class, 'cardSemester2']);
//       Route::get('semestersatu/detailSec/{id}', [ReportController::class, 'cardSemester1Sec']);
//       Route::get('semesterdua/detailSec/{id}', [ReportController::class, 'cardSemester2Sec']);
      
//       Route::get('midreport/print/{id}', [ReportController::class, 'downloadPDFMidSemester']);
//       Route::get('semester1/print/{id}', [ReportController::class, 'downloadPDFSemester1']);
//       Route::get('semester2/print/{id}', [ReportController::class, 'downloadPDFSemester2']);
//       Route::get('toddler/print/{id}', [ReportController::class, 'downloadPDFToddler']);
//       Route::get('nursery/print/{id}', [ReportController::class, 'downloadPDFNursery']);
//       Route::get('kindergarten/print/{id}', [ReportController::class, 'downloadPDFKindergarten']);
      
//    });

//    Route::prefix('/schedules')->group(function () {
//       Route::get('/all', [ScheduleController::class, 'allScheduleSchools']);
//       Route::get('/schools', [ScheduleController::class, 'scheduleSchools']);
//       Route::get('/grades', [ScheduleController::class, 'scheduleGrades']);
//       Route::get('/manage/{id}', [ScheduleController::class, 'managePage']);  
//       Route::get('/schools/manage/otherSchedule', [ScheduleController::class, 'manageOtherSchedulePage']);  
//       Route::get('detail/{id}', [ScheduleController::class, 'detail']);
      
//       Route::get('/midexams', [ScheduleController::class, 'scheduleMidExams']);
//       Route::get('/detail/midexam/{id}', [ScheduleController::class, 'detailMidExam']);
//       Route::get('/edit/midexam/{gradeId}/{scheduleId}', [ScheduleController::class, 'editPageMidExam']);
      
//       Route::get('/finalexams', [ScheduleController::class, 'scheduleFinalExams']);
//       Route::get('/manage/finalexam/{id}', [ScheduleController::class, 'managePageFinalExam']);
//       Route::get('/detail/finalexam/{id}', [ScheduleController::class, 'detailFinalExam']);
      
//       Route::get('/schools/manage/otherSchedule', [ScheduleController::class, 'manageOtherSchedulePage']);     
//    });

//    Route::prefix('/typeSchedules')->group(function () {
//       Route::get('/', [TypeScheduleController::class, 'index']);
//    });

//    Route::prefix('/masterAcademics')->group(function () {
//       Route::get('/', [MasterAcademicsController::class, 'index']);
//    });

//    Route::prefix('/attendances')->group(function () {
//       Route::get('/', [AttendanceController::class, 'index']);
//       Route::get('/subject/{id}', [AttendanceController::class, 'subject']);
//       Route::get('/subject/student/{gradeId}/{subjectId}', [AttendanceController::class, 'detailAttend']);
      
//       Route::get('/teacher/grade/subject', [AttendanceController::class, 'detailAttendance'])->name('super.attendance.detail');
//    });

//    Route::prefix('/chineseHigher')->group(function () {
//       Route::get('/', [ChineseHigherController::class, 'index']);
//    });

//    Route::prefix('/chineseLower')->group(function () {
//       Route::get('/', [ChineseLowerController::class, 'index']);
//    });

//    Route::prefix('/eca')->group(function () {
//       Route::get('/', [EcaController::class, 'index']);
//    });
// });

// Route::middleware(['auth.login', 'role:admin'])->prefix('/admin')->group(function () {
//    Route::prefix('/dashboard')->group(function () {
//       Route::get('/', [DashboardController::class, 'index']);
//    });
   
//    Route::prefix('/detail')->group(function () {
//       Route::get('/{id}', [StudentController::class, 'detail']);
//    });

//    Route::prefix('/list')->group(function () {
//       Route::get('/', [StudentController::class, 'index']);
//       Route::get('/detail/{id}', [StudentController::class, 'detail']);
//    }); 

//    Route::prefix('/teachers')->group(function () {
//       Route::get('/', [TeacherController::class, 'index']);
//       Route::get('/detail/{id}', [TeacherController::class, 'getById']);
//    });

//    Route::prefix('/grades')->group(function () {
//       Route::get('/', [GradeController::class, 'index']);
//       Route::get('/{id}', [GradeController::class, 'detailGrade']);
//    });

//    Route::prefix('/exams')->group(function () {
//       Route::get('/', [ExamController::class, 'index']);
//       Route::get('/{id}', [ExamController::class, 'getById']);
//    });

//    Route::prefix('/subjects')->group(function () {
//       Route::get('/', [SubjectController::class, 'index']);
//       Route::get('/edit/{id}', [SubjectController::class, 'pageEdit']);
//       Route::get('/pdf/{id}', [SubjectController::class, 'pagePDF']);
//    });

//    Route::prefix('/reports')->group(function () {
//       Route::get('/', [ReportController::class, 'index']);
//       Route::get('detail/{id}', [ReportController::class, 'detailSubjectClass']);
//       Route::get('detailSec/{id}', [ReportController::class, 'detailSubjectClassSec']);
//       Route::get('detailSubject/student/{gradeId}/{subjectId}', [ReportController::class, 'detailSubjectClassStudentTeacher']);
//       Route::get('detailSubjectSec/student/{gradeId}/{subjectId}', [ReportController::class, 'detailSubjectClassStudentSecTeacher']);

//       Route::get('acar/detail/{id}', [ReportController::class, 'acarPrimary']);
//       Route::get('acar/detailSec/{id}', [ReportController::class, 'acarSecondary']);


//       Route::get('sooa/detail/{id}', [ReportController::class, 'sooaPrimary']);
//       Route::get('sooa/detailSec/{id}', [ReportController::class, 'sooaSecondary']);
      
//       Route::get('tcop/detail/{id}', [ReportController::class, 'tcopPrimary']);
//       Route::get('tcop/detailSec/{id}', [ReportController::class, 'tcopSecondary']);

//       Route::get('acar/decline/{gradeId}/{teacherId}/{semester}', [ReportController::class, 'acarDecline']); // Sudah termasuk acar primary dan secondary
//       Route::get('sooa/decline/{gradeId}/{teacherId}/{semester}', [ReportController::class, 'sooaPrimaryDecline']);
//       Route::get('scoring/decline/{gradeId}/{teacherId}/{subjectId}/{semester}', [ReportController::class, 'scoringDecline']);
//       Route::get('reportCard/decline/{gradeId}/{teacherId}/{semester}', [ReportController::class, 'reportCardDecline']);
//       Route::get('tcop/decline/{gradeId}/{teacherId}', [ReportController::class, 'tcopDecline']);

//       Route::get('midcard/semestersatu/{id}', [ReportController::class, 'cardSemesterMid']);
//       Route::get('semestersatu/detail/{id}', [ReportController::class, 'cardSemester1']);
//       Route::get('semesterdua/detail/{id}', [ReportController::class, 'cardSemester2']);
//       Route::get('semestersatu/detailSec/{id}', [ReportController::class, 'cardSemester1Sec']);
//       Route::get('semesterdua/detailSec/{id}', [ReportController::class, 'cardSemester2Sec']);

//       Route::get('midreport/print/{id}', [ReportController::class, 'downloadPDFMidSemester']);
//       Route::get('semester1/print/{id}', [ReportController::class, 'downloadPDFSemester1']);
//       Route::get('semester2/print/{id}', [ReportController::class, 'downloadPDFSemester2']);
//       Route::get('toddler/print/{id}', [ReportController::class, 'downloadPDFToddler']);
//       Route::get('nursery/print/{id}', [ReportController::class, 'downloadPDFNursery']);
//       Route::get('kindergarten/print/{id}', [ReportController::class, 'downloadPDFKindergarten']);

//       Route::get('cardToddler/{id}', [ReportController::class, 'cardToddler']);
//       Route::get('mid/cardToddler/{id}', [ReportController::class, 'cardToddlerMid']);
//       Route::get('cardNursery/{id}', [ReportController::class, 'cardNursery']);
//       Route::get('mid/cardNursery/{id}', [ReportController::class, 'cardNurseryMid']);
//       Route::get('cardKindergarten/{id}', [ReportController::class, 'cardKindergarten']);
//       Route::get('mid/cardKindergarten/{id}', [ReportController::class, 'cardKindergartenMid']);
      
      
//    });

//    Route::prefix('/schedules')->group(function () {
//       Route::get('/all', [ScheduleController::class, 'allScheduleSchools']);
//       Route::get('/schools', [ScheduleController::class, 'scheduleSchools']);
      
//       Route::get('/grades', [ScheduleController::class, 'scheduleGrades']);
//       Route::get('/manage/{id}', [ScheduleController::class, 'managePage']);  
//       Route::get('/detail/{id}', [ScheduleController::class, 'detail']);
//       Route::get('/edit/{gradeId}/{scheduleId}', [ScheduleController::class, 'editPage']);
      
//       Route::get('/midexams', [ScheduleController::class, 'scheduleMidExams']);
//       Route::get('/detail/midexam/{id}', [ScheduleController::class, 'detailMidExam']);
      
//       Route::get('/finalexams', [ScheduleController::class, 'scheduleFinalExams']);
//       Route::get('/detail/finalexam/{id}', [ScheduleController::class, 'detailFinalExam']);
      
//    });

//    Route::prefix('/typeExams')->group(function () {
//       Route::get('/', [TypeExamController::class, 'index']);
//    });

//    Route::prefix('/typeSchedules')->group(function () {
//       Route::get('/', [TypeScheduleController::class, 'index']);
//    });

//    Route::prefix('/masterAcademics')->group(function () {
//       Route::get('/', [MasterAcademicsController::class, 'index']);
//    });

//    Route::prefix('/attendances')->group(function () {
//       Route::get('/', [AttendanceController::class, 'index']);
//       Route::get('/subject/{id}', [AttendanceController::class, 'subject']);
//       Route::get('/subject/student/{gradeId}/{subjectId}', [AttendanceController::class, 'detailAttend']);
      
//       Route::get('/teacher/grade/subject', [AttendanceController::class, 'detailAttendance'])->name('attendance.detail');
//    });

//    Route::prefix('/majorSubjects')->group(function () {
//       Route::get('/', [MajorSubjectController::class, 'index']);
//    });

//    Route::prefix('/minorSubjects')->group(function () {
//       Route::get('/', [MinorSubjectController::class, 'index']);
//    });

//    Route::prefix('/supplementarySubjects')->group(function () {
//       Route::get('/', [SupplementarySubjectController::class, 'index']);
//    });

//    Route::prefix('/chineseHigher')->group(function () {
//       Route::get('/', [ChineseHigherController::class, 'index']);
//    });

//    Route::prefix('/chineseLower')->group(function () {
//       Route::get('/', [ChineseLowerController::class, 'index']);
//    });

//    Route::prefix('/eca')->group(function () {
//       Route::get('/', [EcaController::class, 'index']);
//       Route::get('/view/{id}', [EcaController::class, 'detailStudent']);
//    });
// });

Route::middleware(['auth.login', 'role:teacher'])->prefix('/teacher')->group(function () {
   Route::prefix('/dashboard')->group(function () {
      Route::get('/', [DashboardController::class, 'index']);
      Route::get('/detail/teacher', [TeacherController::class, 'getByIdTeacher']);

      Route::get('attendance/view/student/{id}/{gradeId}/{subjectId}', [AttendanceController::class, 'detailViewAttendTeacher']);
      Route::get('attendance/all/{id}/{gradeId}', [AttendanceController::class, 'detailAll'])->name('attendanceAll');
      Route::get('attendance/{id}', [AttendanceController::class, 'attendTeacher']);
      Route::get('attendance/class/teacher', [AttendanceController::class, 'gradeTeacher']);
      Route::get('attendance/teacher/grade/subject', [AttendanceController::class, 'detailAttendTeacher'])->name('attendance.detail.teacher');
      Route::get('attendance/{id}/{gradeId}/{date}', [AttendanceController::class, 'detail'])->name('attendanceStudent');
    
      Route::get('/grade', [GradeController::class, 'teacherGrade']);

      // EXAM
      Route::get('/exam/teacher', [ExamController::class, 'teacherExam'])->name('teacher.dashboard.exam');
      Route::get('exam/detail/{id}', [ExamController::class, 'getById']);

      Route::get('exam/score/{id}', [ScoreController::class, 'score']);
      
      Route::get('report/{id}', [ReportController::class, 'teacherReport']);
      Route::get('report/detail/{id}', [ReportController::class, 'detail']);
      Route::get('report/class/teacher', [ReportController::class, 'classTeacher']);
      Route::get('report/subject/teacher', [ReportController::class, 'subjectTeacher']);
      Route::get('report/detailSubjectKindergarten/{gradeId}/{subjectId}', [ReportController::class, 'detailSubjectClassStudentKindergartenTeacher']);
      Route::get('report/detailSubjectPrimary/{gradeId}/{subjectId}', [ReportController::class, 'detailSubjectClassStudentTeacher']);
      Route::get('report/detailSubjectSecondary/{gradeId}/{subjectId}', [ReportController::class, 'detailSubjectClassStudentSecTeacher']);
      
      Route::get('report/acar/detail/{id}', [ReportController::class, 'acarPrimary']);
      Route::get('report/acar/detailSec/{id}', [ReportController::class, 'acarSecondary']);

      Route::get('report/sooa/detail/{id}', [ReportController::class, 'sooaPrimary']);
      Route::get('report/sooa/detailSec/{id}', [ReportController::class, 'sooaSecondary']);
      
      Route::get('report/midcard/semestersatu/{id}', [ReportController::class, 'cardSemesterMid']);
      Route::get('report/card/semestersatu/{id}', [ReportController::class, 'cardSemester1']);
      Route::get('report/card/semesterdua/{id}', [ReportController::class, 'cardSemester2']);
      Route::get('report/cardSec/semestersatu/{id}', [ReportController::class, 'cardSemester1Sec']);
      Route::get('report/cardSec/semesterdua/{id}', [ReportController::class, 'cardSemester2Sec']);
      Route::get('report/cardToddler/{id}', [ReportController::class, 'cardToddler']);
      Route::get('report/mid/cardToddler/{id}', [ReportController::class, 'cardToddlerMid']);
      Route::get('report/cardNursery/{id}', [ReportController::class, 'cardNursery']);
      Route::get('report/mid/cardNursery/{id}', [ReportController::class, 'cardNurseryMid']);
      Route::get('report/cardKindergarten/{id}', [ReportController::class, 'cardKindergarten']);
      Route::get('report/mid/cardKindergarten/{id}', [ReportController::class, 'cardKindergartenMid']);
      
      Route::get('report/tcop/detail/{id}', [ReportController::class, 'tcopPrimary']);
      Route::get('report/tcop/detailSec/{id}', [ReportController::class, 'tcopSecondary']);

      Route::get('midreport/print/{id}', [ReportController::class, 'downloadPDFMidSemester']);
      Route::get('report/semester1/print/{id}', [ReportController::class, 'downloadPDFSemester1']);
      Route::get('report/semester2/print/{id}', [ReportController::class, 'downloadPDFSemester2']);
      Route::get('report/toddler/print/{id}', [ReportController::class, 'downloadPDFToddler']);
      Route::get('report/mid/toddler/print/{id}', [ReportController::class, 'downloadPDFToddlerMid']);
      Route::get('report/nursery/print/{id}', [ReportController::class, 'downloadPDFNursery']);
      Route::get('report/mid/nursery/print/{id}', [ReportController::class, 'downloadPDFNurseryMid']);
      Route::get('report/kindergarten/print/{id}', [ReportController::class, 'downloadPDFKindergarten']);
      Route::get('report/mid/kindergarten/print/{id}', [ReportController::class, 'downloadPDFKindergartenMid']);
      
      Route::get('schedules/all', [ScheduleController::class, 'allScheduleSchools']);
      Route::get('schedules/grade', [ScheduleController::class, 'scheduleGradeTeacher']);
      Route::get('schedules/gradeOther/{id}', [ScheduleController::class, 'scheduleGradeTeacherOther']);
      Route::get('schedules/subject', [ScheduleController::class, 'scheduleSubjectTeacher']);
      Route::get('schedules/invigilater', [ScheduleController::class, 'scheduleInvillagerTeacher']);
      Route::get('schedules/companion/{id}', [ScheduleController::class, 'scheduleCompanionTeacher']);
      Route::get('schools', [ScheduleController::class, 'scheduleTeacherSchools']);
      Route::get('schedules/detail/{teacherId}/{gradeId}', [ScheduleController::class, 'detailScheduleTeacher']);
   });
});

Route::middleware(['auth.login', 'role:student'])->prefix('/student')->group(function () {
   Route::prefix('/dashboard')->group(function () {
      Route::get('/', [DashboardController::class, 'index']);
      Route::get('/detail/{id}', [TeacherController::class, 'getById']);
      Route::get('/grade/{id}', [GradeController::class, 'studentGrade']);

      Route::get('/assessment', [ExamController::class, 'gradeExam'])->name('student.dashboard.exam');
      Route::post('/set-assessment-id-student', [ExamController::class, 'setAssessmentId'])->name('set.assessment.id.student');
      Route::get('assessment/detail', [ExamController::class, 'getByIdSession'])->name('exam.detail');
      
      Route::get('relation/{id}', [RelationController::class, 'getById']);

      Route::get('/schools', [ScheduleController::class, 'scheduleStudentSchools']);
      Route::get('schedules/grade', [ScheduleController::class, 'scheduleStudent']);
   });
});

Route::middleware(['auth.login', 'role:parent'])->prefix('/parent')->group(function () {
   Route::prefix('/dashboard')->group(function () {
      Route::get('/', [DashboardController::class, 'index']);
      Route::get('/grade/{id}', [GradeController::class, 'studentGrade']);
     
      Route::get('/assessment', [ExamController::class, 'gradeExam'])->name('parent.dashboard.exam');
      Route::post('/set-assessment-id', [ExamController::class, 'setAssessmentId'])->name('set.assessment.id');
      Route::get('assessment/detail', [ExamController::class, 'getByIdSession'])->name('parent.exam.detail');

      Route::get('relation/{id}', [RelationController::class, 'getById']);
      Route::get('/score', [ReportController::class, 'detail']);

      Route::get('/schools', [ScheduleController::class, 'scheduleStudentSchools']);
      Route::get('schedules/grade', [ScheduleController::class, 'scheduleStudent']);
   });
});

// Route::middleware(['auth.login', 'role:superadmin,admin'])->group(function () {
//    Route::prefix('/monthlyActivities')->group(function () {
//       Route::get('/', [MonthlyActivitiesController::class, 'index']);
//    });
// });
