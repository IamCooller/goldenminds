@extends('layouts.main')

@section('content')

<section class="page_404" id="s-404" data-aos="fade-down">
            <div class="_container">

               <h1 class="title">404</h1> 
                <h2 class="subtitle">{{trans('Страница не найден')}}!</h2>

                <div class="look">
                   <p>{{trans('Возможно вы искали')}}:</p> 

                <nav class="page_404_menu">
                                <a href="{{ route('mainstream') }}" class="hamburger-menu__item">
                                {{trans('Основные направления')}}
                                        </a>
                                <a href="{{ route('structure') }}" class="hamburger-menu__item">
                                {{trans('Структура')}}
                                        </a>
                                <a href="{{ route('license') }}" class="hamburger-menu__item">
                                {{trans('Лицензии')}}
                                        </a>
                                <a href="{{ route('ISO') }}" class="hamburger-menu__item">
                                            ISO 9001:2015
                                        </a>
                                <a href="{{ route('history') }}" class="hamburger-menu__item">
                                            {{trans('История развития института')}}
                                        </a>
                                <a href="{{ route('guidance') }}" class="hamburger-menu__item">
                                            {{trans('Руководство')}}
                                        </a>
                                <a href="{{ route('department') }}" class="hamburger-menu__item">
                                            {{trans('Отделы')}}
                                        </a>
                                <a href="{{ route('vacancy') }}" class="hamburger-menu__item">
                                {{trans('Вакансии')}}
                                        </a>
                                <a href="{{ route('regulations') }}" class="hamburger-menu__item">
                                            {{trans('Нормативно-правовые акты')}}
                                        </a>
                            </nav>
                </div>
            </div>
</div>
</section>
@endsection
