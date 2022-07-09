@extends('admin.layouts.main')

@section('header')
    @extends('admin.layouts.navbar')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row my-3">
                    <div class="col-lg-8">
                        <h1 class="mb-3">{{ $job->title }}</h1>
                        <a href="/dashboard/blog/show" class="btn btn-success"><span data-feather="arrow-left"></span>Back to
                            all my jobs</span></a>
                        <a href="/dashboard/blog/{{ $post->slug }}/edit" class="btn btn-warning"><span
                                data-feather="edit"></span>Edit</span></a>
                        <form action="/dashboard/blog/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0"
                                onclick="return confirm('Are you sure you want to delete')"><span
                                    data-feather="x-circle"></span>Delete</button>
                        </form>
                        @if ($post->image)
                            <img src="{{ asset('storage/') . $post->image }}" class="img-fluid"
                                alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/1200x400?programming" alt="{{ $post->category->name }}">
                        @endif
                        <article class="my-3 fs-5">
                            {!! $post->body !!}
                        </article>
                        <p><a href="/dashboard/blog">Back To Post</a></p>
                    </div>
                </div>>
            </main>
        </div>
    </div>
@endsection

@section('footer')
@endsection
