@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Benvenuto {{ Auth::user()->name }}</h1>
    </div>
    
        <div class="d-flex col-8 justify-content-between m-auto py-4">
            <a href=" {{route('admin.posts.create')}}">Crea post</a>
            <a href=" {{route('admin.posts.create')}}">Visualizza post</a>
            

        </div>
        <div class="mt-5">
            <h3>Post</h3>
            <ul>
                @foreach ($posts as $post)
                    <li>{{ $post->title }} 
                        <a href=" {{route('admin.posts.edit', $post->id)}}">Modifica post</a>
                    </li>
                @endforeach

            </ul>

        </div>
    
</div>
@endsection
