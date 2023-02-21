@extends('layouts.main')

@section('content')
@section('title', 'Create Book')

<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<div class="container">
  <form action="{{route('updateBook', $book->id)}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="tittle" value="{{$book->tittle}}" autofocus required>
    <label for="author">Author</label>
    <input type="text" id="author" name="author" value="{{$book->author}}" required>
    <label for="publisher">Publisher</label>
    <input type="text" id="publisher" name="publisher" value="{{$book->publisher}}" required>
    <label for="release_date">Release Date</label>
    <input type="text" id="release_date" name="release_date" value="{{$book->release_date}}" required>
    <label for="cover">Choose file for cover book:</label><br>
    <input type="file" id="cover" name="cover" value="{{$book->cover}}" required>
    <input type="submit" value="Submit">
  </form>
</div>


@endsection