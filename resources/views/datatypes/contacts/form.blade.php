@php
    Assets::useFrontendStyle('feedback');
    Assets::useFrontendScript('feedback');
@endphp
@if ($ajax)
  @include($form->templateAjax($__data))
@endif
<div class="b-feedback">
<form
        id="{{ $form->htmlId($__data) }}"
        class="b-form"
        method="{{ $form->formMethod($__data) }}"
        action="{!! $form->action($__data) !!}"
        enctype="{{ $form->formEnctype($__data) }}">
  @if ($ajax)
    <ul class="ajax-errors"></ul>
  @endif
  {{ csrf_field() }}@if ($protect = $__data['protect']??false){{ protect_field($protect===true? 5 : $protect) }}@endif<input type="hidden" name="_session_key" value="{{ $session_key }}">
  @include($form->templateFields($__data))
  @include($form->templateSubmit($__data), ['settings' => $form->submitButtonSettings()])
</form>
</div>

