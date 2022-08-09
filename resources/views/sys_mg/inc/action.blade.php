<div class="row">
    <div class="col-sm-6">
        <a href="{{route($route01,$id)}}" class=""><i class="fa fa-edit"></i></a>
    </div>
    <div class="col-sm-6">
        <form action="{{route($route02,$id)}}" method="POST">
            @csrf()
            <button type="submit" class="" style="background-color:red; color: white; border:none; border-radius: 5px"><i class="fa fa-trash"></i></button>
        </form>
    </div>
</div>