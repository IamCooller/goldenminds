@extends('layouts.main')



@section('content')
<section class="instituteMain PressCenterMain" data-aos="fade-down">
    <div class="_container">
        <div class="instituteMain__body">
            <nav class="instituteMain__nav PressCenter_nav">
                <a href="{{route('photo-gallery')}}" class="instituteMain__nav-link">{{trans('Фотогалерея')}}</a>
                <a href="{{route('video-gallery')}}" class="instituteMain__nav-link">{{trans('Видеогалерея')}}</a>
            </nav>
            <h1 class="instituteMain__body-title">
                {{trans('Пресс-центр')}}
            </h1>
        </div>
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
            <li><span>{{trans('Пресс-центр')}}</span></li>
        </ul>
    </div>
</section>

<section class="PressCenter" data-aos="fade-down">
    <div class="_container">

        <div class="PressCenter__gallery">
            <div class="swiper-wrapper">
                @foreach($news as $el)
                @if($el->content)
                <div class="PressCenter__gallery_block swiper-slide">
                    <div class="PressCenter__gallery_block_img">@if ($el->image)<img src="/{{$el->image}}" alt="{{$el->title}}">@endif</div>
                    <div class="PressCenter__gallery_block_inner">
                        <div class="PressCenter__gallery-time">
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.49375 2.0238C4.04375 2.0238 1.25 4.8238 1.25 8.2738C1.25 11.7238 4.04375 14.5238 7.49375 14.5238C10.95 14.5238 13.75 11.7238 13.75 8.2738C13.75 4.8238 10.95 2.0238 7.49375 2.0238ZM7.5 13.2738C4.7375 13.2738 2.5 11.0363 2.5 8.2738C2.5 5.5113 4.7375 3.2738 7.5 3.2738C10.2625 3.2738 12.5 5.5113 12.5 8.2738C12.5 11.0363 10.2625 13.2738 7.5 13.2738ZM7.8125 5.1488H6.875V8.8988L10.1562 10.8676L10.625 10.0988L7.8125 8.43005V5.1488Z" fill="white" />
                            </svg> {{$el->date}}
                        </div>
                        <div class="PressCenter__gallery-title">
                            {{$el->name}}
                        </div>
                        <div class="PressCenter__gallery-subtitle">

                            {!! Str::words(strip_tags($el->content), 13, ' ...') !!}
                        </div>
                        <a href="{{ route('press-center-single', ['id'=>$el->id]) }}" class="PressCenter__gallery-href">{{trans('подробнее')}}<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4616 14.3564L16.7199 9.0981L16.7205 13.2086C16.7208 15.4694 16.7472 17.3452 16.779 17.377C16.8109 17.4089 17.1808 17.4336 17.601 17.432L18.3652 17.4291L18.3647 11.8744L18.3643 6.31985L12.8097 6.3194L7.25502 6.31894L7.25207 7.0831C7.25049 7.50334 7.27521 7.87322 7.30707 7.90509C7.33893 7.93695 9.21474 7.96331 11.4755 7.9636L15.586 7.96416L10.3277 13.2225L5.06937 18.4808L5.63634 19.0478L6.2033 19.6147L11.4616 14.3564Z" fill="white" />
                            </svg>
                        </a>
                        <div class="buttons-slaider__reght reght-buttons">
                            <div class="reght-buttons__button-prev hoverBtn">
                                <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="36.5" transform="rotate(-180 37 37)" stroke="#E4E4E4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.5636 36.1983L31.1272 36.1983L34.0334 33.2913C35.6318 31.6925 36.9395 30.3475 36.9395 30.3024C36.9395 30.2574 36.6955 29.9783 36.3972 29.6823L35.8548 29.144L31.9273 33.0721L28 37.0001L31.9273 40.9281L35.8548 44.8562L36.3972 44.3179C36.6955 44.0219 36.9395 43.7428 36.9395 43.6978C36.9395 43.6527 35.6318 42.3077 34.0334 40.7089L31.1272 37.8019L38.5636 37.8019L46 37.8019L46 37.0001L46 36.1983L38.5636 36.1983Z" fill="#1E2A5E" />
                                </svg>
                            </div>
                            <div class="reght-buttons__button-next hoverBtn">
                                <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="36.5" stroke="#E4E4E4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M35.4364 37.8017L42.8728 37.8017L39.9666 40.7087C38.3682 42.3075 37.0605 43.6525 37.0605 43.6976C37.0605 43.7426 37.3045 44.0217 37.6028 44.3177L38.1452 44.856L42.0727 40.9279L46 36.9999L42.0727 33.0719L38.1452 29.1438L37.6028 29.6821C37.3045 29.9781 37.0605 30.2572 37.0605 30.3022C37.0605 30.3473 38.3682 31.6923 39.9666 33.2911L42.8728 36.1981L35.4364 36.1981L28 36.1981L28 36.9999L28 37.8017L35.4364 37.8017Z" fill="#1E2A5E" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach



            </div>


        </div>

        <div class="swiper-pagination"></div>

    </div>
</section>
<section class="PressCenterNews" data-aos="fade-down">
    <div class="_container">
        <div class="PressCenterNews-title">
            {{trans('последние новости')}}
        </div>
        <div class="PressCenterNews__list">
            @foreach($news as $el)
            @if($el->content)
            <div class="PressCenterNews__list_item">
                <a href="{{ route('press-center-single', ['id'=>$el->id]) }}">@if ($el->image)<img src="/{{$el->image}}" alt="{{$el->title}}">@endif
                    <div class="PressCenterNews__list_item_wrapper">
                        <div class="PressCenterNews__list_item_text">
                            <div class="PressCenterNews__list_item-title">{{$el->name}}</div>
                        </div>
                        <div class="PressCenterNews__list_item_bottom">
                        <div class="PressCenterNews__list_item-time"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.4925 0C3.3525 0 0 3.36 0 7.5C0 11.64 3.3525 15 7.4925 15C11.64 15 15 11.64 15 7.5C15 3.36 11.64 0 7.4925 0ZM7.5 13.5C4.185 13.5 1.5 10.815 1.5 7.5C1.5 4.185 4.185 1.5 7.5 1.5C10.815 1.5 13.5 4.185 13.5 7.5C13.5 10.815 10.815 13.5 7.5 13.5ZM7.875 3.75H6.75V8.25L10.6875 10.6125L11.25 9.69L7.875 7.6875V3.75Z" fill="#263475" />
                            </svg> {{$el->date}}
                        </div>
                        <div class="PressCenterNews__list_item-view">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 442.04 442.04" style="enable-background:new 0 0 442.04 442.04;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203    c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219    c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367    c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021    c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212    c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071    c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z" />
                                    </g>
                                    <g>
                                        <path d="M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188    c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993    c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5    s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z" />
                                    </g>
                                    <g>
                                        <path d="M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z" />
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                            {{$el->view_count}}
                        </div>
                        </div>
                       
                    </div>
                </a>

            </div>
            @endif
            @endforeach


        </div>
        {!! $news->links() !!}

    </div>
</section>
@endsection