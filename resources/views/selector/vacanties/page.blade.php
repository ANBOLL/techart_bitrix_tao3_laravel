@php
    Assets::useFrontendStyle('vacanties');
    Assets::useFrontendScript('vacanties');
@endphp
@extends('~layout')

@section('content')
    <section class="container-title">
        <h1 class="h1-vacanties">{{ $title }}</h1>
    </section>

    @empty($rows)
        @isset($empty_block)
            @include($empty_block)
        @else
            @include('empty-list')
        @endisset
    
    @else
        @if ($numpages>1)
            @include('pager ~ site')
        @endif
        <div class="vacanties-container">
        @foreach($rows as $row)
            {!! $row->render([
                'mode' => $row_mode,
            ]) !!}
        @endforeach
    </div>
        @if ($numpages>1)
            @include('pager ~ site')
        @endif
    @endempty
    
@endsection
