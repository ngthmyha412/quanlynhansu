@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <div>
                <h4 class="uppercase-text">Update Employee</h4>
                </div>
                <hr>
                <div class="card-content">
                    <form action="{{route('employees.update',$employee->id)}}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="first_name">First Name</label>
                                <input class="form-control" type="text" name="first_name" id="first_name" value="{{old('first_name') ? : $employee->first_name}}">
                                <p class="{{$errors->has('first_name') ? 'text-danger' : ''}}">{{$errors->first('first_name')}}</p>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="last_name">Last Name</label>
                                <input class="form-control" type="text" name="last_name" id="last_name" value="{{old('last_name') ? : $employee->last_name}}">
                                <p class="{{$errors->has('first_name') ? 'text-danger' : ''}}">{{$errors->first('first_name')}}</p>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{old('email') ? : $employee->email}}">
                                <p class="{{$errors->has('email') ? 'text-danger' : ''}}">{{$errors->has('email') ? $errors->first('email') : ''}}</p>
                            </div>
                            <div class="input-field col-sm-3">
                                <label class="form-label capitalize-text" for="age">age</label>
                                <input class="form-control" type="number" name="age" id="age" value="{{old('age') ? : $employee->age}}">
                                <p class="{{$errors->has('age') ? 'text-danger' : ''}}">{{$errors->has('age') ? $errors->first('age') : ''}}</p>
                            </div>
                            <div class="input-field col-sm-3">
                            <label class="form-label capitalize-text" for="phone">Phone</label>
                                <input class="form-control" type="number" name="phone" id="phone" value="{{old('phone') ? : $employee->phone}}">
                                <p class="{{$errors->has('phone') ? 'text-danger' : ''}}">{{$errors->has('phone') ? $errors->first('phone') : ''}}</p>
                            </div>
                            <div class="input-field col-sm-12">
                                <label class="form-label capitalize-text" for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" class="materialize-textarea" >{{Request::old('address') ? : $employee->address}}</textarea>
                                <p class="{{$errors->has('address') ? 'text-danger' : ''}}">{{$errors->has('address') ? $errors->first('address') : ''}}</p>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="gender">gender</label>
                                <select class="form-select" name="gender">
                                    <option value="" disabled>Choose a gender</option>
                                    @foreach($genders as $gender)
                                        <option value="{{$gender->id}}" {{old('gender') ? 'selected' : '' }} {{ $employee->empGender==$gender ? 'selected' : '' }} >{{$gender->gender_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="gender">Salary</label>
                                <select class="form-select" name="salary">
                                    <option value="" disabled>Choose a Salary</option>
                                    @foreach($salaries as $salary)
                                        <option value="{{$salary->id}}" {{old('salary') ? 'selected' : ''}} {{ $employee->empSalary==$salary ? 'selected' : '' }} >${{$salary->s_amount}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="department">department</label>
                                <select class="form-select" name="department">
                                    <option value="" disabled>Choose a department</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}" {{old('department') ? 'selected' : ''}} {{ $employee->empDepartment==$department ? 'selected' : '' }} >{{$department->dept_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="state">state</label>
                                <select class="form-select" name="state">
                                    <option value="" disabled >Choose a State</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}" {{ old('state') ? 'selected' : '' }} {{ $employee->empState==$state ? 'selected' : '' }} >{{$state->state_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="city">city</label>
                                <select class="form-select" name="city">
                                    <option value="" disabled>Choose a City</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}" {{ old('city') ? 'selected' : '' }} {{ $employee->empCity==$city ? 'selected' : '' }} >{{$city->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="country">country</label>
                                <select class="form-select" name="country">
                                    <option value="" disabled >Choose a Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" {{ $employee->empCountry==$country ? 'selected' : '' }}>{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="join_date">date joined</label>
                                <input class="form-control" type="date" name="join_date" id="join_date" value="{{Request::old('join_date') ? : $employee->join_date}}">
                                <p class="{{$errors->has('join_date') ? 'text-danger' : ''}}">{{$errors->has('join_date') ? $errors->first('join_date') : ''}}</p>
                            </div>
                            <div class="input-field col-sm-6">
                                <label class="form-label capitalize-text" for="birth_date">Date of birth</label>
                                <input class="form-control" type="date" name="birth_date" id="birth_date" value="{{Request::old('birth_date') ? : $employee->birth_date}}">
                                <p class="{{$errors->has('birth_date') ? 'text-danger' : ''}}">{{$errors->has('birth_date') ? $errors->first('birth_date') : '' }}</p>
                            </div>
                            <div class="input-field col-sm-6">
                            <label class="form-label capitalize-text" for="division">division</label>
                                <select  class="form-select" name="division">
                                    <option value="" disabled >Choose a Division</option>
                                    @foreach($divisions as $division)
                                        <option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }} {{ $employee->empDivision==$division ? 'selected' : '' }} >{{$division->division_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Picture</label>
                                <br>
                                <div class="row">
                                    <button class="col-sm-3 btn btn-dark" type="button" id="custom-btn">Choose Image</button>
                                    <input class="col-sm-9" id="custom-text" type="text" value="{{old('picture') ? : $employee->picture }}">
                                    <p class="{{$errors->has('picture') ? 'text-danger' : ''}}">{{$errors->has('picture') ? $errors->first('picture') : ''}}</p>
                                </div>
                                <input class="form-control" id="real-file" type="file" name="picture" hidden="hidden" value="{{old('picture') ? : $employee->picture}}">
                            </div>
                        </div>
                        @csrf()
                        <div class="row">
                            <button type="submit" class="btn waves-effect waves-light col s8 offset-s2 m4 offset-m4 l4 offset-l4 xl4 offset-xl4">Update</button>
                        </div>
                    </form>
                </div>
                <div class="card-action">
                    <a href="/employees">Go Back</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var realBtn = document.getElementById("real-file");
        var customBtn = document.getElementById("custom-btn");
        var customText = document.getElementById("custom-text");

        customBtn.addEventListener('click', function() {
            realBtn.click();
        });

        realBtn.addEventListener('change', function() {
            if(realBtn.value){
                customText.value = realBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
            }
        });
    </script>
@endsection