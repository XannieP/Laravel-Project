@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card mt-5">
                <div class="card-header text-center"> Chaging ID: {{ $edit->id }}</div>

                <div class="card-body">
                    <form action="/admin/edit/update/{{ $edit->id }}" method="POST">
                        {{ method_field('PUT') }}
                        @csrf

                        <div class="form-group row">


                            <label class="col-md-12 col-form-label"> Title </label>

                            <div class="col-md-12">
                                <input id="title" name="title" type="text" class="form-control" value="{{ $edit->title }}"  autocomplete="title" autofocus required>
                            </div>

                            <br>
                            <br>

                            <label class="col-md-12 col-form-label mt-5"> Text </label>

                            <div class="col-md-12 mb-5">
                                <textarea id="text" name="text" type="text" class="form-control" value="{{ $edit->text }}"  autocomplete="text" required autofocus> {{ $edit->text }}</textarea> 
                            </div>

                            <br>
                            <br>
                            <br>
                            
                            <div class="col-md-12">
                              <button onclick="return confirm('Weet je zeker dat je dit wil oplsaan?')" type="submit" name="submit" class="btn btn-block btn-success">Save</button>
                            </div>

                            <br>
                            <br>
                            <br>
                            
                            <div class="col-md-12">
                              <a class="btn btn-block btn-primary" href="/admin/dashboard">Back</a>
                            </div>
                         </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
