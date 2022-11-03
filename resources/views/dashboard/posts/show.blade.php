@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h2 class="mb-3">{{ $post->title }}</h2>

            <p>By. <a href="/posts?author={{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a> || <a
                    href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}
                </a>|| {{ $post->author->created_at }}</p>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <td><button class="align-text-bottom border-0" onclick="return confirm('Yakin mau hapus data?')"> <span
                            data-feather="x-circle" class="align-text-bottom"> </span></button>
            </form>
            <td><a href="/dashboard/posts/{{ $post->slug }}/edit"> <span data-feather="edit"
                        class="align-text-bottom"></span></a>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}"
                        class="img-fluid">
                @else
                    <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3">
                    {!! $post->body !!}
                </article>
                <a href="/dashboard/posts" class="text-decoration-none">Back to my Posts</a>
        </div>
    </div>
@endsection
