<header class="{{ $block }}">
	{!! \TAO::frontend()->renderBlock('layout/title', ['title' => $app_title,]) !!}
	{!! \TAO::frontend()->renderBlock('layout/menu', ['menu' => $top_menu, 'mod' => 'top',]) !!}
</header>