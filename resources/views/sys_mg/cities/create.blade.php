@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <h4 class="center grey-text text-darken-2 card-title">Add City</h4>
                <div class="card-content">
                    <div class="row">
                        <form class="form-group" action="{{route('cities.store')}}" method="POST">
                            <div class="input-field no-margin">
                                <input type="text" name="city_name" id="city_name" class="validate form-control" value="{{Request::old('city_name') ? : ''}}">
                                <label for="city_name">City Name</label>
                                <span class="{{$errors->has('city_name') ? 'helper-text red-text' : '' }}">{{$errors->first('city_name')}}</span>
                            </div>
                            <div class="input-field">
                                <input type="number" name="zip_code" id="zip_code" class="validate" value="{{Request::old('zip_code') ? : ''}}">
                                <label for="zip_code">Zip Code</label>
                                <span class="{{$errors->has('zip_code') ? 'helper-text red-text' : '' }}">{{$errors->first('zip_code')}}</span>
                            </div>
                            @csrf()
                            <button type="submit" class="btn waves-effect waves-light col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">Add</button>
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