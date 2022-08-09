@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <h4 class="center grey-text text-darken-2 card-title">Add City</h4>
                <div class="card-content">
                    <div class="row">
                        <form class="form-group" action="{{route('cities.store')}}" method="POST">
                            <div class="mb-3 mt-3">
                                <label for="city_name">City Name</label>
                                <input type="text" name="city_name" id="city_name" class="validate form-control" value="{{Request::old('city_name') ? : ''}}">
                                <p class="{{$errors->has('city_name') ? 'alert alert-danger' : '' }}">{{$errors->first('city_name')}}</p>
                            </div>
                            <div class="mb-3">
                                <label for="zip_code">Zip Code</label>
                                <input type="number" name="zip_code" id="zip_code" class="validate form-control" value="{{Request::old('zip_code') ? : ''}}">
                                <p class="{{$errors->has('zip_code') ? 'alert alert-danger' : '' }}">{{$errors->first('zip_code')}}</p>
                            </div>
                            @csrf()
                            <button type="submit" class="mb-3 btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/cities">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection