<div class="row">
	<div class="col-12 px-4 py-1">
		
	    <table class="table table-striped table-bordered">
	    	<thead>
	    		<tr class="">
	    			<th>Nombre</th>
	    			<th>Correo</th>
	    			<th>Tel&eacute;fono</th>
	    			<th>Fecha de nacimiento</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    		@forelse($users as $user)
	    		<tr>
	    			<td>{{$user->name}} {{$user->lastname}} {{$user->second_lastname}}</td>
	    			<td>{{$user->email}}</td>
	    			<td>{{$user->telephone}}</td>
	    			<td>{{$user->birthday}}</td>
	    		</tr>
	    		@empty
	    		<tr>
	    			<td colspan="10">No se encontraron registros</td>
	    		</tr>
	    		@endforelse
	    	</tbody>
	    </table>
	</div>
</div>
