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
            '_route' => 'generated::SfMiLxtq8PUDTaXS',
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
            '_route' => 'generated::WKWzTY13WBzZyZG2',
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
            '_route' => 'generated::5lPhpL2PTtLKxWA0',
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
            '_route' => 'generated::WRJIjnEFMXRDmTbO',
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
            '_route' => 'generated::is6YOp0ygSQ4LDkc',
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
            '_route' => 'generated::ZAgPeEZjsrg9EuMt',
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
            '_route' => 'generated::oEJexInJSAYvFwZ5',
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
            '_route' => 'generated::jSTtxEkWT5zsmVms',
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
            '_route' => 'generated::IQYQlbEgf9MNbWB5',
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
            '_route' => 'generated::q8rfJKBfu3bRdBZD',
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
            '_route' => 'generated::N61ScbfZ2xf39GAT',
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
            '_route' => 'generated::35NL18VsNs0FZ5kE',
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
            '_route' => 'generated::yvwXNJ2IMaDXRZ35',
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
            '_route' => 'generated::pdWjlpgVHyfI5Szg',
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
            '_route' => 'generated::EeyhokC0dDJFzKe8',
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
            '_route' => 'generated::dkX2SYlYscTRj4Od',
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
            '_route' => 'generated::kkuslAfjwTuhZGgf',
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
            '_route' => 'generated::eY4JdsSL5bQC0fXL',
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
            '_route' => 'generated::QI16MHybNJpfsja5',
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
            '_route' => 'generated::G5a1v7fxlXAYnCfP',
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
            '_route' => 'generated::VsDPe6c51qs6VgiL',
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
            '_route' => 'generated::dd4hkdH8dMdGWHsk',
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
            '_route' => 'generated::GotohenUqr3hOJRi',
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
            '_route' => 'generated::NLeryEGrN2tl8NK4',
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
            '_route' => 'generated::WT75hPtHkyvsC9RP',
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
            '_route' => 'generated::a9bNe3x6qKgR2nPm',
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
            '_route' => 'generated::k3hmgUpCYX0iT12i',
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
            '_route' => 'generated::S1e8GmDikLoVTXwt',
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
            '_route' => 'generated::3B4bDDmAaPykeSC3',
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
            '_route' => 'generated::sdhtxWnAVAJ7mzIO',
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
            '_route' => 'generated::gpzxuolsriP5h20E',
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
            '_route' => 'generated::pbEAzu3HJkMv77RY',
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
            '_route' => 'generated::5TObMDbuJSAV43t2',
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
            '_route' => 'generated::Za6j7ahihZ36YD6r',
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
            '_route' => 'generated::Kf2hexlwG3lDt6rs',
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
            '_route' => 'generated::2BSyynh3DYeJd47W',
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
            '_route' => 'generated::tIjVNbTzgHY5xIFP',
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
            '_route' => 'generated::U42Md1WasE7lCJ4c',
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
            '_route' => 'generated::bD6QBJaOQaBLdSmF',
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
            '_route' => 'generated::lYNhkFg50UOATFsY',
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
            '_route' => 'generated::TXBkCLEbsk22xm0T',
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
            '_route' => 'generated::fiku4h6ZqokfKbcI',
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
            '_route' => 'generated::1O1zWMCjMe6vl66y',
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
            '_route' => 'generated::6Y5VBVVOSiXeUF2J',
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
            '_route' => 'generated::ajqBTEveXPLmj2lm',
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
            '_route' => 'generated::rxKWLuHkxbgwvvgb',
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
            '_route' => 'generated::89ZdbjXtE1r8yDgk',
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
            '_route' => 'generated::YkO7MpJb3KWxqFkq',
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
            '_route' => 'generated::gssxxLAjQIx2tGCZ',
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
            '_route' => 'generated::OjqUHmAusjrwIFqe',
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
            '_route' => 'generated::RArTsAePURUwN20A',
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
            '_route' => 'generated::oUiuTo8MuyBGvJQa',
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
            '_route' => 'generated::GDQebNHrgggT7YnW',
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
            '_route' => 'generated::nNsI8V3Bf7MZ7gUg',
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
            '_route' => 'generated::LnVMp2tl9F7w3cpB',
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
            '_route' => 'generated::PuSVVGNv92ztAG4L',
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
            '_route' => 'generated::hWlqlfKo3aOGv8FL',
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
            '_route' => 'generated::9j1JsiWLuYycEDJi',
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
            '_route' => 'generated::s51nB0rdxsjW0yPR',
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
            '_route' => 'generated::GvMaCp5bhEnQa4zK',
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
            '_route' => 'generated::lPe0c9Ei7h3srMfa',
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
            '_route' => 'generated::EliyIh6VN3q2bFFy',
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
            '_route' => 'generated::KVv5BAHmI61VtKJw',
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
            '_route' => 'generated::sXWcz9f9Sb3LYxt4',
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
            '_route' => 'generated::N1BUQBEQ3cOXDxAF',
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
            '_route' => 'generated::DQjq7kIMdT8qcx5W',
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
            '_route' => 'generated::z2N2eDzQJLTtn4Yc',
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
            '_route' => 'generated::imIJc5gDCmhLdhmo',
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
            '_route' => 'generated::z2PByd4vCA7QOore',
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
            '_route' => 'generated::cOae2TimumROiGAj',
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
            '_route' => 'generated::AwUx0Tqknrc7XKQC',
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
            '_route' => 'generated::N1AA1LcMFwAbjjtK',
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
            '_route' => 'generated::i5CimqDftSrqW0QP',
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
            '_route' => 'generated::2o6v2BNjSk9OAiHP',
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
            '_route' => 'generated::mThsey6GeALXpjt7',
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
    'generated::SfMiLxtq8PUDTaXS' => 
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
        'as' => 'generated::SfMiLxtq8PUDTaXS',
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
    'generated::WKWzTY13WBzZyZG2' => 
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
        'as' => 'generated::WKWzTY13WBzZyZG2',
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
    'generated::5lPhpL2PTtLKxWA0' => 
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
        'as' => 'generated::5lPhpL2PTtLKxWA0',
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
    'generated::WRJIjnEFMXRDmTbO' => 
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
        'as' => 'generated::WRJIjnEFMXRDmTbO',
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
    'generated::GotohenUqr3hOJRi' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008870000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GotohenUqr3hOJRi',
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
    'generated::NLeryEGrN2tl8NK4' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008890000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NLeryEGrN2tl8NK4',
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
    'generated::WT75hPtHkyvsC9RP' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000088b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WT75hPtHkyvsC9RP',
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
    'generated::a9bNe3x6qKgR2nPm' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000088d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::a9bNe3x6qKgR2nPm',
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
    'generated::k3hmgUpCYX0iT12i' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000088f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::k3hmgUpCYX0iT12i',
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
    'generated::S1e8GmDikLoVTXwt' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008910000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::S1e8GmDikLoVTXwt',
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
    'generated::sdhtxWnAVAJ7mzIO' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008930000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sdhtxWnAVAJ7mzIO',
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
    'generated::gpzxuolsriP5h20E' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008950000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gpzxuolsriP5h20E',
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
    'generated::3B4bDDmAaPykeSC3' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008970000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3B4bDDmAaPykeSC3',
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
    'generated::pbEAzu3HJkMv77RY' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008990000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pbEAzu3HJkMv77RY',
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
    'generated::is6YOp0ygSQ4LDkc' => 
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
        'as' => 'generated::is6YOp0ygSQ4LDkc',
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
    'generated::ZAgPeEZjsrg9EuMt' => 
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
        'as' => 'generated::ZAgPeEZjsrg9EuMt',
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
    'generated::5TObMDbuJSAV43t2' => 
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
        'as' => 'generated::5TObMDbuJSAV43t2',
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
    'generated::Za6j7ahihZ36YD6r' => 
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
        'as' => 'generated::Za6j7ahihZ36YD6r',
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
    'generated::oEJexInJSAYvFwZ5' => 
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
        'as' => 'generated::oEJexInJSAYvFwZ5',
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
    'generated::jSTtxEkWT5zsmVms' => 
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
        'as' => 'generated::jSTtxEkWT5zsmVms',
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
    'generated::Kf2hexlwG3lDt6rs' => 
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
        'as' => 'generated::Kf2hexlwG3lDt6rs',
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
    'generated::2BSyynh3DYeJd47W' => 
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
        'as' => 'generated::2BSyynh3DYeJd47W',
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
    'generated::tIjVNbTzgHY5xIFP' => 
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
        'as' => 'generated::tIjVNbTzgHY5xIFP',
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
    'generated::U42Md1WasE7lCJ4c' => 
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
        'as' => 'generated::U42Md1WasE7lCJ4c',
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
    'generated::IQYQlbEgf9MNbWB5' => 
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
        'as' => 'generated::IQYQlbEgf9MNbWB5',
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
    'generated::q8rfJKBfu3bRdBZD' => 
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
        'as' => 'generated::q8rfJKBfu3bRdBZD',
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
    'generated::bD6QBJaOQaBLdSmF' => 
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
        'as' => 'generated::bD6QBJaOQaBLdSmF',
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
    'generated::lYNhkFg50UOATFsY' => 
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
        'as' => 'generated::lYNhkFg50UOATFsY',
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
    'generated::TXBkCLEbsk22xm0T' => 
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
        'as' => 'generated::TXBkCLEbsk22xm0T',
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
    'generated::fiku4h6ZqokfKbcI' => 
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
        'as' => 'generated::fiku4h6ZqokfKbcI',
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
    'generated::1O1zWMCjMe6vl66y' => 
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
        'as' => 'generated::1O1zWMCjMe6vl66y',
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
    'generated::6Y5VBVVOSiXeUF2J' => 
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
        'as' => 'generated::6Y5VBVVOSiXeUF2J',
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
    'generated::ajqBTEveXPLmj2lm' => 
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
        'as' => 'generated::ajqBTEveXPLmj2lm',
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
    'generated::YkO7MpJb3KWxqFkq' => 
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
        'as' => 'generated::YkO7MpJb3KWxqFkq',
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
    'generated::LnVMp2tl9F7w3cpB' => 
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
        'as' => 'generated::LnVMp2tl9F7w3cpB',
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
    'generated::PuSVVGNv92ztAG4L' => 
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
        'as' => 'generated::PuSVVGNv92ztAG4L',
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
    'generated::hWlqlfKo3aOGv8FL' => 
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
        'as' => 'generated::hWlqlfKo3aOGv8FL',
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
    'generated::9j1JsiWLuYycEDJi' => 
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
        'as' => 'generated::9j1JsiWLuYycEDJi',
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
    'generated::s51nB0rdxsjW0yPR' => 
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
        'as' => 'generated::s51nB0rdxsjW0yPR',
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
    'generated::gssxxLAjQIx2tGCZ' => 
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
        'as' => 'generated::gssxxLAjQIx2tGCZ',
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
    'generated::GvMaCp5bhEnQa4zK' => 
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
        'as' => 'generated::GvMaCp5bhEnQa4zK',
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
    'generated::OjqUHmAusjrwIFqe' => 
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
        'as' => 'generated::OjqUHmAusjrwIFqe',
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
    'generated::lPe0c9Ei7h3srMfa' => 
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
        'as' => 'generated::lPe0c9Ei7h3srMfa',
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
    'generated::RArTsAePURUwN20A' => 
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
        'as' => 'generated::RArTsAePURUwN20A',
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
    'generated::EliyIh6VN3q2bFFy' => 
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
        'as' => 'generated::EliyIh6VN3q2bFFy',
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
    'generated::KVv5BAHmI61VtKJw' => 
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
        'as' => 'generated::KVv5BAHmI61VtKJw',
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
    'generated::z2N2eDzQJLTtn4Yc' => 
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
        'as' => 'generated::z2N2eDzQJLTtn4Yc',
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
    'generated::rxKWLuHkxbgwvvgb' => 
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
        'as' => 'generated::rxKWLuHkxbgwvvgb',
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
    'generated::89ZdbjXtE1r8yDgk' => 
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
        'as' => 'generated::89ZdbjXtE1r8yDgk',
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
    'generated::sXWcz9f9Sb3LYxt4' => 
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
        'as' => 'generated::sXWcz9f9Sb3LYxt4',
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
    'generated::oUiuTo8MuyBGvJQa' => 
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
        'as' => 'generated::oUiuTo8MuyBGvJQa',
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
    'generated::N1BUQBEQ3cOXDxAF' => 
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
        'as' => 'generated::N1BUQBEQ3cOXDxAF',
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
    'generated::GDQebNHrgggT7YnW' => 
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
        'as' => 'generated::GDQebNHrgggT7YnW',
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
    'generated::DQjq7kIMdT8qcx5W' => 
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
        'as' => 'generated::DQjq7kIMdT8qcx5W',
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
    'generated::nNsI8V3Bf7MZ7gUg' => 
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
        'as' => 'generated::nNsI8V3Bf7MZ7gUg',
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
    'generated::N61ScbfZ2xf39GAT' => 
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
        'as' => 'generated::N61ScbfZ2xf39GAT',
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
    'generated::35NL18VsNs0FZ5kE' => 
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
        'as' => 'generated::35NL18VsNs0FZ5kE',
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
    'generated::imIJc5gDCmhLdhmo' => 
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
        'as' => 'generated::imIJc5gDCmhLdhmo',
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
    'generated::yvwXNJ2IMaDXRZ35' => 
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
        'as' => 'generated::yvwXNJ2IMaDXRZ35',
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
    'generated::pdWjlpgVHyfI5Szg' => 
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
        'as' => 'generated::pdWjlpgVHyfI5Szg',
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
    'generated::z2PByd4vCA7QOore' => 
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
        'as' => 'generated::z2PByd4vCA7QOore',
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
    'generated::EeyhokC0dDJFzKe8' => 
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
        'as' => 'generated::EeyhokC0dDJFzKe8',
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
    'generated::cOae2TimumROiGAj' => 
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
        'as' => 'generated::cOae2TimumROiGAj',
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
    'generated::dkX2SYlYscTRj4Od' => 
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
        'as' => 'generated::dkX2SYlYscTRj4Od',
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
    'generated::AwUx0Tqknrc7XKQC' => 
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
        'as' => 'generated::AwUx0Tqknrc7XKQC',
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
    'generated::N1AA1LcMFwAbjjtK' => 
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
        'as' => 'generated::N1AA1LcMFwAbjjtK',
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
    'generated::i5CimqDftSrqW0QP' => 
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
        'as' => 'generated::i5CimqDftSrqW0QP',
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
    'generated::kkuslAfjwTuhZGgf' => 
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
        'as' => 'generated::kkuslAfjwTuhZGgf',
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
    'generated::eY4JdsSL5bQC0fXL' => 
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
        'as' => 'generated::eY4JdsSL5bQC0fXL',
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
    'generated::QI16MHybNJpfsja5' => 
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
        'as' => 'generated::QI16MHybNJpfsja5',
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
    'generated::2o6v2BNjSk9OAiHP' => 
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
        'as' => 'generated::2o6v2BNjSk9OAiHP',
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
    'generated::mThsey6GeALXpjt7' => 
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
        'as' => 'generated::mThsey6GeALXpjt7',
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
    'generated::G5a1v7fxlXAYnCfP' => 
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
        'as' => 'generated::G5a1v7fxlXAYnCfP',
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
    'generated::VsDPe6c51qs6VgiL' => 
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
        'as' => 'generated::VsDPe6c51qs6VgiL',
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
    'generated::dd4hkdH8dMdGWHsk' => 
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
        'as' => 'generated::dd4hkdH8dMdGWHsk',
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
