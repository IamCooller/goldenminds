

@extends('layouts.main')



@section('content')   
<section class="instituteMain projectsMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">
                    <h1 class="instituteMain__body-title">
                    {{trans('Проекты')}}
                    </h1>
                    <div class="projectsMain__nav_wrapper">
                        <nav class="projectsMain__nav">
                            
                            <a href="{{ route('projects') }}" class="{{ Route::is('projects') ? 'link_active' : '' }}">{{trans('Все')}}</a>
                            <a href="{{ route('projects-status',['status'=>'Afghanistan']) }}" class="{{  $active=='Afghanistan' ? 'link_active' : '' }}">{{trans('Афганистан')}}</a>
                            <a href="{{route('projects-status',['status'=>'Vietnam']) }}" class="{{ $active=='Vietnam' ? 'link_active' : '' }}">{{trans('Вьетнам')}}</a>
                            <a href="{{route('projects-status',['status'=>'Kazakstan']) }}" class="{{ $active=='Kazakstan' ? 'link_active' : '' }}">{{trans('Казахстан')}}</a>
                            <a href="{{route('projects-status',['status'=>'Kirgizia']) }}" class="{{ $active=='Kirgizia' ? 'link_active' : '' }}">{{trans('Киргизия')}}</a>
                            <a href="{{route('projects-status',['status'=>'Tajikistan']) }}" class="{{ $active=='Tajikistan' ? 'link_active' : '' }}">{{trans('Таджикистан')}}</a>
                            <a href="{{route('projects-status',['status'=>'Turkmenistan']) }}" class="{{ $active=='Turkmenistan' ? 'link_active' : '' }}">{{trans('Туркменистан')}}</a>
                            <a href="{{route('projects-status',['status'=>'uzbekistan'])  }}" class="{{ $active=='uzbekistan' ? 'link_active' : '' }}">{{trans('Узбекистан')}}</a>
                        </nav>

                    </div>

                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Проекты')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="projectsDone" data-aos="fade-down">
            <div class="_container">
                <div class="projectsDone__list">
                @foreach($projects as $el)
                @if ($el->content)  
                <div class="projectsDone__list_item">
                        <a href="{{ route('project-single',['id'=>$el->id]) }}" class="arrow-hover">@if ($el->image)<img src="/{{$el->image}}" alt="{{$el->name}}">@endif
                            <div class="projectsDone__list_item_wrapper">
                                <div class="projectsDone__list_item_text">
                                    <div class="projectsDone__list_item-title">{{$el->name}}</div>
                                    <div class="projectsDone__list_item-subtitle">{{$el->years}}</div>
                                </div>
                                <svg class="projectsDone__list_item-arrow" width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="36.5" fill="white" stroke="white"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M36.4616 38.6725L41.7199 33.4142L41.7205 37.5247C41.7208 39.7855 41.7472 41.6613 41.779 41.6931C41.8109 41.725 42.1808 41.7497 42.601 41.7481L43.3652 41.7452L43.3647 36.1905L43.3643 30.636L37.8097 30.6355L32.255 30.635L32.2521 31.3992C32.2505 31.8194 32.2752 32.1893 32.3071 32.2212C32.3389 32.2531 34.2147 32.2794 36.4755 32.2797L40.586 32.2803L35.3277 37.5386L30.0694 42.7969L30.6363 43.3639L31.2033 43.9308L36.4616 38.6725Z" fill="#1E2A5E"></path>
                                    </svg>
                            </div>
                        </a>

                    </div>
                    @endif
                    @endforeach
                   
                  
                </div>
                {!! $projects->links() !!}
             
            </div>
        </section>
@endsection

