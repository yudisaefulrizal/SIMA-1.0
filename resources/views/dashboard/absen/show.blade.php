@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8">

                <article class="my-3">
                    {!! $absen !!}
                </article>
                <a href="/dashboard/posts" class="text-decoration-none">Back to my Posts</a>
        </div>
    </div>
@endsection
