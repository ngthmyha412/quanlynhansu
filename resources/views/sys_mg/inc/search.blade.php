<div class="row" style="padding-right: 12px;">
    <form action="{{route($route)}}" class="row col-sm-12" method="POST">
        @csrf()
        <div class="col-sm-9">
            @if(isset($type))
                <input id="search" type="number" class="form-control" name="search" placeholder="Search...">
            @else
                <input id="search" type="text" class="form-control" name="search" placeholder="Search...">
            @endif
            <span class="{{$errors->has('search') ? 'helper-text red-text' : '' }}">
                {{$errors->has('search') ? $errors->first('search') : '' }}
            </span>
        </div>
        <button type="submit" class="col-sm-3 btn btn-primary">Search</button>
    </form>
</div>