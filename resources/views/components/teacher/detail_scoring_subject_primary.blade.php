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
            <p class="text-bold">Minor Subject Assessment</p>
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
    </div>
</div>
@endsection
