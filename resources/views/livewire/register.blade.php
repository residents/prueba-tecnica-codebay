<div class="container">
    <form class="row g-3 justify-content-center my-3" autocomplete="off">
    	<div class="col-5 card m-0 p-0 shadow ">
    		<div class="card-header">
	    		<h5 class="card-title">Registro de usuario</h5>
    		</div>
    		<div class="card-body">
	    		<div class="row">
	    			<div class="col-12">
	    				<div class="row">
							<div class="col-md-12">
								<label for="inputName" class="form-label">Nombre</label>
								<input autocomplete="off" type="text" class="form-control" id="inputName" wire:model="data.name">
								@error('data.name')
									<p class="text-sm text-red-600">
				                        <img src="{{asset('svg/alert.svg')}}" class="icon-alert-error" />
										{{ $message }}
									</p>
				                @enderror
							</div>
							<div class="col-md-12">
								<label for="inputLastname" class="form-label">Apellido paterno</label>
								<input autocomplete="off" type="text" class="form-control" id="inputLastname" wire:model="data.lastname">
								@error('data.lastname')
									<p class="text-sm text-red-600">
				                        <img src="{{asset('svg/alert.svg')}}" class="icon-alert-error" />
										{{ $message }}
									</p>
				                @enderror
							</div>
							<div class="col-md-12">
								<label for="inputSecondLastname" class="form-label">Apellido materno</label>
								<input autocomplete="off" type="text" class="form-control" id="inputSecondLastname" wire:model="data.second_lastname">
								@error('data.second_lastname')
									<p class="text-sm text-red-600">
				                        <img src="{{asset('svg/alert.svg')}}" class="icon-alert-error" />
										{{ $message }}
									</p>
				                @enderror
							</div>
							
						</div>
	    			</div>
	    			<div class="col-12">
	    				<div class="row">
	    					<div class="col-md-6">
								<label for="inputBirthday" class="form-label">Fecha de nacimiento</label>
								<input autocomplete="off" type="date" class="form-control" id="inputBirthday" wire:model="data.birthday">
								@error('data.birthday')
									<p class="text-sm text-red-600">
				                        <img src="{{asset('svg/alert.svg')}}" class="icon-alert-error" />
										{{ $message }}
									</p>
				                @enderror
		    				</div>
	    					<div class="col-md-6">
								<label for="inputTelephone" class="form-label">Tel&eacute;fono celular</label>
								<input autocomplete="off" type="text" class="form-control" id="inputTelephone" wire:model="data.telephone">
								@error('data.telephone')
									<p class="text-sm text-red-600">
				                        <img src="{{asset('svg/alert.svg')}}" class="icon-alert-error" />
										{{ $message }}
									</p>
				                @enderror
							</div>
							<div class="col-md-12">
								<label for="inputEmail" class="form-label">Correo electr&oacute;nico</label>
								<input autocomplete="off" type="text" class="form-control" id="inputEmail" wire:model="data.email">
								@error('data.email')
									<p class="text-sm text-red-600">
				                        <img src="{{asset('svg/alert.svg')}}" class="icon-alert-error" />
										{{ $message }}
									</p>
				                @enderror
							</div>
							<div class="col-md-12">
								<label for="inputPassword" class="form-label">Contrase&ntilde;a</label>
								<input autocomplete="off" type="password" class="form-control" id="inputPassword" wire:model="data.password">
								@error('data.password')
									<p class="text-sm text-red-600">
				                        <img src="{{asset('svg/alert.svg')}}" class="icon-alert-error" />
										{{ $message }}
									</p>
				                @enderror
							</div>
							<div class="col-md-12">
								<label for="inputPassword_confirm" class="form-label">Confirmar contrase&ntilde;a</label>
								<input autocomplete="off" type="password" class="form-control" id="inputPassword_confirm" wire:model="data.password_confirmation">
								@error('data.password_confirmation')
									<p class="text-sm text-red-600">
				                        <img src="{{asset('svg/alert.svg')}}" class="icon-alert-error" />
										{{ $message }}
									</p>
				                @enderror
							</div>
	    				</div>
	    			</div>
				</div>
				<div class="col-12 my-4">
					<div class="row justify-content-center">
						<button type="button" class="btn btn-primary col-4" wire:click="save">Registrarse</button>
					</div>
				</div>
			</div>
    	</div>
	</form>
</div>
