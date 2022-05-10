<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','“Гидропроект”')</title>
    <meta name="keywords" content="@yield('keywords','Гидропроект')">
    <meta name="description" content="@yield('description','Гидропроект')">
    <link rel="canonical" href="{{url()->current()}}"/>


   
    
     <!-- Scripts -->
     <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
    </script>
 

     <!-- favicon -->
     <link rel="icon" type="image/x-icon" sizes="192x192" href="{{asset('img/favicon.ico')}}" />

    <!-- fontawesome -->
    <script async defer src="https://kit.fontawesome.com/55e0136003.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('libs/aos/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/custom-scrollbar/mCustomScrollbar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('scss/bvi.css') }}" />
    <link rel="stylesheet" href="{{ asset('scss/home.css') }}" />
    <link  rel="stylesheet" href="{{ asset('scss/main.css') }}">

    

    <link rel="stylesheet" href="https://unpkg.com/gutenberg-css@0.6" media="print">
<link rel="stylesheet" href="https://unpkg.com/gutenberg-css@0.6/dist/themes/oldstyle.min.css" media="print">


{!! $options->nip !!}
{!! $options->google_analyt !!}
{!! $options->yandex_met !!}
   

</head>


<body id='app'>

<div id="myOverlay" class="overlay searchClose">
        <span class="closebtn searchClose" title="Close Overlay">×</span>
        <div class="overlay-content">
            <form method="get" action="{{route('search')}}">
                <input type="text" placeholder="{{trans('Search')}}..." name="search" onclick="event.stopPropagation()">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
        <header class="header">
        <div class="_container">
            <div class="header__body">
                <div class="header__top top-header _ps">
                    <div class="top-header__left">
                        <a href="tel:{{$options->tel1}}" class="top-header__link">{{$options->tel1}}</a>
                        <a href="tel:{{$options->tel2}}" class="top-header__link">{{$options->tel2}}</a>
                        <a href="mailto:{{$options->email}}" class="top-header__link">
                        {{$options->email}}
							</a>
                    </div>

                    <div class="top-header__right">
                        <div class="top-header__colour">
                        
                        
                        <a class="top-header__colour-sitemap" href="{{ route('sitemap') }}">
                                <img src="{{ asset('img/Sitemap.svg')}}" alt="Карта" />
                            </a>
                            <a href="javascript:void(0);" class="print-version-site"><span class="fa fa-print"></span></a>
                            <div class="top-header__colour-heading openGlasses">
                                <img src="{{ asset('img/main/glasses.svg')}}" alt="Очки" />
                            </div>

                            <div class="top-header__colour-dropdown">
                                <p class="top-header__colour-title">{{trans('Вид')}}:</p>

                                <label class="top-header__colour-choose">
										<input
											type="radio"
											name="view"
											class="top-header__colour-input"
											checked
                                            id="colour__site-On"
										/>
										<span class="top-header__colour-text">{{trans('Обычная версия')}}</span>
									</label>

                                <label class="top-header__colour-choose">
										<input type="radio" name="view" class="top-header__colour-input" id="colour__site-Off" />
										<span class="top-header__colour-text">{{trans('Черно-белая версия')}}</span>
									</label>

                                <!-- <label class="top-header__colour-choose">
										<input type="radio" name="view" class="top-header__colour-input" />
										<span class="top-header__colour-text">Включить озвучивание</span>
									</label> -->

                                <p class="top-header__colour-title _margin-top">{{trans('Размер шрифта')}}:</p>

                                <div class="top-header__colour-buttons">
                                    <button class="top-header__colour-button" id="fontsSite-minus">A-</button>
                                    <button class="top-header__colour-button" id="fontsSite-normal">A</button>
                                    <button class="top-header__colour-button" id="fontsSite-plus">A+</button>
                                  
                                    <button class="top-header__colour-button"  id="siteVoice">
											<img src="../img/main/volume.svg" alt="Иконка" />
										</button>
                                </div>
                            </div>
                        </div>

                        <div class="top-header__labgvidg labgvidg-header">
                            <div class="labgvidg-header__text">
                                {{ str_replace('_', '-', app()->getLocale()) }}
                                <div class="labgvidg-header__icon">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>

                            <div class="labgvidg-header__dropdown">
                                <div class="labgvidg-header__dropdown-inner">
                                    <a href="{{route('newlocale', ['newlang' => 'oz'])}}" class="labgvidg-header__dropdown-item">O’z</a>
                                    <a href="{{route('newlocale', ['newlang' => 'ru'])}}" class="labgvidg-header__dropdown-item">RU</a>
                                    <a href="{{route('newlocale', ['newlang' => 'en'])}}" class="labgvidg-header__dropdown-item">EN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header__bottom bottom-header">

                
                    <a href="{{ route('home') }}" class="bottom-header__logo">
                        @if($options->blogo !='')
                        <img src="/{{ $options->blogo}}" alt="Логотип" />
                        @else
                       <p style="font-size: 12px;">{{ trans('Реализованные и действующие проекты АО “Гидропроект”') }}</p> 
                        @endif
                    </a>
                    <nav class="bottom-header__nav print_hide">
               
                        <a href="{{ route('mainstream') }}" class="bottom-header__link {{ Route::is('mainstream*') ? 'link_active' : '' }}">{{trans('Об институте')}}</a>
                        <a href="{{ route('projects') }}" class="bottom-header__link {{ Route::is('projects*') ? 'link_active' : '' }}">{{trans('Проекты')}}</a>
                        <a href="{{ route('constitutive') }}" class="bottom-header__link {{ Route::is('constitutive*') ? 'link_active' : '' }}">{{trans('Учредителям')}}</a>
                        <a href="{{ route('tenders') }}" class="bottom-header__link {{ Route::is('tenders*') ? 'link_active' : '' }}">{{trans('ТЕНДЕРЫ')}}</a>
                        <a href="{{ route('press-center') }}" class="bottom-header__link {{ Route::is('press-center*') ? 'link_active' : '' }}">{{trans('Пресс-центр')}}</a>
                     
                        <a href="{{ route('contacts') }}" class="bottom-header__link  {{ Route::is('contacts*') ? 'link_active' : '' }}">{{trans('Контакты')}}</a>
                    </nav>
                    <div class="bottom-header__right right-header _ps">
                        <span class="right-header__Search searchOpen">
								<i class="fas fa-search"></i>
							</span>

                        <div class="right-header__minu-icon minu-icon">
                        <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.0693359 10.5H18.0693V8.5H0.0693359V10.5ZM0.0693359 14.5H18.0693V12.5H0.0693359V14.5ZM0.0693359 6.5H18.0693V4.5H0.0693359V6.5ZM0.0693359 0.5V2.5H18.0693V0.5H0.0693359Z" fill="#263475"/>
</svg>

                        </div>
                    </div>

                    <div class="bottom-header__mb mb-header _mb">
                        <div class="top-header__labgvidg labgvidg-header">
                            <div class="labgvidg-header__text">
                                {{ str_replace('_', '-', app()->getLocale()) }}
                                <div class="labgvidg-header__icon">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>

                            <div class="labgvidg-header__dropdown">
                                <div class="labgvidg-header__dropdown-inner">
                                    <a href="{{route('newlocale', ['newlang' => 'oz'])}}" class="labgvidg-header__dropdown-item">O’z</a>
                                    <a href="{{route('newlocale', ['newlang' => 'ru'])}}" class="labgvidg-header__dropdown-item">RU</a>
                                    <a href="{{route('newlocale', ['newlang' => 'en'])}}" class="labgvidg-header__dropdown-item">EN</a>

                                </div>
                            </div>
                        </div>

                        <div class="right-header__minu-icon minu-icon menu__icon">
                        <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.0693359 10.5H18.0693V8.5H0.0693359V10.5ZM0.0693359 14.5H18.0693V12.5H0.0693359V14.5ZM0.0693359 6.5H18.0693V4.5H0.0693359V6.5ZM0.0693359 0.5V2.5H18.0693V0.5H0.0693359Z" fill="#263475"/>
</svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hamburger-menu">
            <div class="hamburger-menu__top">
                <button class="hamburger-menu__search searchOpen">
						<img src="{{ asset('img/main/search.svg')}}" alt="Иконка" />
					</button>

                <div class="hamburger-menu__glasses">
                    <div class="top-header__colour">
                        <div class="top-header__colour-heading">
                            <img src="{{ asset('img/main/glasses.svg')}}" alt="Очки" />
                        </div>

                        <div class="top-header__colour-dropdown">
                            <p class="top-header__colour-title">{{trans('Вид')}}:</p>

                            <label class="top-header__colour-choose">
                                    <input
                                        type="radio"
                                        name="view"
                                        class="top-header__colour-input"
                                        checked
                                        id="colour__site-On"
                                    />
                                    <span class="top-header__colour-text">{{trans('Обычная версия')}}</span>
                                </label>

                            <label class="top-header__colour-choose">
                                    <input type="radio" name="view" class="top-header__colour-input" id="colour__site-Off" />
                                    <span class="top-header__colour-text">{{trans('Черно-белая версия')}}</span>
                                </label>

                            <!-- <label class="top-header__colour-choose">
                                    <input type="radio" name="view" class="top-header__colour-input" />
                                    <span class="top-header__colour-text">Включить озвучивание</span>
                                </label> -->

                            <p class="top-header__colour-title _margin-top">{{trans('Размер шрифта')}}:</p>

                            <div class="top-header__colour-buttons">
                                <button class="top-header__colour-button" id="fontsSite-minus">A-</button>
                                <button class="top-header__colour-button" id="fontsSite-normal">A</button>
                                <button class="top-header__colour-button" id="fontsSite-plus">A+</button>
                                <button class="top-header__colour-button" id="siteVoice">
                                        <img src="{{ asset('img/main/volume.svg')}}" alt="Иконка" />
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="hamburger-menu__close">
					<img src="{{ asset('img/main/close.svg')}}" alt="X" />
				</button>

            <div class="_container hamburger-menu__container">
            <a href="{{ route('home') }}" class="hamburger-menu-logo">
                @if($options->blogo !='')
                        <img src="/{{ $options->blogo}}" alt="Логотип" />
                        @else
                       <p style="font-size: 12px;">{{ trans('Реализованные и действующие проекты АО “Гидропроект”') }}</p> 
                        @endif
                </a>
                <div class="hamburger-menu__col">
                    <div class="hamburger-menu__dropdown">
                        <p class="hamburger-menu__dropdown-heading">{{trans('Об институте')}}</p>

                        <div class="hamburger-menu__wrapper">
                            <nav class="hamburger-menu__dropdown-body">
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

                    <a href="{{ route('projects') }}" class="hamburger-menu__dropdown-heading">
                    {{trans('Завершённые и действующие проекты')}}
                            </a>
                </div>

                <div class="hamburger-menu__col">
                    <div class="hamburger-menu__dropdown">
                        <p class="hamburger-menu__dropdown-heading"> {{trans('Корпоративное управление')}}</p>

                        <div class="hamburger-menu__wrapper">
                            <nav class="hamburger-menu__dropdown-body">
                                <a href="{{ route('constitutive') }}" class="hamburger-menu__item">
                                {{trans('Устав АО')}}
                                        </a>
                                <a href="{{ route('constitutive') }}" class="hamburger-menu__item">
                                {{trans('Внутренние документы')}}
                                        </a>
                                <a href="{{ route('constitutive') }}" class="hamburger-menu__item">
                                {{trans('Раскрытие информации')}}
                                        </a>
                                <a href="{{ route('constitutive') }}" class="hamburger-menu__item">
                                {{trans('Aкционерам')}}
                                        </a>
                                <a href="{{ route('constitutive') }}" class="hamburger-menu__item">
                                {{trans('Бизнес план')}}
                                        </a>
                                <a href="{{ route('constitutive') }}" class="hamburger-menu__item">
                                {{trans('Стратегия развития общества')}}
                                        </a>
                                        <a href="{{ route('constitutive') }}" class="hamburger-menu__item"> {{trans('Корпоративные закупки')}}</a>
                            </nav>
                        </div>
                    </div>

                    <div class="hamburger-menu__dropdown">
                        <p class="hamburger-menu__dropdown-heading"> {{trans('Интерактивные услуги')}}</p>

                        <div class="hamburger-menu__wrapper">
                            <nav class="hamburger-menu__dropdown-body">
                               
                                <a href="{{ route('virtual-reception') }}" class="hamburger-menu__item">
                                {{trans('Виртуальная приемная')}}
                                        </a>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="hamburger-menu__col">
                    <div class="hamburger-menu__dropdown">
                        <p class="hamburger-menu__dropdown-heading"> {{trans('Пресс-центр')}}</p>

                        <div class="hamburger-menu__wrapper">
                            <nav class="hamburger-menu__dropdown-body">
                                <a href="{{ route('press-center') }}" class="hamburger-menu__item">
                                            {{trans('Новости')}}
                                        </a>
                                <a href="{{ route('photo-gallery') }}" class="hamburger-menu__item">
                                            {{trans('Фотогалерея')}}
                                        </a>
                                <a href="{{ route('video-gallery') }}" class="hamburger-menu__item">
                                            {{trans('Видеогалерея')}}
                                        </a>
                            </nav>
                        </div>
                    </div>

                    <div class="hamburger-menu__dropdown">
                        <a href="{{ route('tenders') }}" class="hamburger-menu__dropdown-heading">
                                    {{trans('Тендеры и объявления')}}
                                </a>
                    </div>

                    <a href="{{ route('contacts') }}" class="hamburger-menu__dropdown-heading">
                    {{trans('Контакты')}}
                            </a>
                </div>
            </div>

            <div class="hamburger-menu__tels">
                <div class="_container hamburger-menu__tels-container">
                    <a href="tel:{{$options->tel1}}" class="hamburger-menu__tels-item">
                    {{$options->tel1}}
						</a>
                    <a href="tel:{{$options->tel2}}" class="hamburger-menu__tels-item">
                    {{$options->tel2}}
						</a>
                </div>
            </div>
        </div>
    </header>

        <main class="content">
            @yield('content')
        </main>
        <footer class="footer footerMain" data-aos="fade-down">
        <div class="_container footer__container footerMain__container">
            <div class="footer__container-inner footerMain__container-inner">
                <a href="{{ route('home') }}" class="footer__logo">
                @if($options->blogo !='')
                        <img src="/{{ $options->blogo}}" alt="Логотип" />
                        @else
                       <p style="font-size: 12px;">{{ trans('Реализованные и действующие проекты АО “Гидропроект”') }}</p> 
                        @endif
                </a>

                <div class="footer__tels">
                    <a href="tel:{{$options->tel1}}" class="footer__tels-number">{{$options->tel1}}</a>
                    <a href="tel:{{$options->tel2}}" class="footer__tels-number">{{$options->tel2}}</a>
                </div>

                <a href="mailto:{{$options->email}}" class="footer__email">
                {{$options->email}}
					</a>

                    {!! $options->graph !!}

                    {!! $options->address !!}
              

                <div class="footer__social">
                    <a href="{{$options->facebook}}" class="footer__social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{$options->youtube}}" class="footer__social-link">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="{{$options->telegram}}" class="footer__social-link">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                    <a href="{{$options->linkedin}}" class="footer__social-link">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>

                <a href="https://goldenminds.uz/" class="footer__dev">
                    <img src="{{ asset('img/logo__goldenminds.svg')}}" alt="Логотип" />
                </a>
            </div>

            <div class="footer__container-inner footerMain__container-inner footerMain__containerRight-inner">
                <div class="footerMain-title">
                {{trans('Будьте в курсе')}}
                </div>
                <div class="footerMain-subtitle">
                    {{trans('Вы можете быть в курсе новостей, подписавшись на обновления.')}}
                </div>
                <form method="POST" action="/" class="footerMain__form" id="contactform" name="myFormPodpis" onsubmit="return validatePodpis()">
                    {{ csrf_field() }}
                    <div class="footerMain__form_input">
                    <input type="email" name="email" id="email" class="footerMain__form-input focus" placeholder="{{trans('Ваш Email')}}">
                    <span class="error"></span>    
                                    </div>
                    <button type="submit" class="footerMain__form-submit"><svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.50931 11.4493L18.7525 11.4493L15.1402 15.0626C13.1535 17.0499 11.528 18.7217 11.528 18.7777C11.528 18.8337 11.8313 19.1805 12.2021 19.5485L12.8763 20.2175L17.758 15.3351L22.6395 10.4527L17.758 5.57033L12.8763 0.687861L12.2021 1.3569C11.8314 1.72485 11.528 2.07167 11.528 2.12768C11.528 2.1837 13.1535 3.85553 15.1402 5.8428L18.7525 9.45607L9.50931 9.45607L0.266114 9.45607L0.266114 10.4527L0.266114 11.4493L9.50931 11.4493Z" fill="#263475"/>
                        </svg>
                        </button>
                       
                </form>


                <div class="footerMain__nav">
                <nav class="footerMain__nav_links">
                    <div class="hamburger-menu__dropdown">
                        <p class="footerMain__nav-title"> {{trans('Об институте')}}</p>

                        <div class="hamburger-menu__wrapper" style="display: none;">
                            <nav class="hamburger-menu__dropdown-body">
                            <a href="{{ route('mainstream') }}" class="footerMain__nav_links-href">{{trans('Основные направления')}}</a>
                            <a href="{{ route('structure') }}" class="footerMain__nav_links-href">{{trans('Структура')}}</a>
                            <a href="{{ route('license') }}" class="footerMain__nav_links-href">{{trans('Лицензии')}}</a>
                            <a href="{{ route('ISO') }}" class="footerMain__nav_links-href">ISO 9001:2015</a>
                            <a href="{{ route('history') }}" class="footerMain__nav_links-href">{{trans('История развития института')}}</a>
                            <a href="{{ route('guidance') }}" class="footerMain__nav_links-href">{{trans('Руководство')}}</a>
                            <a href="{{ route('department') }}" class="footerMain__nav_links-href">{{trans('Отделы')}}</a>
                            <a href="{{ route('vacancy') }}" class="footerMain__nav_links-href">{{trans('Вакансии')}}</a>
                            <a href="{{ route('regulations') }}" class="footerMain__nav_links-href">{{trans('Нормативно-правовые акты')}}</a>
                            </nav>
                        </div>
                    </div>

                    <a href="{{ route('projects') }}" class="footerMain__nav-title">
                    {{trans('Завершённые и действующие проекты')}}
                            </a>
                    </nav>

                <nav class="footerMain__nav_links">
                    <div class="hamburger-menu__dropdown">
                        <p class="footerMain__nav-title">  {{trans('Корпоративное управление')}}</p>

                        <div class="hamburger-menu__wrapper" style="display: none;">
                            <nav class="hamburger-menu__dropdown-body">
                            <a href="{{ route('constitutive') }}" class="footerMain__nav_links-href">{{trans('Устав АО')}}
                        </a>
                            <a href="{{ route('constitutive') }}" class="footerMain__nav_links-href">{{trans('Внутренние документы')}}</a>
                            <a href="{{ route('constitutive') }}" class="footerMain__nav_links-href">{{trans('Раскрытие информации')}}</a>
                            <a href="{{ route('constitutive') }}" class="footerMain__nav_links-href">{{trans('Aкционерам')}}</a>
                            <a href="{{ route('constitutive') }}" class="footerMain__nav_links-href">{{trans('Бизнес план')}}</a>
                            <a href="{{ route('constitutive') }}" class="footerMain__nav_links-href">{{trans('Стратегия развития общества')}}</a>
                            <a href="{{ route('constitutive') }}" class="footerMain__nav_links-href"> {{trans('Корпоративные закупки')}}</a>    
                        </nav>
                        </div>
                    </div>

                    <div class="hamburger-menu__dropdown">
                        <p class="footerMain__nav-title">  {{trans('Интерактивные услуги')}}</p>

                        <div class="hamburger-menu__wrapper">
                            <nav class="hamburger-menu__dropdown-body">
                           
                                <a href="{{ route('virtual-reception') }}" class="footerMain__nav_links-href">
                                {{trans('Виртуальная приемная')}}
                                        </a>
                            </nav>
                        </div>
                    </div>
                </nav>

                <nav class="footerMain__nav_links">
                    <div class="hamburger-menu__dropdown">
                        <p class="footerMain__nav-title">  {{trans('Пресс-центр')}}</p>

                        <div class="hamburger-menu__wrapper">
                            <nav class="hamburger-menu__dropdown-body">
                            <a href="{{ route('press-center') }}" class="footerMain__nav_links-href">
                                            {{trans('Новости')}}
                                        </a>
                                <a href="{{ route('photo-gallery') }}" class="footerMain__nav_links-href">
                                            {{trans('Фотогалерея')}}
                                        </a>
                                <a href="{{ route('video-gallery') }}" class="footerMain__nav_links-href">
                                            {{trans('Видеогалерея')}}
                                        </a>
                            </nav>
                        </div>
                    </div>

                    <div class="hamburger-menu__dropdown">
                        <a href="{{ route('tenders')}}" class="footerMain__nav-title">
                        {{trans('Тендеры и объявления')}}
                                </a>
                    </div>

                    <a href="{{ route('contacts')}}" class="footerMain__nav-title">
                    {{trans('Контакты')}}
                            </a>
                </nav>
            </div>
                <div class="footerMain__RightBottom">
                    <div class="footerMain__RightBottom_flags">
                        <div class="footerMain__RightBottom_flags-item">
                            <img src="{{ asset('img/gerb.svg')}}" alt="Герб"> {{trans('Герб')}}
                        </div>
                        <div class="footerMain__RightBottom_flags-item">
                            <img src="{{ asset('img/flag.svg')}}" alt="Флаг"> {{trans('Флаг')}}
                        </div>
                        <div class="footerMain__RightBottom_flags-item">
                            <img src="{{ asset('img/gimn.svg')}}" alt="Гимн"> {{trans('Гимн')}}
                        </div>
                    </div>
                    <div class="footerMain__RightBottom_links">
                        <div class="footerMain__RightBottom_links-title">
                        {{trans('Полезные ссылки')}}
                        </div>
                        <ul class="footerMain__RightBottom_links_inner">
                            <li class="footerMain__RightBottom_links_inner-link">
                                <a href="https://www.gov.uz/"><img src="{{ asset('img/footerLinks/new1.png')}}"></a>
                            </li>
                            <li class="footerMain__RightBottom_links_inner-link">
                                <a href="https://data.gov.uz/"><img src="{{ asset('img/footerLinks/new2.png')}}"></a>
                            </li>
                            <li class="footerMain__RightBottom_links_inner-link">
                                <a href="https://my.gov.uz/"><img src="{{ asset('img/footerLinks/new3.png')}}"></a>
                            </li>
                            <li class="footerMain__RightBottom_links_inner-link">
                                <a href="https://minenergy.uz/"><img src="{{ asset('img/footerLinks/new4.png')}}"></a>
                            </li>
                            <li class="footerMain__RightBottom_links_inner-link">
                                <a href="https://uzgidro.uz/"><img src="{{ asset('img/footerLinks/new5.png')}}"></a>
                            </li>
                        </ul>
                    </div>
                    <a class="popup-modal footerMain__RightBottom-button button" href="#callback__form">{{trans('Свяжитесь с нами')}}</a>
                </div>
            </div>
        </div>
    </footer>
    <form method="POST" action="/send" id="callback__form" class="callback mfp-hide"  name="myFormPop" onsubmit="return validatePop()">
    {{ csrf_field() }}
        <div class="callback-title">
        {{trans('Форма обратной связи')}}
        </div>
        <div class="callback-subtitle">
        {{trans('Если у вас остались вопросы, на которые мы сможем вам ответить в процессе разговора - напишите нам. Мы открыты для диалога!')}}
        </div>
        <div class="callback__form_input">
        <input type="tel" id="tel" name="tel" placeholder=" {{trans('Ваш телефон')}}" class="callback-input focus">
                                    <span class="error"></span>    
                                    </div>
       
                                    <div class="callback__form_input">
                                    <input type="email" id="email" name="email" placeholder="{{trans('Ваш e-mail')}}" class="callback-input focus">
                                    <span class="error"></span>    
                                    </div>
                                    <div class="callback__form_textarea">
                                    <textarea placeholder="{{trans('Ваше сообщение')}}" id="subject" name="subject" class="callback-textarea focus"></textarea>
                                    <span class="error"></span>    
                                    </div>
     
        
        <button type="submit" class="callback-submit button">{{trans('Отправить')}}</button>
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </form>
   
                    
    

  
    @if ($message = Session::get('success'))
    
                            <div id="successForm">                      
                                <strong>{{trans('Спасибо, сообщение отправлено!')}}</strong>                          
                            </div>
        @endif
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <!-- libs js -->
    <script src="{{ asset('libs/custom-scrollbar/mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('libs/aos/aos.js') }}"></script>

            <!-- main js -->

    <script src="{{ asset('js/voice.js') }}"></script>
 
    <script src="{{ asset('js/custom.js') }}"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });
      });
      @if ($message = Session::get('success'))
      $.magnificPopup.open({
            items: {
                src: $('#successForm'),
                type: 'inline'
            }
            });
        @endif
      
    </script>


<script>
  function validatePop() {

    let c = document.forms["myFormPop"]["email"];
    if (c.value == "") {
        c.classList.add("errorInput");
        c.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш Email')}}";
      return false;
    }else{
        c.classList.remove('errorInput');
        c.parentElement.querySelector('.error').innerText='';
    }
    let d = document.forms["myFormPop"]["tel"];
    let regex = /^((8|\+7|\+3)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
    if ((d.value == "") || (!regex.test(d.value))) {

      d.classList.add("errorInput");
        d.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш телефон')}}";
      return false;
    }else{
        d.classList.remove('errorInput');
        d.parentElement.querySelector('.error').innerText='';
    }
    
    let x = document.forms["myFormPop"]["subject"];
    if (x.value == "") {

      x.classList.add("errorInput");
        x.parentElement.querySelector('.error').innerText ="{{trans('Введите сообщение')}}";
      return false;
    }else{
        x.classList.remove('errorInput');
        x.parentElement.querySelector('.error').innerText='';
    }
    }

    function validatePodpis() {

let c = document.forms["myFormPodpis"]["email"];
if (c.value == "") {
    c.classList.add("errorInput");
    c.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш Email')}}";
  return false;
}else{
    c.classList.remove('myFormPodpis');
    c.parentElement.querySelector('.error').innerText='';
}
}
</script>
    

</body>

</html>
