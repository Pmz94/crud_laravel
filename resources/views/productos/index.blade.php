@extends('templates.layout')
@section('content')
	<div class="col-sm-8">
		<div class="row">
			<div class="col-sm-10">
				<h2 class="pull-left">Lista de Productos</h2>
			</div>
			<div class="col-sm-2">
				<a href="{{ route('productos.create') }}" class="btn btn-primary pull-right">
                    <span class="icon">
                        <i class="fas fa-file"></i>
                    </span>
					<span>Nuevo</span>
				</a>
			</div>
		</div>

		@if( !$products->count() )
			No Tienes Productos
		@else
			@include('productos.fragment.info')
			<table class="table table-hover">
				<thead style="background-color:rgba(0,123,254,0.3);">
					<tr>
						<th width="20px">ID</th>
						<th>Nombre del Producto</th>
						<th align="center" colspan="3">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
						<tr>
							<td>{{ $product->id }}</td>
							<td>
								<strong>{{ $product->nombre }}</strong>
								{{ $product->short }}
							</td>
							<td>
								<a href="{{ route('productos.show', $product->id) }}" class="btn btn-sm btn-info">
                            		<span class="icon">
                            		    <i class="fas fa-eye"></i>
                            		</span>
									<span>Ver</span>
								</a>
							</td>
							<td>
								<a href="{{ route('productos.edit', $product->id) }}" class="btn btn-sm btn-info">
                            		<span class="icon">
                            		    <i class="fas fa-edit"></i>
                            		</span>
									<span>Editar</span>
								</a>
							</td>
							<td>
								<form action="{{ route('productos.destroy', $product->id) }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-sm btn-danger">
                                		<span class="icon">
                                		    <i class="fas fa-trash-alt"></i>
                                		</span>
										<span>Borrar</span>
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $products->render() !!}
		@endif
	</div>
	<hr>
	<div class="col-sm-4">
		@include('productos.fragment.aside')
	</div>
@endsection