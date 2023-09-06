
@extends('~layout')

@php
    Assets::useFrontendStyle('feedback');
    Assets::useFrontendScript('feedback');
@endphp

@section('content')
@if ($errors->any())
	<div class="alert">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
	{!!\TAO::frontend()->renderBlock('feedback/feedback')!!}
@endsection
