@include("fields.variants")
@foreach($field->variantsWithDefault() as $code => $vdata)
	<input
		type="{{ $field->typeForInput() }}"
		name="{{ $field->name }}{{ $vdata['postfix'] }}"
		class="b-input"
		style="{!! trim($field->styleForInput(), ';') !!}{!! ($code=='default'? '' : ';display:none;') !!}"
		value="{!! htmlspecialchars($field->variantValue($code)) !!}"
		{!! $field->renderAttrs() !!}
		required
	>
@endforeach
