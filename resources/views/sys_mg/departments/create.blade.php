@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <h4 class="center grey-text text-darken-2 card-title">Add Department</h4>
                <div class="card-content">
                    <div class="row">
                        <form class="form-group" action="{{route('departments.store')}}" method="POST">
                            <div class="input-field row">
                                <input type="text" name="dept_name" id="dept_name" class="validate form-control" value="{{ Request::old('dept_name') ? : '' }}">
                                <label for="dept_name">Department Name</label>
                                <span class="{{$errors->has('dept_name') ? 'helper-text red-text' : '' }}">{{$errors->first('dept_name')}}</span>
                            </div>
                            @csrf()
                            <div class="row">
                            <button type="submit" class="col-sm-3">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/departments">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection