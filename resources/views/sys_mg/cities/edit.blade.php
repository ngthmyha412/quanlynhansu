@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <h4 class="uppercase-text">Update City</h4>
                <div class="card-content">
                    <div class="row">
                        <form action="{{route('cities.update',$city->id)}}" method="POST">
                            <div class="form-group">
                                <input class="form-control" type="text" name="city_name" id="city_name" value="{{Request::old('city_name') ? : $city->city_name}}">
                                <span class="{{$errors->has('city_name') ? 'helper-text red-text' : ''}}">{{$errors->first('city_name')}}</span>
                            </div>
                            <div class="form-group">
                                <input type="number" name="zip_code" id="zip_code" class="validate form-control" value="{{Request::old('zip_code') ? : $city->zip_code}}">
                                <span class="{{$errors->has('zip_code') ? 'helper-text red-text' : '' }}">{{$errors->first('zip_code')}}</span>
                            </div>
                            @method('POST')
                            @csrf()
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    <div class="card-action">
                        <a href="/cities">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection