

@extends('layouts.main')



@section('content')   
<section class="instituteMain tendersMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">
                    <h1 class="instituteMain__body-title">
                    {{trans('ТЕНДЕРЫ')}}
                    </h1>
                    <div class="tendersMain__nav_wrapper">
                        
                        <nav class="tendersMain__nav">
  
                            <a href="{{ route('tenders') }}" class="{{ Route::is('tenders') ? 'link_active' : '' }}">{{trans('Все')}}</a>
                            <a href="{{ route('tenders-status', ['status'=>'done']) }}" class="{{ $active=='done' ? 'link_active' : '' }}">{{trans('Действующие')}}</a>
                            <a href="{{ route('tenders-status', ['status'=>'close']) }}" class="{{ $active=='close' ? 'link_active' : '' }}">{{trans('Завершённые')}}</a>
                        </nav>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('ТЕНДЕРЫ')}}</span></li>
                </ul>
            </div>
        </section>
        
        <section class="tenders" data-aos="fade-down">

            <div class="_container">
                <div class="tenders__list">
                @foreach($tenders as $el)
                @if($el->content)
                    <div class="tenders__list_item">
                        <a href="{{ route('tender-single',['id'=>$el->id]) }}">
                            <div class="tenders__list_item_img">
                                <img src="/{{$el->image}}" alt="tender">
                            </div>
                            <div class="tenders__list_item_options">
                                <div class="tenders__list_item-title">{{$el->name}}</div>
                                <div class="tenders__list_item-time"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7.4925 0C3.3525 0 0 3.36 0 7.5C0 11.64 3.3525 15 7.4925 15C11.64 15 15 11.64 15 7.5C15 3.36 11.64 0 7.4925 0ZM7.5 13.5C4.185 13.5 1.5 10.815 1.5 7.5C1.5 4.185 4.185 1.5 7.5 1.5C10.815 1.5 13.5 4.185 13.5 7.5C13.5 10.815 10.815 13.5 7.5 13.5ZM7.875 3.75H6.75V8.25L10.6875 10.6125L11.25 9.69L7.875 7.6875V3.75Z" fill="#263475"/>
                                 </svg> {{$el->created_at->format('d.m.Y')}}
                                </div>
                                @if($el->open == 'Действующие')
                                <div class="tenders__list_item-button ">
                               
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
                @endif
                @endforeach

                </div>
                {!! $tenders->links() !!}
            </div>
        </section>


@endsection

