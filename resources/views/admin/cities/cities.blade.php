{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('country_id', 'Country_id:') !!}
			{!! Form::text('country_id') !!}
		</li>
		<li>
			{!! Form::label('city_name', 'City_name:') !!}
			{!! Form::text('city_name') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}