

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
            <div class="PhotoGallerySingle__list">
              
            @foreach(array_reverse(json_decode($data[0])) as $member)
                <div class="PhotoGallerySingle__block">
                <a href="/{{$member->url}}" title="{{ $member->title }}" data-description="{{ $member->desc }}" class="licensesAndSerf__item-href hoverImgHref">
                            <img src="/{{$member->url}}" alt="{{ $member->title }}" class="licensesAndSerf__item-img hoverImg">
                        </a>
                </div>
                @endforeach
            
            
              
            </div>
            {{ $data->links() }}
            </div>
        </section>
        
@endsection

