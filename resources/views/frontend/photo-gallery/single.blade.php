

@extends('layouts.main')



@section('content')   
<section class="instituteMain aos-init aos-animate" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">
                    <h1 class="instituteMain__body-title">
                    {{$title->title}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><a href="{{ route('press-center') }}">{{trans('Пресс-центр')}}</a></li>
                    <li><a href="{{ route('photo-gallery') }}">{{trans('Фотогалерея')}}</a></li>
                    <li><span> {{$title->title}}</span></li>
                </ul>
            </div>
        </section>
        <section class="PhotoGallerySingle aos-init aos-animate" data-aos="fade-down">
        <div class="_container">
            <div class="popup-gallery PhotoGallerySingle__list">
              
                @foreach($data as $el)
                <div class="PhotoGallerySingle__block">
                <a href="/{{$el}}" class="licensesAndSerf__item-href hoverImgHref">
                            <img src="/{{$el}}" alt="Лицензия" class="licensesAndSerf__item-img hoverImg">
                        </a>
                </div>
                @endforeach
            
              
            </div>
            {{ $data->links() }}
            </div>
        </section>
@endsection

