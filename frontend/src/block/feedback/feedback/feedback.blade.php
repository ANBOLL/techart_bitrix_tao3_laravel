<div class="{{ $block }}">
    @if(session('success'))
    <div class="{{ $block->elem('alert') }}">
        <p>{{ session('success') }}</p>
    </div>
    @endif
    {!! $renderer->renderBlock('feedback/form', ['method' => 'POST', 'action' => '/contact']) !!}
</div>