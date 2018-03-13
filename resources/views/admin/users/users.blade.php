{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('number_phone', 'Number_phone:') !!}
			{!! Form::text('number_phone') !!}
		</li>
		<li>
			{!! Form::label('brief', 'Brief:') !!}
			{!! Form::text('brief') !!}
		</li>
		<li>
			{!! Form::label('thumbnail', 'Thumbnail:') !!}
			{!! Form::text('thumbnail') !!}
		</li>
		<li>
			{!! Form::label('awereded', 'Awereded:') !!}
			{!! Form::text('awereded') !!}
		</li>
		<li>
			{!! Form::label('max_poster_allowed', 'Max_poster_allowed:') !!}
			{!! Form::text('max_poster_allowed') !!}
		</li>
		<li>
			{!! Form::label('is_blocked', 'Is_blocked:') !!}
			{!! Form::text('is_blocked') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}