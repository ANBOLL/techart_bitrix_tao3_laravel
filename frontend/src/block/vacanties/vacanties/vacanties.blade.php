<div class="{{ $block }}">
    @php
    $regex = $item['updated_at'];
    preg_match('(^[0-9]+-[0-9]+-[0-9]+)', $regex, $matches);
    @endphp
    <div class="{{$block->elem('top-date-block')}}">
    <span id="date">{{$matches[0]}}</span>
    <p id="actual-icon" style="background-image: url({{Storage::url('public/image/active.png')}});" title="Вакансия активна"></p>
    </div>
    <a href="/vacanties/{{$item['id']}}/">
        <h2 id="h2-title-block">{{$item['title']}}</h2>
    </a>
    <div>
        <p>Оклад ~ {{$item['salary']}}</p>
    </div>
    <a href="/vacanties/{{$item['id']}}/" id="button">Подробнее</a>
</div>


   {{-- {{dd($item)}} --}}