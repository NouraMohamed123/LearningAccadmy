
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
                    <th scope="col">Phone</th>
                    <th scope="col">Spec</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="inner">

                @foreach ($trainers as $trainer)
                     <tr>
                    <th scope="col"> {{$loop->iteration}} </th>
                    <th>
                        <img src="{{asset('uploads/trainers/'.$trainer->img)}}" height="50px">
                    </th>
                    <th scope="col"> {{$trainer->name}}</th>
                    <th >
                    @if($trainer->phone !== null )
                    {{$trainer->phone}}
                    @else
                    not exist
                    @endif
                     </th>
                    <th scope="col"> {{$trainer->spec}}</th>
                    <th scope="col">  <a class="btn btn-danger del" href="{{route('adminTrainerdestroy',$trainer->id)}}"> delete </a>   <a class="btn btn-info" href="{{route('admin.trainer.edit',$trainer->id)}}" > edit </a>  </th>
                    </tr>
                @endforeach




                </tbody>
            </table>
        </div>

    <!-- Button trigger modal -->




</div>
@endsection
