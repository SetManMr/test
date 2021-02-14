@extends('layouts.layout', ['site_name' => 'Edit'])

@section('content')

 <form action="{{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <h3>Edit</h3>

    @include('posts.parts.form')

    <input type="submit" value="Edit" class="btn btn-outline-success">
 </form>
    @endsection
