
@extends('Admin.layout');

@section('content')

<div class="container_fluid">
<div class="row">
    <div class="col-sm-12">
    <div class="container">
      @foreach ($errors->all()  as $message )
        <div class="alert alert-danger" role="alert">
                {{$message}}
        </div>
        @endforeach

     <form action="{{ route('admin.cat.update') }}" method="post">
     @csrf()
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="hidden" name="id" value='{{$cat->id}}'>
    <input type="text" name="name" class="form-control" value='{{$cat->name}}' aria-describedby="emailHelp">

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

     </div>

    </div>
</div>

<!-- Button trigger modal -->
















<!-- Button trigger modal -->





<!-- Button trigger modal -->


</div>
</div>
@endsection
