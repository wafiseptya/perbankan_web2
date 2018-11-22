<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Full Name', array('required' => 'required')) !!}

				{!! Form::myInput('text', 'username', 'Username', array('required' => 'required')) !!}
				@if ($errors->has('username'))
						<span class="form-text text-danger">
								<small>{{ $errors->first('username') }}</small>
						</span>
				@endif
				{!! Form::myInput('password', 'password', 'Password', array('required' => 'required')) !!}
				@if ($errors->has('password'))
						<span class="form-text text-danger">
								<small>{{ $errors->first('password') }}</small>
						</span>
				@endif
				{!! Form::myInput('password', 'password_confirmation', 'Password Confirmation', array('required' => 'required')) !!}
		
				{!! Form::mySelect('role', 'Role', config('variables.role'), null, ['class' => 'form-control select2'], array('required' => 'required')) !!}
				
				{!! Form::myFile('avatar', 'Avatar', array('required' => 'required')) !!}
				@if ($errors->has('avatar'))
						<span class="form-text text-danger">
								<small>{{ $errors->first('avatar') }}</small>
						</span>
				@endif
		</div>  
	</div>
</div>