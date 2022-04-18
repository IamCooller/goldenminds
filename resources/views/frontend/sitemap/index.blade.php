@extends('layouts.main')



@section('content')
<section class="sitemap" data-aos="fade-down">
            <div class="_container">
                <div class="sitemap__body">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Карта сайта')}}</span></li>
                </ul>
                    <h1 class="sitemap__body-title">
                    {{trans('Карта сайта')}}
                    </h1>
                   
<div id="tree" class="box">
    <div class="tree well">
        <ul>
            <li class="parent_li">
                <span><i class="icon-folder-open"></i>{{trans('АО "Гидропроект"')}}</span>
                <ul>
                    <li class="parent_li"><span><i class="icon-minus-sign"></i>{{trans('Об институте')}}</span>
                        <ul>
                            <li><a href="{{route('mainstream')}}"><span><i class="icon-share-alt"></i>{{trans('Основные направления')}}</span></a></li>
                            <li><a href="{{route('structure')}}"><span><i class="icon-share-alt"></i>{{trans('Структура')}}</span></a></li>
                            <li><a href="{{route('license')}}"><span><i class="icon-share-alt"></i>{{trans('Лицензии')}}</span></a></li>
                            <li><a href="{{route('ISO')}}"><span><i class="icon-share-alt"></i>{{trans('ISO 9001:2015')}}</span></a></li>
                            <li><a href="{{route('history')}}"><span><i class="icon-share-alt"></i>{{trans('История развития института')}}</span></a></li>
                            <li><a href="{{route('guidance')}}"><span><i class="icon-share-alt"></i>{{trans('Руководство')}}</span></a></li>
                            <li><a href="{{route('department')}}"><span><i class="icon-share-alt"></i>{{trans('Отделы')}}</span></a></li>
                            <li><a href="{{route('vacancy')}}"><span><i class="icon-share-alt"></i>{{trans('Вакансии')}}</span></a></li>
                            <li><a href="{{route('regulations')}}"><span><i class="icon-share-alt"></i>{{trans('Нормативно-правовые акты')}}</span></a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('projects')}}"><span><i class="icon-share-alt"></i>{{trans('Проекты')}}</span></a></li>
                    <li class="parent_li"><span><i class="icon-minus-sign"></i>{{trans('Пресс-центр')}}</span>
                        <ul>
                            <li><a href="{{route('press-center')}}"><span><i class="icon-share-alt"></i>{{trans('Новости')}}</span></a></li>
                            <li><a href="{{route('photo-gallery')}}"><span><i class="icon-share-alt"></i>{{trans('Фотогалерея')}}</span></a></li>
                            <li><a href="{{route('video-gallery')}}"><span><i class="icon-share-alt"></i>{{trans('Видеогалерея')}}</span></a></li>
                        </ul>
                    </li>
                    <li class="parent_li"><span><i class="icon-minus-sign"></i>{{trans('Корпоративное управление')}}</span>
                        <ul>
                            <li><a href="{{route('constitutive')}}"><span><i class="icon-share-alt"></i>{{trans('Устав АО')}}</span></a></li>
                            <li><a href="{{route('constitutive')}}"><span><i class="icon-share-alt"></i>{{trans('Внутренние документы')}}</span></a></li>
                            <li><a href="{{route('constitutive')}}"><span><i class="icon-share-alt"></i>{{trans('Раскрытие информации')}}</span></a></li>
                            <li><a href="{{route('constitutive')}}"><span><i class="icon-share-alt"></i>{{trans('Aкционерам')}}</span></a></li>
                            <li><a href="{{route('constitutive')}}"><span><i class="icon-share-alt"></i>{{trans('Бизнес план')}}</span></a></li>
                            <li><a href="{{route('constitutive')}}"><span><i class="icon-share-alt"></i>{{trans('Стратегия развития общества')}}</span></a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('tenders')}}"><span><i class="icon-share-alt"></i>{{trans('Тендеры и объявления')}}</span></a></li>
                    <li class="parent_li"><span><i class="icon-minus-sign"></i>{{trans('Контакты')}}</span>
                        <ul>
                            <li><a href="{{route('contacts')}}"><span><i class="icon-share-alt"></i>{{trans('Контакты')}} </span></a></li>
                            <li><a href="{{route('virtual-reception')}}"><span><i class="icon-share-alt"></i>{{trans('Виртуальная приемная')}}</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</div>
            </div>
</section>
@endsection