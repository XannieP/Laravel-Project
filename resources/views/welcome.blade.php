@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 mt-5">

            <table class="table mt-5 text-center">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Information</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($fillings as $fill)
                    <tr>
                      <td>{{ $fill->title }}</td>
                      <td>{{ $fill->text }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
