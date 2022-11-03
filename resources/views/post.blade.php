@extends('layouts.main')

@section('container')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By. <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> || <a
                        href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}
                    </a>|| {{ $post->author->created_at }}</p>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                            alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3 ">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
