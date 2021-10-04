@extends('base')
@section('content')
<br><br><br><br><br><br>
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-12 mb-8">
            <div class="mb-1 float-end">
                <a href="{{url('home/create')}}" class="btn btn-primary p-3">
                    Add Book
                </a>
            </div>
                <h1 class="text-blue">LIST OF BOOKS</h1>
                <table class="table table-sm">
                    <thead class="bg-primary text-white" style="font-size: 1.1em;">
                        <th>Author</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach($items as $book)
                        <tr>
                            <td>{{$book->author}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->price}}</td>
                            <td>{{$book->quantity}}</td>
                            <td>
                                <a href="{{ url('home/update/' . $book->id) }}" style="margin-right: 5px;" class="btn btn-primary btn-sm d-inline">
                                    Edit
                                </a>
                                <a href="{{ url('home/delete/' . $book->id) }}" class="btn btn-danger btn-sm" type="submit">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop