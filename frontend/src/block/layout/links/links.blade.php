<ul class="{{ $block }}">
@foreach ($links as $link)
	<li class="{{ $block->elem('item') }}">
		<a class="{{ $block->elem('link') }}" href="{{ $link->url }}">{{ $link->title }}</a>
		@if ($sublinks = $link->links())
		{!! \TAO::frontend()->renderBlock('layout/links', ['links' => $sublinks,]) !!}
		@endif
	</li>
@endforeach
</ul>