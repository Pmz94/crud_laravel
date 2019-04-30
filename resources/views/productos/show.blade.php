@extends('templates.layout')
@section('content')
	<div class="col-sm-8">
		<h2>
			{{ $product->nombre }}
			<a href="{{ route('productos.edit', $product->id) }}" class="btn btn-primary pull-right">
                <span class="icon">
                    <i class="far fa-edit"></i>
                </span>
				<span>Editar</span>
			</a>
		</h2>
		<p>
			{{ $product->short }}
		</p>
		<p>
			{!! $product->body !!}
		</p>
		<div>
			<a href="{{ route('productos.index') }}" class="btn btn-secondary pull-right">
            	<span class="icon">
            	    <i class="fas fa-arrow-left"></i>
            	</span>
				<span>Volver</span>
			</a>
		</div>
	</div>
	<hr>
	<hr>
	<div class="col-sm-4">
		@include('productos.fragment.aside')
	</div>
@endsection