@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('muhaffizhs.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nama</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($muhaffizhs as $muhaffizh)

				<tr>
					<td>{{ $muhaffizh->id }}</td>
					<td>{{ $muhaffizh->nama }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('muhaffizhs.show', [$muhaffizh->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('muhaffizhs.edit', [$muhaffizh->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['muhaffizhs.destroy', $muhaffizh->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
