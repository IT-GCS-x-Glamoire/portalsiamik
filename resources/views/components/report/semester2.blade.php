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
            <p class="text-bold">Report Card Semester 2</p>
            {{-- <p class="text-xs">Class Teacher : {{ $data['grade']->teacher_name }}</p>
            <p class="text-xs">Class: {{ $data['grade']->grade_name }} - {{ $data['grade']->grade_class }} </p>
            <p class="text-xs">Date  : {{date('d-m-Y')}}</p> --}}
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
        
        <table class="table table-striped table-bordered bg-white" style=" width: 2200px;">
            @if ($data['status'] == null)
                <!-- JIKA DATA BELUM DI SUBMIT OLEH TEACHER -->
                <thead>
                    <tr>
                        <th colspan="2" style="vertical-align : middle;text-align:center;">Legend</th>
                        <th colspan="11" style="vertical-align : middle;text-align:left;">E – Excellent   G – Good   S – Satisfactory   N – Needs Improvement</th>
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
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Promotion Status</th>
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
                                        <input name="independent_work[]" type="text" class="form-control required-input" id="iw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['independent_work'] }}" onkeyup="validateInput(this)"></td>

                                    <!-- Initiative -->
                                    <td class="text-center">
                                        <input name="initiative[]" type="text" class="form-control required-input" id="in" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['use_of_information'] }}" onkeyup="validateInput(this)"></td>

                                    <!-- Homework_completion -->
                                    <td class="text-center">
                                    <input name="homework_completion[]" type="text" class="form-control required-input" id="hc" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['homework_completion'] }}" onkeyup="validateInput(this)"></td>


                                    <!-- Use_of_information -->
                                    <td class="text-center">
                                    <input name="use_of_information[]" type="text" class="form-control required-input" id="uoi" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['use_of_information'] }}" onkeyup="validateInput(this)"></td>


                                    <!-- Cooperation_with_other -->
                                    <td class="text-center">
                                    <input name="cooperation_with_other[]" type="text" class="form-control required-input" id="cwo" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['cooperation_with_other'] }}" onkeyup="validateInput(this)"></td>


                                    <!-- Conflict_resolution -->
                                    <td class="text-center">
                                    <input name="conflict_resolution[]" type="text" class="form-control required-input" id="cr" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['conflict_resolution'] }}" onkeyup="validateInput(this)"></td>


                                    <!-- Class_participation -->
                                    <td class="text-center">
                                    <input name="class_participation[]" type="text" class="form-control required-input" id="cp" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['class_participation'] }}" onkeyup="validateInput(this)"></td>


                                    <!-- Problem_solving -->
                                    <td class="text-center">
                                    <input name="problem_solving[]" type="text" class="form-control required-input" id="ps" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['problem_solving'] }}" onkeyup="validateInput(this)"></td>


                                    <!-- Goal_setting_to_improve_work -->
                                    <td class="text-center">
                                    <input name="goal_setting_to_improve_work[]" type="text" class="form-control required-input" id="gstiw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="{{ $score['goal_setting_to_improve_work'] }}" onkeyup="validateInput(this)"></td>


                                    <!-- Strengths/weakness/nextstep -->
                                    <td class="text-center">
                                    <input name="strength_weakness_nextstep[]" type="text" class="form-control required-input"  autocomplete="off" value="{{ $score['strength_weakness_nextstep'] }}" required></td>

                                    <td class="text-left text-xs">
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus1" name="status[]" class="form-check-input status-type" type="checkbox" value="1" id="promotion1" {{ $score['promotion_status'] == 1 ? "checked" : "" }}>
                                            <label class="form-check-label" for="present">
                                                Progressing well towards promotion
                                            </label>
                                        </div>
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus2" name="status[]" class="form-check-input status-type" type="checkbox" value="2" id="promotion2" {{ $score['promotion_status'] == 2 ? "checked" : "" }}>
                                            <label class="form-check-label" for="present">
                                                Progressing with some difficulty towards promotion
                                            </label>
                                        </div>
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus3" name="status[]" class="form-check-input status-type" type="checkbox" value="3" id="promotion3" {{ $score['promotion_status'] == 3 ? "checked" : "" }}>
                                            <label class="form-check-label" for="present">
                                                No Promotion
                                            </label>
                                        </div>
                                    </td>
                                @endforeach
                                <input name="student_id[]" type="number" class="form-control required-input d-none" id="student_id" value="{{ $student['student_id'] }}">
                            </tr>
                        @endforeach
                    </tbody>
                    <input name="grade_id" type="number" class="form-control required-input d-none" id="grade_id" value="{{ $data['grade']->grade_id }}">    
                    <input name="teacher_id" type="number" class="form-control required-input d-none" id="class_teacher_id" value="{{ $data['classTeacher']->teacher_id }}">    
                    <input name="semester" type="number" class="form-control required-input d-none" id="semester" value="{{ $data['semester'] }}"> 
                
                <!-- JIKA TEACHER BELUM INPUT NILAI -->
                @else
                    <tbody>
                        @foreach ($data['students'] as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student['name'] }}</td>
        
                                    <!-- Independent_work -->
                                    <td class="text-center">
                                        <input name="independent_work[]" type="text" class="form-control required-input" id="iw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                    <!-- Initiative -->
                                    <td class="text-center">
                                        <input name="initiative[]" type="text" class="form-control required-input" id="in" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                    <!-- Homework_completion -->
                                    <td class="text-center">
                                    <input name="homework_completion[]" type="text" class="form-control required-input" id="hc" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Use_of_information -->
                                    <td class="text-center">
                                    <input name="use_of_information[]" type="text" class="form-control required-input" id="uoi" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Cooperation_with_other -->
                                    <td class="text-center">
                                    <input name="cooperation_with_other[]" type="text" class="form-control required-input" id="cwo" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Conflict_resolution -->
                                    <td class="text-center">
                                    <input name="conflict_resolution[]" type="text" class="form-control required-input" id="cr" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Class_participation -->
                                    <td class="text-center">
                                    <input name="class_participation[]" type="text" class="form-control required-input" id="cp" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                    <!-- Problem_solving -->
                                    <td class="text-center">
                                    <input name="problem_solving[]" type="text" class="form-control required-input" id="ps" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Goal_setting_to_improve_work -->
                                    <td class="text-center">
                                    <input name="goal_setting_to_improve_work[]" type="text" class="form-control required-input" id="gstiw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Strengths/weakness/nextstep -->
                                    <td class="text-center">
                                    <input name="strength_weakness_nextstep[]" type="text" class="form-control required-input"  autocomplete="off" required></td>
        
                                    <td class="text-left text-xs">
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus1" name="status[]" class="form-check-input status-type" type="checkbox" value="1" id="promotion1">
                                            <label class="form-check-label" for="present">
                                                Progressing well towards promotion
                                            </label>
                                        </div>
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus2" name="status[]" class="form-check-input status-type" type="checkbox" value="2" id="promotion2">
                                            <label class="form-check-label" for="present">
                                                Progressing with some difficulty towards promotion
                                            </label>
                                        </div>
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus3" name="status[]" class="form-check-input status-type" type="checkbox" value="3" id="promotion3">
                                            <label class="form-check-label" for="present">
                                                No Promotion
                                            </label>
                                        </div>
                                    </td>
                            
                                    <input name="student_id[]" type="number" class="form-control required-input d-none" id="student_id" value="{{ $student['id'] }}">
                            </tr>
                        @endforeach
                    </tbody>
                    <input name="grade_id" type="number" class="form-control required-input d-none" id="grade_id" value="{{ $data['grade']->grade_id }}">    
                    <input name="teacher_id" type="number" class="form-control required-input d-none" id="class_teacher_id" value="{{ $data['classTeacher']->teacher_id }}">    
                    <input name="semester" type="number" class="form-control required-input d-none" id="semester" value="{{ $data['semester'] }}"> 
                @endif  
            
            <!-- JIKA DATA SUDAH DI SUBMIT OLEH TEACHER -->
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
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Promotion Status</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Print Report Card</th>
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
                                <td class="text-center">{{ strtoupper($score['independent_work']) }}</td>

                                <!-- Initiative -->
                                <td class="text-center">{{ strtoupper($score['initiative']) }}</td>

                                <!-- Homework_completion -->
                                <td class="text-center">{{ strtoupper($score['homework_completion']) }}</td>
            

                                <!-- Use_of_information -->
                                <td class="text-center">{{ strtoupper($score['use_of_information']) }}</td>
            

                                <!-- Cooperation_with_other -->
                                <td class="text-center">{{ strtoupper($score['cooperation_with_other']) }}</td>
            

                                <!-- Conflict_resolution -->
                                <td class="text-center">{{ strtoupper($score['conflict_resolution']) }}</td>
            

                                <!-- Class_participation -->
                                <td class="text-center">{{ strtoupper($score['class_participation']) }}</td>

                                <!-- Problem_solving -->
                                <td class="text-center">{{ strtoupper($score['problem_solving']) }}</td>
            

                                <!-- Goal_setting_to_improve_work -->
                                <td class="text-center">{{ strtoupper($score['goal_setting_to_improve_work']) }}</td>
            

                                <!-- Strengths/weakness/nextstep -->
                                <td class="text-left">{{ $score['strength_weakness_nextstep'] }}</td>

                                <td class="text-left">
                                    @if($score['promotion_status'] === 1)
                                        <span class="badge badge-success">Progressing well towards promotion</span>
                                    @elseif($score['promotion_status'] === 2)
                                        <span class="badge badge-warning">Progressing with some difficulty towards promotion</span>
                                    @elseif($score['promotion_status'] === 3)
                                    <span class="badge badge-danger">No Promotion</span>
                                    @endif
                                </td>

                                @if ($data['status'] !== null)
                                    @if (session('role') == "superadmin" || session('role') == "admin")
                                        <td>
                                            <a class="btn btn-primary btn"
                                                href="{{url(session('role') . '/reports/semester2/print') . '/' . $student['student_id']}}">
                                                Print
                                            </a>
                                        </td>
                                    @elseif (session('role') == "teacher")
                                        <td>
                                            <a class="btn btn-primary btn"
                                                href="{{url('teacher/dashboard/report/semester2/print') . '/' . $student['student_id']}}">
                                                Print
                                            </a>
                                        </td>
                                    @endif
                                @endif
                            @endforeach
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
