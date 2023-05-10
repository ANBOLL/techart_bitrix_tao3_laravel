@extends('~layout')

@section('content')
	<h1>Страница не найдена</h1>
	<p>
		Запрошенная вами страница отсутствует на сайте. Возможно она была удалена или перемещена.
		Попробуйте перейти на <a href="/">главную страницу</a> или воспользуйтесь картой сайта.
	</p>
	{!! \TAO::frontend()->renderBlock('layout/sitemap', ['links' => \TAO::navigation()->links(),]) !!}
@endsection