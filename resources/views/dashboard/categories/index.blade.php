@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Post Categories</h1>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-primary col-lg-8" role="alert">{{ session('success') }}</div>
        @endif
        <div class="table-responsive col-lg-8">
            <a href="/dashboard/categories/create" class="btn btn-primary">Create new category</a>
            <table class="table table-striped table-sm ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>

                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                          
                            <td><a href="/dashboard/categories/{{ $category->slug }}"> <span data-feather="eye"
                                        class=""></span></a>
                            <td><a href="/dashboard/categories/{{ $category->slug }}/edit"> <span data-feather="edit"
                                        class="align-text-bottom"></span></a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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
