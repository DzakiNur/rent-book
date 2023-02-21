@extends('layouts.main')

@section('content')
@section('title', 'Dashboard')

<h1 class="ms-3 my-4">Halo, Admin {{Auth::User()->username}}</h1>
<div class="row me-1 ms-1 my-2">
    <div class="col-lg-4">
        <div class="card-data book mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-book-half"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-end align-items-end">
                    <div class="card-desc">
                        Books
                    </div>
                    <div class="card-count">
                        {{$book->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-tags-fill"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-end align-items-end">
                    <div class="card-desc">
                        Categories
                    </div>
                    <div class="card-count">
                        5
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-end align-items-end">
                    <div class="card-desc">
                        Users
                    </div>
                    <div class="card-count">
                        {{$user->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection