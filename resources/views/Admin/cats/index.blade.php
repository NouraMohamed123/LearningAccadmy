
@extends('Admin.layout');

@section('content')
    <div class="container_fluid">
        <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Catogaries Page</h1>


    <a  class="btn btn-primary" href=" {{route('adminCatcreate')}} "> Add Catogaries  </a>
    <table class="table">
    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="inner">

                @foreach ($cats as $cat)
                     <tr>
                    <th scope="col"> {{$loop->iteration}} </th>
                    <th scope="col"> {{$cat->name}}</th>
                    <th scope="col">  <a class="btn btn-danger del" href="{{route('adminCatdestroy',$cat->id)}}"> delete </a>   <a class="btn btn-info" href="{{route('admin.cat.edit',$cat->id)}}" > edit </a>  </th>
                    </tr>
                @endforeach




                </tbody>
            </table>
        </div>

    <!-- Button trigger modal -->




</div>
@endsection
