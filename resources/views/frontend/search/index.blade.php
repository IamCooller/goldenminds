

@extends('layouts.main')



@section('content')   
@if((count($news))||(count($regulations)))
<section class="searchMain hrTop" data-aos="fade-down">
            <div class="_container Single_container marginTopZero">
                <div class="searchMain__wrapper">
                    <h1 class="searchMain__wrapper-title">{{trans('Результат поиска по фразе')}} <b>{{$search}}</b></h1>
                    <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>          
                    <li><span> {{trans('Поиск')}}</span></li>
                </ul>
                    @if(count($regulations))
                    <div class="searchMain__wrapper_docs">
                        <div class="searchMain__wrapper_docs-title">{{trans('Документы')}}</div>
                        @foreach($regulations as $el)
                        <div class="searchMain__wrapper_docs_block">
                            <a href="/{{$el->file}}">
                                <div class="searchMain__wrapper_docs_block-title">
                                {{$el->title}}
                                </div>
                                <div class="searchMain__wrapper_docs_block_date"><span>{{trans('Дата регистрации')}}:</span>{{$el->number}}</div>
                            </a>
                        </div>
                        @endforeach
                  
                    </div>
                    @endif
                    @if(count($news))
                    <div class="searchMain__wrapper_news">
                        <div class="searchMain__wrapper_news-title">{{trans('Новости')}}</div>
                        @foreach($news as $el)
                        <div class="searchMain__wrapper_news_block">
                            <a href="{{ route('press-center-single',['id'=>$el->id]) }}">
                                <div class="searchMain__wrapper_news_block_img">
                                    <img src="/{{$el->image}}" alt="news">
                                </div>
                                <div class="searchMain__wrapper_news_block_desc">
                                    <div class="searchMain__wrapper_news_block-title">
                                        {{$el->title}}
                                    </div>
                                    <div class="searchMain__wrapper_news_block-date">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.4925 0C3.3525 0 0 3.36 0 7.5C0 11.64 3.3525 15 7.4925 15C11.64 15 15 11.64 15 7.5C15 3.36 11.64 0 7.4925 0ZM7.5 13.5C4.185 13.5 1.5 10.815 1.5 7.5C1.5 4.185 4.185 1.5 7.5 1.5C10.815 1.5 13.5 4.185 13.5 7.5C13.5 10.815 10.815 13.5 7.5 13.5ZM7.875 3.75H6.75V8.25L10.6875 10.6125L11.25 9.69L7.875 7.6875V3.75Z" fill="#263475"/>
                                        </svg> {{$el->created_at->format('d.m.Y')}}
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </section>
@endif
        @if((count($news)==0)&&(count($regulations)==0))
        <section class="searchMain hrTop" data-aos="fade-down">
            <div class="_container Single_container marginTopZero">
                <div class="searchMain__wrapper">
                    <h1 class="searchMain__wrapper-title text-center">{{trans('Результат поиска по фразе')}} <b>“{{$search}}”</b></h1>
                    <div class="searchMain__none">
                        <svg width="86" height="112" viewBox="0 0 86 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H72L86 15V112H0V0Z" fill="#D5E0E2"/>
                            <circle cx="45" cy="56" r="22" fill="white"/>
                            <path d="M69 3L82 16H69V3Z" fill="white"/>
                            <path d="M45.4102 47.9375L45.3281 60.2422H44.0391L43.957 47.9375H45.4102ZM43.8047 64.168C43.8047 63.9023 43.8867 63.6797 44.0508 63.5C44.2227 63.3125 44.4609 63.2188 44.7656 63.2188C45.0625 63.2188 45.2969 63.3125 45.4688 63.5C45.6484 63.6797 45.7383 63.9023 45.7383 64.168C45.7383 64.4258 45.6484 64.6484 45.4688 64.8359C45.2969 65.0156 45.0625 65.1055 44.7656 65.1055C44.4609 65.1055 44.2227 65.0156 44.0508 64.8359C43.8867 64.6484 43.8047 64.4258 43.8047 64.168Z" fill="#263475"/>
                            </svg>
                        <p>{{trans('Ничего не найдено')}}</p>
                    </div>
                </div>
            </div>
        </section>
        @endif
@endsection

