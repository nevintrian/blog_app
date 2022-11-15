@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">

                <h2>{{ $post->title }}</h2>

                <p>By <a href="/blog?user={{ $post->user->username }}"
                        class="text-decoration-none">{{ $post->user->name }}</a> in <a class="text-decoration-none"
                        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                    alt="...">
                <article class="my-3">
                    {!! $post->body !!}
                </article>


                <a class="text-decoration-none " href="/blog">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
