@extends('layouts.admin.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
    <div class="row breadcrumb-container">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-white rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Assessments</li>
                </ol>
            </nav>
        </div>
    </div>

    @if (session('role') == 'student')
    <form class="row align-items-center" action="{{ route('student.dashboard.exam') }}" method="GET">
    @elseif (session('role') == 'parent')
    <form class="row align-items-center" action="{{ route('parent.dashboard.exam') }}" method="GET">
    @endif
        <div class="col-md-3 align-items-center">
            <div class="form-group">
                <label for="subject-select">Sort By :</label>
                <select name="order" class="custom-select form-control-border" id="subject-select" onchange="this.form.submit()">
                    @php
                        $selectedOrder = $form->sort;
                    @endphp
                    <option value="all" {{ $selectedOrder === 'all' ? 'selected' : '' }}>All Subject</option>
                    @foreach ($subjects->subject as $subject)
                        <option value="{{ $subject['id'] }}" {{ $selectedOrder == $subject['id'] ? 'selected' : '' }}>
                            {{ ucwords($subject['name_subject']) }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Assessments</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width:5%;">#</th>
                            <th style="width:10%;">Type</th>
                            <th style="width:20%;">Name</th>
                            <th style="width:10%;">Date</th>
                            <th style="width:15%;">Subject</th>
                            <th style="width:5%;">Score</th>
                            <th style="width:10%;">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($data) !== 0)
                            @foreach ($data as $el)
                            <tr id={{'index_grade_' . $el->id}}>
                                <td>{{ $loop->index + 1 }}</td>
                                <td><a>{{$el->type_exam}}</a></td>
                                <td><a>{{$el->name_exam}}</a></td>
                                <td>
                                    <a>{{$el->date_exam}}</a>
                                    <br>
                                    @php
                                        $currentDate = now();
                                        $dateExam = $el->date_exam;
                                        $currentDateTime = new DateTime($currentDate);
                                        $dateExamDateTime = new DateTime($dateExam);
                                        $interval = $currentDateTime->diff($dateExamDateTime);
                                        $days = $interval->days;
                                        if ($dateExamDateTime < $currentDateTime) {
                                            $days = -$days;
                                        } else if ($dateExamDateTime > $currentDateTime && $days == 0) {
                                            $days = 1;
                                        }
                                    @endphp
                                    @if ($el->is_active)
                                        <span class="badge badge-danger">{{$days}} days again</span>
                                    @endif
                                </td>
                                <td>{{$el->subject_name}}</td>
                                <td>{{$el->score}}</td>
                                <td>
                                    @if ($el->is_active)
                                        <span class="badge badge-danger">On Progress</span>
                                    @else
                                        <span class="badge badge-success"> Done </span>
                                    @endif
                                </td>
                                <td class="project-actions text-left">
                                    <a class="btn btn-primary btn" id="view" data-id="{{ $el->id }}">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9" class="text-center text-red">No Exam</td>    
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- /.card-body -->
    </div>
</div>

{{-- pagination --}}

<div class="d-flex justify-content-end my-5">
    <nav aria-label="...">
        <ul class="pagination" max-size="2">
            
            @php
            $role = session('role');
            $link = "/{$role}/dashboard/assessment?";
            $previousLink = $link . '&page=' . ($data->currentPage() - 1);
            $nextLink = $link . '&page=' . ($data->currentPage() + 1);
            $firstLink = $link . '&page=1';
            $lastLink = $link . '&page=' . $data->lastPage();
            
            $arrPagination = [];
            $flag = false;
            
            if ($data->lastPage() - 5 > 0) {
                if ($data->currentPage() <= 4) {
                    for ($i = 1; $i <= 5; $i++) {
                        $temp = (object) [
                            'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];
                        array_push($arrPagination, $temp);
                    }
                } else if ($data->lastPage() - $data->currentPage() > 2) {
                    $flag = true;
                    $idx = [$data->currentPage() - 2, $data->currentPage() - 1, $data->currentPage(), $data->currentPage() + 1, $data->currentPage() + 2];
                    foreach ($idx as $value) {
                        $temp = (object) [
                            'page' => $value,
                            'link' => $link . '&page=' . $value,
                        ];
                        array_push($arrPagination, $temp);
                    }
                } else {
                    $arrFirst = [];
                    for ($i = $data->currentPage(); $i <= $data->lastPage(); $i++) {
                        $temp = (object) [
                            'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];
                        array_push($arrFirst, $temp);
                    }
                    
                    $arrLast = [];
                    $diff = $data->currentPage() - (5 - sizeof($arrFirst));
                    for ($i = $diff; $i < $data->currentPage(); $i++) {
                        $temp = (object) [
                            'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];
                        array_push($arrLast, $temp);
                    }
                    
                    $arrPagination = array_merge($arrLast, $arrFirst);
                }
            } else {
                for ($i = 1; $i <= $data->lastPage(); $i++) {
                    $temp = (object) [
                        'page' => $i,
                        'link' => $link . '&page=' . $i,
                    ];
                    array_push($arrPagination, $temp);
                }
            }
            @endphp

            <li class="mr-1 page-item {{$data->previousPageUrl() ? '' : 'disabled'}}">
                <a class="page-link" href="{{$firstLink}}" tabindex="+1">
                    First
                </a>
            </li>

            <li class="page-item {{$data->previousPageUrl() ? '' : 'disabled'}}">
                <a class="page-link" href="{{$previousLink}}" tabindex="-1">
                    Previous
                </a>
            </li>

            @foreach ($arrPagination as $el)
            <li class="page-item {{$el->page === $data->currentPage() ? 'active' : ''}}">
                <a class="page-link" href="{{$el->link}}">
                    {{$el->page}}
                </a>
            </li>
            @endforeach

            <li class="page-item {{$data->nextPageUrl() ? '' : 'disabled'}}">
                <a class="page-link" href="{{$nextLink}}" tabindex="+1">
                    Next
                </a>
            </li>

            <li class="ml-1 page-item {{$data->nextPageUrl() ? '' : 'disabled'}}">
                <a class="page-link" href="{{$lastLink}}" tabindex="+1">
                    Last
                </a>
            </li>

        </ul>   
    </nav>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('#view').forEach(function(button) {
         button.addEventListener('click', function() {
               var assessmentId = this.getAttribute('data-id');
               var sessionRole = @json(session('role'));
               var url;
                if (sessionRole === "parent") {
                    url = "{{ route('set.assessment.id') }}";
                } else if (sessionRole === "student") {
                    url = "{{ route('set.assessment.id.student') }}";
                }
               
               $.ajax({
                  url: url,
                  method: 'POST',
                  data: {
                     id: assessmentId,
                     _token: '{{ csrf_token() }}'
                  },
                  success: function(response) {
                     if (response.success) {
                           window.location.href = '/' + sessionRole + '/dashboard/assessment/detail';
                     } else {
                           alert('Failed to set exam ID in session.');
                     }
                  },
                  error: function(xhr, status, error) {
                     alert('Error: ' + error);
                  }
               });
         });
      });
   });
</script>



@endsection
