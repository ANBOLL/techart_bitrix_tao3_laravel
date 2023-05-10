@if ($route && (0 < $route->count()))
<div class="{{ $block }}">
	<a class="{{ $block->elem('item') }}" href="/">Главная</a>
	@foreach ($route->links() as $item)
	::
	<a class="{{ $block->elem('item') }}" href="{{ $item->url }}">{{ $item->title }}</a>
	@endforeach
</div>
@endif