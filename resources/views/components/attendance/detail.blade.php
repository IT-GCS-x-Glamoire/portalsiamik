@extends('layouts.admin.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Home</li>
                    @if (session('role') == 'superadmin')
                        <li class="breadcrumb-item"><a href="{{url('/superadmin/attendances')}}">Attendances</a></li>
                    @elseif (session('role') == 'admin')
                        <li class="breadcrumb-item"><a href="{{url('/admin/attendances')}}">Attendances</a></li>
                    @elseif (session('role') == 'teacher')
                        <li class="breadcrumb-item"><a href="{{url('/teacher/dashboard/attendance/class/teacher')}}">Attendances</a></li>
                    @endif
                    <li class="breadcrumb-item active" aria-current="page">Detail Attendances</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-bold">Detail Attendance</p>
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
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @if ($data['status'] == null)
                <div class="row my-2">
                    <div class="input-group-append mx-2">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#confirmModal">Submit Score Attendance</button>
                    </div>
                </div>
            @elseif ($data['status']->status != null && $data['status']->status == 1)       
                <div class="row my-2">
                    <div class="input-group-append mx-2">
                        <a  class="btn btn-success">Already Submit in {{ \Carbon\Carbon::parse($data['status']->updated_at)->translatedFormat('l, d F Y') }}</a>
                        @if (session('role') == 'superadmin' || session('role') == 'admin' || session('role') == 'teacher')
                        <a  class="btn btn-warning mx-2" data-toggle="modal" data-target="#modalDecline">Decline Score Attendance</a>
                        @endif
                    </div>
                </div>  
            @endif

            <table class="table table-striped table-bordered bg-white" style="min-width: 100%;">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center" style="vertical-align: middle;">S/N</th>
                        <th rowspan="2" class="text-center" style="vertical-align: middle;">First Name</th>
                        <th colspan="6" class="text-center" style="vertical-align: middle;">Total</th>
                    </tr>
                    <tr>
                        <th class="text-center" style="vertical-align: middle;">P</th>
                        <th class="text-center" style="vertical-align: middle;">A</th>
                        <th class="text-center" style="vertical-align: middle;">S</th>
                        <th class="text-center" style="vertical-align: middle;">L</th>
                        <th class="text-center" style="vertical-align: middle;">PE</th>
                        <th class="text-center" style="vertical-align: middle;">Score</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($data['students']))
                        @foreach ($data['students'] as $student)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $student['student_name'] }}</td>
                
                                <td>{{ $student['total_present'] }}</td>
                                <td>{{ $student['total_alpha'] }}</td>
                                <td>{{ $student['total_sick'] }}</td>
                                <td>{{ $student['total_late'] }}</td>
                                <td>{{ $student['total_pe'] }}</td>
                                <td>
                                    {{ $student['score'] }}
                                    <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="{{ $student['student_id'] }}">
                                    <input name="final_score[]" type="number" class="form-control d-none" id="final_score" value="{{ $student['score'] }}">
                                </td>
    
                            </tr>
                        @endforeach
                    @else
                        <p class="text-center">No data available</p>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @foreach ($data['totalAttendances']['datesByMonth'] as $month => $dates)
        <div class="row">
            <div class="col">
                <div class="card card-dark">
                    <div class="card-header">
                        <h4 class="card-title">{{ $month }}</h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="text-center" style="vertical-align: middle;width:50px">S/N</th>
                                        <th rowspan="2" class="text-center" style="vertical-align: middle;min-width:450px;">First Name</th>
                                        @foreach($dates as $date)
                                            <th class="text-center" style="vertical-align: middle;">{{ $loop->iteration }}</th>
                                        @endforeach
                                        <!-- <th colspan="5" class="text-center" style="vertical-align: middle;">Total</th> -->
                                    </tr>
                                    <tr>
                                        @foreach($dates as $date)
                                            <th class="text-center text-xs" style="vertical-align: middle;">{{ \Carbon\Carbon::parse($date)->format('l, d F Y') }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($data['students']))
                                        @foreach ($data['students'] as $student)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $student['student_name'] }}</td>
                                                @foreach($dates as $date)
                                                    @php
                                                        $attendance = $student['attendances']->firstWhere('attendances_date', $date);
                                                    @endphp
                                                    <td>
                                                        @if($attendance)
                                                            @if($attendance['attendances_present'])
                                                                P
                                                            @else
                                                                @if($attendance['attendances_alpha'])
                                                                    A 
                                                                @elseif($attendance['attendances_sick'])
                                                                    S <small>({{ $attendance['attendances_information'] }})</small>
                                                                @elseif($attendance['attendances_permission'])
                                                                    Pe <small>({{ $attendance['attendances_information'] }})</small>
                                                                @elseif($attendance['attendances_late'])
                                                                    L <small>({{ $attendance['attendances_latest'] }} minute)</small>
                                                                @endif
                                                            @endif
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                @endforeach
                                                <!-- <td>{{ $student['total_present'] }}</td>
                                                <td>{{ $student['total_alpha'] }}</td>
                                                <td>{{ $student['total_sick'] }}</td>
                                                <td>{{ $student['total_pe'] }}</td> -->
                                            </tr>
                                        @endforeach
                                    @else
                                        <p class="text-center">No data available</p>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</div>
@endsection
