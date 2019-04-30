@if(Session::has('info'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ Session::get('info') }}
	</div>
@endif