
@extends('Admin.layout');

@section('content')

<div class="container_fluid">
    <h1 class="text-center col-12 bg-primary py-3 text-white my-2"> Add Catogaries </h1>
<div class="row">
    <div class="col-sm-12">
    <div class="container">
      @foreach ($errors->all()  as $message )
        <div class="alert alert-danger" role="alert">
                {{$message}}
        </div>
        @endforeach

     <form action="{{ route('admincoursestore') }}" method="post" enctype="multipart/form-data">
     @csrf()
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Speciality</label>
    <input type="text" name="spec" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Small description</label>
    <input type="text" name="small-desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <textarea type="text" name="desc" cols="30" rows="10" ></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
