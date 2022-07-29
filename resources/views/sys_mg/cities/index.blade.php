@extends('layouts.admin')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-2 center">City Management</h4>
    @component('sys_mg.inc.search',['title' => 'City' , 'route' => 'cities.search'])
    @endcomponent

    <div class="row">
        <!-- Show All Cities List as a Card -->
        <div class="card col-sm-12">
            <div class="card-content">
                <div class="row">
                    <h5 class="col-sm-11">Cities List</h5>
                    <div class="col-sm-1">
                        <a class="btn-floating btn-large waves=effect waves-light red" href="{{route('cities.create')}}">
                            <span class="fa fa-plus-circle fa-2x"></span>
                        </a>
                    </div> 
                    <table class="table col-sm-12">
                        <thead class="grey-text text-darken-1">
                            <tr>
                                <th>ID</th>
                                <th>City Name</th>
                                <th>Zip Code</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody id="item-table">
                            <!-- Check if there are any cities to render in view -->
                            @if($cities->count())
                                @foreach($cities as $city)
                                    <tr>
                                        <td>{{$city->id}}</td>
                                        <td>{{$city->city_name}}</td>
                                        <td>{{$city->zip_code}}</td>
                                        <td>{{$city->created_at}}</td>
                                        <td>{{$city->updated_at}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="{{route('cities.edit',$city->id)}}" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <form onsubmit="return confirm('Do you really want to delete?');" action="{{route('cities.destroy',$city->id)}}" method="POST">
                                                        @csrf()
                                                        <button type="submit" class=""><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <!-- if there are no cities then show this message -->
                                <tr>
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No Cities  found!</h6></td>
                                </tr>
                            @endif
                            @if(isset($search))
                                <tr>
                                    <td colspan="4">
                                        <a href="/cities" class="right">Show All</a>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <!-- Cities Table END -->
                </div>
                <!-- Show Pagination Links -->
                <div class="center">
                  {{$cities->links('vendor.pagination.default',['paginator' => $cities])}}
                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>

@endsection