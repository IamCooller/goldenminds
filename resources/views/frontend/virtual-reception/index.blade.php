

@extends('layouts.main')


@section('title') {{$virtual->title}}  @endsection
@section('description') {{$virtual->description}}  @endsection
@section('keywords') {{$virtual->keywords}}  @endsection


@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

      
                    <h1 class="instituteMain__body-title">
                    {{trans('Виртуальная приемная')}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span> {{trans('Виртуальная приемная')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="virtualReception" data-aos="fade-down">
            <div class="_container">
                <div class="virtualReception__wrapper">
                <div class="virtualReception__wrapper_left">
                <div class="sticky-top">
                        <h3> {{trans('Виртуальная приемная')}}</h3>
        				<div class="item">
							 <div class="testimonial">
								 <div class="virtual-img"> <img src="/{{ $virtual->image }}" alt="Виртуальная приемная"></div>
								 <div class="testimonial-text">
									 <p>{{$virtual->subimage}}</p>
								 </div>
							 </div>
						</div>
                    </div>
                </div>
                <div class="virtualReception__wrapper_right">

              
                <div class="virtualReception__content">
                    {!! $virtual->content !!}
                </div>
                @if($virtual->service)
                <button id="contact-button-vir" class="site-button button-md">{{trans('Я принимаю условия оферты')}}</button>
            <form method="POST" class="virtualReception__form" id="contactform" name="myForm" onsubmit="return validate()">
                    {{ csrf_field() }}  
                  
                                    
                                    <div class="virtualReception__form_hide">
                        <div class="virtualReception__form_wrapper">
                      
                                    <div class="virtualReception__form_wrapper_input">
                                    <input type="text" id="name" name="name" placeholder="{{trans('Имя')}}" class="virtualReception__form-input focus" >
                                    <span class="error"></span>
                                    </div>
                                    <div class="virtualReception__form_wrapper_input">
                                    <input type="email" placeholder="{{trans('E-mail')}}" id="email" name="email" class="virtualReception__form-input focus" >
                                    <span class="error"></span>
                                    </div>
                                    <div class="virtualReception__form_wrapper_input">
                                    <input type="tel" id="tel" name="tel" placeholder="{{trans('Телефон')}}" class="virtualReception__form-input focus" >
                                    <span class="error"></span>    
                                    </div>
                                    <div class="virtualReception__form_wrapper_input">
                                    <input type="text" id="indexx" name="indexx" placeholder="{{trans('Индекс')}}" class="virtualReception__form-input focus" >
                                    <span class="error"></span>    
                                    </div>
                                    <div class="virtualReception__form_wrapper_textarea">
                                    <textarea placeholder="{{trans('Обращение')}}" id="message" name="message" class="virtualReception__form-textarea focus" ></textarea>
                                    <span class="error"></span>   
                                    </div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                             
                                <div class="select">
                                        <input class="select__input"  type="hidden" id="service" name="service" required>
                                        <div class="select__head">{{trans('Выберите область')}}</div>
                                        <ul class="select__list" style="display: none;">
                                            @foreach(explode(",", $virtual->service) as $el)
                                            <li class="select__item">{{$el}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            
                        <button type="submit" class="virtualReception__form-button">{{trans('Отправить')}}</button>
                        </div>
                                    </div>
                       
                    </form>
                @endif


            <div class="virtualReception__stat">
                <p>{{trans('Количество обращений')}}: </p><span>{{$virtual->count}}</span>
            </div>
            </div>
                </div>
              
            </div>
       
        </section>

        <script>
  function validate() {
     
      let a = document.forms["myForm"]["name"];
    if (a.value == "") {
        a.classList.add("errorInput");
        a.parentElement.querySelector('.error').innerText = "{{trans('Укажите ваше имя')}}";
      return false;
    }else{
        a.classList.remove('errorInput');
        a.parentElement.querySelector('.error').innerText='';
    }
    let c = document.forms["myForm"]["email"];
    if (c.value == "") {
        c.classList.add("errorInput");
        c.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш Email')}}";
      return false;
    }else{
        c.classList.remove('errorInput');
        c.parentElement.querySelector('.error').innerText='';
    }
    let d = document.forms["myForm"]["tel"];
    let regex = /^((8|\+7|\+3)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;



    if ((d.value == "") || (!regex.test(d.value))) {

      d.classList.add("errorInput");
        d.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш телефон')}}";
      return false;
    }else{
        d.classList.remove('errorInput');
        d.parentElement.querySelector('.error').innerText='';
    }
    let f = document.forms["myForm"]["indexx"];
    if (f.value == "") {
     
      f.classList.add("errorInput");
        f.parentElement.querySelector('.error').innerText ="{{trans('Укажите Индекс')}}";
      return false;
    }else{
        f.classList.remove('errorInput');
        f.parentElement.querySelector('.error').innerText='';
    }
    let x = document.forms["myForm"]["message"];
    if (x.value == "") {

      x.classList.add("errorInput");
        x.parentElement.querySelector('.error').innerText ="{{trans('Введите сообщение')}}";
      return false;
    }else{
        x.classList.remove('errorInput');
        x.parentElement.querySelector('.error').innerText='';
    }

 
    
    }
</script>
@endsection

