<div class="form-group">
	{!! Form::label('nombre', 'Nombre del Producto') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('short', 'Descripcion breve del Producto') !!}
	{!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Descripcion completa del Producto') !!}
	{!! Form::textarea('body', null, ['style' => 'resize: none;', 'class' => 'form-control']) !!}
</div>

<div class="form-group pull-right">
	{!! Form::button('<span class="icon"><i class="fas fa-check"></i></span><span>Enviar</span>', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}

	<a href="{{ route('productos.index') }}" class="btn btn-danger">
        <span class="icon">
            <i class="fas fa-ban"></i>
        </span>
		<span>Cancelar</span>
	</a>
</div>