

@extends('layouts.main')



@section('content')   
<section class="instituteMain aos-init aos-animate" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">
                    <h1 class="instituteMain__body-title">
                    {{$title->title}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><a href="{{ route('press-center') }}">{{trans('Пресс-центр')}}</a></li>
                    <li><a href="{{ route('video-gallery') }}">{{trans('Видеогалерея')}}</a></li>
                    <li><span> {{$title->title}}</span></li>
                </ul>
            </div>
        </section>
        <section class="PhotoGallerySingle aos-init aos-animate" data-aos="fade-down">
        <div class="_container">
            <div class="PhotoGallerySingle__list">
              
      
            @foreach($videos as $link)
            @if($link)
                <div class="PhotoGallerySingle__block">
                <a href="https://www.youtube.com/watch?v={{ $link }}" class="popup-youtube licensesAndSerf__item-href">
                            <iframe src="https://www.youtube.com/embed/{{ $link }}" title="YouTube video player" class="licensesAndSerf__item-img" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </a>
                </div>
            @endif
                      @endforeach
            
               
            </div>

          
             
              {!! $videos->links() !!}
            </div>
        </section>


@endsection

