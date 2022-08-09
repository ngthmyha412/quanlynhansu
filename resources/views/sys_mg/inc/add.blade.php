<h5 class="col-sm-10"></h5>
<form action="{{route($route)}}" method="GET" class="form-group col-sm-2 row" style="
    padding-bottom: 20px;
">
    @csrf()
    <button type="submit" class="btn btn-primary col-sm-12" ><i class="fa fa-plus"></i></button>
</form>