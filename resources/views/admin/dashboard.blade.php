@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 mt-5">
        	<div class="float-right">
        		<a class="btn btn-primary" href="/admin/create"> <i class="fas fa-plus"></i> Create	</a>
        	</div>
			<table class="table mt-5 text-center">
					<thead>
						<tr>
							<th scope="col">Title</th>
							<th scope="col">Information</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($fillings as $fill)
							<tr>
								<td>{{ $fill->title }}</td>
								<td>{{ $fill->text }}</td>
								<td>
									<a href="/admin/edit/{{ $fill->id }}}"> <i class="fas fa-edit icon"></i>	</a>
								</td>
								<td>
									<a href="/admin/delete/{{ $fill->id }}}"> <i class="fas fa-trash icon"></i>	</a>
								</td>
							<tr>
						@endforeach
				</tbody>
			</table>
        </div>
    </div>
</div>

@endsection
