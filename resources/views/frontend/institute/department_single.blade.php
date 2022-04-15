

@extends('layouts.main')

@section('title') {{$departament->title}}  @endsection
@section('description') {{$departament->description}}  @endsection
@section('keywords') {{$departament->keywords}}  @endsection

@section('content')   
<section class="departamentMain SingleMain" data-aos="fade-down">
            <div class="_container">
                <div class="SingleMain__body">

                    <a href="{{ route('department') }}" class="SingleMain__back">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5636 7.05425L3.12722 7.05425L6.03338 4.14728C7.63179 2.54847 8.93954 1.20344 8.93954 1.15838C8.93954 1.11331 8.69547 0.834283 8.3972 0.538255L7.85477 -4.43462e-07L3.92735 3.92807L-3.43399e-07 7.85606L3.92735 11.784L7.85477 15.7121L8.3972 15.1739C8.69547 14.8778 8.93954 14.5988 8.93954 14.5537C8.93954 14.5087 7.63179 13.1636 6.03338 11.5648L3.12722 8.65787L10.5636 8.65787L18 8.65787L18 7.85606L18 7.05425L10.5636 7.05425Z" fill="#1E2A5E"/>
                            </svg>
                        <span>{{trans('Назад')}}</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="departamentSingle" data-aos="fade-down">
            <div class="_container Single_container">
                <h1 class="Single_container-title">{{$departament->content}}</h1>
                <p class="Single_container-subtitle">{{$departament->subname}}</p>
                <div class="departamentSingle__about">
                    <div class="departamentSingle_photo">
                        <img src="/{{$departament->image}}" alt="{{$departament->content}}" class="departamentSingle_photo-img">
                    </div>

                </div>
                <div class="departamentSingle__ref Single__ref">
                    <div class="departamentSingle__ref-title Single__ref-title">
                    {{trans('Задачи')}}
                    </div>
                    <ul>
                    {!! $departament->task !!}
                    </ul>
                    <div class="departamentSingle__ref-title Single__ref-title">
                    {{trans('Функции')}}
                    </div>
                    <ul>
                    {!! $departament->function !!}
                    </ul>
                </div>
            </div>
        </section>
        <section class="departaments" data-aos="fade-down">
            <div class="_container">
                <div class="departaments__wrapper">
                    <div class="departaments-title">
                    {{trans('Отделы')}}
                    </div>
                    <div class="departament__list departaments__list">
                        <div class="swiper-wrapper">

                              @foreach($allDepartament as $el)
                              @if($el->content)
                                    <div class="departament__list_item swiper-slide">
                                        <a href="{{ route('department-single', ['id'=>$el->id]) }}" class="arrow-hover">
                                            <img src="/{{$el->image}}" alt="{{$el->name}}" class="departament__list_item-img">
                                            <div class="departament__list_item_title">
                                                <p>{{$el->name}}</p>
                                                <svg class="departament__list_item-arrow" width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="37" cy="37" r="36.5" fill="white" stroke="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M36.4616 38.6725L41.7199 33.4142L41.7205 37.5247C41.7208 39.7855 41.7472 41.6613 41.779 41.6931C41.8109 41.725 42.1808 41.7497 42.601 41.7481L43.3652 41.7452L43.3647 36.1905L43.3643 30.636L37.8097 30.6355L32.255 30.635L32.2521 31.3992C32.2505 31.8194 32.2752 32.1893 32.3071 32.2212C32.3389 32.2531 34.2147 32.2794 36.4755 32.2797L40.586 32.2803L35.3277 37.5386L30.0694 42.7969L30.6363 43.3639L31.2033 43.9308L36.4616 38.6725Z" fill="#1E2A5E"/>
                                                    </svg>
                                            </div>
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
                    <li><a href="{{ route('department') }}">{{trans('Отделы')}}</a></li>
                    
                    <li><span>{{$departament->name}}</span></li>
                </ul>
            </div>
        </section>
@endsection

