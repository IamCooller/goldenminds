

@extends('layouts.main')

@section('title') {{$ISO->title}}  @endsection
@section('description') {{$ISO->description}}  @endsection
@section('keywords') {{$ISO->keywords}}  @endsection


@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

                @include('frontend.institute.submenu')
                    <h1 class="instituteMain__body-title">
                        ISO 9001:2015
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span>ISO 9001:2015</span></li>
                </ul>
            </div>
        </section>

        <section class="ISODesc" data-aos="fade-down">
            <div class="_container">
            {!! $ISO->content !!}
            </div>
        </section>
        <section class="ISOList" data-aos="fade-down">
            <div class="_container">
                <div class="popup-gallery ISOList__wrapper">
                @foreach(json_decode($ISO->images) as $member)
                <div class="ISOList-item">
                        <a href="/{{ $member->url }}"class="hoverImgHref">
                            <img src="/{{ $member->url }}" alt="{{ $member->title }}" class="hoverImg">
                        </a>

                        <p>{{ $member->title }}</p>
                    </div>
            @endforeach
                   
                </div>

            </div>
        </section>
@endsection

