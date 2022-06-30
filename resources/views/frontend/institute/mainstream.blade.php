@extends('layouts.main')

@section('title') {{$mainstream->title}} @endsection
@section('description') {{$mainstream->description}} @endsection
@section('keywords') {{$mainstream->keywords}} @endsection


@section('content')
<section class="instituteMain" data-aos="fade-down">
    <div class="_container">
        <div class="instituteMain__body">

            @include('frontend.institute.submenu')
            <h1 class="instituteMain__body-title">
                {{trans('Основные направления ДЕЯТЕЛЬНОСТИ АКЦИОНЕРНОГО ОБЩЕСТВА “Гидропроект”')}}
            </h1>
        </div>

        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
            <li><span>{{trans('Основные направления')}}</span></li>
        </ul>
    </div>
</section>

<section class="institutDesc" data-aos="fade-down">
    <div class="_container">
        <p class="institutDesc-inner">{!! $mainstream->content !!}
            </pc>
    </div>
</section>

<section class="institutTabs" id="tabs" data-aos="fade-down">
    <div class="_container">
        <div class="institutTabs__nav-wrapper">
            <ul class="institutTabs__nav tabs-nav">
                <li>
                    <a class="institutTabs__nav-link tab-active" href="#Tab-design">
                        <svg width="39" height="36" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.9997 22.5197L25.1023 24.0543L23.8737 29.6808L18.4678 17.1489L30.9997 22.5197Z" stroke="#1E2A5E" stroke-width="1.5" />
                            <path d="M27.0425 17.4181V2.63824H3.29785V26.3829H17.5931" stroke="#1E2A5E" stroke-width="1.5" />
                            <rect x="0.75" y="0.75" width="4.43617" height="4.43617" fill="white" stroke="#1E2A5E" stroke-width="1.5" />
                            <rect x="0.75" y="23.1755" width="4.43617" height="4.43617" fill="white" stroke="#1E2A5E" stroke-width="1.5" />
                            <rect x="24.4941" y="0.75" width="4.43617" height="4.43617" fill="white" stroke="#1E2A5E" stroke-width="1.5" />
                        </svg> <span> {{$mainstream->title_design}}</span>
                    </a>
                </li>
                <li>
                    <a class="institutTabs__nav-link" href="#Tab-calculation">
                        <svg width="39" height="36" viewBox="0 0 39 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.75" width="37.1667" height="29.1667" stroke="#263475" stroke-width="1.5" />
                            <rect x="10.083" y="14.4342" width="2.71053" height="6.92105" stroke="#263475" stroke-width="1.5" />
                            <rect x="15.3457" y="10.75" width="2.71053" height="10.6053" stroke="#263475" stroke-width="1.5" />
                            <rect x="25.873" y="10.75" width="2.71053" height="10.6053" stroke="#263475" stroke-width="1.5" />
                            <rect x="20.6094" y="8.64471" width="2.71053" height="12.7105" stroke="#263475" stroke-width="1.5" />
                            <line x1="20.083" y1="30.6667" x2="20.083" y2="35.3334" stroke="#263475" stroke-width="1.5" />
                            <line x1="14.667" y1="35.25" x2="24.0003" y2="35.25" stroke="#263475" stroke-width="1.5" />
                        </svg> <span>{{$mainstream->title_economy}}</span>
                    </a>
                </li>
                <li>
                    <a class="institutTabs__nav-link" href="#Tab-advice">
                        <svg width="39" height="36" viewBox="0 0 27 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.8893 12.6667V11.8333C23.8893 5.85025 19.0391 1 13.056 1V1C7.0729 1 2.22266 5.85025 2.22266 11.8333V12.6667" stroke="#263475" stroke-width="1.5" />
                            <path d="M15.5553 28.7778L17.222 28.7778C20.9039 28.7778 23.8887 25.793 23.8887 22.1111V22.1111" stroke="#263475" stroke-width="1.5" />
                            <rect x="0.75" y="13.4167" width="4.05556" height="7.94444" stroke="#263475" stroke-width="1.5" />
                            <rect x="21.3057" y="13.4167" width="4.05556" height="7.94444" stroke="#263475" stroke-width="1.5" />
                            <rect x="12.417" y="27.8611" width="2.38889" height="2.38889" rx="1.19444" stroke="#263475" stroke-width="1.5" />
                        </svg> <span>{{$mainstream->title_consultation}}</span>
                    </a>
                </li>

                <li>
                    <a class="institutTabs__nav-link" href="#Tab-injener">
                    <svg width="39" height="36" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 39 36" style="enable-background:new 0 0 39 36;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#253573;stroke-width:1.5;stroke-miterlimit:10;}
</style>
<rect x="12.3" y="6" class="st0" width="5.6" height="24.7"/>
<line class="st0" x1="17.8" y1="9.1" x2="15" y2="9.1"/>
<line class="st0" x1="24.1" y1="13.6" x2="21.3" y2="13.6"/>
<line class="st0" x1="24.1" y1="18.3" x2="21.3" y2="18.3"/>
<line class="st0" x1="24.1" y1="22.9" x2="21.3" y2="22.9"/>
<line class="st0" x1="24.1" y1="27.5" x2="21.3" y2="27.5"/>
<line class="st0" x1="17.8" y1="13.7" x2="15" y2="13.7"/>
<line class="st0" x1="17.8" y1="18.2" x2="15" y2="18.2"/>
<line class="st0" x1="17.8" y1="22.8" x2="15" y2="22.8"/>
<line class="st0" x1="17.8" y1="27.4" x2="15" y2="27.4"/>
<polygon class="st0" points="20.9,4.2 20.9,30.7 37,30.7 "/>
<g>
	<path class="st0" d="M12.3,7.5c-0.1,0-0.3,0-0.4,0c-5.9,0-10.7,4.8-10.7,10.7c0,5.9,4.8,10.7,10.7,10.7c0.2,0,0.3,0,0.4,0V7.5z"/>
</g>
<path class="st0" d="M12.3,13.9c-0.1,0-0.3,0-0.4,0c-2.4,0-4.4,2-4.4,4.4c0,2.4,2,4.4,4.4,4.4c0.2,0,0.3,0,0.4,0V13.9z"/>
</svg><span>{{$mainstream->title_injener}}</span>
                    </a>
                </li>

                <li>
                    <a class="institutTabs__nav-link" href="#Tab-laboratory">
                    <svg  width="39" height="36" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 39 36" style="enable-background:new 0 0 39 36;" xml:space="preserve">
<style type="text/css">
	.st3{fill:none;stroke:#253573;stroke-width:1.5;stroke-miterlimit:9.9998;}
	.st4{fill:none;stroke:#253573;stroke-width:1.5;stroke-miterlimit:10;}
</style>
<rect x="13.8" y="15.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -7.9644 16.3793)" class="st3" width="3.9" height="4.4"/>
<rect x="27.5" y="1.8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 5.7846 21.9672)" class="st3" width="3.9" height="4.4"/>
<circle class="st4" cx="27.8" cy="10.8" r="2.4"/>
<path class="st4" d="M25.4,10.8c0-1.3,1.1-2.4,2.4-2.4c0.6,0,1.2,0.2,1.6,0.6l1.1-1.1L25.6,3L14.7,13.9l4.9,4.9l6.4-6.4
	C25.6,12,25.4,11.5,25.4,10.8z"/>
<line class="st4" x1="18.4" y1="30.9" x2="18.4" y2="34.7"/>
<line class="st4" x1="14.5" y1="35" x2="22.6" y2="35"/>
<line class="st4" x1="3.7" y1="27" x2="17.3" y2="27"/>
<path class="st4" d="M9.5,27.2c0,0,5.7,6.5,13.9,2.8s8.4-12.4,5.6-17.1"/>
</svg><span>{{$mainstream->title_laboratory}}</span>
                    </a>
                </li>

        

                <li>
                    <a class="institutTabs__nav-link" href="#Tab-stroy">
                        <svg width="39" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Слой_1" x="0px" y="0px" viewBox="0 0 39 36" style="enable-background:new 0 0 39 36;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                    stroke: #253573;
                                    stroke-width: 1.5;
                                }

                                .st1 {
                                    fill: #253573;
                                }
                            </style>
                            <g>
                                <g>
                                    <rect x="7.5" y="12.7" class="st0" width="24.3" height="2.7" />

                                    <rect x="15.8" y="2.9" transform="matrix(-1.836970e-16 1 -1 -1.836970e-16 24.5343 -14.7709)" class="st0" width="7.7" height="4" />
                                    <path class="st0" d="M30,12.7c-0.1-4.8-3.7-8.8-8.4-9.7v5.9h-4V3.1C13,4,9.4,7.9,9.3,12.7H30z" />
                                </g>
                                <path class="st1" d="M3.5,35.8h1.4c0.3-3.9,4.3-7.3,10.2-8.6l0.6-0.1v-3.4l-0.4-0.2c-2.6-1.5-4.2-4.3-4.3-7.3h17.2   c0,3-1.7,5.8-4.3,7.3l-0.4,0.2V27l0.6,0.1c6.2,1.1,10.6,4.7,10.8,8.7h1.4c-0.2-4.6-4.8-8.6-11.4-10v-1.3c2.9-1.8,4.6-5,4.6-8.5   c0-0.2,0-0.4,0-0.6l0-0.7H9.7l0,0.7c0,0.2,0,0.4,0,0.6c0,3.4,1.8,6.6,4.6,8.5V26C7.9,27.5,3.7,31.4,3.5,35.8z" />
                            </g>
                        </svg><span>{{$mainstream->title_stroy}}</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="institutTabs__body tabs-items">
            <div class="institutTabs__body-text tabs-item" id="Tab-design">
                {!! $mainstream->content_design !!}
            </div>

            <div class="institutTabs__body-text tabs-item" id="Tab-calculation">
                {!! $mainstream->content_economy !!}
            </div>
            <div class="institutTabs__body-text tabs-item" id="Tab-advice">

                {!! $mainstream->content_consultation !!}
            </div>
            <div class="institutTabs__body-text tabs-item" id="Tab-injener">
                {!! $mainstream->content_injener !!}
            </div>
            <div class="institutTabs__body-text tabs-item" id="Tab-laboratory">

                {!! $mainstream->content_laboratory !!}
            </div>
           
            <div class="institutTabs__body-text tabs-item" id="Tab-stroy">

                {!! $mainstream->content_stroy !!}
            </div>
        </div>



        @foreach(json_decode($mainstream->file) as $member)

        <a class="institutTabs-doc" href="/{{ $member->url }}" download>
            <div class="institutTabs-doc_icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.50002 11.6667C2.96026 11.6667 3.33335 12.0398 3.33335 12.5V15.8333C3.33335 16.0544 3.42115 16.2663 3.57743 16.4226C3.73371 16.5789 3.94567 16.6667 4.16669 16.6667H15.8334C16.0544 16.6667 16.2663 16.5789 16.4226 16.4226C16.5789 16.2663 16.6667 16.0544 16.6667 15.8333V12.5C16.6667 12.0398 17.0398 11.6667 17.5 11.6667C17.9603 11.6667 18.3334 12.0398 18.3334 12.5V15.8333C18.3334 16.4964 18.07 17.1323 17.6011 17.6011C17.1323 18.0699 16.4964 18.3333 15.8334 18.3333H4.16669C3.50365 18.3333 2.86776 18.0699 2.39892 17.6011C1.93008 17.1323 1.66669 16.4964 1.66669 15.8333V12.5C1.66669 12.0398 2.03978 11.6667 2.50002 11.6667Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.24408 7.74408C5.56951 7.41864 6.09715 7.41864 6.42259 7.74408L10 11.3215L13.5774 7.74408C13.9028 7.41864 14.4305 7.41864 14.7559 7.74408C15.0814 8.06951 15.0814 8.59715 14.7559 8.92259L10.5893 13.0893C10.2638 13.4147 9.73618 13.4147 9.41074 13.0893L5.24408 8.92259C4.91864 8.59715 4.91864 8.06951 5.24408 7.74408Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.66667C10.4603 1.66667 10.8334 2.03977 10.8334 2.50001V12.5C10.8334 12.9602 10.4603 13.3333 10 13.3333C9.53978 13.3333 9.16669 12.9602 9.16669 12.5V2.50001C9.16669 2.03977 9.53978 1.66667 10 1.66667Z" fill="white" />
                </svg>
            </div>
            <div class="institutTabs-doc_title">
                {{ $member->title }}
            </div>
        </a>
        @endforeach

    </div>
</section>



<section class="map" id="s-contacts" data-aos="fade-down">
    <div class="map__body" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1498.8888763218183!2d69.24947727201366!3d41.2919411909921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8afa9fa300a9%3A0x349455741394ce58!2z0JDQniAi0JPQuNC00YDQvtC_0YDQvtC10LrRgiI!5e0!3m2!1sru!2sge!4v1636987209094!5m2!1sru!2sge" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
@endsection