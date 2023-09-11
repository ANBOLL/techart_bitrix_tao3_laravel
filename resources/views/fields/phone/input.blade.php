@include("fields.variants")
@foreach($field->variantsWithDefault() as $code => $vdata)
	<input
		type="{{ $field->typeForInput() }}"
		name="{{ $field->name }}{{ $vdata['postfix'] }}"
		class="b-input plugin__input_imaskjs"
		style="{!! trim($field->styleForInput(), ';') !!}{!! ($code=='default'? '' : ';display:none;') !!}"
		value="{!! htmlspecialchars($field->variantValue($code)) !!}"
		{!! $field->renderAttrs() !!}
		required
		placeholder = "+7(123)456-78-90"
	>
@endforeach
