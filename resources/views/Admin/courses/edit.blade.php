
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

     <form action="{{ route('admin.trainer.update') }}" method="post" enctype="multipart/form-data">
     @csrf()
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="hidden" name="id" value='{{$trainer->id}}'>
    <input type="text" name="name" class="form-control" value='{{$trainer->name}}' aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">phone</label>
    <input type="text" name="phone"  value='{{$trainer->phone}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Speciality</label>
    <input type="text" name="spec"  value='{{$trainer->spec}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
      <img src="{{asset('uploads/trainers/'.$trainer->img)}}" height="100px">
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">file</label>
    <input type="file" name="img" class="form-control-file" id="exampleInputEmail1" aria-describedby="emailHelp">
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
