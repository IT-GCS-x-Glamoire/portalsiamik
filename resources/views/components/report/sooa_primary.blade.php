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
            <li class="breadcrumb-item active" aria-current="page">Detail Acar</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-bold">Summary of Academic Assessment</p>
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
            {{-- <p class="text-xs">Class Teacher : {{ $data['grade']->teacher_name }}</p>
            <p class="text-xs">Class: {{ $data['grade']->grade_name }} - {{ $data['grade']->grade_class }} </p>
            <p class="text-xs">Date  : {{date('d-m-Y')}}</p> --}}
        </div>
    </div>

    <div style="overflow-x: auto;">
        <table class="table table-striped table-bordered bg-white" style=" width: 2000px;">
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

            <tbody>
            @if (!empty($data['students']))
                @foreach ($data['students'] as $student)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student['student_name'] }}</td>

                    @if ($data['status'] == null)
                        @foreach ($student['scores'] as $index => $score)

                            <!-- ACADEMIC -->
                            <td class="text-center">{{ $score['academic'] }}</td>
                            <td class="text-center">{{ $score['grades_academic'] }}</td>

                            <!-- Choice -->
                            <td class="text-center">   
                                <input name="choice[]" min="0" max="100" type="number" class="form-control required-input " id="choice" value="{{ $score['choice'] ? : '' }}" autocomplete="off" required>
                            </td>
                            <td class="text-center">{{ $score['grades_choice'] }}</td>

                            <!-- Language & Art -->
                            <td class="text-center">
                                    <input name="language_and_art[]" min="0" max="100" type="number" class="form-control required-input " id="language_and_art" value="{{ $score['language_and_art'] ? : '' }}" autocomplete="off" required>
                            </td>
                            <td class="text-center">{{ $score['grades_language_and_art'] ?? '' }}</td>

                            <!-- Self-Development -->
                            <td class="text-center">
                                <input name="self_development[]" min="0" max="100" type="number" class="form-control required-input " id="self_development" value="{{ $score['self_development'] ?: '' }}" autocomplete="off" required>
                            </td>
                            <td class="text-center">{{ $score['grades_self_development'] ?? '' }}</td>

                            <!-- ECA Aver -->
                            <td class="text-center">
                                {{$score['eca_aver']}}
                            </td>
                            <td class="text-center">{{ $score['grades_eca_aver'] ?? '' }}</td>

                            <!-- Behavior -->
                            <td class="text-center">
                                <input name="behavior[]" min="0" max="100" type="number" class="form-control required-input " id="behavior" value="{{ $score['behavior'] ?: '' }}" autocomplete="off" required>
                            </td>
                            <td class="text-center">{{ $score['grades_behavior'] ?? '' }}</td>

                            <!-- Attendance -->
                            <td class="text-center">{{ $score['attendance'] }}</td>
                            <td class="text-center">{{ $score['grades_attendance'] }}</td>

                            <!-- Participation -->
                            <td class="text-center">
                                <input name="participation[]"  min="0" max="100" type="number" class="form-control required-input " id="participation"value="{{ $score['participation'] ?: '' }}" autocomplete="off" required></td>
                            <td class="text-center">{{ $score['grades_participation'] }}</td>

                            <input name="student_id[]" type="number" class="form-control required-input  d-none" id="student_id" value="{{ $student['student_id'] }}">
                                            
                            <td class="text-center">{{ $score['final_score'] }}</td>
                            <td class="text-center">{{ $score['grades_final_score'] }}</td>
                        @endforeach
                    @elseif ($data['status']->status != null && $data['status']->status == 1) 
                    @foreach ($student['scores'] as $index => $score)

                            <!-- ACADEMIC -->
                            <td class="text-center">{{ $score['academic'] }}</td>
                            <td class="text-center">{{ $score['grades_academic'] }}</td>

                            <!-- Choice -->
                            <td class="text-center">
                                @if(isset($score['choice']))
                                    {{ $score['choice'] }}
                                @else
                                    <input name="choice[]" min="0" max="100" type="number" class="form-control required-input " id="choice" value="{{ $score['choice'] ? : '' }}" autocomplete="off" required>
                                @endif
                            </td>
                            <td class="text-center">{{ $score['grades_choice'] }}</td>

                            <!-- Language & Art -->
                            <td class="text-center">
                                @if(isset($score['language_and_art']))
                                    {{ $score['language_and_art'] }}
                                @else
                                    <input name="language_and_art[]" min="0" max="100" type="number" class="form-control required-input " id="language_and_art" value="{{ $score['language_and_art'] ? : '' }}" autocomplete="off" required>
                                @endif
                            </td>
                            <td class="text-center">{{ $score['grades_language_and_art'] ?? '' }}</td>

                            <!-- Self-Development -->
                            <td class="text-center">
                                @if(isset($score['self_development']))
                                    {{ $score['self_development'] }}
                                @else
                                    <input name="self_development[]" min="0" max="100" type="number" class="form-control required-input " id="self_development" value="{{ $score['self_development'] ?: '' }}" autocomplete="off" required>
                                @endif
                            </td>
                            <td class="text-center">{{ $score['grades_self_development'] ?? '' }}</td>

                            <!-- ECA Aver -->
                            <td class="text-center">
                                @if(isset($score['eca_aver']))
                                    {{ $score['eca_aver'] }}
                                @else
                                    {{ $score['eca_aver'] }}    
                                @endif
                            </td>
                            <td class="text-center">{{ $score['grades_eca_aver'] ?? '' }}</td>

                            <!-- Behavior -->
                            <td class="text-center">
                                @if(isset($score['behavior']))
                                    {{ $score['behavior'] }}
                                @else
                                    <input name="behavior[]" min="0" max="100" type="number" class="form-control required-input " id="behavior" value="{{ $score['behavior'] ?: '' }}" autocomplete="off" required>
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
                                    <input name="participation[]"  min="0" max="100" type="number" class="form-control required-input " id="participation"value="{{ $score['participation'] ?: '' }}" autocomplete="off" required></td>
                                @endif
                            <td class="text-center">{{ $score['grades_participation'] }}</td>

                            <input name="student_id[]" type="number" class="form-control required-input  d-none" id="student_id" value="{{ $student['student_id'] }}">
                                            
                            <td class="text-center">{{ $score['final_score'] }}</td>
                            <td class="text-center">{{ $score['grades_final_score'] }}</td>
                        @endforeach
                        
                    @endif
                    
                    <td class="text-center">{{ $student['ranking'] }}</td>
                @endforeach
                </tr>
            @else
                <tr>
                    <td colspan="33" class="text-center text-danger">
                        Teacher doesnt submit academic assessment report      
                    </td>    
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
