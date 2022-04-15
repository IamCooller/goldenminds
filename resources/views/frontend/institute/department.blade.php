

@extends('layouts.main')



@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

                @include('frontend.institute.submenu')
                
                    <h1 class="instituteMain__body-title">
                    {{trans('Отделы')}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Отделы')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="departament" data-aos="fade-down">

            <div class="_container">
                <div class="departament__list">
                    @foreach($departament as $el)
                    @if($el->content)
                    <div class="departament__list_item">
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

                {!! $departament->links() !!}



            </div>
        </section>
@endsection

