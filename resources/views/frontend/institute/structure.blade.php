

@extends('layouts.main')



@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

                @include('frontend.institute.submenu')


                    <h1 class="instituteMain__body-title">
                    {{trans('Структура')}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Структура')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="structuraMap" data-aos="fade-down">
            <div class="_container">
                <div class="structuraMap__inner">
                    <img src="/{{$Structure->image}}" alt="Структура" class="structuraMap-img">
                </div>
                <div class="structuraMap__bottom">
                    <div class="structuraMap__instruction">
                        <div class="structuraMap__instruction_list">
                            <div class="structuraMap__instruction-underscore">
                                <svg width="82" height="2" viewBox="0 0 82 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.5H2V0.5H0V1.5ZM6 1.5H10V0.5H6V1.5ZM14 1.5H18V0.5H14V1.5ZM22 1.5H26V0.5H22V1.5ZM30 1.5H34V0.5H30V1.5ZM38 1.5H42V0.5H38V1.5ZM46 1.5H50V0.5H46V1.5ZM54 1.5H58V0.5H54V1.5ZM62 1.5H66V0.5H62V1.5ZM70 1.5H74V0.5H70V1.5ZM78 1.5H82V0.5H78V1.5Z" fill="#263475"/>
                                    </svg>
                                <p>{{trans('Функциональное подчинение')}}</p>
                            </div>
                            <div class="structuraMap__instruction-underscore">
                                <svg width="84" height="2" viewBox="0 0 84 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1.5H84V0.5H0V1.5Z" fill="#263475"/>
                                    </svg>
                                <p>{{trans('Административное подчинение')}}</p>
                            </div>

                        </div>
                        <a href="{{$Structure->link}}" class="structuraMap__instruction-button button">
                        {{trans('ООО «Республиканский центр инженерных изысканий и лабораторных исследований»')}}
                            </a>
                    </div>

                    <div class="structuraMap__tab">
                    {!! $Structure->tabs !!}
                    </div>
                    
                </div>
            </div>
        </section>
@endsection

