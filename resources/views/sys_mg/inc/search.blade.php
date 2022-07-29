<div class="row">
    <div class="collapsible-body">
        <div class="row">
            <form action="{{route($route)}}" method="POST">
                @csrf()
                <div class="input-field col-sm-7">
                    @if(isset($type))
                        <input id="search" type="number" name="search" placeholder="Search...">
                    @else
                        <input id="search" type="text" name="search" placeholder="Search...">
                    @endif
                    <span class="{{$errors->has('search') ? 'helper-text red-text' : '' }}">
                        {{$errors->has('search') ? $errors->first('search') : '' }}
                    </span>
                </div>
                <button type="submit" class="col-sm-3">Search</button>
            </form>
        </div>
    </div>
</div>