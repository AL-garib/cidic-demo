{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('english_name', 'English_name:') !!}
			{!! Form::text('english_name') !!}
		</li>
		<li>
			{!! Form::label('arabic_name', 'Arabic_name:') !!}
			{!! Form::text('arabic_name') !!}
		</li>
		<li>
			{!! Form::label('country_code', 'Country_code:') !!}
			{!! Form::text('country_code') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}