@extends('category.layout')
@section('content')
    <div class="row pt-5 ">
        <h3> CRUD in laravel use the same form for create and edit - devcaptain.com</h3>
        <div class="col-md-10 jumbotron">
            <a href="{{route('category.create')}}"> <button type="button" class="btn btn-primary mb-5">Add New</button></a>

            <table class="table ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td><img src="{{asset('images/'.$category->image)}}" width="100px" alt=""></td>

                      </tr>


                    </tbody>
              </table>
        </div>
    </div>
@endsection
