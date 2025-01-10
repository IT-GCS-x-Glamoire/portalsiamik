@extends('layouts.admin.master')
@section('content')

<section class="content">
  <div class="container-fluid">

  <div class="row">
    {{-- INFO PARENT --}}
    <div class="col-md-6">
      <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
          <h3 class="widget-user-username text-lg">{{session('name_user')}}</h3>
          <h5 class="widget-user-desc">{{ucwords($data['parent']->relation)}}</h5>
        </div>
        <div class="widget-user-image">
          <img class="img-circle elevation-1" src="{{asset('images/admin.png')}}" alt="User Avatar">
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-sm-12">
              <div class="description-block ">
                <h5 class="description-header">Children</h5>
                @foreach ($data['totalRelation'] as $dtr)
                  {{-- <option value="{{ $dtr->student_id }}" {{ session('studentId') == $dtr->student_id ? "selected" : "" }}> {{ ucwords(strtolower($dtr->student_name)) }}</option> --}}
                  <span class="">{{ucwords(strtolower($dtr->student_name))}} ({{$dtr->grade_name}} - {{$dtr->grade_class}})</span><br>
                @endforeach
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card bg-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa-solid fa-person mr-1"></i>
            Detail Relationship
          </h3>
        </div>

        <div class="pt-3 px-4 px-md-3">
          <select required name="studentId" class="form-control" id="studentId" onchange="saveStudentId()">
            <option value="">-- Your Relation -- </option>
            @foreach ($data['totalRelation'] as $dtr)
              <option value="{{ $dtr->student_id }}" {{ session('studentId') == $dtr->student_id ? "selected" : "" }}> {{ ucwords(strtolower($dtr->student_name)) }}</option>
            @endforeach
          </select>
        </div>

        <div class="card-body">
          <!-- Widget: user widget style 2 -->
          <div class="card card-widget widget-user-2 shadow-xl">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info">
              <div class="widget-user-image">
                @if($data['detailStudent']->gender == "Male")
                  <img class="img-circle elevation-2" src="{{asset('images/user_male.png')}}" alt="User Avatar">
                @elseif ($data['detailStudent']->gender == "Female")
                  <img class="img-circle elevation-2" src="{{asset('images/user_female.png')}}" alt="User Avatar">
                @endif
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{ ucwords(strtolower($data['detailStudent']->student_name)) }}</h3>
              <h5 class="widget-user-desc">{{ $data['detailStudent']->grade_name }} - {{ $data['detailStudent']->grade_class }}</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Total Assessment <span class="float-right badge bg-primary">{{$data['totalExam']}}</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Assessment Completed <span class="float-right badge bg-info">{{$data['examCompleted']}}</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Assessment On Process <span class="float-right badge bg-info">{{$data['examProcess']}}</span>
                  </a>
                </li>
                @foreach($data['eca'] as $de)
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    ECA {{ $loop->index+1 }}<span class="float-right badge bg-success">{{ $de->eca_name }}</span>
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      </div>
    </div>
  </div>
    
  <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $data['totalAbsent'] }}</h3>
            <p>Total Absent Student</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-chalkboard-user"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $data['totalLate'] }}</h3>
            <p>Total Late Student</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-chalkboard-user"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <!-- SUBJECT ACTIVE -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$data['totalSubject']}}
            {{-- <sup style="font-size: 20px">%</sup> --}}
            </h3>

            <p>Total Subject Active</p>
          </div>
          <div class="icon">
            {{-- <i class="ion ion-person-add"></i> --}}
            <i class="fa-solid fa-receipt"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <!-- EXAM ACTIVE -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $data['totalExam']}}</h3>

            <p>Total Assessment</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-pencil"></i>
          </div>
          
          <a href="/parent/dashboard/assessment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
        
      <!-- Custom tabs (Charts with tabs) List Exam-->
      <div class="card bg-danger">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa-solid fa-calendar-xmark mr-1"></i>
              List Assessment
          </h3>
          <!-- card tools -->
          <div class="card-tools">
            <button type="button" class="btn btn-danger btn-sm" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
          <!-- /.card-tools -->
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content p-0">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="revenue-chart"
                  style="position: relative; height: full;">
                  <div>
                    <!-- /.card-header -->
                    <div>
                      <ul class="todo-list bg-danger" data-widget="todo-list">

                      @php
                        $currentDate = date('y-m-d');
                      @endphp 

                      @if (count($data['exam']) !== 0)
                        @foreach ($data['exam'] as $el)
                        <li>
                          <!-- drag handle -->
                          <span class="handle">
                              <i class="fas fa-ellipsis-v"></i>
                              <i class="fas fa-ellipsis-v"></i>
                          </span>
                          <!-- checkbox -->
                          <div class="icheck-primary d-inline ml-2">
                              <span class="text-muted">[{{ date('d F Y', strtotime($el->date_exam)) }}]</span>
                          </div>
                          <!-- todo text -->
                          <span class="text text-sm">( {{$el->type_exam_name}} ) ({{ $el->subject }}) {{$el->name_exam}} </span>

                          <span>
                            @if ($el->is_active)
                              @php
                              $currentDate = now(); // Tanggal saat ini
                              $dateExam = $el->date_exam; // Tanggal ujian dari data

                              // Buat objek DateTime dari tanggal saat ini dan tanggal ujian
                              $currentDateTime = new DateTime($currentDate);
                              $dateExamDateTime = new DateTime($dateExam);

                              // Hitung selisih antara kedua tanggal
                              $interval = $currentDateTime->diff($dateExamDateTime);

                              // Ambil jumlah hari dari selisih tersebut
                              $days = $interval->days;

                              // Jika tanggal ujian lebih kecil dari tanggal saat ini, buat selisih menjadi negatif
                              if ($dateExamDateTime < $currentDateTime) {
                                $days = -$days;
                              } else if ($dateExamDateTime > $currentDateTime && $days == 0) {
                                // Jika tanggal ujian di masa depan dan selisih kurang dari 1 hari, anggap 1 hari
                                $days = 1;
                              }
                              @endphp
                              
                              <span class="badge badge-warning">{{$days}} days again</span>
                            @else
                              <span class="badge badge-success">Done</span>
                            @endif
                          </span>
                          
                          <div class="tools">
                            <a class="btn" id="view" data-id="{{ $el->id }}">
                                <i class="fas fa-search"></i>
                            </a>
                          </div>
                        </li>
                        @endforeach
                      @else
                        <li>Student assessments not available</li>
                      @endif
                      </ul>
                    </div>
                  </div>
              </div>
          </div>
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    
      </section>
      <!-- /.Left col -->

      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-5 connectedSortable">  
        <div class="card bg-warning">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fa-solid fa-receipt mr-1"></i>
              Subjects
            </h3>
            <div class="card-tools">
              <button type="button" class="btn btn-warning btn-sm" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          
          <div class="card-body" style="position: relative; height: 500px; overflow-y: auto;">
            <table class="table table-borderless">      
                @if(sizeof($data['dataStudent']->subject) != 0)
                  <thead>
                    <tr>
                      <th style="width: 10%;">#</th>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data['dataStudent']->subject as $el)
                      <tr>
                        <td scope="row">{{$loop->index+1}}</td>
                        <td>{{$el->name_subject}}</td>
                      </tr>
                    @endforeach  
                @else
                  <p>Subject Grade is empty !!!</p>
                @endif
                </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- right col -->
    </div>
  </div>
</section>

<script>
  function saveStudentId() {
    var studentIdSelect = document.getElementById('studentId');
    var selectedStudentId = studentIdSelect.value;
    
    // Simpan nilai semester ke dalam session
    $.ajax({
        url: '{{ route('save.student.session') }}',
        type: 'POST',
        data: {
          studentId: selectedStudentId,
          _token: '{{ csrf_token() }}'
        },
        success: function(response) {
          console.log('Student ID saved to session:', response.studentId);
          window.location.href = '/parent/dashboard/';
        },
        error: function(xhr, status, error) {
          console.error('Error saving semester to session:', error);
        }
    });
  }
</script>
@endsection
