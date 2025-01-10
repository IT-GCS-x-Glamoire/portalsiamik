@extends('layouts.admin.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">Home</li>
            @if (session('role') == 'superadmin')
              <li class="breadcrumb-item"><a href="{{url('/superadmin/reports')}}">Reports</a></li>
            @elseif (session('role') == 'admin')
                <li class="breadcrumb-item"><a href="{{url('/admin/reports')}}">Reports</a></li>
            @elseif (session('role') == 'teacher')
                <li class="breadcrumb-item"><a href="{{url('/teacher/dashboard/report/subject/teacher')}}">Reports </a></li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">Detail Report {{ $data['subject']->subject_name }}</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-bold">Major Subject Assessment</p>
            <table>
                <tr>
                    <td>Subject</td>
                    <td> : {{ $data['subject']->subject_name }}</td>
                </tr>
                <tr>
                    <td>Subject Teacher</td>
                    <td> : {{ $data['subjectTeacher']->teacher_name }}</td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td> : {{ $data['grade']->name }} - {{ $data['grade']->class }}</td>
                </tr>
                <tr>
                    <td>Class Teacher</td>
                    <td> : {{ $data['classTeacher']->teacher_name }}</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td> : {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div style="overflow-x: auto;">
        {{-- KHUSUS SUBJECT FINANCIAL LITERACY --}}
        @if (
                strtolower($data['subject']->subject_name) !== 'science' &&
                strtolower($data['subject']->subject_name) !== 'english' &&
                strtolower($data['subject']->subject_name) !== 'mathematics' &&
                strtolower($data['subject']->subject_name) !== 'chinese higher' &&
                strtolower($data['subject']->subject_name) !== 'chinese lower'
            )

            <table class="table table-striped table-bordered bg-white border-black" style=" width: 2000px;">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                        <th rowspan="2 class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                        <th colspan="{{ $data['grade']->total_homework + 1 }}" class="text-center" style="vertical-align : middle;text-align:center;">Homework (20%)</th>
                        <th colspan="{{ $data['grade']->total_exercise + 1 }}" class="text-center" style="vertical-align : middle;text-align:center;">Exercise (35%)</th>
                        <th colspan="{{ $data['grade']->total_participation + 1 }} class="text-center" style="vertical-align : middle;text-align:center;">Attendance / Participation (10%)</th>
                        <th colspan="{{ $data['grade']->total_final_exam + 1 }}" class="text-center" style="vertical-align : middle;text-align:center;">Project/Practical/Final Assessment (35%)</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Marks</th>
                        <th rowspan="2" class="text-center" style="width: 25%;vertical-align : middle;text-align:center;">Comment</th>
                    </tr>
                    <tr>
                        @for ($i=1; $i <= $data['grade']->total_homework; $i++)
                            <td class="text-center">{{ $i }}</td>
                        @endfor
                        <td class="text-center">Avg</td>
                        @for ($j=1; $j <= $data['grade']->total_exercise; $j++)
                            <td class="text-center">{{ $j }}</td>
                        @endfor
                        <td class="text-center">Avg</td>
                        @for ($k=1; $k <= $data['grade']->total_participation; $k++)
                            <td class="text-center">{{ $k }}</td>
                        @endfor
                        <td class="text-center">Avg</td>
                        @for ($l=1; $l <= $data['grade']->total_final_exam; $l++)
                            <td class="text-center">{{ $l }}</td>
                        @endfor
                        <td class="text-center">Avg</td>
                        <td class="text-center">100%</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                @if (!empty($data['students']))

                    @foreach ($data['students'] as $student)
                        
                        <tr>
                            <td>{{ $loop->iteration }}</td>  <!-- nomer -->
                            <td>{{ $student['student_name'] }}</td> <!-- name -->
                        

                            <!-- COUNT HOMEWORK -->
                            @foreach ($student['scores'] as $index => $score)
                                @if($score['type_exam'] == $data['homework'])
                                    <td class="text-center">{{ $score['score'] }}</td>
                                @endif
                            @endforeach
                            <td class="text-center">{{ $student['percent_homework'] }} </td>
                            <!-- END HOMEWORK -->


                            <!-- COUNT EXERCISE -->
                            @foreach ($student['scores'] as $index => $score)
                                @if($score['type_exam'] == $data['exercise'])
                                    <td class="text-center">{{ $score['score'] }}</td>
                                @endif
                            @endforeach

                            <td class="text-center">{{ $student['percent_exercise'] }}</td> <!-- nilai rata-rata exercise -->
                            <!-- END COUNT EXERCISE -->


                            <!-- COUNT PARTICIPATION -->
                            @foreach ($student['scores'] as $index => $score)
                                @if($score['type_exam'] == $data['participation'])
                                    <td class="text-center">{{ $score['score'] }}</td> 
                                @endif
                            @endforeach

                            <td class="text-center">{{ $student['percent_participation'] }}</td> <!-- nilai rata-rata participation -->
                            
                            <!-- END COUNT PARTICIPATION -->

                            <!-- COUNT PROJECT / PRACTICAL / FINAL ASESSMENT -->
                            @foreach ($student['scores'] as $index => $score)
                                @if($score['type_exam'] == $data['project'])
                                    <td class="text-center">{{ $score['score'] }}</td> 
                                @elseif($score['type_exam'] == $data['practical'])
                                    <td class="text-center">{{ $score['score'] }}</td> 
                                @elseif($score['type_exam'] == $data['finalAssessment'])
                                    <td class="text-center">{{ $score['score'] }}</td> 
                                @elseif($score['type_exam'] == $data['finalExam'])
                                    <td class="text-center">{{ $score['score'] }}</td> 
                                @endif
                            @endforeach
                            <td class="text-center">{{ $student['percent_fe'] }}</td>
                            <!-- END COUNT PROJECT / PRACTICAL / FINAL ASESSMENT -->
                            

                            <!-- FINAL SCORE -->
                            <td class="text-center">{{ $student['total_score'] }}</td>

                            <!-- MARKS -->
                            <td class="text-center">{{ $student['grades'] }}</td>

                            <!-- COMMENT -->
                            <td class="project-actions text-left">
                                <div class="input-group">
                                    <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">  
                                    <input name="final_score[]" type="number" class="form-control d-none" id="final_score" value="{{ $student['total_score'] }}">  
                                    <input name="semester" type="number" class="form-control d-none" id="semester" value="{{ $data['semester'] }}">  
                                    @if ($data['status'] == null) 
                                    <input name="comment[]" type="text" class="form-control" id="comment" placeholder="{{ $student['comment'] ? '' : 'Write your comment' }}" value="{{ $student['comment'] ?: '' }}" autocomplete="off" required>
                                    {{-- <div class="input-group-append">
                                        <a class="btn btn-danger btn" data-toggle="modal" data-target="#editSingleComment">
                                            <i class="fas fa-pen"></i>
                                            Edit
                                        </a>
                                    </div> --}}
                                    @else
                                    {{ $student['comment'] }}
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="15" class="text-center">
                            You haven't added a assessment... <br>
                            <a href="/teacher/dashboard/exam/teacher" class="text-red">Create Exam</a>        
                        </td>    
                    </tr>
                    @endif
                </tbody>
            </table>
        @else
        {{-- MINOR SUBJECT LAINNYA --}}
            <table class="table table-striped table-bordered bg-white" style=" width: 2000px;">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                        <th rowspan="2 class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                        <th colspan="{{ $data['grade']->total_tasks + 2 }}" class="text-center" style="vertical-align : middle;text-align:center;"> Tasks (Homework/Small Project/Presentation)</th>
                        <th colspan="{{ $data['grade']->total_mid + 2 }}" class="text-center" style="vertical-align : middle;text-align:center;">Quiz/Practical Exam/Project</th>
                        <th colspan="{{ $data['grade']->total_final_exam + 2 }}" class="text-center" style="vertical-align : middle;text-align:center;">Final Exam</th>
                        <th class="text-center">Total</th>
                        <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Comment</th>
                    </tr>
                    <tr>
                        <!-- TASKS -->
                        @for ($i=1; $i <= $data['grade']->total_tasks; $i++)
                            <td class="text-center">{{ $i }}</td>
                        @endfor
                        <td class="text-center">Avg</td>
                        <td class="text-center">25%</td>
                        <!-- END TASKS -->

                        <!-- QUIZ -->
                        @for ($j=1; $j <= $data['grade']->total_mid; $j++)
                            <td class="text-center">{{ $j }}</td>
                        @endfor
                        <td class="text-center">Avg</td>
                        <td class="text-center">35%</td>
                        <!-- END QUIZ -->

                        <!-- FINAL EXAM -->
                        @for ($j=1; $j <= $data['grade']->total_final_exam; $j++)
                            <td class="text-center">{{ $j }}</td>
                        @endfor
                        <td class="text-center">Avg</td>
                        <td class="text-center">40%</td>
                        <!-- END FINAL EXAM -->

                        <td class="text-center">100%</td>
                    </tr>
                </thead>

                <tbody>
                @if (!empty($data['students']))

                    @foreach ($data['students'] as $student)
                        
                        <tr>
                            <td>{{ $loop->iteration }}</td>  <!-- nomer -->
                            <td>{{ $student['student_name'] }}</td> <!-- name -->
                    
                            <!-- COUNT TASKS -->
                            @foreach ($student['scores'] as $index => $score)
                                @if(in_array($score['type_exam'], $data['tasks']))
                                    <td class="text-center">{{ $score['score'] }}</td>
                                @endif
                            @endforeach

                            <td>{{ $student['avg_tasks'] }} </td>
                            <td>{{ $student['percent_tasks'] }} </td>
                            <!-- END TASKS -->


                            <!-- COUNT QUIZ -->
                            @foreach ($student['scores'] as $index => $score)
                                @if(in_array($score['type_exam'], $data['mid']))
                                    <td class="text-center">{{ $score['score'] }}</td>
                                @endif
                            @endforeach

                            <td class="text-center">{{ $student['avg_mid'] }}</td> <!-- nilai rata-rata exercise -->
                            <td class="text-center">{{ $student['percent_mid'] }}</td> <!-- 15% dari nilai rata-rata exercise -->
                            <!-- END COUNT QUIZ -->


                            <!-- COUNT F.EXAM -->
                            @php $foundFinalExam = false; @endphp
                            @foreach ($student['scores'] as $score)
                                @if(in_array($score['type_exam'], $data['finalExam']))
                                    <td class="text-center">{{ $score['score'] }}</td>
                                    @php $foundFinalExam = true; @endphp
                                @endif
                            @endforeach
                            <td>{{ $student['avg_fe'] ?? '&nbsp;' }}</td>
                            <td>{{ $student['percent_fe'] ?? '&nbsp;' }}</td>
                            <!-- END COUNT F.EXAM -->
                            

                            <!-- FINAL SCORE -->
                            <td>{{ $student['total_score'] ?? '&nbsp;' }}</td>

                            <!-- COMMENT -->
                            <td class="project-actions text-left">
                                @if ($data['status'] == null)
                                    <div class="input-group">
                                        <input name="comment[]" type="text" class="form-control" id="comment" placeholder="{{ $student['comment'] ? '' : 'Write your comment' }}" value="{{ $student['comment'] ?: '' }}" autocomplete="off" required>
                                        <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">  
                                        <input name="final_score[]" type="number" class="form-control d-none" id="final_score" value="{{ $student['total_score'] }}">  
                                        <input name="semester" type="number" class="form-control d-none" id="semester" value="{{ $data['semester'] }}">  <input name="semester" type="number" class="form-control d-none" id="semester" value="{{ $data['semester'] }}">  
                                        {{-- <div class="input-group-append">
                                            <a class="btn btn-danger btn" data-toggle="modal" data-target="#editSingleComment">
                                                <i class="fas fa-pen"></i>
                                                Edit
                                            </a>
                                        </div>     --}}
                                    </div>
                                @elseif ($data['status'] != null && $data['status']->status == 1)       
                                    {{ $student['comment'] }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="15" class="text-center">
                            You haven't added a assessment... <br>
                            <a href="/teacher/dashboard/exam/teacher" class="text-red">Create Exam</a>        
                        </td>    
                    </tr>
                @endif
                    
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
