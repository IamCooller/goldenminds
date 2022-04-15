

@extends('layouts.main')



@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">
                    <h1 class="instituteMain__body-title">
                    {{trans('Учредителям')}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Учредителям')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="regulations constitutive" data-aos="fade-down">

            <div class="_container">
                <div class="sidebar__wrapp">
                    <ul class="sidebar__left">
                        <li><a class="active" href="#0">{{trans('Устав АО')}}</a></li>
                        <li><a href="#1">{{trans('Внутренние документы')}}</a></li>
                        <li><a href="#2">{{trans('Раскрытие информации')}}</a></li>
                        <li><a href="#3">{{trans('Aкционерам')}}</a></li>
                        <li><a href="#4">{{trans('Бизнес план')}}</a></li>
                        <li><a href="#5">{{trans('Стратегия развития общества')}}</a></li>
                        <li><a href="#6">{{trans('Корпоративные закупки')}}</a></li>
                    </ul>
                    <div class="sidebar__right">
                        <div class="sidebar__right_block" id="0">
                        
                        @foreach($Constitutive as $el)
                            @if($el->tab == 0 && $el->file !='')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span> {{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                    </div>
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>

                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                        <div class="sidebar__right_block" id="1">
                        
                        @foreach($Constitutive as $el)
                            @if($el->tab == 1 && $el->file !='')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span> {{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                    </div>
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>

                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                        <div class="sidebar__right_block" id="2">
                        
                        @foreach($Constitutive as $el)
                            @if($el->tab == 2 && $el->file !='')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span> {{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                    </div>
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>

                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                        <div class="sidebar__right_block" id="3">
                        
                        @foreach($Constitutive as $el)
                            @if($el->tab == 3 && $el->file !='')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span> {{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                    </div>
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>

                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                        <div class="sidebar__right_block" id="4">
                        
                        @foreach($Constitutive as $el)
                            @if($el->tab == 4 && $el->file !='')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span> {{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                    </div>
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>

                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                        <div class="sidebar__right_block" id="5">
                        
                        @foreach($Constitutive as $el)
                            @if($el->tab == 5 && $el->file !='')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span> {{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                    </div>
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>

                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                        <div class="sidebar__right_block" id="6">
                        
                        @foreach($Constitutive as $el)
                            @if($el->tab == 6 && $el->file !='')
                            <div class="sidebar__right_block_downloand">
                                <div class="sidebar__right_block_downloand-img">
                                    <img src="../img/donwload.svg" alt="download">
                                </div>
                                <div class="sidebar__right_block_downloand_text">
                                    <div class="sidebar__right_block_downloand-title">
                                        {{$el->title}}
                                    </div>
                                </div>
                                <div class="sidebar__right_block_downloand_file">
                                    <div class="sidebar__right_block_downloand-size">
                                        <span>{{trans('Размер')}}:</span> {{round(filesize($el->file)/ 1024 / 1024, 2)}} МБ
                                    </div>
                                    <a href="/{{$el->file}}" download class="sidebar__right_block_downloand-button hoverBtn"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="34" cy="34" r="33.5" stroke="#D5E0E2"/>
                                        <path d="M41 31H37V25H31V31H27L34 38L41 31ZM27 40V42H41V40H27Z" fill="#263475"/>
                                        </svg>
                                        </a>

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

