@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-2 mt-5"></div>
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header text-center">
                    Create 
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="title" placeholder="Title*" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <textarea id="text" placeholder="Text*" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text') }}" required autocomplete="text" autofocus> </textarea>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <a href="/admin/dashboard" class="btn btn-primary float-left"> Back </a>

                        <button type="submit" class="btn btn-success float-right"> Create </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection