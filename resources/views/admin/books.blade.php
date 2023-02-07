@extends('layouts.main')

@section('content')
@section('title', 'Books')


<div class="col-sm-12 my-4">
    <form action="{{route('addBook')}}">
        <button type="submit" class="btn btn-success">Add+</button>
    </form>
    <table class="table mt-2">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Cover</th>
                <th>Name</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($book as $books)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td><img src="{{("assets/images/cover-book/". $books->cover)}}" style="height:100px; width:90px; object-fit: cover;"></td>
                <td>{{$books->tittle}}</td>
                <td>{{$books->author}}</td>
                <td>{{$books->publisher}}</td>
                <td>{{$books->status}}</td>
                <td>
                    <form action="{{route('deleteBook', $books->id)}}" method="post">
                        @csrf
                        <a href="" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>

@endsection