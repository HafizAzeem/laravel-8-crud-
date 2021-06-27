@extends('category.layout')
@section('content')
    <div class="row pt-5 ">
        <h3> CRUD in laravel use the same form for create and edit - devcaptain.com</h3>
        <div class="col-md-10 jumbotron">
            <a href="{{route('category.create')}}"> <button type="button" class="btn btn-primary mb-5">Add New</button></a>

            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($category as $key=> $item)
                      <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$item->name}}</td>
                        <td><img src="{{asset('images/'.$item->image)}}" width="100px" alt=""></td>
                        <td class=" d-flex justify-content-center align-items-center">
                            <a href = "{{route('category.show', $item->id)}}" class="btn btn-success">
                                View
                             </a>
                            <a href = "{{route('category.edit', $item->id)}}" class="btn btn-primary ml-1">
                               Edit
                            </a>
                            <form action="{{route('category.destroy', $item->id)}}" method="post">
                               @csrf
                               @method('DELETE')
                              <button type="submit"  class="m-1 btn btn-danger">
                                  Delete
                              </button>

                             </form>
                         </td>
                      </tr>
                    @endforeach

                    </tbody>
              </table>
        </div>
    </div>
@endsection
