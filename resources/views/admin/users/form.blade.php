<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Full Name') !!}
		
				{!! Form::myInput('text', 'username', 'Username') !!}
		
				{!! Form::myInput('password', 'password', 'Password') !!}
		
				{!! Form::myInput('password', 'password_confirmation', 'Password again') !!}
		
				{!! Form::mySelect('role', 'Role', config('variables.role'), null, ['class' => 'form-control select2']) !!}
		
				{!! Form::myFile('avatar', 'Avatar') !!}
		</div>  
	</div>
</div>