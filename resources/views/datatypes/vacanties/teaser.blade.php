@if ($item['activity'] == 1)
{!! \TAO::frontend()->renderBlock('vacanties/vacanties', ['item' => $item]) !!}
@endif