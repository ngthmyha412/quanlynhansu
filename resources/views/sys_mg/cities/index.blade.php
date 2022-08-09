@extends('layouts.admin')
@section('content')
<div class="card-content">
    <h4 class="list-title uppercase-text">quan ly thanh pho</h4>
    @component('sys_mg.inc.search',['title' => 'City' , 'route' => 'cities.search'])
    @endcomponent

    <div class="row">
        <div class="col-sm-12">
            <div class="card-content">
                <div class="row">
                    @component('sys_mg.inc.add',['title' => 'City' , 'route' => 'cities.create'])
                    @endcomponent
                    <table class="table-bg table col-sm-12">
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
                                            @component('sys_mg.inc.action',['title' => 'City' , 'route01' => 'cities.edit', 'route02' => 'cities.destroy', 'id' => [$city->id]])
                                            @endcomponent
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
                    {{$cities->render("pagination::bootstrap-5")}}
                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>

@endsection