@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                    <p>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name ?? 'unknown' }}</a> in <a class="text-decoration-none" href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                    @if ($post->image)
                        <div style="max-height:350px; overflow:hidden;">
                            <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img style="max-height:350px;" class="img-fluid" src="{{ asset('img/default.jpg') }}" alt="{{ $post->category->name }}">
                    @endif

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                    <a class="mt-3 d-block" href="/blog">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection