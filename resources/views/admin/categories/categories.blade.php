@extends('layouts.main')

@section('content')
@section('title', 'Categories')

<div class="col-sm-12 my-4">
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach($category as $categories)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td>{{$categories->name}}</td>
                <td>
                    <form action="" method="post">
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection