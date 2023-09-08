@extends('~layout')
@php
    Assets::useFrontendStyle('vacanties');
    Assets::useFrontendScript('vacanties');
@endphp
@section('content')
@php
$items = $item[0]->toArray();
@endphp
<div class="b-breadcrumbs">
    <a class="b-breadcrumbs__item" href="/">Главная</a> :: <a class="b-breadcrumbs__item" href="/vacanties/">Вакансии</a> :: <a class="b-breadcrumbs__item" href="/vacanties/{{$items['id']}}/">{{$items['title']}}</a>
</div>
{{-- {{dd($item[0]->toArray())}} --}}

{!! \TAO::frontend()->renderBlock('vacanties/detailvacanties', ['items' => $items]) !!}

@endsection