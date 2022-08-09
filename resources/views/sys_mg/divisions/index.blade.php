@extends('layouts.admin')
@section('content')
<div class="card-content">
    <h4 class="list-title uppercase-text">quan ly bo phan</h4>
    @component('sys_mg.inc.search',['title' => 'Division' , 'route' => 'divisions.search'])
    @endcomponent

    <div class="row">
        <div class="col-sm-12">
            <div class="card-content">
                <div class="row">
                    @component('sys_mg.inc.add',['title' => 'City' , 'route' => 'divisions.create'])
                    @endcomponent
                    <table class="table-bg table col-sm-12">
                        <thead class="grey-text text-darken-1">
                            <tr>
                                <th>ID</th>
                                <th>Division Name</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Check if there are any division to render in view -->
                            @if($divisions->count())
                                @foreach($divisions as $division)
                                    <tr>
                                        <td>{{$division->id}}</td>
                                        <td>{{$division->division_name}}</td>
                                        <td>{{$division->created_at}}</td>
                                        <td>{{$division->updated_at}}</td>
                                        <td>
                                            @component('sys_mg.inc.action',['title' => 'Divisions' , 'route01' => 'divisions.edit', 'route02' => 'divisions.destroy', 'id' => [$division->id]])
                                            @endcomponent
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <!-- if there are no Divisions then show this message -->
                                <tr>
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No Divisions found yet!</h6></td>
                                </tr>
                            @endif
                            @if(isset($search))
                                <tr>
                                    <td colspan="3">
                                        <a href="/divisions" class="right">Show All</a>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <!-- Divisions Table END -->
                </div>
                <!-- Show Pagination Links -->
                <div class="center">
                  {{$divisions->render("pagination::bootstrap-5")}}
                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>

@endsection