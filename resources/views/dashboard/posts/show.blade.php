@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-8 my-3">

                <h2>{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a class="btn  bg-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather='edit'></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather='x-circle'></span> Delete</button>
                </form>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3"
                    alt="...">
                <article class="my-3">
                    {!! $post->body !!}
                </article>


                {{-- <a class="text-decoration-none " href="/dashboard/posts">Back to posts</a> --}}
            </div>
        </div>
    </div>
@endsection
