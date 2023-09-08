<div class="{{ $block }}">
    <div class="{{$block->elem('detail-vacanties-block')}}">
        <h1 id="h1-detail">{{$items['title']}}</h1>
    </div>
    <div class="{{$block->elem('container-detail-vacanties')}}">
        <div class="{{$block->elem('left-block-image-vacanties')}}">
            <img src="{{Storage::url($items['image'])}}" alt="picture">    
        </div>
        <div class="{{$block->elem('right-block-image-vacanties')}}">
            <h2 id="h2-detail">Зарплата от {{$items['salary']}}₽</h2>
            <h4 id="h4-detail">Описание вакансии:</h4>
            <p>{{$items['description']}}</p>
            <a href="#form" id="button">Оставить резюме</a>
        </div>
    </div>
    <div class="{{$block->elem('container-detail-vacanties-block')}}">
        <h2 id="h2-detail">Подробнее о вакансии {{$items['title']}}</h2>
        <h4 id="h4-detail">Требования:</h4>
        <p>{{$items['requirements']}}</p>
        <h4 id="h4-detail">Обязанности:</h4>
        <p>{{$items['duties']}}</p>
    </div>
    <div id="form" class="{{$block->elem('container-detail-vacanties-form')}}">
        <h2 id="h2-detail">Оставьте свое резюме!</h2>
        @php $cont = $items['title']; @endphp
        {!! dt('summary')->renderForm(['vacancy' => $cont]) !!}
    </div>
</div>