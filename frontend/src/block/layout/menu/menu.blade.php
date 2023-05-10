<div class="{{ $block->mod($mod) }}">
@if (isset($menu) && (0 < count($menu)))
	@foreach ($menu as $item)
	<a class="{{ $block->elem('item')->mod(['current' => $item->isSelected()]) }}" href="{{ $item->url }}">{{ $item->title }}</a>
	@endforeach
@endif
</div>