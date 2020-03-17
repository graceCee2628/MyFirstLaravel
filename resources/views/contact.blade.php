@extends('layouts.app')

@section ('content')<!--to put the h1 inside the body tag-->

<h1>Contact</h1>

{!!Form::open(['url'=>'contact/submit'])!!} <!--it'll basically gonna give us an opening and closing tag for the form///  contact/submit -> is the url we wanna submmit to -->
	<div class="form-group">
		{{Form::label('name', 'Name')}}<!--You can use this or use echo -->
		{{Form::text ('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'] )}}

	</div>

	<div class="form-group">
		{{Form::label('email', 'E-Mail Address')}}<!--You can use this or use echo -->
		{{Form::text ('email', '', ['class' => 'form-control', 'placeholder' => 'email@example.com'] )}}

	</div>

	<div class="form-group">
		{{Form::label('message', 'Message')}}<!--You can use this or use echo -->
		{{Form::textarea ('email', '', ['class' => 'form-control', 'placeholder' => 'Write me a message'] )}}

	</div>	
	<div>
		{{Form::submit('Submit', ['class'=>'btn btn-danger'])}}
	</div>
{!!Form::close()!!}
@endsection