@extends('templates.layout')
@section('content')
	<div class="col-sm-8">
		<h2>
			Nuevo Producto
		<!--<a href="{{ route('productos.index') }}" class="btn btn-default pull-right">Lista</a>-->
		</h2>
		@include('productos.fragment.error')
		{!! Form::open(['route' => 'productos.store']) !!}
		@include('productos.fragment.form')
		{!! Form::close() !!}
	</div>
	<hr>
	<hr>
	<div class="col-sm-4">
		@include('productos.fragment.aside')
	</div>
@endsection