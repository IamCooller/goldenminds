

@extends('layouts.main')



@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

                @include('frontend.institute.submenu')
                    <h1 class="instituteMain__body-title">
                    {{trans('Руководство')}}
                    </h1>
                </div>

                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span> {{trans('Руководство')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="guidance" data-aos="fade-down">

            <div class="_container">
                <div class="guidance__wrapper">
                    <div class="guidance-title">
                    {{trans('Управляющие и директора')}}
                    </div>
                    <div class="guidance__list">
                    @foreach($guidance as $el)
                        @if(($el->category == 'УПРАВЛЯЮЩИЕ') && ($el->name))
                        
                        <div class="guidance__list_block">
                            <a href="{{ route('guidance-single',['id'=>$el->id]) }}">
                                <img src="/{{$el->image}}" alt="{{$el->name}}" class="guidance__list_block-img">
                                <p class="guidance__list_block-name">{{$el->name}}</p>
                                <span class="guidance__list_block-place">{{$el->rank}}</span>
                            </a>
                        </div>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="guidance__wrapper">
                    <div class="guidance-title">
                    {{trans('Заместители')}}
                    </div>

                    <div class="guidance__list">
                    @foreach($guidance as $el)
                        @if(($el->category == 'ЗАМЕСТИТЕЛИ') && ($el->name))
                        <div class="guidance__list_block">
                            <a href="{{ route('guidance-single',['id'=>$el->id]) }}">
                                <img src="/{{$el->image}}" alt="{{$el->name}}" class="guidance__list_block-img">
                                <p class="guidance__list_block-name">{{$el->name}}</p>
                                <span class="guidance__list_block-place">{{$el->rank}}</span>
                            </a>
                        </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </section>
@endsection

