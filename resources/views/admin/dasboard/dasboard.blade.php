@extends('admin')

@section('title')
	<title>Dasboard</title>
@stop

@section('style')
	<style type="text/css">
	
	</style>
@stop

@section('contain')
	<section class="box">

		<header class="panel_header">
			<h2 class="title pull-left">Dasboad | Admin</h2>
		</header>

		<div class="content-body">
			@if (Auth::guest())
				<p>Guest</p>
			@else
				<p>Login</p>
			@endif
		</div>

	</section>
	
@stop

@section('script')
	<script type="text/javascript">
	

	</script>	
@stop