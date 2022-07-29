@extends('layouts.admin')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-1 center">Manage Employees</h4>
    {{-- Search --}}
    <div class="row">
        <div class="collapsible-body">
            <div class="row">
                <form class="row col-sm-12" action="{{route('employees.search')}}" method="POST">
                    @csrf()
                    <div class="input-field col-sm-7">
                        <input id="search" type="text" name="search" placeholder="Search...">
                        <span class="{{$errors->has('search') ? 'helper-text red-text' : '' }}">{{$errors->has('search') ? $errors->first('search') : '' }}</span>
                    </div>
                    <div class="input-field col-sm-3">
                        <select name="options" id="options">
                            <option value="first_name">First Name</option>
                            <option value="last_name">Last Name</option>
                            <option value="email">Email</option>
                            <option value="address">Address</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-sm-2">
                        <button type="submit" class="">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Search END --}}
    <div class="row card col-sm-12" style="backgroundColor: white;">
    <div class="col-sm-11"></div>
    <div class="col-sm-1">
        <a class="btn-floating btn-large waves=effect waves-light red" href="{{route('employees.create')}}">
            <i class="fa fa-plus-circle fa-2x"></i>
        </a>
    </div> 
        <table class="table table-hover col-sm-12">
            <thead style="background-color: white;">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Division</th>
                    <th>Join Date</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody id="emp-table" style="background-color: white;">
                @if($employees->count())
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>
                            <img class="emp-img" src="{{asset('storage/employee_images/'.$employee->picture)}}">
                            </td>
                            <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                            <td>{{$employee->empDepartment->dept_name}}</td>
                            <td>{{$employee->empDivision->division_name}}</td>
                            <td>{{$employee->join_date}}</td>
                            <td>
                            <a href="{{route('employees.show',$employee->id)}}" class="btn btn-small btn-floating waves=effect waves-light teal lighten-2"><i class="material-icons">list</i></a>
                            </td>
                        </tr>
                    @endforeach
                    @if(isset($search))
                        <tr>
                            <td colspan="4">
                                <a href="/employees" class="right">Show All</a>
                            </td>
                        </tr>
                    @endif
                @else
                    {{-- if there are no employees then show this message --}}
                    <tr>
                        <td colspan="5"><h6 class="grey-text text-darken-2 center">No Employees Found!</h6></td>
                    </tr>
                @endif
            </tbody>
        </table>
        <!-- employees Table END -->
    </div>
    <!-- Show Pagination Links -->
    <div class="center">
        {{$employees->links('vendor.pagination.default',['paginator' => $employees])}}
    </div>
</div>
@endsection