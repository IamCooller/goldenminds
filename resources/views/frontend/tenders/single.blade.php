

@extends('layouts.main')

@section('title') {{$tenders->title}}  @endsection
@section('description') {{$tenders->description}}  @endsection
@section('keywords') {{$tenders->keywords}}  @endsection

@section('content')   
<section class="tendersSingleMain" data-aos="fade-down">
            <div class="_container">
                <div class="SingleMain__body">

                    <a href="{{ route('tenders') }}" class="SingleMain__back">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5636 7.05425L3.12722 7.05425L6.03338 4.14728C7.63179 2.54847 8.93954 1.20344 8.93954 1.15838C8.93954 1.11331 8.69547 0.834283 8.3972 0.538255L7.85477 -4.43462e-07L3.92735 3.92807L-3.43399e-07 7.85606L3.92735 11.784L7.85477 15.7121L8.3972 15.1739C8.69547 14.8778 8.93954 14.5988 8.93954 14.5537C8.93954 14.5087 7.63179 13.1636 6.03338 11.5648L3.12722 8.65787L10.5636 8.65787L18 8.65787L18 7.85606L18 7.05425L10.5636 7.05425Z" fill="#1E2A5E"/>
                            </svg>
                        <span>{{trans('Назад')}}</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="tendersSingle" data-aos="fade-down">
            <div class="_container Single_container marginTopZero">
                <h1 class="Single_container-title">{{$tenders->name}}</h1>
                <div class="tendersSingle-time tenders__list_item-time"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.4925 0C3.3525 0 0 3.36 0 7.5C0 11.64 3.3525 15 7.4925 15C11.64 15 15 11.64 15 7.5C15 3.36 11.64 0 7.4925 0ZM7.5 13.5C4.185 13.5 1.5 10.815 1.5 7.5C1.5 4.185 4.185 1.5 7.5 1.5C10.815 1.5 13.5 4.185 13.5 7.5C13.5 10.815 10.815 13.5 7.5 13.5ZM7.875 3.75H6.75V8.25L10.6875 10.6125L11.25 9.69L7.875 7.6875V3.75Z" fill="#263475"></path>
                    </svg> {{$tenders->created_at->format('d.m.Y')}}
                </div>
                @if($tenders->open == 'Действующие')
                <div class="tendersSingle-button tenders__list_item-button">
                {{trans('Осуществляется приём документов')}}
                </div>
                @else
                <div class="tendersSingle-button tenders__list_item-button button-off">                   
                {{trans('Приём документов завершён')}}
                </div>
                @endif
                <div class="tendersSingle__about">
                    <div class="tendersSingle_photo">
                        @if($tenders->image)
                        <img src="/{{$tenders->image}}" alt="Photo" class="tendersSingle_photo-img">
                        @endif
                    </div>

                </div>
                <div class="tendersSingle__ref Single__ref">
                {!! $tenders->content !!}
                </div>
                <div class="constitutive">
              
              
            @if($tenders->files)
            @foreach(json_decode($tenders->files) as $member)
                    <div class="sidebar__right_block_downloand">
                        <div class="sidebar__right_block_downloand-img">
                            <img src="/img/donwload.svg" alt="{{ $member->title }}">
                        </div>
                        <div class="sidebar__right_block_downloand_text">
                            <div class="sidebar__right_block_downloand-title">
                            {{ $member->title }}
                            </div>
                        </div>
                        <div class="sidebar__right_block_downloand_file">
                            <div class="sidebar__right_block_downloand-size">
                                <span>{{trans('Размер')}}:</span> 3.21 {{trans('МБ')}}
                            </div>
                            <a href="/{{$member->url}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                </svg>
                                </a>

                        </div>
                    </div>
                    @endforeach
                  @endif
                </div>

            </div>
        </section>
        <section class="tendersMore" data-aos="fade-down">
            <div class="_container">
                <div class="tenderss__wrapper">
                    <div class="tendersMore-title">
                    {{trans('другие тендеры')}}
                    </div>
                    <div class="tendersMore__list tenders__list">
                        <div class="swiper-wrapper">
                        @foreach($allTenders as $el)
                            <div class="tenders__list_item swiper-slide">
                                <a href="{{ route('tender-single',['id'=>$el->id]) }}">
                                    <div class="tenders__list_item_img">
                                        @if($el->image)
                                        <img src="/{{$el->image}}" alt="tender">
                                        @endif
                                    </div>
                                    <div class="tenders__list_item_options">
                                        <div class="tenders__list_item-title">{{$el->name}}</div>
                                        <div class="tenders__list_item-time"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M7.4925 0C3.3525 0 0 3.36 0 7.5C0 11.64 3.3525 15 7.4925 15C11.64 15 15 11.64 15 7.5C15 3.36 11.64 0 7.4925 0ZM7.5 13.5C4.185 13.5 1.5 10.815 1.5 7.5C1.5 4.185 4.185 1.5 7.5 1.5C10.815 1.5 13.5 4.185 13.5 7.5C13.5 10.815 10.815 13.5 7.5 13.5ZM7.875 3.75H6.75V8.25L10.6875 10.6125L11.25 9.69L7.875 7.6875V3.75Z" fill="#263475"></path>
                                     </svg> {{$el->created_at->format('d.m.Y')}}
                                        </div>
                                        @if($el->open == 'Действующие')
                                        <div class="tenders__list_item-button">
                                        {{trans('Осуществляется приём документов')}}
                                        </div>                                        
                                        @else
                                        <div class="tenders__list_item-button button-off">
                                        {{trans('Приём документов завершён')}}
                                        </div>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        </div>
                    </div>


                    <div class="swiper-pagination"></div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><a href="{{ route('tenders') }}">{{trans('ТЕНДЕРЫ')}}</a></li>

                    <li><span>{{$tenders->name}}</span></li>
                </ul>
            </div>
        </section>
@endsection

