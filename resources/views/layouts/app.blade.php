@php
Assets::useFrontendStyle('index');
Assets::useFrontendScript('index');

if (!isset($app_title)) {
	$app_title = config('app.name');
}

$nav = \TAO::navigation();
$top_menu = $nav->links();
$left_menu = ($node = $nav->selectedNode()) ? $node->links() : [];

if (!isset($cur_year)) {
	$cur_year = date('Y');
}
@endphp
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		{!! Assets::meta() !!}
		{!! Assets::styles() !!}
		{!! Assets::scripts() !!}
	</head>
	  
	<body>
		<div class="b-page">
			{!! \TAO::frontend()->renderBlock('layout/header', ['app_title' => $app_title, 'top_menu' => $top_menu,]) !!}
			<main class="b-main">
				{!! \TAO::frontend()->renderBlock('layout/sidebar', ['left_menu' => $left_menu,]) !!}
				<div class="b-content">
					{!! \TAO::frontend()->renderBlock('layout/breadcrumbs', ['route' => $nav->route(),]) !!}
					@yield('content')
				</div>
			</main>
			{!! \TAO::frontend()->renderBlock('layout/footer', ['year' => $cur_year, ]) !!}
		</div>
	</body>
</html>