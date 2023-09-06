<div class="{{ $block }}">
    <form method="{{$method}}" action="{{$action}}">
        @csrf
        <div class="{{ $block->elem('form-group') }} {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">Ваше имя:</label>
            {!! $renderer->renderBlock('feedback/input', [
                'name' => 'name',
                'type' => 'text',
                'id' => 'name',
                'placeholder' => 'Андрей']) !!}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="{{ $block->elem('form-group') }} {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="exampleInputPassword1">Задайте вопрос:</label>
            {!! $renderer->renderBlock('feedback/textarea', [
                'name' => 'comment',
                'rows' => '3',
                'id' => 'exampleFormControlTextarea1',
                'placeholder' => 'Почему лето закончилось?']) !!}
            <span class="text-danger">{{ $errors->first('comment') }}</span>
        </div>
        {!! $renderer->renderBlock('feedback/button', ['type' => 'submit']) !!}
    </form>
</div>