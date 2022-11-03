@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My Post</h1>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-primary col-lg-8" role="alert">{{ session('success') }}</div>
        @endif
        <div class="table-responsive col-lg-8">
            <a href="/dashboard/posts/create" class="btn btn-primary">Create new post</a>
            <table class="table table-striped table-sm ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td><a href="/dashboard/posts/{{ $post->slug }}"> <span data-feather="eye"
                                        class=""></span></a>
                            <td><a href="/dashboard/posts/{{ $post->slug }}/edit"> <span data-feather="edit"
                                        class="align-text-bottom"></span></a>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                            <td><button class="align-text-bottom border-0"
                                    onclick="return confirm('Yakin mau hapus data?')"> <span data-feather="x-circle"
                                        class="align-text-bottom"></span></button>
                                </form>



                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
