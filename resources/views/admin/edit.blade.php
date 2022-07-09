@extends('admin.layout.index')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Job</h1>
                </div>
                <div class="col-lg-8">
                    <form action="/dashboard/{{ $job->id }}" method="post" class="mb-5" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" required autofocus value="{{ old('title', $job->title) }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            @error('body')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="body" type="hidden" name="body"
                                value="{{ old('deskripsi', $job->deskripsi) }}">
                            <trix-editor input="body"></trix-editor>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Job</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('footer')
@endsection
