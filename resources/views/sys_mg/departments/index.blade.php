@extends('layouts.admin')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-2 center">Department Management</h4>
    @component('sys_mg.inc.search',['title' => 'Department' , 'route' => 'departments.search'])
    @endcomponent
    
    <div class="row">
        <div class="card col-sm-12">
        <h2 class="col-sm-11" ></h2>
        <div class="col-sm-1">
            <a class="" href="{{route('departments.create')}}">
                <i class="fa fa-plus-circle fa-2x"></i>
            </a>
        </div> 
            <table class="table col-sm-12">
                <thead class="grey-text text-darken-2">
                    <tr>
                        <th>ID</th>
                        <th>Department Name</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody id="dept-table">
                    @if($departments->count())
                        @foreach($departments as $department)
                            <tr>
                                <td>{{$department->id}}</td>
                                <td>{{$department->dept_name}}</td>
                                <td>{{$department->created_at}}</td>
                                <td>{{$department->updated_at}}</td>
                                <td>
                                    <div class="row mb-0">
                                        <div class="col">
                                            <a href="{{route('departments.edit',$department->id)}}" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                        </div>
                                        <div class="col">
                                            <form action="{{route('departments.destroy',$department->id)}}" method="POST">
                                                @csrf()
                                                <button type="submit" class="btn btn-floating btn-small waves=effect waves-light red"><i class="material-icons">delete</i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5"><h6 class="grey-text text-darken-2 center">No Departments found!</h6></td>
                        </tr>
                    @endif
                    @if(isset($search))
                        <tr>
                            <td colspan="3">
                                <a href="/departments" class="right">Show All</a>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="center" id="pagination">
            {{$departments->links('vendor.pagination.default',['paginator' => $departments])}}
        </div>
    </div>
</div>
<div class="row">
    
</div>
    
@endsection