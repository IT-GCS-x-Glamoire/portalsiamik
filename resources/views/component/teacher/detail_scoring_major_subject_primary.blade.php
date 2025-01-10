@extends('layouts.admin.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid" id="anjayani">
    <div class="row breadcrumb-container">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Home</li>
                    @if (session('role') == 'superadmin')
                        <li class="breadcrumb-item"><a href="{{url('/superadmin/reports')}}">Reports</a></li>
                    @elseif (session('role') == 'admin')
                        <li class="breadcrumb-item"><a href="{{url('/admin/reports')}}">Reports</a></li>
                    @elseif (session('role') == 'teacher')
                        <li class="breadcrumb-item"><a href="{{url('/teacher/dashboard/report/subject/teacher')}}">Reports</a></li>
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
        <table class="table table-striped table-bordered bg-white" style="width:2000px;">
            <thead>
                <tr>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                    <th colspan="{{ $data['grade']->total_homework + 2 }}" class="text-center" style="vertical-align : middle;text-align:center;">Homework</th>
                    <th colspan="{{ $data['grade']->total_exercise + 2 }}" class="text-center" style="vertical-align : middle;text-align:center;">Exercise</th>
                    <th colspan="{{ $data['grade']->total_participation + 2 }}" class="text-center" style="vertical-align : middle;text-align:center;">Participation</th>
                    <th class="text-center" style="vertical-align : middle;text-align:center;">R (30%)</th>
                    <th colspan="{{ $data['grade']->total_quiz + 1 }}" class="text-center" style="vertical-align : middle;text-align:center;">Quiz</th>
                    <th class="text-center" style="vertical-align : middle;text-align:center;">R (30%)</th>
                    <th colspan="1" class="text-center" style="vertical-align : middle;text-align:center;">Final</th>
                    <th class="text-center" style="vertical-align : middle;text-align:center;">R (40%)</th>
                    <th class="text-center" style="vertical-align : middle;text-align:center;">Total</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;width: 20%;">Comment</th>
                </tr>
                <tr>
                    @for ($i=1; $i <= $data['grade']->total_homework; $i++)
                        <td class="text-center">{{ $i }}</td>
                    @endfor
                    <td class="text-center">Avg</td>
                    <td class="text-center">10%</td>
                    @for ($j=1; $j <= $data['grade']->total_exercise; $j++)
                        <td class="text-center">{{ $j }}</td>
                    @endfor
                    <td class="text-center">Avg</td>
                    <td class="text-center">15%</td>
                    @for ($k=1; $k <= $data['grade']->total_participation; $k++)
                        <td class="text-center">{{ $k }}</td>
                    @endfor
                    <td class="text-center">Avg</td>
                    <td class="text-center">5%</td>
                    <td class="text-center">H+E+P</td>
                    @for ($l=1; $l <= $data['grade']->total_quiz; $l++)
                        <td class="text-center">{{ $l }}</td>
                    @endfor
                    <td class="text-center">Avg</td>
                    <td class="text-center">Quiz</td>
                    <td class="text-center">Exam</td>
                    <td class="text-center">F.E</td>
                    <td class="text-center">100%</td>
                </tr>
            </thead>

            <tbody>
            @if (!empty($data['students']))

                @foreach ($data['students'] as $student)
                    
                    <tr>
                        <td  class="text-center" style="vertical-align : middle;text-align:center;">{{ $loop->iteration }}</td>  <!-- nomer -->
                        <td>{{ $student['student_name'] }}</td> <!-- name -->
                    

                        <!-- COUNT HOMEWORK -->
                        @foreach ($student['scores'] as $index => $score)
                            @if($score['type_exam'] == 1)
                                <td class="text-center">{{ $score['score'] }}</td>
                            @endif
                        @endforeach
                        <td>{{ $student['avg_homework'] }} </td>
                        <td>{{ $student['percent_homework'] }} </td>
                        <!-- END HOMEWORK -->


                        <!-- COUNT EXERCISE -->
                        @foreach ($student['scores'] as $index => $score)
                            @if($score['type_exam'] == 2)
                                <td class="text-center">{{ $score['score'] }}</td>
                            @endif
                        @endforeach

                        <td class="text-center">{{ $student['avg_exercise'] }}</td> <!-- nilai rata-rata exercise -->
                        <td class="text-center">{{ $student['percent_exercise'] }}</td> <!-- 15% dari nilai rata-rata exercise -->
                        <!-- END COUNT EXERCISE -->


                        <!-- COUNT PARTICIPATION -->
                        @foreach ($student['scores'] as $index => $score)
                            @if($score['type_exam'] == 5)
                                <td class="text-center">{{ $score['score'] }}</td> 
                            @endif
                        @endforeach

                        <td class="text-center">{{ $student['avg_participation'] }}</td> <!-- nilai rata-rata exercise -->
                        <td class="text-center">{{ $student['percent_participation'] }}</td> <!-- 15% dari nilai rata-rata exercise -->
                        
                        <!-- END COUNT PARTICIPATION -->

                        <!-- H+E+P -->
                        <td>{{$student['h+e+p'] }}</td>
                        <!-- END H+E+P -->


                        <!-- COUNT QUIZ -->
                        @foreach ($student['scores'] as $index => $score)
                            @if($score['type_exam'] == 3)
                                <td class="text-center">{{ $score['score'] }}</td> <!-- total jumlah homework -->
                            @endif
                        @endforeach
                        <td>{{ $student['avg_quiz'] }}</td>
                        <td>{{ $student['percent_quiz'] }}</td>
                        <!-- END COUNT QUIZ -->

                        <!-- COUNT F.EXAM -->
                        @php $foundFinalExam = false; @endphp
                        @foreach ($student['scores'] as $score)
                            @if($score['type_exam'] == 4)
                                <td class="text-center">{{ $score['score'] }}</td>
                                @php $foundFinalExam = true; @endphp
                            @endif
                        @endforeach
                        @if(!$foundFinalExam)
                            <td>&nbsp;</td>
                        @endif
                        <td>{{ $student['percent_fe'] ?? '&nbsp;' }}</td>
                        <!-- END COUNT F.EXAM -->
                        

                        <!-- FINAL SCORE -->
                        <td>{{ $student['total_score'] }}</td>

                        <!-- COMMENT -->
                        <td class="project-actions text-left">
                            <div class="input-group">
                                <input name="student_id[]" type="number" class="form-control d-none" id="student_id-{{$student['student_id']}}" value="{{ $student['student_id'] }}">  
                                <input name="final_score[]" type="number" class="form-control d-none" id="final_score-{{$student['student_id']}}" value="{{ $student['total_score'] }}">  
                                <input name="semester" type="number" class="form-control d-none" id="semester-{{$student['student_id']}}" value="{{ $data['semester'] }}"> 
                                @if ($data['status'] == null) 
                                    <input name="comment[]" type="text" class="form-control" id="comment" placeholder="{{ $student['comment'] ? '' : 'Write your comment' }}" value="{{ $student['comment'] ?: '' }}" autocomplete="off" required>
                                @else
                                    {{ $student['comment'] }}
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                <input name="grade_id" type="number" class="form-control d-none" id="grade_id" value="{{ $data['grade']->id }}">  
                <input name="subject_id" type="number" class="form-control d-none" id="subject_id" value="{{ $data['subject']->subject_id }}">  
                <input name="subject_teacher" type="number" class="form-control d-none" id="subject_teacher" value="{{ $data['subjectTeacher']->teacher_id }}">  
            </form>
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
