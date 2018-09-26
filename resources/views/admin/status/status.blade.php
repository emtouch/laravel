@extends('admin')
@section('title')
	<title>Status</title>
@stop
@section('style')
	<style type="text/css">
	
	</style>
@stop

@section('containTitle')
	<p>Status Title</p>

@stop


@section('contain')
	<table class="table table-border">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Status</th>
			<th>Author</th>
			<th>Created</th>
			<th>Update</th>
			<th>Action</th>
		</tr>
		<tbody id="tbody">
		@foreach($status as $st)
		<tr>

			<td>{{ $st->status_id }}</td>
			<td>{{ $st->status_title }}</td>
			<td>{{ $st->status }}</td>

			<td>{{ $st->status_author }}</td>
			<td>{{ $st->created_at }}</td>
			<td>{{ $st->updated_at }}</td>
			<td></td>
		</tr>
		@endforeach
		</tbody>
	</table>

	<div class="text-center" id="pagination">
		{!! $status->appends(['txtSearch'=> Request::get('txtSearch')])->links() !!}

	</div>
		
	
@stop

@section('script')
	<script type="text/javascript">

	</script>	
@stop