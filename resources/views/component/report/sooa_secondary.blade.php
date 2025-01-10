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
            <li class="breadcrumb-item"><a href="{{url('/teacher/dashboard/report/class/teacher')}}">Reports </a></li>    
            @endif
            <li class="breadcrumb-item active" aria-current="page">Detail Sooa</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="font-bold">Summary of Academic Assessment</p>
            <table>
                <tr>
                    <td>Class</td>
                    <td> : {{ $data['grade']->grade_name }} - {{ $data['grade']->grade_class }}</td>
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
        <table class="table table-striped table-bordered bg-white" style="width: 2000px">
            @if ($data['status'] == null)
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                            <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Academic</th>
                            <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA 1</th>
                            <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA 2</th>
                            <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Self-Development</th>
                            <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA Average</th>
                            <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Behavior</th>
                            <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Attendance</th>
                            <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Participation</th>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Total</th>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Grades</th>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Rank</th>
                        </tr>

                        <tr>
                            <!-- Major Subjects -->
                            <td class="text-center">Mks</td>
                            <td class="text-center">Grs</td>
                            <td class="text-center">Mks</td>
                            <td class="text-center">Grs</td>
                            <td class="text-center">Mks</td>
                            <td class="text-center">Grs</td>
                            <td class="text-center">Mks</td>
                            <td class="text-center">Grs</td>
                            <!-- END MAJOR SUBJECTS -->
                            
                            <!-- MINOR SUBJECTS -->
                            <td class="text-center">Mks</td>
                            <td class="text-center">Grs</td>
                            <td class="text-center">Mks</td>
                            <td class="text-center">Grs</td>
                            <td class="text-center">Mks</td>
                            <td class="text-center">Grs</td>
                            <!-- END MINOR SUBJECTS -->
                            
                            <!-- SUPPLEMENTARY SUBJECTS -->
                            <td class="text-center">Mks</td>
                            <td class="text-center">Grs</td>
                            <!-- END SUPPLEMENTARY SUBJECTS -->
                        </tr>
                    </thead>

                    @if (!empty($data['students']))
                    <tbody>
                    @foreach ($data['students'] as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student['student_name'] }}</td>

                            @if (!empty($student['scores']))
                                @foreach ($student['scores'] as $index => $score)

                                    <!-- ACADEMIC -->
                                    <td class="text-center">{{ $score['academic'] }}</td>
                                    <td class="text-center">{{ $score['grades_academic'] }}</td>

                                    <!-- ECA 1 -->
                                    <td class="text-center">    
                                        <input name="eca_1[]" min="0" max="100" type="number" class="form-control" id="eca_1" value="{{ $score['eca_1'] ?: '' }}" autocomplete="off" required>
                                    </td>
                                    <td class="text-center">{{ $score['grades_eca_1'] }}</td>
                                    
                                    <!-- ECA 2 -->  
                                    <td class="text-center">
                                            <input name="eca_2[]" min="0" max="100" type="number" class="form-control" id="eca_2" value="{{ $score['eca_2'] ?: '' }}" autocomplete="off" required>
                                    </td>
                                    <td class="text-center">{{ $score['grades_eca_2'] }}</td>

                                    <!-- Self-Development -->
                                    <td class="text-center">
                                        <input name="self_development[]" min="0" max="100" type="number" value="{{$score['self_development']}}" class="form-control required-input" id="self_development" autocomplete="off" required>
                                    </td>
                                    <td class="text-center">{{ $score['grades_self_development'] ?? '' }}</td>
                                    
                                    <!-- ECA Aver -->
                                    <td class="text-center">
                                        {{$score['eca_aver']}}
                                    </td>
                                    <td class="text-center">{{ $score['grades_eca_aver'] ?? '' }}</td>

                                    <td class="text-center">
                                        <input name="behavior[]" min="0" max="100" type="number" value="{{$score['behavior']}}" class="form-control required-input" id="behavior" autocomplete="off" required>
                                    </td>
                                    <td class="text-center">{{ $score['grades_behavior'] ?? '' }}</td>

                                    <!-- Attendance -->
                                    <td class="text-center">{{ $score['attendance'] }}</td>
                                    <td class="text-center">{{ $score['grades_attendance'] }}</td>

                                    <!-- Participation -->
                                    <td class="text-center">
                                        <input name="participation[]"  min="0" max="100" type="number" value="{{$score['participation']}}" class="form-control required-input" id="participation" autocomplete="off" required>
                                    </td>
                                    <td class="text-center">{{ $score['grades_participation'] }}</td>
                                    
                                    <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">

                                    <td class="text-center">{{ $score['final_score'] }}</td>
                                    <td class="text-center">{{ $score['grades_final_score'] }}</td>
                                @endforeach
                            @else
                                @foreach ($student['scores'] as $index => $score)

                                    <!-- ACADEMIC -->
                                    <td class="text-center">{{ $score['academic'] }}</td>
                                    <td class="text-center">{{ $score['grades_academic'] }}</td>

                                    <!-- ECA 1 -->
                                    <td class="text-center">
                                        @if($score['eca_1'])
                                            {{ $score['eca_1'] }}
                                        @else
                                            <input name="eca_1[]" min="0" max="100" type="number" class="form-control" id="eca_1" value="{{ $score['eca_1'] ?: '' }}" autocomplete="off" required>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $score['grades_eca_1'] }}</td>

                                    <!-- ECA 2 -->  
                                    <td class="text-center">
                                        @if($score['eca_2'])
                                            {{ $score['eca_2'] }}
                                        @else
                                            <input name="eca_2[]"  min="0" max="100" type="number" class="form-control" id="eca_2" value="{{ $score['eca_2'] ?: '' }}" autocomplete="off" required>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $score['grades_eca_2'] }}</td>

                                    <!-- Self-Development -->
                                    <td class="text-center">
                                        @if(isset($score['self_development']))
                                            {{ $score['self_development'] }}
                                        @else
                                            <input name="self_development[]" min="0" max="100" type="number" class="form-control" id="self_development" value="{{ $score['self_development'] ?: '' }}" autocomplete="off" required>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $score['grades_self_development'] ?? '' }}</td>

                                    <!-- ECA Aver -->
                                    <td class="text-center">
                                        @if(isset($score['eca_aver']))
                                            {{ $score['eca_aver'] }}
                                        @else
                                            <input name="eca_aver[]" min="0" max="100" type="number" class="form-control" id="eca_aver" value="{{ $score['eca_aver'] ?: '' }}" autocomplete="off" required>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $score['grades_eca_aver'] ?? '' }}</td>

                                    <td class="text-center">
                                        @if(isset($score['behavior']))
                                            {{ $score['behavior'] }}
                                        @else
                                            <input name="behavior[]" min="0" max="100" type="number" class="form-control" id="behavior" value="{{ $score['behavior'] ?: '' }}" autocomplete="off" required>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $score['grades_behavior'] ?? '' }}</td>

                                    <!-- Attendance -->
                                    <td class="text-center">{{ $score['attendance'] }}</td>
                                    <td class="text-center">{{ $score['grades_attendance'] }}</td>

                                    <!-- Participation -->
                                    <td class="text-center">
                                        @if(isset($score['participation']))
                                            {{ $score['participation'] }}
                                        @else
                                            <input name="participation[]"  min="0" max="100" type="number" class="form-control" id="participation"value="{{ $score['participation'] ?: '' }}" autocomplete="off" required></td>
                                        @endif
                                    <td class="text-center">{{ $score['grades_participation'] }}</td>

                                    <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">

                                    <td class="text-center">{{ $score['final_score'] }}</td>
                                    <td class="text-center">{{ $score['grades_final_score'] }}</td>
                                @endforeach
                            @endif

                            <td class="text-center">{{ $student['ranking'] }}</td>
                        @endforeach
                        </tr>
                        <input name="grade_id" type="number" class="form-control d-none" id="grade_id" value="{{ $data['grade']->grade_id }}">    
                        <input name="class_teacher" type="number" class="form-control d-none" id="class_teacher" value="{{ $data['classTeacher']->teacher_id }}">    
                        <input name="semester" type="number" class="form-control d-none" id="semester" value="{{ $data['semester'] }}">    
                    @else
                        <p>Data Kosong</p>
                    @endif
                    </tbody>

            @elseif ($data['status']->status != null && $data['status']->status == 1)       
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                        <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                        <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Academic</th>
                        <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA 1</th>
                        <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA 2</th>
                        <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Self-Development</th>
                        <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA Aver</th>
                        <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Behavior</th>
                        <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Attendance</th>
                        <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Participation</th>
                        <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Total</th>
                        <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Grades</th>
                        <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Rank</th>
                    </tr>

                    <tr>
                        <!-- Major Subjects -->
                        <td class="text-center">Mks</td>
                        <td class="text-center">Grs</td>
                        <td class="text-center">Mks</td>
                        <td class="text-center">Grs</td>
                        <td class="text-center">Mks</td>
                        <td class="text-center">Grs</td>
                        <td class="text-center">Mks</td>
                        <td class="text-center">Grs</td>
                        <!-- END MAJOR SUBJECTS -->
                        
                        <!-- MINOR SUBJECTS -->
                        <td class="text-center">Mks</td>
                        <td class="text-center">Grs</td>
                        <td class="text-center">Mks</td>
                        <td class="text-center">Grs</td>
                        <td class="text-center">Mks</td>
                        <td class="text-center">Grs</td>
                        <!-- END MINOR SUBJECTS -->
                        
                        <!-- SUPPLEMENTARY SUBJECTS -->
                        <td class="text-center">Mks</td>
                        <td class="text-center">Grs</td>
                        <!-- END SUPPLEMENTARY SUBJECTS -->
                    </tr>
                </thead>

                <tbody>
                @if (!empty($data['students']))
                    @foreach ($data['students'] as $student)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student['student_name'] }}</td>

                        @foreach ($student['scores'] as $index => $score)
                            <!-- ACADEMIC -->
                            <td class="text-center">{{ $score['academic'] }}</td>
                            <td class="text-center">{{ $score['grades_academic'] }}</td>

                            <!-- ECA 1 -->
                            <td class="text-center">
                                    {{ $score['eca_1'] ?? '' }}
                            </td>
                            <td class="text-center">{{ $score['grades_eca_1'] }}</td>
                            
                            <!-- ECA 2 -->  
                            <td class="text-center">
                                {{ $score['eca_2'] ?? '' }}
                            </td>
                            <td class="text-center">{{ $score['grades_eca_2'] }}</td>

                            <!-- Self-Development -->
                            <td class="text-center">
                                {{ $score['self_development'] ?? '' }}
                            </td>
                            <td class="text-center">{{ $score['grades_self_development'] ?? '' }}</td>
                            
                            <!-- ECA Aver -->
                            <td class="text-center">
                                {{ $score['eca_aver'] ?? '' }}
                            </td>
                            <td class="text-center">{{ $score['grades_eca_aver'] ?? '' }}</td>

                            <td class="text-center">
                                {{ $score['behavior'] ?? '' }}
                            </td>
                            <td class="text-center">{{ $score['grades_behavior'] ?? '' }}</td>

                            <!-- Attendance -->
                            <td class="text-center">{{ $score['attendance'] }}</td>
                            <td class="text-center">{{ $score['grades_attendance'] }}</td>

                            <!-- Participation -->
                            <td class="text-center">
                                {{ $score['participation'] ?? '' }}
                            </td>
                            <td class="text-center">{{ $score['grades_participation'] }}</td>
                            
                            <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">

                            <td class="text-center">{{ $score['final_score'] }}</td>
                            <td class="text-center">{{ $score['grades_final_score'] }}</td>
                        @endforeach

                        <td class="text-center">{{ $student['ranking'] }}</td>
                    @endforeach
                    </tr>
                @else
                    <p>Data Kosong</p>
                @endif
                </tbody>
            @endif
        </table>
    </div>
</div>

@endsection
