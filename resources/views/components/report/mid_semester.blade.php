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
              <li class="breadcrumb-item"><a href="{{url('/superadmin/reports')}}">Mid Report Card</a></li>
            @elseif (session('role') == 'admin')
            <li class="breadcrumb-item"><a href="{{url('/admin/reports')}}">Mid Report Card</a></li>
            @elseif (session('role') == 'teacher')
            <li class="breadcrumb-item"><a href="{{url('/teacher/dashboard/report/class/teacher')}}">Reports </a></li>    
            @endif
            <li class="breadcrumb-item active" aria-current="page">Detail Mid Report Card</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-bold">Mid Report Card Semester </p>
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
        @if (!empty($data['students']))
        
        <table class="table table-striped table-bordered bg-white" style="width: 2000px;">
            @if ($data['status'] == null)
                <!-- JIKA DATA BELUM DI SUBMIT OLEH TEACHER  -->
                <thead>
                    <tr>
                        <th class="text-center" style="vertical-align : middle;text-align:center;width:2%;">S/N</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;width:15%;">First Name</th>
                        
                        @foreach ($data['monthlyActivities'] as $ma)
                        <th class="text-center" style="vertical-align : middle;text-align:center;">{{$ma->name}}</th>
                        @endforeach

                        <th class="text-center" style="vertical-align : middle;text-align:center;">Critical Thinking</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Cognitive Skills</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Life Skills</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Learning Skills</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Social and Emotional Development</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;width:3%;">View</th>
                    </tr>
                </thead>

                <!-- JIKA TEACHER MEMINTA EDIT SETELAH SUBMIT -->
                @if(!empty($data['result']))
                    <tbody>
                        @foreach ($data['result'] as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student['name'] }}</td>
                            
                            @foreach ($student['monthly_activities'] as $ma)
                            <td class="text-center">
                                <input name="{{strtolower($ma['activity_name'])}}[]" min="0" max="100" type="number" class="form-control required-input" value="{{$ma['score']}}" autocomplete="off" required>
                            </td>
                            @endforeach

                            {{-- <td class="text-center"><input name="remarks[]" type="text" class="form-control" value="{{ $student['remarks'] }}" autocomplete="off"></td> --}}
                            <td><input name="critical_thinking[]" type="text" class="form-control" value="{{ $student['critical_thinking'] }}" autocomplete="off"></td>
                            <td><input name="cognitive_skills[]" type="text" class="form-control" value="{{ $student['cognitive_skills'] }}" autocomplete="off"></td>
                            <td><input name="life_skills[]" type="text" class="form-control" value="{{ $student['life_skills'] }}" autocomplete="off"></td>
                            <td><input name="learning_skills[]" type="text" class="form-control" value="{{ $student['learning_skills'] }}" autocomplete="off"></td>
                            <td><input name="social_and_emotional_development[]" type="text" class="form-control" value="{{ $student['social_and_emotional_development'] }}" autocomplete="off"></td>
                            
                            <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">
                            <td>
                                <a class="btn btn-primary btn"
                                    href="{{url('teacher/dashboard/midreport/print') . '/' . $student['id']}}">
                                    View
                                </a>
                            </td>
                        @endforeach
                        </tr>
                    </tbody>
                    <input name="grade_id" type="number" class="form-control d-none" id="grade_id" value="{{ $data['grade']->grade_id }}">    
                    <input name="teacher_id" type="number" class="form-control d-none" id="class_teacher_id" value="{{ $data['classTeacher']->teacher_id }}">    
                    <input name="semester" type="number" class="form-control d-none" id="semester" value="{{ $data['semester'] }}">
                
                <!-- JIKA TEACHER BELUM INPUT NILAI -->
                @else 
                    <tbody>
                        @foreach ($data['students'] as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student['name'] }}</td>
                            
                            @foreach ($data['monthlyActivities'] as $ma)
                            <td class="text-center">
                                <input name="{{strtolower($ma->name)}}[]" min="0" max="100" type="number" class="form-control required-input" value="" autocomplete="off" required>
                            </td>
                            @endforeach

                            <td><textarea name="critical_thinking[]" autocomplete="off" class="required-input" required></textarea></td>
                            <td><textarea name="cognitive_skills[]" autocomplete="off" class="required-input" required></textarea></td>
                            <td><textarea name="life_skills[]" autocomplete="off" class="required-input" required></textarea></td>
                            <td><textarea name="learning_skills[]" autocomplete="off" class="required-input" required></textarea></td>
                            <td><textarea name="social_and_emotional_development[]" autocomplete="off" class="required-input" required></textarea></td>
                            <td>
                                <a class="btn btn-primary btn"
                                    href="{{url('teacher/dashboard/midreport/print') . '/' . $student['id']}}">
                                    View
                                </a>
                            </td>
            
                            <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['id'] }}">
                        </tr>
                        @endforeach
                    </tbody>
                    {{-- <input name="grade_id" type="number" class="form-control d-none" id="grade_id" value="{{ $data['grade']->grade_id }}">    
                    <input name="teacher_id" type="number" class="form-control d-none" id="class_teacher_id" value="{{ $data['classTeacher']->teacher_id }}">    
                    <input name="semester" type="number" class="form-control d-none" id="semester" value="{{ $data['semester'] }}"> --}}
                @endif


            <!-- JIKA DATA SUDAH DI SUBMiT OLEH TEACHER -->
            @elseif ($data['status']->status != null && $data['status']->status == 1)
                <thead>
                    <tr>
                        <th class="text-center" style="vertical-align : middle;text-align:center;width:2%;">S/N</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;width:15%;">First Name</th>
                        
                        @foreach ($data['monthlyActivities'] as $ma)
                            <th class="text-center" style="vertical-align : middle;text-align:center;">{{$ma->name}}</th>
                        @endforeach

                        <th class="text-center" style="vertical-align : middle;text-align:center;">Critical Thinking</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Cognitive Skills</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Life Skills</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Learning Skills</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Social and Emotional Development</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;width:3%;">View</th>
                    </tr>
                </thead>

                <tbody>
                @if(!empty($data['result']))
                    @foreach ($data['result'] as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student['name'] }}</td>
                            @foreach ($student['monthly_activities'] as $ma)
                                <td>{{$ma['score']}}</td>
                            @endforeach
                            <td>{{ $student['critical_thinking'] }}</td>
                            <td>{{ $student['cognitive_skills'] }}</td>
                            <td>{{ $student['life_skills'] }}</td>
                            <td>{{ $student['learning_skills'] }}</td>
                            <td>{{ $student['social_and_emotional_development'] }}</td>



                            @if ($data['status'] !== null)
                                @if (session('role') == "superadmin" || session('role') == "admin")
                                    <td>
                                        <a class="btn btn-primary btn"
                                            href="{{url(session('role') . '/reports/midreport/print') . '/' . $student['student_id']}}">
                                            View
                                        </a>
                                    </td>
                                @elseif (session('role') == "teacher")
                                    <td>
                                        <a class="btn btn-primary btn"
                                            href="{{url('teacher/dashboard/midreport/print') . '/' . $student['student_id']}}">
                                            View
                                        </a>
                                    </td>
                                @endif
                            @endif
                    @endforeach
                @endif   
                
                </tbody>
            @endif

        </table>
        @else
            <p>Empty Data Student !!!</p>
        @endif
    </div>
</div>
@endsection
