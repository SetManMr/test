@extends('layouts.layout', ['site_name' => 'Create'])

@section('content')

 <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h3>Create site</h3>
    @include('posts.parts.form')

    <input type="submit" value="Create site" class="btn btn-outline-success">
 </form>
    @endsection
