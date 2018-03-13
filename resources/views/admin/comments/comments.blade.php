{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('poster_id', 'Poster_id:') !!}
			{!! Form::text('poster_id') !!}
		</li>
		<li>
			{!! Form::label('comment', 'Comment:') !!}
			{!! Form::textarea('comment') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}