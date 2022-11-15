@extends('layouts.main')

@section('container')
    <h1>{{ $header }}</h1>
    <a class="text-decoration-none" href="/categories">show all categories</a>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://source.unsplash.com/1200x500" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>This is banner</h5>
                    <p>your ads will show here</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/1200x500" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/1200x500" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </a>
    </div>
    @foreach ($posts as $post)
        <div class="card mt-4 mb-4">
            <div class="card-body">
                <a class="text-decoration-none" href="/post/{{ $post->slug }}">
                    <h2>{{ $post->title }}</h2>
                </a>
                <p>
                    <small>
                        By <a href="/author/{{ $post->user->username }}"
                            class="text-decoration-none">{{ $post->user->name }}</a>
                        in <a href="/categories/{{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a class="text-decoration-none btn btn-primary" href="/post/{{ $post->slug }}">Read more</a>
            </div>
        </div>
    @endforeach
@endsection
