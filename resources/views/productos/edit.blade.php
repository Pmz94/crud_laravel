@extends('templates.layout')
@section('content')
	<div class="col-sm-8">
		<h2>
			Editar Producto
		<!--<a href="{{ route('productos.index') }}" class="btn btn-default pull-right">Lista</a>-->
		</h2>
		@include('productos.fragment.error')
		{!! Form::model($product, ['route' => ['productos.update', $product->id], 'method' => 'PUT']) !!}
		@include('productos.fragment.form')
		{!! Form::close() !!}
	</div>
	<hr>
	<hr>
	<div class="col-sm-4">
		@include('productos.fragment.aside')
	</div>
@endsection