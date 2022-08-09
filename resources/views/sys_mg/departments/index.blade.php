@extends('layouts.admin')
@section('content')
<div class="">
    <h4 class="grey-text text-darken-2 center">Department Management</h4>
    @component('sys_mg.inc.search',['title' => 'Department' , 'route' => 'departments.search'])
    @endcomponent
    
    <div class="row" style="width:100%; margin-top:20px;padding: 0 12px;">
        <div class="col-sm-12 row">
            @component('sys_mg.inc.add',['title' => 'Department' , 'route' => 'departments.create'])
            @endcomponent
            <table class="table-bg table col-sm-12">
                <thead class="grey-text text-darken-2">
                    <tr>
                        <th>ID</th>
                        <th>Department Name</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody id="dept-table">
                    @if($departments->count())
                        @foreach($departments as $department)
                            <tr>
                                <td>{{$department->id}}</td>
                                <td>{{$department->dept_name}}</td>
                                <td>{{$department->created_at}}</td>
                                <td>{{$department->updated_at}}</td>
                                <td>
                                    @component('sys_mg.inc.action',['title' => 'Department' , 'route01' => 'departments.edit', 'route02' => 'departments.destroy', 'id' => [$department->id]])
                                    @endcomponent
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5"><h6 class="grey-text text-darken-2 center">No Departments found!</h6></td>
                        </tr>
                    @endif
                    @if(isset($search))
                        <tr>
                            <td colspan="3">
                                <a href="/departments" class="right">Show All</a>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="center" id="pagination">
            {{$departments->render("pagination::bootstrap-5")}}
        </div>
    </div>
</div>
<div class="row">
    
</div>
    
@endsection