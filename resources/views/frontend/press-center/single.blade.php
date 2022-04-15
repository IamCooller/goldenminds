

@extends('layouts.main')


@section('title') {{$news->title}}  @endsection
@section('description') {{$news->description}}  @endsection
@section('keywords') {{$news->keywords}}  @endsection

@section('content')   
        <section class="PressCenterSingleMain hrTop" data-aos="fade-down">
            <div class="_container">
                <div class="SingleMain__body">

                    <a href="#" onclick="javascript:history.back(); return false;" class="SingleMain__back">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5636 7.05425L3.12722 7.05425L6.03338 4.14728C7.63179 2.54847 8.93954 1.20344 8.93954 1.15838C8.93954 1.11331 8.69547 0.834283 8.3972 0.538255L7.85477 -4.43462e-07L3.92735 3.92807L-3.43399e-07 7.85606L3.92735 11.784L7.85477 15.7121L8.3972 15.1739C8.69547 14.8778 8.93954 14.5988 8.93954 14.5537C8.93954 14.5087 7.63179 13.1636 6.03338 11.5648L3.12722 8.65787L10.5636 8.65787L18 8.65787L18 7.85606L18 7.05425L10.5636 7.05425Z" fill="#1E2A5E"/>
                            </svg>
                        <span>{{trans('Назад')}}</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="PressCenterSingle" data-aos="fade-down">
            <div class="_container Single_container marginTopZero">
                <h1 class="Single_container-title">{{$news->name}}</h1>
                <div class="PressCenterSingle__options">
                    <div class="PressCenterSingle__options-time"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.4925 0C3.3525 0 0 3.36 0 7.5C0 11.64 3.3525 15 7.4925 15C11.64 15 15 11.64 15 7.5C15 3.36 11.64 0 7.4925 0ZM7.5 13.5C4.185 13.5 1.5 10.815 1.5 7.5C1.5 4.185 4.185 1.5 7.5 1.5C10.815 1.5 13.5 4.185 13.5 7.5C13.5 10.815 10.815 13.5 7.5 13.5ZM7.875 3.75H6.75V8.25L10.6875 10.6125L11.25 9.69L7.875 7.6875V3.75Z" fill="#263475"></path>
                        </svg> {{$news->created_at->format('d.m.Y')}}
                    </div>
                    <div class="PressCenterSingle__options-author">
                        {{trans('Автор')}}:
                        <a href="#">{{$news->author}}</a>
                    </div>
                </div>

              
                <div class="PressCenterSingle__about">
                    
              
                    <div class="PressCenterSingle_photo">
                        <div class="swiper PressCenterSingle_photo_big">
                            <div class="swiper-wrapper">
                          
                           
                                <div class="swiper-slide">
                                    <img src="/{{$news->image}}" />
                                </div>
                                

                            @foreach((explode(",", $news['images'])) as $el)
                                <div class="swiper-slide">
                                    <img src="/{{$el}}" />
                                </div>
                                @endforeach
                               
                            </div>
                        </div>

                        <div class="PressCenterSingle_photo_wrapper">
                            <div class="swiper PressCenterSingle_photo_small">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/{{$news->image}}" />
                                </div>
                                @foreach((explode(",", $news['images'])) as $el)
                                <div class="swiper-slide">
                                    <img src="/{{$el}}" />
                                </div>
                                @endforeach
                               
                               

                                </div>
                            </div>

                            <div class="buttons-slaider__reght reght-buttons">
                                <div class="reght-buttons__button-prev hoverBtn">
                                    <svg width="64" height="64" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="36.5" transform="rotate(-180 37 37)" stroke="#E4E4E4"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.5636 36.1983L31.1272 36.1983L34.0334 33.2913C35.6318 31.6925 36.9395 30.3475 36.9395 30.3024C36.9395 30.2574 36.6955 29.9783 36.3972 29.6823L35.8548 29.144L31.9273 33.0721L28 37.0001L31.9273 40.9281L35.8548 44.8562L36.3972 44.3179C36.6955 44.0219 36.9395 43.7428 36.9395 43.6978C36.9395 43.6527 35.6318 42.3077 34.0334 40.7089L31.1272 37.8019L38.5636 37.8019L46 37.8019L46 37.0001L46 36.1983L38.5636 36.1983Z" fill="#1E2A5E"/>                 
                                    </svg>
                                </div>
                                <div class="reght-buttons__button-next hoverBtn">
                                    <svg width="64" height="64" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="36.5" stroke="#E4E4E4"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M35.4364 37.8017L42.8728 37.8017L39.9666 40.7087C38.3682 42.3075 37.0605 43.6525 37.0605 43.6976C37.0605 43.7426 37.3045 44.0217 37.6028 44.3177L38.1452 44.856L42.0727 40.9279L46 36.9999L42.0727 33.0719L38.1452 29.1438L37.6028 29.6821C37.3045 29.9781 37.0605 30.2572 37.0605 30.3022C37.0605 30.3473 38.3682 31.6923 39.9666 33.2911L42.8728 36.1981L35.4364 36.1981L28 36.1981L28 36.9999L28 37.8017L35.4364 37.8017Z" fill="#1E2A5E"/>                          
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>


                <div class="PressCenterSingle__ref Single__ref">
                {!! $news->content !!}
                </div>
               
                <div class="projectsSingle__share">
                    <p>{{trans('Поделиться')}}</p>
                    <a href="https://www.facebook.com/sharer.php?src=sp&amp;u={{url()->full()}}&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Facebook">
                        <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="74" height="74" stroke="#D5E0E2"/>
                            <path d="M38.8077 46.2294V38.3702H41.4457L41.8407 35.3074H38.8077V33.3518C38.8077 32.4651 39.054 31.8607 40.3257 31.8607L41.9476 31.8599V29.1206C41.667 29.0834 40.7043 29 39.5842 29C37.2458 29 35.6449 30.4273 35.6449 33.0486V35.3074H33V38.3703H35.6448V46.2295L38.8077 46.2294Z" fill="#263475"/>
                            </svg>
                    </a>
                    <a href="https://t.me/share/url?url={{url()->full()}}&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Telegram"><svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="74" height="74" stroke="#D5E0E2"/>
                        <path d="M31.9624 37.0994C35.7202 35.4277 38.226 34.3257 39.4798 33.7932C43.0596 32.273 43.8034 32.0089 44.2882 32.0001C44.3949 31.9983 44.6333 32.0252 44.7877 32.1532C44.9182 32.2612 44.954 32.4072 44.9712 32.5096C44.9884 32.6121 45.0098 32.8454 44.9928 33.0277C44.7988 35.1089 43.9594 40.1592 43.5323 42.4901C43.3516 43.4764 42.9958 43.8071 42.6514 43.8394C41.9028 43.9098 41.3344 43.3343 40.6094 42.8491C39.4748 42.0897 38.8339 41.6171 37.7327 40.8761C36.46 40.0198 37.285 39.5491 38.0103 38.78C38.2001 38.5787 41.4983 35.5156 41.5622 35.2378C41.5702 35.203 41.5776 35.0735 41.5022 35.0051C41.4268 34.9367 41.3156 34.9601 41.2353 34.9787C41.1215 35.0051 39.3091 36.2282 35.7981 38.648C35.2836 39.0087 34.8176 39.1845 34.4001 39.1753C33.9399 39.1651 33.0545 38.9096 32.3964 38.6911C31.5891 38.4232 30.9475 38.2815 31.0034 37.8265C31.0325 37.5895 31.3521 37.3471 31.9624 37.0994Z" fill="#263475"/>
                        </svg>
                        </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{url()->full()}}&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="LinkedIn"><svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="74" height="74" stroke="#D5E0E2"/>
                        <path d="M43.8361 43.4655C43.0392 43.4465 42.2614 43.4465 41.4645 43.4655C41.2938 43.4655 41.2558 43.4276 41.2558 43.2568C41.2558 41.8529 41.2558 40.43 41.2558 39.026C41.2558 38.7035 41.2369 38.381 41.142 38.0774C40.8574 37.0909 39.7191 36.7304 38.9033 37.3944C38.4669 37.7359 38.2962 38.2102 38.2962 38.7794C38.2962 40.1074 38.2962 41.4355 38.2962 42.7636C38.2962 42.9343 38.2772 43.1051 38.2962 43.2948C38.3151 43.4465 38.2393 43.4845 38.1064 43.4655C37.2906 43.4655 36.4938 43.4655 35.678 43.4655C35.5262 43.4655 35.4883 43.4276 35.4883 43.2758C35.5073 42.0806 35.5073 40.8853 35.5073 39.6711C35.5073 38.1912 35.5073 36.7114 35.4883 35.2506C35.4883 35.0798 35.5262 35.0419 35.678 35.0419C36.4938 35.0419 37.2906 35.0419 38.1064 35.0419C38.2582 35.0419 38.2962 35.0798 38.2962 35.2316C38.2962 35.5351 38.2962 35.8387 38.2962 36.1992C38.3531 36.1423 38.3721 36.1233 38.391 36.1043C39.1309 35.0229 40.1744 34.7193 41.4076 34.9091C42.8305 35.1367 43.7412 36.1233 43.9689 37.6411C44.0258 38.0015 44.0447 38.362 44.0447 38.7225C44.0447 40.2402 44.0447 41.7391 44.0447 43.2568C44.0447 43.4086 44.0068 43.4655 43.8361 43.4655Z" fill="#263475"/>
                        <path d="M33.9686 39.2536C33.9686 40.5816 33.9686 41.9097 33.9686 43.2377C33.9686 43.4085 33.9307 43.4654 33.7599 43.4654C32.9631 43.4464 32.1662 43.4654 31.3694 43.4654C31.2176 43.4654 31.1797 43.4275 31.1797 43.2757C31.1797 40.6006 31.1797 37.9066 31.1797 35.2315C31.1797 35.0987 31.2176 35.0417 31.3694 35.0417C32.1852 35.0417 33.001 35.0417 33.8168 35.0417C33.9876 35.0417 34.0065 35.0987 34.0065 35.2504C33.9686 36.5785 33.9686 37.9066 33.9686 39.2536Z" fill="#263475"/>
                        <path d="M34.1015 32.8411C33.9118 33.5999 33.134 34.0363 32.2423 33.8845C31.2936 33.7327 30.7624 32.8031 31.1039 31.8924C31.3316 31.3233 31.8818 30.9818 32.5838 31.0008C33.6462 30.9818 34.3482 31.8355 34.1015 32.8411Z" fill="#263475"/>
                        </svg>
                        </a>
                </div>

            </div>
        </section>
        <section class="PressCenterMore" data-aos="fade-down">
            <div class="_container">
                <div class="PressCenterMore__wrapper">
                    <div class="PressCenterMore-title">
                    {{trans('другие новости')}}
                    </div>
                    <div class="PressCenterNews__list PressCenterMore__list">
                        <div class="swiper-wrapper">
                            @foreach($allNews as $el)
                            <div class="PressCenterNews__list_item swiper-slide">
                                <a href="{{ route('press-center-single', ['id'=>$el->id]) }}"><img src="/{{$el->image}}" alt="project">
                                    <div class="PressCenterNews__list_item_wrapper">
                                        <div class="PressCenterNews__list_item_text">
                                            <div class="PressCenterNews__list_item-title">{{$el->name}}</div>
                                        </div>
                                        <div class="PressCenterNews__list_item-time"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.4925 0C3.3525 0 0 3.36 0 7.5C0 11.64 3.3525 15 7.4925 15C11.64 15 15 11.64 15 7.5C15 3.36 11.64 0 7.4925 0ZM7.5 13.5C4.185 13.5 1.5 10.815 1.5 7.5C1.5 4.185 4.185 1.5 7.5 1.5C10.815 1.5 13.5 4.185 13.5 7.5C13.5 10.815 10.815 13.5 7.5 13.5ZM7.875 3.75H6.75V8.25L10.6875 10.6125L11.25 9.69L7.875 7.6875V3.75Z" fill="#263475"/>
                                        </svg> {{$el->created_at->format('d.m.Y')}}
                                        </div>
                                    </div>
                                </a>

                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="swiper-pagination-more"></div>
                    <div class="buttons-slaider__reght reght-buttons">
                        <div class="reght-buttons__button-prev-more hoverBtn">
                            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="37" cy="37" r="36.5" transform="rotate(-180 37 37)" stroke="#E4E4E4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.5636 36.1983L31.1272 36.1983L34.0334 33.2913C35.6318 31.6925 36.9395 30.3475 36.9395 30.3024C36.9395 30.2574 36.6955 29.9783 36.3972 29.6823L35.8548 29.144L31.9273 33.0721L28 37.0001L31.9273 40.9281L35.8548 44.8562L36.3972 44.3179C36.6955 44.0219 36.9395 43.7428 36.9395 43.6978C36.9395 43.6527 35.6318 42.3077 34.0334 40.7089L31.1272 37.8019L38.5636 37.8019L46 37.8019L46 37.0001L46 36.1983L38.5636 36.1983Z" fill="#1E2A5E"/>                 
                            </svg>
                        </div>
                        <div class="reght-buttons__button-next-more hoverBtn">
                            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="37" cy="37" r="36.5" stroke="#E4E4E4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.4364 37.8017L42.8728 37.8017L39.9666 40.7087C38.3682 42.3075 37.0605 43.6525 37.0605 43.6976C37.0605 43.7426 37.3045 44.0217 37.6028 44.3177L38.1452 44.856L42.0727 40.9279L46 36.9999L42.0727 33.0719L38.1452 29.1438L37.6028 29.6821C37.3045 29.9781 37.0605 30.2572 37.0605 30.3022C37.0605 30.3473 38.3682 31.6923 39.9666 33.2911L42.8728 36.1981L35.4364 36.1981L28 36.1981L28 36.9999L28 37.8017L35.4364 37.8017Z" fill="#1E2A5E"/>                          
                            </svg>
                        </div>
                    </div>


                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><a href="{{ route('press-center') }}">{{trans('Пресс-центр')}}</a></li>
                    
                    <li><span>{{$news->name}}</span></li>
                </ul>
            </div>
        </section>
@endsection

