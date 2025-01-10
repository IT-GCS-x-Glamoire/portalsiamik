@extends('layouts.admin.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">

    @if(count($data) !== 0)
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-white rounded-3 p-3 mb-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Home</li>
                        @if(session('role') == 'admin' || session('role') == 'superadmin')
                        @else
                        <li class="breadcrumb-item"><a href="{{url('/teacher/dashboard/exam/teacher')}}">Scoring</a></li>
                        @endif
                        <li class="breadcrumb-item active" aria-current="page">Scoring {{ $data[0]['exam_name'] }} {{ $data[0]['subject_name'] }} ({{ $data[0]['grade_name'] }} - {{ $data[0]['grade_class'] }})</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Scorings</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Student</th>
                            <th>Type</th>
                            <th>Deadline</th>
                            <th style="width: 50%">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $el)
                        <tr id="{{'index_grade_' . $el->id}}">
                            <td class="text-sm">{{ $loop->index + 1 }}</td>
                            <td class="text-sm">{{ $el->student_name }}</td>
                            <td class="text-sm">{{ $el->type_exam }}</td>
                            <td class="text-sm"><a>{{ \Carbon\Carbon::parse($el->date_exam)->format('l, d F Y') }}</td>
                            <td class="text-sm">
                                {{$el->score}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="card-footer">
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    @else
        <p>Kosong</p>
    @endif
</div>
@endsection
