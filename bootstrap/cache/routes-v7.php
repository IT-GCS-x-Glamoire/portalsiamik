<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XqXZZNNjB5lk9hUn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/button' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.render.button',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/assets/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.scripts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/assets/styles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.styles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XymhnSuR2aBHrVRM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Diw0xMK1UbQ8FDWu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'actionLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sCIhjgNehVMy9zFK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-semester-session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save.semester.session',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-studentId-session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save.student.session',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WeGAK1I0DO8DQkBk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/detail/teacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x7bDTMFEG3e4VCKm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/attendance/class/teacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6S6k8EhVlJZgSRWV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/attendance/teacher/grade/subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendance.detail.teacher',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/grade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QNSdyiACvskqWpqK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/exam/teacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teacher.dashboard.exam',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/report/class/teacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qpJ5lDBQOViecSHA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/report/subject/teacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1OSqz66xnPdyHTai',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/schedules/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kfWyPzpXMY0kQBD0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/schedules/grade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GJGLsCtU1wU9P79N',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/schedules/subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PiPhb18ZFO39k1he',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/schedules/invigilater' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3LP9cn2lOkUeIxHp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/dashboard/schools' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jwAzt9EF5yvSYq8H',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VRUzRufjgSfUnJvv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/dashboard/assessment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'student.dashboard.exam',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/dashboard/set-assessment-id-student' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'set.assessment.id.student',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/dashboard/assessment/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'exam.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/dashboard/schools' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OW1hOZKNq8gxvoHC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/dashboard/schedules/grade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H0ysAGJOEC4qxuhw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/parent/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6p8jJ2QFAMdjFCGF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/parent/dashboard/assessment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parent.dashboard.exam',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/parent/dashboard/set-assessment-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'set.assessment.id',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/parent/dashboard/assessment/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'parent.exam.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/parent/dashboard/score' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::238yg0DBCaHJudJP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/parent/dashboard/schools' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qsKs4Ir1rna6599b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/parent/dashboard/schedules/grade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HrdzUT7zNq3aTLqn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/livewire/preview\\-file/([^/]++)(*:39)|/wireui/icons/((?:outline|solid))/([^/]++)(*:88)|/get\\-(?|all\\-schedule(?|midexam\\-filter(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:177)|finalexam\\-filter(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:244))|schedule(?|\\-(?|filter(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:317)|assist\\-filter(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:381)|companion(?|/([^/]++)/([^/]++)/([^/]++)(*:428)|\\-(?|filter(?:/([^/]++)(?:/([^/]++))?)?(*:475)|edit/([^/]++)/([^/]++)/([^/]++)(*:514))))|midexam\\-edit(?:/([^/]++)(?:/([^/]++))?)?(*:566)|finalexam\\-edit(?:/([^/]++)(?:/([^/]++))?)?(*:617)|/([^/]++)(*:634)))|/teacher/dashboard/(?|attendance/(?|view/student/([^/]++)/([^/]++)/([^/]++)(*:719)|all/([^/]++)/([^/]++)(*:748)|([^/]++)(?|(*:767)|/([^/]++)/([^/]++)(*:793)))|exam/(?|detail/([^/]++)(*:826)|score/([^/]++)(*:848))|report/(?|([^/]++)(*:875)|detail(?|/([^/]++)(*:901)|Subject(?|Kindergarten/([^/]++)/([^/]++)(*:949)|Primary/([^/]++)/([^/]++)(*:982)|Secondary/([^/]++)/([^/]++)(*:1017)))|acar/detail(?|/([^/]++)(*:1051)|Sec/([^/]++)(*:1072))|s(?|ooa/detail(?|/([^/]++)(*:1108)|Sec/([^/]++)(*:1129))|emester(?|1/print/([^/]++)(*:1165)|2/print/([^/]++)(*:1190)))|mid(?|card/semestersatu/([^/]++)(*:1233)|/(?|card(?|Toddler/([^/]++)(*:1269)|Nursery/([^/]++)(*:1294)|Kindergarten/([^/]++)(*:1324))|toddler/print/([^/]++)(*:1356)|nursery/print/([^/]++)(*:1387)|kindergarten/print/([^/]++)(*:1423)))|card(?|/semester(?|satu/([^/]++)(*:1466)|dua/([^/]++)(*:1487))|Sec/semester(?|satu/([^/]++)(*:1525)|dua/([^/]++)(*:1546))|Toddler/([^/]++)(*:1572)|Nursery/([^/]++)(*:1597)|Kindergarten/([^/]++)(*:1627))|t(?|cop/detail(?|/([^/]++)(*:1663)|Sec/([^/]++)(*:1684))|oddler/print/([^/]++)(*:1715))|nursery/print/([^/]++)(*:1747)|kindergarten/print/([^/]++)(*:1783))|midreport/print/([^/]++)(*:1817)|schedules/(?|gradeOther/([^/]++)(*:1858)|companion/([^/]++)(*:1885)|detail/([^/]++)/([^/]++)(*:1918)))|/student/dashboard/(?|detail/([^/]++)(*:1966)|grade/([^/]++)(*:1989)|relation/([^/]++)(*:2015))|/parent/dashboard/(?|grade/([^/]++)(*:2060)|relation/([^/]++)(*:2086)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      88 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.icons',
          ),
          1 => 
          array (
            0 => 'style',
            1 => 'icon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TAXfVR75T9Hdm8Bl',
            'teacher' => NULL,
            'grade' => NULL,
            'day' => NULL,
          ),
          1 => 
          array (
            0 => 'teacher',
            1 => 'grade',
            2 => 'day',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kYT0AliwtheVjb7l',
            'teacher' => NULL,
            'grade' => NULL,
            'day' => NULL,
          ),
          1 => 
          array (
            0 => 'teacher',
            1 => 'grade',
            2 => 'day',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rnxE0PVKanP8gT14',
            'teacher' => NULL,
            'grade' => NULL,
            'day' => NULL,
          ),
          1 => 
          array (
            0 => 'teacher',
            1 => 'grade',
            2 => 'day',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OdEg7RIT3DlHkMxP',
            'teacher' => NULL,
            'grade' => NULL,
            'day' => NULL,
          ),
          1 => 
          array (
            0 => 'teacher',
            1 => 'grade',
            2 => 'day',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6FXWP8J3WlQE9SJd',
          ),
          1 => 
          array (
            0 => 'day',
            1 => 'startTime',
            2 => 'endTime',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qDTJ0Ll9J1rDk1CG',
            'teacher' => NULL,
            'grade' => NULL,
          ),
          1 => 
          array (
            0 => 'teacher',
            1 => 'grade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5p3RIhntkZewOi3e',
          ),
          1 => 
          array (
            0 => 'day',
            1 => 'teacher',
            2 => 'grade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mVYcbXwRkipYCp9r',
            'teacher' => NULL,
            'grade' => NULL,
          ),
          1 => 
          array (
            0 => 'teacher',
            1 => 'grade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NHm2mWt9FTvy94n5',
            'teacher' => NULL,
            'grade' => NULL,
          ),
          1 => 
          array (
            0 => 'teacher',
            1 => 'grade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::32Uw6N67DoKoqDAl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P31x8NwV51Vtr8B5',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'gradeId',
            2 => 'subjectId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendanceAll',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'gradeId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KvobDF2QPUaUtxLE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendanceStudent',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'gradeId',
            2 => 'date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n2YdkAy15dc791BY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lWbEqwzbNoqRDUBT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KwMzUqNECBI8YBmO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gXftyfxhhoHmegmi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      949 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qRg1q1tEKx8dsmcd',
          ),
          1 => 
          array (
            0 => 'gradeId',
            1 => 'subjectId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PXYpQDRfONVTgTPT',
          ),
          1 => 
          array (
            0 => 'gradeId',
            1 => 'subjectId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UDaoDk1dtXbjVkpD',
          ),
          1 => 
          array (
            0 => 'gradeId',
            1 => 'subjectId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rzGWxUXoArp0LdPH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5s6i52uQnrx5tyYk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6snYr1NwhjXRacs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G8Fx6YgCIEDTxvCE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pLtcNmQEpSTMwsvq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gqJl3tBC5dB2ISfd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UchnHotKZqSsErCE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WSNWioO8b9HaFdof',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::77dI5Tlw4z7Ly6S9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e9uq9X3xKD2akQXu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jZd2KWzDop7fwFrQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oOIIP53E0VhcVPlJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qXoWZw2DHeH0fqfd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CZKmGj8VZoCMMmtc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SKX805KFroL3o6xv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TNno5VRpI3TPk8Ig',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rBL4lNbiLxzwUrEf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbLA91Fl2dZY4RPG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GexFyAF2AlIspgIF',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QvJ8N0E5cJdYg8a7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kvk3H5vRlrxTrkfv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Jq24Y7zV9s2mCr6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FlInANm5q2Ilr0E3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ORrS1Qwif55UsiK7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JmF8pY1QVz7Yr9NM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gSIBvRfgkevGkvRG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qZUIbHJfOARROdW2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DTXZ05EWTWTFZdUG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sUgYFmTruAM7sP8J',
          ),
          1 => 
          array (
            0 => 'teacherId',
            1 => 'gradeId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::11l6ruvCZFauiFBD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AkK6LjfYbYvfKhVB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vovuaa4JGMHK95u4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DsYxuvEgC9INyAQK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pbQV6XGJ2b6wMRfP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/update',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'controller' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'livewire.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XqXZZNNjB5lk9hUn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'as' => 'generated::XqXZZNNjB5lk9hUn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'as' => 'livewire.upload-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'as' => 'livewire.preview-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.icons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/icons/{style}/{icon}',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\IconsController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\IconsController',
        'as' => 'wireui.icons',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'style' => '(outline|solid)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.render.button' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/button',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\ButtonController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\ButtonController',
        'as' => 'wireui.render.button',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.assets.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/scripts',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'as' => 'wireui.assets.scripts',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.assets.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/styles',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'as' => 'wireui.assets.styles',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XymhnSuR2aBHrVRM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\UserController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XymhnSuR2aBHrVRM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Diw0xMK1UbQ8FDWu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\UserController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Diw0xMK1UbQ8FDWu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'actionLogin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@actionLogin',
        'controller' => 'App\\Http\\Controllers\\UserController@actionLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'actionLogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sCIhjgNehVMy9zFK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\UserController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sCIhjgNehVMy9zFK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TAXfVR75T9Hdm8Bl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-all-schedulemidexam-filter/{teacher?}/{grade?}/{day?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2273:"function($teacher = null, $grade = null, $day = null) {
   $lesson = \\App\\Models\\Type_schedule::where(\'name\', \'=\', \'Mid Exam\')->value(\'id\');

   $query = \\App\\Models\\Schedule::leftJoin(\'teachers\', \'schedules.teacher_id\', \'=\', \'teachers.id\')
      ->leftJoin(\'teachers as t2\', \'t2.id\', \'=\', \'schedules.teacher_companion\')
      ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
      ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
      ->where(\'type_schedule_id\', $lesson)
      ->where(\'semester\', \\session(\'semester\'))
      ->orderBy(\'grade_id\', \'asc\')
      ->orderBy(\'day\', \'asc\')
      ->orderBy(\'start_time\', \'asc\');

   if ($teacher !== \'null\') {
       $query->where(\'teacher_id\', $teacher);
   }

   if ($grade !== \'null\') {
       $query->where(\'grade_id\', $grade);
   }

   if ($day !== \'null\') {
       $query->where(\'day\', $day);
   }

   $schedules = $query->select(
       \'schedules.*\',
       \'teachers.name as teacher_name\',
       \'t2.name as assisstant\',
       \\Illuminate\\Support\\Facades\\DB::raw("CONCAT(grades.name, \' - \', grades.class) as grade_name"),
       \'subjects.name_subject as subject_name\'
   )->get();

   // Define day names
   $dayNames = [
       1 => \'Monday\',
       2 => \'Tuesday\',
       3 => \'Wednesday\',
       4 => \'Thursday\',
       5 => \'Friday\'
   ];

   // Group schedules by day and grade_name
   $groupedSchedules = $schedules->groupBy(\'day\')->mapWithKeys(function($group, $day) use ($dayNames) {
       $dayName = $dayNames[$day] ?? \'Unknown\';

       $gradeGrouped = $group->groupBy(\'grade_name\')->map(function($gradeGroup) {
           return $gradeGroup->map(function($schedule) {
               return [
                   \'id\' => $schedule->id,
                   \'subject_name\' => $schedule->subject_name,
                   \'teacher_name\' => $schedule->teacher_name,
                   \'assisstant\' => $schedule->assisstant,
                   \'day\' => $schedule->day,
                   \'start_time\' => $schedule->start_time,
                   \'end_time\' => $schedule->end_time,
                   \'notes\' => $schedule->note
               ];
           })->values();
       });

       return [$dayName => $gradeGrouped];
   });

   return \\response()->json($groupedSchedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007850000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TAXfVR75T9Hdm8Bl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kYT0AliwtheVjb7l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-all-schedulefinalexam-filter/{teacher?}/{grade?}/{day?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2275:"function($teacher = null, $grade = null, $day = null) {
   $lesson = \\App\\Models\\Type_schedule::where(\'name\', \'=\', \'Final Exam\')->value(\'id\');

   $query = \\App\\Models\\Schedule::leftJoin(\'teachers\', \'schedules.teacher_id\', \'=\', \'teachers.id\')
      ->leftJoin(\'teachers as t2\', \'t2.id\', \'=\', \'schedules.teacher_companion\')
      ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
      ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
      ->where(\'type_schedule_id\', $lesson)
      ->where(\'semester\', \\session(\'semester\'))
      ->orderBy(\'grade_id\', \'asc\')
      ->orderBy(\'day\', \'asc\')
      ->orderBy(\'start_time\', \'asc\');

   if ($teacher !== \'null\') {
       $query->where(\'teacher_id\', $teacher);
   }

   if ($grade !== \'null\') {
       $query->where(\'grade_id\', $grade);
   }

   if ($day !== \'null\') {
       $query->where(\'day\', $day);
   }

   $schedules = $query->select(
       \'schedules.*\',
       \'teachers.name as teacher_name\',
       \'t2.name as assisstant\',
       \\Illuminate\\Support\\Facades\\DB::raw("CONCAT(grades.name, \' - \', grades.class) as grade_name"),
       \'subjects.name_subject as subject_name\'
   )->get();

   // Define day names
   $dayNames = [
       1 => \'Monday\',
       2 => \'Tuesday\',
       3 => \'Wednesday\',
       4 => \'Thursday\',
       5 => \'Friday\'
   ];

   // Group schedules by day and grade_name
   $groupedSchedules = $schedules->groupBy(\'day\')->mapWithKeys(function($group, $day) use ($dayNames) {
       $dayName = $dayNames[$day] ?? \'Unknown\';

       $gradeGrouped = $group->groupBy(\'grade_name\')->map(function($gradeGroup) {
           return $gradeGroup->map(function($schedule) {
               return [
                   \'id\' => $schedule->id,
                   \'subject_name\' => $schedule->subject_name,
                   \'teacher_name\' => $schedule->teacher_name,
                   \'assisstant\' => $schedule->assisstant,
                   \'day\' => $schedule->day,
                   \'start_time\' => $schedule->start_time,
                   \'end_time\' => $schedule->end_time,
                   \'notes\' => $schedule->note
               ];
           })->values();
       });

       return [$dayName => $gradeGrouped];
   });

   return \\response()->json($groupedSchedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007870000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kYT0AliwtheVjb7l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rnxE0PVKanP8gT14' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-schedule-filter/{teacher?}/{grade?}/{day?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1091:"function($teacher = null, $grade = null, $day = null) {
   $lesson = \\App\\Models\\Type_schedule::where(\'name\', \'=\', \'Lesson\')->value(\'id\');

   $query = \\App\\Models\\Schedule::leftJoin(\'teachers\', \'schedules.teacher_id\', \'=\', \'teachers.id\')
      ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
      ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
      ->where(\'type_schedule_id\', $lesson)
      ->where(\'semester\', \\session(\'semester\'))
      ->orderBy(\'grade_id\', \'asc\')
      ->orderBy(\'day\', \'asc\')
      ->orderBy(\'start_time\', \'asc\');

   if ($teacher !== \'null\') {
      $query->where(\'teacher_id\', $teacher);
   }

   if ($grade !== \'null\') {
      $query->where(\'grade_id\', $grade);
   }

   if ($day !== \'null\') {
      $query->where(\'day\', $day);
   }

   $schedules = $query->select(
      \'schedules.*\',
      \'teachers.name as teacher_name\',
      \\Illuminate\\Support\\Facades\\DB::raw("CONCAT(grades.name, \' - \', grades.class) as grade_name"),
      \'subjects.name_subject as subject_name\'
   )->get();

   return \\response()->json($schedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007890000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rnxE0PVKanP8gT14',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OdEg7RIT3DlHkMxP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-schedule-assist-filter/{teacher?}/{grade?}/{day?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1163:"function($teacher = null, $grade = null, $day = null) {
   $lesson = \\App\\Models\\Type_schedule::where(\'name\', \'=\', \'Lesson\')->value(\'id\');

   $query = \\App\\Models\\Schedule::leftJoin(\'teachers\', \'schedules.teacher_companion\', \'=\', \'teachers.id\')
      ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
      ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
      ->where(\'type_schedule_id\', $lesson)
      ->where(\'semester\', \\session(\'semester\'))
      ->where(\'academic_year\', \\session(\'academic_year\'))
      ->orderBy(\'grade_id\', \'asc\')
      ->orderBy(\'day\', \'asc\')
      ->orderBy(\'start_time\', \'asc\');

   if ($teacher !== \'null\') {
      $query->where(\'teacher_companion\', $teacher);
   }

   if ($grade !== \'null\') {
      $query->where(\'grade_id\', $grade);
   }

   if ($day !== \'null\') {
      $query->where(\'day\', $day);
   }

   $schedules = $query->select(
      \'schedules.*\',
      \'teachers.name as teacher_name\',
      \\Illuminate\\Support\\Facades\\DB::raw("CONCAT(grades.name, \' - \', grades.class) as grade_name"),
      \'subjects.name_subject as subject_name\'
   )->get();

   return \\response()->json($schedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OdEg7RIT3DlHkMxP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6FXWP8J3WlQE9SJd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-schedule-companion/{day}/{startTime}/{endTime}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1113:"function($day, $startTime, $endTime) {
   $teacher = \\request(\'teacher\');
   $grade = \\request(\'grade\');

   $query = \\App\\Models\\Schedule::where(\'day\', $day)
       ->where(\'start_time\', \'>=\', \'08:00\')
       ->where(\'end_time\', \'<\', \'14:00\')
       ->where(\'note\', \'=\', NULL)
       ->where(\'teacher_companion\', \'!=\', null)
       ->leftJoin(\'teachers\', \'schedules.teacher_companion\', \'=\', \'teachers.id\')
       ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
       ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
       ->select(
           \'schedules.*\',
           \'teachers.id as teacher_id\',
           \'teachers.name as teacher_companion\',
           \'grades.id as grade_id\',
           \'grades.name as grade_name\',
           \'grades.class as grade_class\',
           \'subjects.id as subject_id\',
           \'subjects.name_subject as subject_name\'
       );

   if ($teacher) {
       $query->where(\'teachers.id\', $teacher);
   }

   if ($grade) {
       $query->where(\'grades.id\', $grade);
   }

   $schedules = $query->get();

   return \\response()->json($schedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6FXWP8J3WlQE9SJd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qDTJ0Ll9J1rDk1CG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-schedule-companion-filter/{teacher?}/{grade?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1061:"function($teacher = null, $grade = null) {
   $query = \\App\\Models\\Schedule::leftJoin(\'teachers\', \'schedules.teacher_companion\', \'=\', \'teachers.id\')
      ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
      ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
      ->select(
         \'schedules.*\',
         \'teachers.id as teacher_id\',
         \'teachers.name as teacher_companion\',
         \'grades.id as grade_id\',
         \'grades.name as grade_name\',
         \'grades.class as grade_class\',
         \'subjects.id as subject_id\',
         \'subjects.name_subject as subject_name\'
      )
      ->where(\'semester\', \\session(\'semester\'))
      ->where(\'academic_year\', \\session(\'academic_year\'))
      ->orderBy(\'grade_id\', \'asc\')
      ->orderBy(\'day\', \'asc\')
      ->orderBy(\'start_time\', \'asc\');

   if ($teacher !== \'null\') {
      $query->where(\'teacher_id\', $teacher);
   }

   if ($grade !== \'null\') {
      $query->where(\'grade_id\', $grade);
   }

   $schedules = $query->get();

   return \\response()->json($schedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qDTJ0Ll9J1rDk1CG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mVYcbXwRkipYCp9r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-schedulemidexam-edit/{teacher?}/{grade?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:851:"function($teacher = null, $grade = null) {
   $exam = \\session(\'semester\') == 1 ? "mid exam semester 1" : "mid exam semester 2";

   $query = \\App\\Models\\Schedule::leftJoin(\'teachers\', \'schedules.teacher_id\', \'=\', \'teachers.id\')
      ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
      ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
      ->where(\'note\', $exam);

   if ($teacher !== \'null\') {
      $query->where(\'teacher_id\', $teacher);
   }

   if ($grade !== \'null\') {
      $query->where(\'grade_id\', $grade);
   }

   $schedules = $query->select(
      \'schedules.*\',
      \'teachers.name as teacher_name\',
      \\Illuminate\\Support\\Facades\\DB::raw("CONCAT(grades.name, \' - \', grades.class) as grade_name"),
      \'subjects.name_subject as subject_name\'
   )->get();

   return \\response()->json($schedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007910000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mVYcbXwRkipYCp9r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NHm2mWt9FTvy94n5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-schedulefinalexam-edit/{teacher?}/{grade?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:855:"function($teacher = null, $grade = null) {
   $exam = \\session(\'semester\') == 1 ? "final exam semester 1" : "final exam semester 2";

   $query = \\App\\Models\\Schedule::leftJoin(\'teachers\', \'schedules.teacher_id\', \'=\', \'teachers.id\')
      ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
      ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
      ->where(\'note\', $exam);

   if ($teacher !== \'null\') {
      $query->where(\'teacher_id\', $teacher);
   }

   if ($grade !== \'null\') {
      $query->where(\'grade_id\', $grade);
   }

   $schedules = $query->select(
      \'schedules.*\',
      \'teachers.name as teacher_name\',
      \\Illuminate\\Support\\Facades\\DB::raw("CONCAT(grades.name, \' - \', grades.class) as grade_name"),
      \'subjects.name_subject as subject_name\'
   )->get();

   return \\response()->json($schedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007930000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NHm2mWt9FTvy94n5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5p3RIhntkZewOi3e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-schedule-companion-edit/{day}/{teacher}/{grade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:912:"function($day, $teacher, $grade) {
   $query = \\App\\Models\\Schedule::leftJoin(\'teachers\', \'schedules.teacher_companion\', \'=\', \'teachers.id\')
       ->leftJoin(\'grades\', \'schedules.grade_id\', \'=\', \'grades.id\')
       ->leftJoin(\'subjects\', \'schedules.subject_id\', \'=\', \'subjects.id\')
       ->where(\'schedules.day\', \'=\', $day)
       ->select(
           \'schedules.*\',
           \'teachers.id as teacher_id\',
           \'teachers.name as teacher_companion\',
           \'grades.id as grade_id\',
           \'grades.name as grade_name\',
           \'grades.class as grade_class\',
           \'subjects.id as subject_id\',
           \'subjects.name_subject as subject_name\'
       );

   if ($teacher !== \'null\') {
       $query->where(\'teachers.id\', $teacher);
   }

   if ($grade !== \'null\') {
       $query->where(\'grades.id\', $grade);
   }

   $schedules = $query->get();

   return \\response()->json($schedules);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007950000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5p3RIhntkZewOi3e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::32Uw6N67DoKoqDAl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-schedule/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:131:"function($id){
   $schedule = \\App\\Models\\Schedule::where(\'schedules.id\', $id)->first();

   return \\response()->json($schedule);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007970000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::32Uw6N67DoKoqDAl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save.semester.session' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-semester-session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@saveSemesterToSession',
        'controller' => 'App\\Http\\Controllers\\UserController@saveSemesterToSession',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save.semester.session',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save.student.session' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-studentId-session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@saveStudentIdToSession',
        'controller' => 'App\\Http\\Controllers\\UserController@saveStudentIdToSession',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save.student.session',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WeGAK1I0DO8DQkBk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::WeGAK1I0DO8DQkBk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x7bDTMFEG3e4VCKm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/detail/teacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TeacherController@getByIdTeacher',
        'controller' => 'App\\Http\\Controllers\\Admin\\TeacherController@getByIdTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::x7bDTMFEG3e4VCKm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P31x8NwV51Vtr8B5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/attendance/view/student/{id}/{gradeId}/{subjectId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendanceController@detailViewAttendTeacher',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@detailViewAttendTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::P31x8NwV51Vtr8B5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendanceAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/attendance/all/{id}/{gradeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendanceController@detailAll',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@detailAll',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'attendanceAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KvobDF2QPUaUtxLE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/attendance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendanceController@attendTeacher',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@attendTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::KvobDF2QPUaUtxLE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6S6k8EhVlJZgSRWV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/attendance/class/teacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendanceController@gradeTeacher',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@gradeTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::6S6k8EhVlJZgSRWV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.detail.teacher' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/attendance/teacher/grade/subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendanceController@detailAttendTeacher',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@detailAttendTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'attendance.detail.teacher',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendanceStudent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/attendance/{id}/{gradeId}/{date}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendanceController@detail',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@detail',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'attendanceStudent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QNSdyiACvskqWpqK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/grade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GradeController@teacherGrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\GradeController@teacherGrade',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::QNSdyiACvskqWpqK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teacher.dashboard.exam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/exam/teacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExamController@teacherExam',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExamController@teacherExam',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'teacher.dashboard.exam',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n2YdkAy15dc791BY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/exam/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExamController@getById',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExamController@getById',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::n2YdkAy15dc791BY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lWbEqwzbNoqRDUBT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/exam/score/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ScoreController@score',
        'controller' => 'App\\Http\\Controllers\\Admin\\ScoreController@score',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::lWbEqwzbNoqRDUBT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KwMzUqNECBI8YBmO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@teacherReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@teacherReport',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::KwMzUqNECBI8YBmO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gXftyfxhhoHmegmi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@detail',
        'controller' => 'App\\Http\\Controllers\\ReportController@detail',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::gXftyfxhhoHmegmi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qpJ5lDBQOViecSHA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/class/teacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@classTeacher',
        'controller' => 'App\\Http\\Controllers\\ReportController@classTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::qpJ5lDBQOViecSHA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1OSqz66xnPdyHTai' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/subject/teacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@subjectTeacher',
        'controller' => 'App\\Http\\Controllers\\ReportController@subjectTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::1OSqz66xnPdyHTai',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qRg1q1tEKx8dsmcd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/detailSubjectKindergarten/{gradeId}/{subjectId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@detailSubjectClassStudentKindergartenTeacher',
        'controller' => 'App\\Http\\Controllers\\ReportController@detailSubjectClassStudentKindergartenTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::qRg1q1tEKx8dsmcd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PXYpQDRfONVTgTPT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/detailSubjectPrimary/{gradeId}/{subjectId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@detailSubjectClassStudentTeacher',
        'controller' => 'App\\Http\\Controllers\\ReportController@detailSubjectClassStudentTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::PXYpQDRfONVTgTPT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UDaoDk1dtXbjVkpD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/detailSubjectSecondary/{gradeId}/{subjectId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@detailSubjectClassStudentSecTeacher',
        'controller' => 'App\\Http\\Controllers\\ReportController@detailSubjectClassStudentSecTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::UDaoDk1dtXbjVkpD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rzGWxUXoArp0LdPH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/acar/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@acarPrimary',
        'controller' => 'App\\Http\\Controllers\\ReportController@acarPrimary',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::rzGWxUXoArp0LdPH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5s6i52uQnrx5tyYk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/acar/detailSec/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@acarSecondary',
        'controller' => 'App\\Http\\Controllers\\ReportController@acarSecondary',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::5s6i52uQnrx5tyYk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x6snYr1NwhjXRacs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/sooa/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@sooaPrimary',
        'controller' => 'App\\Http\\Controllers\\ReportController@sooaPrimary',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::x6snYr1NwhjXRacs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G8Fx6YgCIEDTxvCE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/sooa/detailSec/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@sooaSecondary',
        'controller' => 'App\\Http\\Controllers\\ReportController@sooaSecondary',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::G8Fx6YgCIEDTxvCE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UchnHotKZqSsErCE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/midcard/semestersatu/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardSemesterMid',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardSemesterMid',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::UchnHotKZqSsErCE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CZKmGj8VZoCMMmtc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/card/semestersatu/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardSemester1',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardSemester1',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::CZKmGj8VZoCMMmtc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SKX805KFroL3o6xv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/card/semesterdua/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardSemester2',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardSemester2',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::SKX805KFroL3o6xv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TNno5VRpI3TPk8Ig' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/cardSec/semestersatu/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardSemester1Sec',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardSemester1Sec',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::TNno5VRpI3TPk8Ig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rBL4lNbiLxzwUrEf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/cardSec/semesterdua/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardSemester2Sec',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardSemester2Sec',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::rBL4lNbiLxzwUrEf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KbLA91Fl2dZY4RPG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/cardToddler/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardToddler',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardToddler',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::KbLA91Fl2dZY4RPG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WSNWioO8b9HaFdof' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/mid/cardToddler/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardToddlerMid',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardToddlerMid',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::WSNWioO8b9HaFdof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GexFyAF2AlIspgIF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/cardNursery/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardNursery',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardNursery',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::GexFyAF2AlIspgIF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::77dI5Tlw4z7Ly6S9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/mid/cardNursery/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardNurseryMid',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardNurseryMid',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::77dI5Tlw4z7Ly6S9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QvJ8N0E5cJdYg8a7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/cardKindergarten/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardKindergarten',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardKindergarten',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::QvJ8N0E5cJdYg8a7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e9uq9X3xKD2akQXu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/mid/cardKindergarten/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@cardKindergartenMid',
        'controller' => 'App\\Http\\Controllers\\ReportController@cardKindergartenMid',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::e9uq9X3xKD2akQXu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kvk3H5vRlrxTrkfv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/tcop/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@tcopPrimary',
        'controller' => 'App\\Http\\Controllers\\ReportController@tcopPrimary',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::Kvk3H5vRlrxTrkfv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Jq24Y7zV9s2mCr6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/tcop/detailSec/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@tcopSecondary',
        'controller' => 'App\\Http\\Controllers\\ReportController@tcopSecondary',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::8Jq24Y7zV9s2mCr6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gSIBvRfgkevGkvRG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/midreport/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFMidSemester',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFMidSemester',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::gSIBvRfgkevGkvRG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pLtcNmQEpSTMwsvq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/semester1/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFSemester1',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFSemester1',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::pLtcNmQEpSTMwsvq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gqJl3tBC5dB2ISfd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/semester2/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFSemester2',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFSemester2',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::gqJl3tBC5dB2ISfd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FlInANm5q2Ilr0E3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/toddler/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFToddler',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFToddler',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::FlInANm5q2Ilr0E3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jZd2KWzDop7fwFrQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/mid/toddler/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFToddlerMid',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFToddlerMid',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::jZd2KWzDop7fwFrQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ORrS1Qwif55UsiK7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/nursery/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFNursery',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFNursery',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::ORrS1Qwif55UsiK7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOIIP53E0VhcVPlJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/mid/nursery/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFNurseryMid',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFNurseryMid',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::oOIIP53E0VhcVPlJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JmF8pY1QVz7Yr9NM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/kindergarten/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFKindergarten',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFKindergarten',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::JmF8pY1QVz7Yr9NM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qXoWZw2DHeH0fqfd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/report/mid/kindergarten/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@downloadPDFKindergartenMid',
        'controller' => 'App\\Http\\Controllers\\ReportController@downloadPDFKindergartenMid',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::qXoWZw2DHeH0fqfd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kfWyPzpXMY0kQBD0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/schedules/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@allScheduleSchools',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@allScheduleSchools',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::kfWyPzpXMY0kQBD0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GJGLsCtU1wU9P79N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/schedules/grade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleGradeTeacher',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleGradeTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::GJGLsCtU1wU9P79N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qZUIbHJfOARROdW2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/schedules/gradeOther/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleGradeTeacherOther',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleGradeTeacherOther',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::qZUIbHJfOARROdW2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PiPhb18ZFO39k1he' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/schedules/subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleSubjectTeacher',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleSubjectTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::PiPhb18ZFO39k1he',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3LP9cn2lOkUeIxHp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/schedules/invigilater',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleInvillagerTeacher',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleInvillagerTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::3LP9cn2lOkUeIxHp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DTXZ05EWTWTFZdUG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/schedules/companion/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleCompanionTeacher',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleCompanionTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::DTXZ05EWTWTFZdUG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jwAzt9EF5yvSYq8H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/schools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleTeacherSchools',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleTeacherSchools',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::jwAzt9EF5yvSYq8H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sUgYFmTruAM7sP8J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/dashboard/schedules/detail/{teacherId}/{gradeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:teacher',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@detailScheduleTeacher',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@detailScheduleTeacher',
        'namespace' => NULL,
        'prefix' => 'teacher/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::sUgYFmTruAM7sP8J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VRUzRufjgSfUnJvv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::VRUzRufjgSfUnJvv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::11l6ruvCZFauiFBD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TeacherController@getById',
        'controller' => 'App\\Http\\Controllers\\Admin\\TeacherController@getById',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::11l6ruvCZFauiFBD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AkK6LjfYbYvfKhVB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard/grade/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GradeController@studentGrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\GradeController@studentGrade',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::AkK6LjfYbYvfKhVB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'student.dashboard.exam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard/assessment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExamController@gradeExam',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExamController@gradeExam',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'student.dashboard.exam',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'set.assessment.id.student' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'student/dashboard/set-assessment-id-student',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExamController@setAssessmentId',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExamController@setAssessmentId',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'set.assessment.id.student',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'exam.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard/assessment/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExamController@getByIdSession',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExamController@getByIdSession',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'exam.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vovuaa4JGMHK95u4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard/relation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RelationController@getById',
        'controller' => 'App\\Http\\Controllers\\Admin\\RelationController@getById',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::vovuaa4JGMHK95u4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OW1hOZKNq8gxvoHC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard/schools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleStudentSchools',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleStudentSchools',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::OW1hOZKNq8gxvoHC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H0ysAGJOEC4qxuhw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard/schedules/grade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:student',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleStudent',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleStudent',
        'namespace' => NULL,
        'prefix' => 'student/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::H0ysAGJOEC4qxuhw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6p8jJ2QFAMdjFCGF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parent/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::6p8jJ2QFAMdjFCGF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DsYxuvEgC9INyAQK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parent/dashboard/grade/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GradeController@studentGrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\GradeController@studentGrade',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::DsYxuvEgC9INyAQK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parent.dashboard.exam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parent/dashboard/assessment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExamController@gradeExam',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExamController@gradeExam',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'parent.dashboard.exam',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'set.assessment.id' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'parent/dashboard/set-assessment-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExamController@setAssessmentId',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExamController@setAssessmentId',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'set.assessment.id',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'parent.exam.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parent/dashboard/assessment/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExamController@getByIdSession',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExamController@getByIdSession',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'parent.exam.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pbQV6XGJ2b6wMRfP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parent/dashboard/relation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RelationController@getById',
        'controller' => 'App\\Http\\Controllers\\Admin\\RelationController@getById',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::pbQV6XGJ2b6wMRfP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::238yg0DBCaHJudJP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parent/dashboard/score',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@detail',
        'controller' => 'App\\Http\\Controllers\\ReportController@detail',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::238yg0DBCaHJudJP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qsKs4Ir1rna6599b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parent/dashboard/schools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleStudentSchools',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleStudentSchools',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::qsKs4Ir1rna6599b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HrdzUT7zNq3aTLqn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parent/dashboard/schedules/grade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.login',
          2 => 'role:parent',
        ),
        'uses' => 'App\\Http\\Controllers\\ScheduleController@scheduleStudent',
        'controller' => 'App\\Http\\Controllers\\ScheduleController@scheduleStudent',
        'namespace' => NULL,
        'prefix' => 'parent/dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::HrdzUT7zNq3aTLqn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
