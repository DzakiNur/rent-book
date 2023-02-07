@extends('layouts.main')

@section('content')
@section('title', 'Edit Users')

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
  <form action="{{route('updateUser', $user->id)}}" method="post">
    @csrf
    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="{{$user->username}}">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="{{$user->email}}">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="{{$user->phone}}" maxlength="12">
    <label for="address">Addrees</label>
    <input type="text" id="address" name="address" placeholder="{{$user->address}}">
    <input type="submit" value="Submit">
  </form>
</div>


@endsection