

@extends('layouts.main')



@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

                @include('frontend.institute.submenu')
                    <h1 class="instituteMain__body-title">
                    {{trans('Лицензии и Сертификаты')}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Лицензии и Сертификаты')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="licensesAndSerf" data-aos="fade-down">
            <div class="_container">
                <div class="popup-gallery licensesAndSerf__list">

                @foreach(json_decode($License->image) as $member)
                <div class="licensesAndSerf__item">
                        <a href="/{{ $member->url }}" class="licensesAndSerf__item-href hoverImgHref">
                            <img src="/{{ $member->url }}" alt="{{ $member->title }}" class="licensesAndSerf__item-img hoverImg">
                        </a>

                        <p class="licensesAndSerf__item-desc">{{ $member->title }}</p>
                    </div>
            @endforeach
                   
                </div>
            </div>
        </section>
@endsection

