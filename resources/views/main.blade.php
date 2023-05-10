@extends('~layout')

@section('content')
	<h1>Это учебный проект</h1>
	<p>Вы находитесь на главной странице сайта Gfl.ru!!!</p>

	{!! \TAO::frontend()->renderBlock('common/test') !!}
@endsection