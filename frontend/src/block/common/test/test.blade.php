<div class="{{ $block }}">
	<div class="{{ $block->elem('title') }}">Это тест!!!</div>
	<div class="{{ $block->elem('first') }}">Первая строка.</div>
	<div class="{{ $block->elem('second') }}">Вторая строка.</div>
	<div class="{{ $block->elem('test-image') }}" style="background-image: url({{Storage::url('public/image/Group2.png')}});"></div>
	<div class="{{ $block->elem('feedback-contact') }}"><a href="/contact"><p>Задать вопрос</p></a></div>
</div>