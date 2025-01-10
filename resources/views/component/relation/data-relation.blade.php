@extends('layouts.admin.master')
@section('content')

   <!-- Content Wrapper. Contains page content -->
    @if (sizeof($data) == 0)

    <div class="row h-100">
        <div class="col-sm-12 my-auto text-center">
            <h3>No Relations Detect!!!</h3>
        </div>
    </div>
    @else
    <div class="card card-dark mt-5">
        <div class="card-header">
            <h3 class="card-title">Relation</h3>

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
                        <th style="width: 3%">
                            No
                        </th>
                        <th>
                            Parent Name
                        </th>
                        <th>
                            Relation
                        </th>
                        <th>
                                Student Relation
                        </th>
                        <th>
                            Nationality
                        </th>
                        <th>
                            Register at
                        </th>
                        <!-- <th style="width: 8%;" class="text-center">
                            Status
                        </th> -->
                        <th style="width: 25%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($data as $el)
                    <tr id="{{'index_teacher_' . $el->id}}">
                        <td>{{$loop->index + 1}}</td>
                        <td>
                            <a>
                            {{$el->name}} {{$el->id}}
                            </a>
                            <br/>
                            <small>
                            @php
                                $birthDate = explode("-", $el->date_birth);

                                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md") 
                                ? ((date("Y")-$birthDate[0])-1):(date("Y")-$birthDate[0]));
                            @endphp
                            {{$age}} years old
                            </small>
                        </td>
                        <td>{{$el->relation}}</td>
                        <td>{{$el->student_name}}</td>
                        <td>{{$el->nationality}}</td>
                        <td>{{date('d/m/Y', strtotime($el->created_at))}}</td>
                        <td class="project-actions text-left toastsDefaultSuccess">
                            <a class="btn btn-primary {{session('role') == 'admin'? 'btn' : 'btn-sm'}}" href="relations/detail/{{$el->id}}">
                            <i class="fas fa-eye">
                            </i>
                            View
                        </a>
                        {{-- <a class="btn btn-info {{session('role') == 'admin'? 'btn' : 'btn-sm'}}" href="relations/edit/{{$el->id}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>  
    @include('components.super.delete-teacher')


    <div class="d-flex justify-content-end">

    <nav aria-label="...">
        <ul class="pagination" max-size="2">
                
                @php
                $link= '/superadmin/relations?';
                $previousLink = $link . '&page='.$data->currentPage()-1;
                $nextLink = $link . '&page='.$data->currentPage()+1;
                $firstLink = $link . '&page=1';
                $lastLink = $link . '&page=' . $data->lastPage();
                
                $arrPagination = [];
                $flag = false;
                
                if($data->lastPage() - 5 > 0){
                    
                    
                    if($data->currentPage()<=4)
                    {
                        for ($i=1; $i <= 5; $i++) { 
                            # code...
                            $temp = (object) [
                                
                                'page' => $i,
                                'link' => $link . '&page=' . $i,
                            ];
                            
                            array_push($arrPagination, $temp);
                        }
                    }
                    
                    else if($data->lastPage() - $data->currentPage() > 2)
                    {
                        $flag = true;
                        $idx = array($data->currentPage()-2,$data->currentPage()-1,$data->currentPage(),$data->currentPage()+1,$data->currentPage()+2);
                        
                        foreach ($idx as $value) {
                            
                            $temp = (object) [
                                
                                'page' => $value,
                                'link' => $link . '&page=' . $value,
                            ];
                            
                            array_push($arrPagination, $temp);
                        }
                        
                    } else {
                        
                        $arrFirst = [];
                        //ini buat yang current page sampai last page
                        
                        for($i=$data->currentPage(); $i<=$data->lastPage(); $i++){

                            $temp = (object) [
                            
                            'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];
                        
                        array_push($arrFirst, $temp);
                    }
                    
                    
                    $arrLast = [];
                        $diff = $data->currentPage() - (5 - sizeof($arrFirst));
                        //ini yang buat current page but decrement
                        

                        for($i=$diff; $i < $data->currentPage(); $i++){

                            $temp = (object) [
                                
                                'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];

                        
                        array_push($arrLast, $temp);
                    }
                    
                    
                    $arrPagination = array_merge($arrLast, $arrFirst);
                    }
                    
                    
                    
                } else {

                    for($i=1; $i<=$data->lastPage(); $i++)
                    {
                        $temp = (object) [
                            
                            'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];

                        array_push($arrPagination, $temp);
                    }
                }
                
                @endphp

            <li class="mr-1 page-item {{$data->previousPageUrl()? '' : 'disabled'}}">
                <a class="page-link" href="{{$firstLink}}" tabindex="+1">
                    << First
                </a>
            </li>

            <li class="page-item {{$data->previousPageUrl()? '' : 'disabled'}}">
                <a class="page-link" href="{{$previousLink}}" tabindex="-1">
                    Previous
                </a>
            </li>

            @foreach ( $arrPagination as $el)
            
            <li class="page-item {{$el->page === $data->currentPage() ? 'active' : ''}}">
                <a class="page-link" href="{{$el->link}}">
                    {{$el->page}}
                </a>
            </li>

            @endforeach
            
            <li class="page-item {{$data->nextPageUrl()? '' : 'disabled'}}">
                <a class="page-link" href="{{$nextLink}}" tabindex="+1">
                    Next
                </a>
            </li>

            <li class="ml-1 page-item {{$data->nextPageUrl()? '' : 'disabled'}}">
                <a class="page-link" href="{{$lastLink}}" tabindex="+1">
                    Last >>
                </a>
            </li>

        </ul>
    </nav>

</div>
    
    @endif

@endsection