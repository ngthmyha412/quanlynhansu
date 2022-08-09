@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <div>
                <h4>Create New Employee</h4>
                </div>
                <hr>
                <div class="card-content">
                    <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label capitalize-text" for="first_name">First Name</label>
                                <input type="text" name="first_name" class="{{$errors->has('first_name') ? 'border-danger' : ''}} form-control" id="first_name" value="{{Request::old('first_name') ? : ''}}">
                                <p class="{{$errors->has('first_name') ? 'text-danger' : ''}}">{{$errors->first('first_name')}}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label capitalize-text" for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control {{$errors->has('last_name') ? 'border-danger' : ''}} " id="last_name" value="{{Request::old('last_name') ? : ''}}">
                                <p class="{{$errors->has('last_name') ? 'text-danger' : ''}}">{{$errors->first('last_name')}}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label capitalize-text" for="email">Email</label>
                                <input type="email" name="email" class="form-control {{$errors->has('email') ? 'border-danger' : ''}} " id="email" value="{{Request::old('email') ? : ''}}">
                                <p class="{{$errors->has('email') ? 'text-danger' : ''}}">{{$errors->has('email') ? $errors->first('email') : ''}}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label capitalize-text" for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control {{$errors->has('phone') ? 'border-danger' : ''}} " id="phone" value="{{Request::old('phone') ? : ''}}">
                                <p class="{{$errors->has('phone') ? 'text-danger' : ''}}">{{$errors->has('phone') ? $errors->first('phone') : ''}}</p>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label capitalize-text" for="age">age</label>
                                <input type="number" name="age" class="form-control {{$errors->has('age') ? 'border-danger' : ''}} " id="age" value="{{Request::old('age') ? : ''}}">
                                <p class="{{$errors->has('age') ? 'text-danger' : ''}}">{{$errors->has('age') ? $errors->first('age') : ''}}</p>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label capitalize-text" for="join_date">date joined</label>
                                <input type="date" name="join_date" id="join_date" class="form-control {{$errors->has('join_date') ? 'border-danger' : ''}} " value="{{old('join_date') ? : ''}}">
                                <p class="{{$errors->has('join_date') ? 'text-danger' : ''}}">{{$errors->has('join_date') ? $errors->first('join_date') : ''}}</p>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label capitalize-text" for="birth_date">Date of birth</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control {{$errors->has('birth_date') ? 'border-danger' : ''}} " value="{{Request::old('birth_date') ? : ''}}">
                                <p class="{{$errors->has('birth_date') ? 'text-danger' : ''}}">{{$errors->has('birth_date') ? $errors->first('birth_date') : '' }}</p>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label capitalize-text" for="address">Address</label>
                                <textarea name="address" id="address" class="materialize-textarea form-control {{$errors->has('birth_date') ? 'border-danger' : ''}} " >{{Request::old('address') ? : ''}}</textarea>
                                <p class="{{$errors->has('address') ? 'text-danger' : ''}}">{{$errors->has('address') ? $errors->first('address') : ''}}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label capitalize-text" for="gender">gender</label>
                                <select class="form-select {{$errors->has('gender') ? 'border-danger' : ''}} " name="gender" id="gender">
                                    <option value="" disabled {{ old('gender')? '' : 'selected' }}>Choose a gender</option>
                                    @foreach($genders as $gender)
                                        <option value="{{$gender->id}}" {{ old('gender')? 'selected' : '' }}>{{$gender->gender_name}}</option>
                                    @endforeach
                                </select>
                                <p class="{{$errors->has('gender') ? 'text-danger' : ''}}">{{$errors->has('gender') ? $errors->first('gender') : ''}}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label capitalize-text" for="gender">Salary</label>
                                <select class="form-select {{$errors->has('salary') ? 'border-danger' : ''}} " name="salary">
                                    <option value="" disabled {{ old('salary') ? '' : 'selected' }}>Choose a Salary</option>
                                    @foreach($salaries as $salary)
                                        <option value="{{$salary->id}}" {{ old('salary') ? 'selected' : '' }}>${{$salary->s_amount}}</option>
                                    @endforeach
                                </select>
                                <p class="{{$errors->has('salary') ? 'text-danger' : ''}}">{{$errors->has('salary') ? $errors->first('salary') : ''}}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label capitalize-text" for="department">department</label>
                                <select class="form-select {{$errors->has('department') ? 'border-danger' : ''}} " name="department" id="department">
                                    <option value="" disabled {{ old('department') ? '' : 'selected' }}>Choose a department</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}" {{ old('department') ? 'selected' : '' }}>{{$department->dept_name}}</option>
                                    @endforeach
                                </select>
                                <p class="{{$errors->has('department') ? 'text-danger' : ''}}">{{$errors->has('department') ? $errors->first('department') : ''}}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label capitalize-text" for="state">state</label>
                                <select class="form-select {{$errors->has('state') ? 'border-danger' : ''}} " name="state" id="state">
                                    <option value="" disabled {{ old('state') ? '' : 'selected' }} >Choose a State</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}" {{ old('state') ? 'selected' : '' }} >{{$state->state_name}}</option>
                                    @endforeach
                                </select>
                                <p class="{{$errors->has('state') ? 'text-danger' : ''}}">{{$errors->has('state') ? $errors->first('state') : ''}}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label capitalize-text" for="city">city</label>
                                <select class="form-select {{$errors->has('city') ? 'border-danger' : ''}} " name="city" id="city">
                                    <option value="" disabled {{ old('city') ? '' : 'selected' }}>Choose a City</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}" {{ old('city') ? 'selected' : '' }} >{{$city->city_name}}</option>
                                    @endforeach
                                </select>
                                <p class="{{$errors->has('city') ? 'text-danger' : ''}}">{{$errors->has('city') ? $errors->first('city') : ''}}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label capitalize-text" for="country">country</label>
                                <select class="form-select {{$errors->has('country') ? 'border-danger' : ''}} " name="country" id="country">
                                    <option value="" disabled {{ old('country') ? '' : 'selected' }}>Choose a Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" {{ old('country') ? 'selected' : '' }} >{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                                <p class="{{$errors->has('country') ? 'text-danger' : ''}}">{{$errors->has ('country') ? $errors->first('country') : ''}}</p>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label capitalize-text" for="division">division</label>
                                <select class="form-select {{$errors->has('division') ? 'border-danger' : ''}} " name="division" id="division">
                                    <option value="" disabled {{ old('division') ? '' : 'selected' }}>Choose a Division</option>
                                    @foreach($divisions as $division)
                                        <option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }}>{{$division->division_name}}</option>
                                    @endforeach
                                </select>
                                <p class="{{$errors->has('division') ? 'text-danger' : ''}}">{{$errors->has('division') ? $errors->first('division') : ''}}</p>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label capitalize-text" for="form-file">Picture</label>
                                <input class="form-control {{$errors->has('picture') ? 'border-danger' : ''}} " type="file" id="form-file" name="picture" value="{{old('picture') ? : '' }}">
                                <p class="{{$errors->has('picture') ? 'text-danger' : ''}}">{{$errors->has('picture') ? $errors->first('picture') : ''}}</p>
                            </div>
                        </div>
                        @csrf()
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
                <div class="card-action">
                    <a href="/employees">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection