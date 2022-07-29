@extends('layouts.admin')
@section('content')
<div class="container">
    <h4 class="grey-text text-darken-2 center">Division Management</h4>
    
    {{-- Include the searh component with with title and route --}}
    @component('sys_mg.inc.search',['title' => 'Division' , 'route' => 'divisions.search'])
    @endcomponent
    
    <div class="row">
        <!-- Show All Division List as a Card -->
        <div class="card col-sm-12">
            <div class="card-content">
                <div class="row">
                    <h5 class="col-sm-11">Division List</h5>
                    <div class="col-sm-1">
                        <a class="" href="{{route('divisions.create')}}">
                            <i class="fa fa-plus-circle fa-2x"></i>
                        </a>
                    </div>
                    <!-- Table that shows Division List -->
                    <table class="table col-sm-12">
                        <thead class="grey-text text-darken-2">
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
                                            <div class="row">
                                              <div class="col-sm-6">
                                                    <a href="{{route('divisions.edit',$division->id)}}" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <form action="{{route('divisions.destroy',$division->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button type="submit" class="btn btn-floating btn-small waves=effect waves-light red"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
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
                  {{$divisions->links('vendor.pagination.default',['paginator' => $divisions])}}
                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>

@endsection