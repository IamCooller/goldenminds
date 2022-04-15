

@extends('layouts.main')



@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

                @include('frontend.institute.submenu')
                   
                    <h1 class="instituteMain__body-title">
                    {{trans('История развития института')}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span> {{trans('История развития института')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="history" data-aos="fade-down">
            <div class="history__Laps_wrapper">
                <ul class="history__timeLaps">

                    @foreach($History as $el)
                    @if($el->content)
                    <li   @if ($el->first) class="timeLaps-active"  @endif>
                        <a href="#history_{{$el->id}}">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.97363e-07 3.01662e-07L-7.64288e-07 11L1.28039 11L10 5.41983L1.19935 4.06513e-07L1.97363e-07 3.01662e-07Z" fill="#E1EAEC"/>
                                </svg>

                            <p>{{$el->years}}</p>
                        </a>
                    </li>
                    @endif
                    @endforeach
                 

                </ul>
            </div>

            <div class="_container">
                <div class="history__body">
                @foreach($History as $el)
                @if($el->content)
                    <div class="history__body_item" id="history_{{$el->id}}">
                        <div class="history__body_photo">
                            <div class="history__body_wrapper gallery-swiper">
                                <div class="swiper-wrapper">
                                @foreach(json_decode($el->images) as $member)
                                     <div class="swiper-slide history__body_gallery-item">
                                        <img src="/{{ $member->url }}" alt="{{ $member->title }}">
                                        <p>{{ $member->title }}</p>
                                    </div>
                                  @endforeach                          
                                </div>
                            </div>
                        </div>
                        <div class="history__body_desc">
                            <h2 class="history__body_desc-title">{{$el->name}}</h2>
                            <div class="history__body_desc-text">{!! $el->content !!}
                            </div>
                        </div>
                        <div class="buttons-slaider__reght reght-buttons">
                            <div class="reght-buttons__button reght-buttons__button-prev">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5636 11.1983L6.12722 11.1983L9.03338 8.29133C10.6318 6.69252 11.9395 5.34748 11.9395 5.30242C11.9395 5.25736 11.6955 4.97833 11.3972 4.6823L10.8548 4.14404L6.92735 8.07211L3 12.0001L6.92735 15.9281L10.8548 19.8562L11.3972 19.3179C11.6955 19.0219 11.9395 18.7428 11.9395 18.6978C11.9395 18.6527 10.6318 17.3077 9.03338 15.7089L6.12722 12.8019L13.5636 12.8019L21 12.8019L21 12.0001L21 11.1983L13.5636 11.1983Z" fill="#1E2A5E"/>
                                    </svg>
                            </div>
                            <div class="reght-buttons__button reght-buttons__button-next">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4364 12.8017L17.8728 12.8017L14.9666 15.7087C13.3682 17.3075 12.0605 18.6525 12.0605 18.6976C12.0605 18.7426 12.3045 19.0217 12.6028 19.3177L13.1452 19.856L17.0727 15.9279L21 11.9999L17.0727 8.07191L13.1452 4.14384L12.6028 4.6821C12.3045 4.97813 12.0605 5.25716 12.0605 5.30222C12.0605 5.34728 13.3682 6.69232 14.9666 8.29113L17.8728 11.1981L10.4364 11.1981L3 11.1981L3 11.9999L3 12.8017L10.4364 12.8017Z" fill="#1E2A5E"/>
                                    </svg>

                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                   
                </div>
            </div>
        </section>

@endsection

