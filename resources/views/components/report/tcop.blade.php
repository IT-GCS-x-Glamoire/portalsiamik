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
            <li class="breadcrumb-item active" aria-current="page">Detail Certification of Promotion</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-bold">The Certificate of Promotion</p>
            
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
        <table class="table table-striped table-bordered bg-white">
            <thead>
                <tr>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Sem 1</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Sem 2</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Average</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Marks</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Grade</th>
                    <th colspan="1" class="text-center" style="vertical-align : middle;text-align:center;">Promotion</th>
                </tr>

                <tr>
                    <!-- Major Subjects -->
                    <td class="text-center">SM</td>
                    <td class="text-center">SG</td>
                    <td class="text-center">SM</td>
                    <td class="text-center">SG</td>
                    <td class="text-center">(T/F)</td>
                    <!-- END MAJOR SUBJECTS -->
                </tr>
            </thead>

            <tbody>
                @if (!empty($data['students']))
                    @foreach ($data['students'] as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student['student_name'] }}
                            <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">    
                            </td>

                            @php
                                // Initialize variables to store scores for both semesters
                                $semester1Scores = [];
                                $semester2Scores = [];

                                // Separate scores by semester
                                foreach ($student['scores'] as $semester => $scores) {
                                    if ($semester == 1) {
                                        $semester1Scores = $scores;
                                    } elseif ($semester == 2) {
                                        $semester2Scores = $scores;
                                    }
                                }
                            @endphp

                            @foreach (['semester1Scores', 'semester2Scores'] as $semesterScores)
                                @if (!empty($$semesterScores))
                                    @foreach ($$semesterScores as $score)
                                        <td class="text-center">{{ $score['final_score'] }} </td>
                                        <td class="text-center">{{ $score['grades_final_score'] }} </td>
                                    @endforeach
                                @else
                                    <!-- Display empty cells if there are no scores for the semester -->
                                    <td class="text-center">N/A</td>
                                    <td class="text-center">N/A</td>
                                @endif
                            @endforeach

                            <td class="text-center">{{ $student['average_final_score'] }} <input type="number" name="final_score[]" value="{{ $student['average_final_score'] }}" class="d-none"></td>
                            <td class="text-center">{{ $student['marks'] }} <input type="text" name="grades_final_score[]" value="{{ $student['marks'] }}" class="d-none"></td>
                            <td class="text-center">{{ $data['grade']->grade_name }} - {{ $data['grade']->grade_class }}</td>
                            <td class="text-left">
                                @if ( $student['average_final_score'] > 64)
                                    <span class="badge badge-success">
                                        Promote to {{ $data['promote']->name }}-{{ $data['promote']->class }}
                                    </span>
                                @else
                                    <span class="badge badge-danger">
                                        Stay in {{ $data['grade']->grade_name }}-{{ $data['grade']->grade_class }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    {{-- <input name="grade_id" type="number" class="form-control d-none" id="grade_id" value="{{ $data['grade']->grade_id }}">    
                    <input name="class_teacher" type="number" class="form-control d-none" id="class_teacher" value="{{ $data['classTeacher']->teacher_id }}">     --}}
                @else
                    <tr>
                        <td colspan="10" class="text-center text-red">
                            Data empty !!!
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
