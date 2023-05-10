@if ($links)
<div class="{{ $block }}">
	<h2>Карта сайта</h2>
	{!! \TAO::frontend()->renderBlock('layout/links', ['links' => $links,]) !!}
</div>
@endif