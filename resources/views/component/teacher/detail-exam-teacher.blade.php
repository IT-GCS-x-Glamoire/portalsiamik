@extends('layouts.admin.master')
@section('content')
@php
$currentDate = now(); // Tanggal saat ini
$dateExam = $data->date_exam; // Tanggal exam dari data

// Hitung selisih antara tanggal exam dengan tanggal saat ini
$diff = strtotime($dateExam) - strtotime($currentDate);
$days = floor($diff / (60 * 60 * 24)); // Konversi detik ke hari
@endphp

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="{{url('/teacher/dashboard/exam/teacher') }}">Scoring</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Scoring</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Name Scoring</p>
              </div>
              <div class="col-sm-10">
                <p class="text-black mb-0">: {{$data->name_exam}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Type Scoring</p>
              </div>
              <div class="col-sm-10">
                <p class="text-black mb-0">: {{$data->type_exam}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Deadline</p>
              </div>
              <div class="col-sm-10">
                <p class="text-black mb-0">: {{ \Carbon\Carbon::parse($data->date_exam)->format('l, d F Y') }}
                </p>
                @if($data->is_active)
                  <small class="text-muted mb-0">Days until exam:  <span class="badge badge-danger">{{$days}} days</span></small>
                @else
                @endif
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Grade</p>
              </div>
              <div class="col-sm-10">
                <p class="text-black mb-0">: {{$data->grade_name}} - {{$data->grade_class}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Subject</p>
              </div>
              <div class="col-sm-10">
                <p class="text-black mb-0">: {{$data->subject_name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Teacher</p>
              </div>
              <div class="col-sm-10">
                <p class="text-black mb-0">: {{$data->teacher_name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Materi</p>
              </div>
              <div class="col-sm-10">
                <p class="text-black mb-0">: {{$data->materi}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-2">
                <p class="mb-0">Status</p>
              </div>
              <div class="col-sm-10">
                  <p class="text-black mb-0">:
                    @if($data->is_active)
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-danger">Inactive (Scores already inputed)</span>
                    @endif
                  </p>
              </div>
            </div>
            <div class="row flex justify-content-center pt-4">
              <div class="col-md-12">
                <a href="/teacher/dashboard/exam/score/{{ $data->id }}" class="btn btn-success col-12">See Score Student</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<link rel="stylesheet" href="{{asset('template')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<script src="{{asset('template')}}/plugins/sweetalert2/sweetalert2.min.js"></script>

@if(session('after_create_teacher')) 
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Successfully',
      text: 'Successfully registered the teacher in the database !!!',
    });
  </script>
@endif 


@if (session('after_update_teacher'))
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Successfully',
      text: 'Successfully updated the teacher in the database !!!',
    });
  </script>
@endif

@endsection