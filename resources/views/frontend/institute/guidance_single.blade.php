

@extends('layouts.main')

@section('title') {{$guidance->title}}  @endsection
@section('description') {{$guidance->description}}  @endsection
@section('keywords') {{$guidance->keywords}}  @endsection

@section('content')   
<section class="guidanceMain SingleMain" data-aos="fade-down">
            <div class="_container">
                <div class="SingleMain__body">

                    <a href="{{ route('guidance') }}" class="SingleMain__back">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5636 7.05425L3.12722 7.05425L6.03338 4.14728C7.63179 2.54847 8.93954 1.20344 8.93954 1.15838C8.93954 1.11331 8.69547 0.834283 8.3972 0.538255L7.85477 -4.43462e-07L3.92735 3.92807L-3.43399e-07 7.85606L3.92735 11.784L7.85477 15.7121L8.3972 15.1739C8.69547 14.8778 8.93954 14.5988 8.93954 14.5537C8.93954 14.5087 7.63179 13.1636 6.03338 11.5648L3.12722 8.65787L10.5636 8.65787L18 8.65787L18 7.85606L18 7.05425L10.5636 7.05425Z" fill="#1E2A5E"/>
                            </svg>
                        <span>{{trans('Назад')}}</span>
                    </a>



                </div>
            </div>
        </section>

        <section class="guidanceSingle" data-aos="fade-down">
            <div class="_container Single_container">
                <div class="guidanceSingle__about">
                    <div class="guidanceSingle__about_photo">
                        <img src="/{{$guidance->image}}" alt="{{$guidance->name}}" class="guidanceSingle__about_photo-img">
                    </div>
                    <div class="guidanceSingle__about_desc">
                        <h1 class="guidanceSingle__about-name">{{$guidance->name}}</h1>
                        <p class="guidanceSingle__about-text">{{$guidance->sketch}}</p>
                    </div>
                </div>
                <div class="guidanceSingle__ref Single__ref">
                {!! $guidance->content !!}
                </div>
            </div>
        </section>
        <section class="guidanceDirections" data-aos="fade-down">
            <div class="_container">
                <div class="guidance__wrapper">
                    <div class="guidance-title">
                    {{trans('Руководство')}}
                    </div>

                    <div class="guidance__list guidanceDirections-gallery">
                        <div class="swiper-wrapper">
                            @foreach($allGuidance as $el)
                            @if($el->name)
                                <div class="guidance__list_block swiper-slide">
                                    <a href="{{ route('guidance-single',['id'=>$el->id]) }}">
                                    <img src="/{{$el->image}}" alt="{{$el->name}}" class="guidance__list_block-img">
                                    <p class="guidance__list_block-name">{{$el->name}}</p>
                                    <span class="guidance__list_block-place">{{$el->rank}}</span>
                                    </a>
                                </div>
                                @endif
                            @endforeach
                          
                        </div>

                    </div>
                    <div class="buttons-slaider__reght reght-buttons">
                        <div class="reght-buttons__button-prev hoverBtn">
                            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="37" cy="37" r="36.5" transform="rotate(-180 37 37)" stroke="#E4E4E4"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.5636 36.1983L31.1272 36.1983L34.0334 33.2913C35.6318 31.6925 36.9395 30.3475 36.9395 30.3024C36.9395 30.2574 36.6955 29.9783 36.3972 29.6823L35.8548 29.144L31.9273 33.0721L28 37.0001L31.9273 40.9281L35.8548 44.8562L36.3972 44.3179C36.6955 44.0219 36.9395 43.7428 36.9395 43.6978C36.9395 43.6527 35.6318 42.3077 34.0334 40.7089L31.1272 37.8019L38.5636 37.8019L46 37.8019L46 37.0001L46 36.1983L38.5636 36.1983Z" fill="#1E2A5E"/>
                               
                                </svg>


                        </div>
                        <div class="reght-buttons__button-next hoverBtn">
                            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="37" cy="37" r="36.5" stroke="#E4E4E4"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.4364 37.8017L42.8728 37.8017L39.9666 40.7087C38.3682 42.3075 37.0605 43.6525 37.0605 43.6976C37.0605 43.7426 37.3045 44.0217 37.6028 44.3177L38.1452 44.856L42.0727 40.9279L46 36.9999L42.0727 33.0719L38.1452 29.1438L37.6028 29.6821C37.3045 29.9781 37.0605 30.2572 37.0605 30.3022C37.0605 30.3473 38.3682 31.6923 39.9666 33.2911L42.8728 36.1981L35.4364 36.1981L28 36.1981L28 36.9999L28 37.8017L35.4364 37.8017Z" fill="#1E2A5E"/>
                               
                                </svg>


                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><a href="{{ route('guidance') }}">{{trans('Руководство')}}</a></li>
                   
                    <li><span>{{$guidance->name}}</span></li>
                </ul>
            </div>
        </section>
@endsection

