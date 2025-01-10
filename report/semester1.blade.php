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
              <li class="breadcrumb-item"><a href="{{url('/superadmin/reports')}}">Report Card</a></li>
            @elseif (session('role') == 'admin')
            <li class="breadcrumb-item"><a href="{{url('/admin/reports')}}">Report Card</a></li>
            @elseif (session('role') == 'teacher')
            <li class="breadcrumb-item"><a href="{{url('/teacher/dashboard/report/class/teacher')}}">Reports </a></li>    
            @endif
            <li class="breadcrumb-item active" aria-current="page">Detail Report Card</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-bold">Report Card Semester 1</p>
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
        @if (!empty($data['students']))
        
        <table class="table table-striped table-bordered bg-white" style=" width: 2000px;">
            @if ($data['status'] == null)
                <!-- JIKA DATA BELUM DI SUBMIT OLEH TEACHER  -->
                <thead>
                    <tr>
                        <th colspan="2" style="vertical-align : middle;text-align:center;">Legend</th>
                        <th colspan="10" style="vertical-align : middle;text-align:left;">E – Excellent   G – Good   S – Satisfactory   N – Needs Improvement</th>
                    </tr>
                    <tr>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Independent work</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Initiative</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Homework Completion</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Use of Information</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Cooperation with Others</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Conflict Resolution</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Class Participation</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Problem Solving</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Goal setting to improve work</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center; width:20%;">Strengths/Weeakness/Next Steps</th>
                        <!-- <th class="text-center" style="vertical-align : middle;text-align:center;">Remarks</th> -->
                    </tr>
                </thead>

                <!-- JIKA TEACHER MEMINTA EDIT SETELAH SUBMIT -->
                @if(!empty($data['result']))
                    <tbody>
                        @foreach ($data['result'] as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student['student_name'] }}</td>
                            @foreach ($student['scores'] as $index => $score)
                                <!-- Independent_work -->
                                <td class="text-center">
                                    <input name="independent_work[]" type="text" class="form-control" id="iw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1"  value="{{ $score['independent_work'] }}" onkeyup="validateInput(this)"></td>
        
                                <!-- Initiative -->
                                <td class="text-center">
                                    <input name="initiative[]" type="text" class="form-control" id="in" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['initiative'] }}" onkeyup="validateInput(this)"></td>
        
                                <!-- Homework_completion -->
                                <td class="text-center">
                                <input name="homework_completion[]" type="text" class="form-control" id="hc" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['homework_completion'] }}" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Use_of_information -->
                                <td class="text-center">
                                <input name="use_of_information[]" type="text" class="form-control" id="uoi" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['use_of_information'] }}" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Cooperation_with_other -->
                                <td class="text-center">
                                <input name="cooperation_with_other[]" type="text" class="form-control" id="cwo" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['cooperation_with_other'] }}" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Conflict_resolution -->
                                <td class="text-center">
                                <input name="conflict_resolution[]" type="text" class="form-control" id="cr" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['conflict_resolution'] }}" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Class_participation -->
                                <td class="text-center">
                                <input name="class_participation[]" type="text" class="form-control" id="cp" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['class_participation'] }}" onkeyup="validateInput(this)"></td>
        
                                <!-- Problem_solving -->
                                <td class="text-center">
                                <input name="problem_solving[]" type="text" class="form-control" id="ps" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['problem_solving'] }}" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Goal_setting_to_improve_work -->
                                <td class="text-center">
                                <input name="goal_setting_to_improve_work[]" type="text" class="form-control" id="gstiw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['goal_setting_to_improve_work'] }}" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Strengths/weakness/nextstep -->
                                <td class="text-center">
                                    <textarea name="strength_weakness_nextstep[]" class="form-control" autocomplete="off" required>{{ $score['strength_weakness_nextstep'] }}</textarea>
                                </td>

        
                                <!-- <td class="text-center">
                                <input name="remarks[]" type="text" class="form-control" value="{{ $score['remarks'] }}" autocomplete="off"></td> -->
                            @endforeach                   
                            <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">
                        </tr>
                        @endforeach
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
        
                                <!-- Independent_work -->
                                <td class="text-center">
                                    <input name="independent_work[]" type="text" class="form-control" id="iw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                <!-- Initiative -->
                                <td class="text-center">
                                    <input name="initiative[]" type="text" class="form-control" id="in" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                <!-- Homework_completion -->
                                <td class="text-center">
                                <input name="homework_completion[]" type="text" class="form-control" id="hc" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Use_of_information -->
                                <td class="text-center">
                                <input name="use_of_information[]" type="text" class="form-control" id="uoi" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Cooperation_with_other -->
                                <td class="text-center">
                                <input name="cooperation_with_other[]" type="text" class="form-control" id="cwo" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Conflict_resolution -->
                                <td class="text-center">
                                <input name="conflict_resolution[]" type="text" class="form-control" id="cr" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Class_participation -->
                                <td class="text-center">
                                <input name="class_participation[]" type="text" class="form-control" id="cp" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                <!-- Problem_solving -->
                                <td class="text-center">
                                <input name="problem_solving[]" type="text" class="form-control" id="ps" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Goal_setting_to_improve_work -->
                                <td class="text-center">
                                <input name="goal_setting_to_improve_work[]" type="text" class="form-control" id="gstiw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                <!-- Strengths/weakness/nextstep -->
                                <td class="text-center">
                                    <textarea name="strength_weakness_nextstep[]" type="text" class="form-control"  autocomplete="off" required></textarea>
                                </td>
        
                                <!-- <td class="text-center">
                                <input name="remarks[]" type="text" class="form-control"  autocomplete="off"></td> -->
                        
                                <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['id'] }}">
                        </tr>
                        @endforeach
                    </tbody>
                    <input name="grade_id" type="number" class="form-control d-none" id="grade_id" value="{{ $data['grade']->grade_id }}">    
                    <input name="teacher_id" type="number" class="form-control d-none" id="class_teacher_id" value="{{ $data['classTeacher']->teacher_id }}">    
                    <input name="semester" type="number" class="form-control d-none" id="semester" value="{{ $data['semester'] }}">
                @endif


            <!-- JIKA DATA SUDAH DI SUBMiT OLEH TEACHER -->
            @elseif ($data['status']->status != null && $data['status']->status == 1)
                <thead>
                    <tr>
                        <th colspan="2" style="vertical-align : middle;text-align:center;">Legend</th>
                        <th colspan="12" style="vertical-align : middle;text-align:left;">E – Excellent   G – Good   S – Satisfactory   N – Needs Improvement</th>
                    </tr>
                    <tr>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Independent work</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Initiative</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Homework Completion</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Use of Information</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Cooperation with Others</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Conflict Resolution</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Class Participation</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Problem Solving</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Goal setting to improve work</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Strengths/Weeakness/Next Steps</th>
                        <!-- <th class="text-center" style="vertical-align : middle;text-align:center;">Remarks</th> -->
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($data['result']))
                    @foreach ($data['result'] as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student['student_name'] }}</td>
                            @foreach ($student['scores'] as $index => $score)
                                <!-- Independent Work -->
                                <td class="text-center">{{ $score['independent_work'] }}</td>

                                <!-- Initiative -->
                                <td class="text-center">{{ $score['initiative'] }}</td>

                                <!-- Homework_completion -->
                                <td class="text-center">{{ $score['homework_completion'] }}</td>
            

                                <!-- Use_of_information -->
                                <td class="text-center">{{ $score['use_of_information'] }}</td>
            

                                <!-- Cooperation_with_other -->
                                <td class="text-center">{{ $score['cooperation_with_other'] }}</td>
            

                                <!-- Conflict_resolution -->
                                <td class="text-center">{{ $score['conflict_resolution'] }}</td>
            

                                <!-- Class_participation -->
                                <td class="text-center">{{ $score['class_participation'] }}</td>

                                <!-- Problem_solving -->
                                <td class="text-center">{{ $score['problem_solving'] }}</td>
            

                                <!-- Goal_setting_to_improve_work -->
                                <td class="text-center">{{ $score['goal_setting_to_improve_work'] }}</td>
            

                                <!-- Strengths/weakness/nextstep -->
                                <td class="text-left">{{ $score['strength_weakness_nextstep'] }}</td>

                                <!-- <td class="text-center">{{ $score['remarks'] }}</td> -->

                                @if ($data['status'] !== null)
                                    @if (session('role') == "superadmin" || session('role') == "admin")
                                        <td>
                                            <a class="btn btn-primary btn"
                                                href="{{url(session('role') . '/reports/semester1/print') . '/' . $student['student_id']}}">
                                                Print
                                            </a>
                                        </td>
                                    @elseif (session('role') == "teacher")
                                        <td>
                                            <a class="btn btn-primary btn"
                                                href="{{url('teacher/dashboard/report/semester1/print') . '/' . $student['student_id']}}">
                                                Print
                                            </a>
                                        </td>
                                    @endif
                                @endif
                            @endforeach
                        </tr>
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
