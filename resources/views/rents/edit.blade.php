<h1>Edit</h1>
@if(Session::has('message'))
 {{ Session::get('message') }}
@endif


@if( $errors->any() )
 @foreach( $errors->all() as $error)
 {{ $error }}
 @endforeach
@endif
<form action="{{ route('rent.update', $rent->id)}}" method="POST">
	{{ method_field('PUT') }}
	{{ csrf_field() }}
	Name
	<input type="text" name="name" value="{{ $rent->name }}">
	<textarea name="info" value="">{{ $rent->info }}</textarea>
	<input type="number" name="available_cars" value="{{ $rent->available_cars }}">

	<select name="city_id">
		@foreach( $cities as $city )
		<option value="{{ $city->id }}">{{ $city->name }}</option>
		@endforeach
	</select>
	<input type="submit" name="submit" value="save">
</form>
