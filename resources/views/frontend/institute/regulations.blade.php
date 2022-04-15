

@extends('layouts.main')



@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

                @include('frontend.institute.submenu')

                    <h1 class="instituteMain__body-title">
                    {{trans('Нормативно-правовые акты')}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span> {{trans('Нормативно-правовые акты')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="regulations" data-aos="fade-down">

            <div class="_container">
                <div class="sidebar__wrapp">
                    <ul class="sidebar__left">
                        
                        <li><a class="active" href="#0">{{trans('Законы РУз')}}</a></li>
                        <li><a href="#1">{{trans('Кодексы РУз')}}</a></li>
                        <li><a href="#2">{{trans('Постановления Президента РУЗ')}}</a></li>
                        <li><a href="#3">{{trans('Указы Президента РУз')}}</a></li>
                        <li><a href="#4">{{trans('Распоряжения Президента')}}</a></li>
                        <li><a href="#5">{{trans('Постановления Кабинета Министров РУз')}}</a></li>
                        <li><a href="#6">{{trans('Приказы Узбекгидроэнерго')}}</a></li>
                        <li><a href="#7">{{trans('Ведомственные акты')}}</a></li>
                        <li><a href="#8">{{trans('Законодательные Акты по инвестиционной программе')}}</a></li>
                         <li><a href="#9">{{trans('Авторский и технический надзор')}}</a></li>
                        <li><a href="#10">{{trans('О лицензировании')}}</a></li>
                    </ul>
                    <div class="sidebar__right">
                        <div class="sidebar__right_block" id="0">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Законы РУз')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span> {{$el->number}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="1">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Кодексы РУз' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span> {{$el->number}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} {{trans('МБ')}}
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="2">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Постановления Президента РУЗ' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span> {{$el->number}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="3">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Указы Президента РУз' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span>  {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span>{{$el->number}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="4">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Распоряжения Президента' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span> {{$el->number}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="5">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Постановления Кабинета Министров РУз' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span> {{$el->number}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="6">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Приказы Узбекгидроэнерго' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span> {{$el->number}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="7">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Ведомственные акты' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span>{{$el->number}} 
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="8">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Законодательные Акты по инвестиционной программе' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span>{{$el->number}} 
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="9">
                            @foreach($regulations as $el)
                            @if($el->tab == 'Авторский и технический надзор' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span>{{$el->number}} 
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="sidebar__right_block" id="10">
                            @foreach($regulations as $el)
                            @if($el->tab == 'О лицензировании' && $el->file != '')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                    <ul class="sidebar__right_block_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$el->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span>{{$el->number}} 
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span>{{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

