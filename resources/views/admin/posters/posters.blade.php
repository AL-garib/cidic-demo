{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('city_id', 'City_id:') !!}
			{!! Form::text('city_id') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('category_id', 'Category_id:') !!}
			{!! Form::text('category_id') !!}
		</li>
		<li>
			{!! Form::label('poster_title', 'Poster_title:') !!}
			{!! Form::text('poster_title') !!}
		</li>
		<li>
			{!! Form::label('content', 'Content:') !!}
			{!! Form::textarea('content') !!}
		</li>
		<li>
			{!! Form::label('expired_at', 'Expired_at:') !!}
			{!! Form::text('expired_at') !!}
		</li>
		<li>
			{!! Form::label('is_confimed', 'Is_confimed:') !!}
			{!! Form::text('is_confimed') !!}
		</li>
		<li>
			{!! Form::label('latitude', 'Latitude:') !!}
			{!! Form::text('latitude') !!}
		</li>
		<li>
			{!! Form::label('longitude', 'Longitude:') !!}
			{!! Form::text('longitude') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}