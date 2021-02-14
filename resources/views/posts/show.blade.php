@extends('layouts.layout', ['site_name' => 'Your information'])

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h2>Site name: {{ $post->site_name }}</h2></div>
                <div class="card-phone"><b> Phone number: </b>{{ $post->phone }}</div>
                <div class="card-email"><b> Email: </b>{{ $post->email }}</div>
                <div class="card-descr"><b>Descraption </b>{{ $post->descr }} </div>
                <div class="card-author"><b>Author: </b> <em>{{ $post->name }}</em></div>
                <div class="card-date"><b>Create date: </b>{{ $post->created_at }}</div>
                <div class="card-btn">
                <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Home</a>
               @auth
                    @if(Auth::user()->id ==$post->author_id)
                <a href="{{ route('post.edit',['id'=>$post->post_id]) }}" class="btn btn-outline-success">Edit</a>
                <form action = "{{ route('post.destroy',['id'=>$post->post_id]) }}" method="post"
        onsubmit="if (confirm('Are you shure?'))  { return true } else { return false }">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Delete">
                </form>
                @endif
                @endauth
                </div>

            </div>

        </div>
    </div>


@endsection
