

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
                        {!! $Structure->instruction !!}
                    </div>

                    <div class="structuraMap__tab">
                    {!! $Structure->tabs !!}
                    </div>
                    
                </div>
            </div>
        </section>
@endsection

