
@extends('Admin.layout');

@section('content')
    <div class="container_fluid">
        <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Catogaries Page</h1>


    <a  class="btn btn-primary" href=" {{route('adminTrainercreate')}} "> Add Catogaries  </a>
    <table class="table">
    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="inner">

                @foreach ($courses as $course)
                     <tr>
                    <th scope="col"> {{$loop->iteration}} </th>
                    <th>
                        <img src="{{asset('uploads/trainers/'.$course->img)}}" height="50px">
                    </th>
                    <th scope="col"> {{$course->name}}</th>
                    <th scope="col"> {{$course->price}}</th>
                    <th scope="col">  <a class="btn btn-danger del" href="{{route('admincoursedestroy',$course->id)}}"> delete </a>   <a class="btn btn-info" href="{{route('admin.course.edit',$course->id)}}" > edit </a>  </th>
                    </tr>
                @endforeach




                </tbody>
            </table>
        </div>

    <!-- Button trigger modal -->




</div>
@endsection
