

@extends('layouts.main')



@section('content')   
<section class="contactsMain" data-aos="fade-down">
            <div class="_container">
                <div class="contactsMain__body">
                    <h1 class="contactsMain-title">
                    {{trans('Контакты')}}
                    </h1>
                    <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>          
                    <li><span> {{trans('Контакты')}}</span></li>
                </ul>
                    <div class="contactsMain__wrapper">
                        <div class="contactsMain__wrapper_col">
                            @if($contacts->tel1)
                            <a href="tel:{{$contacts->tel1}}" class="contactsMain__wrapper-tel">{{$contacts->tel1}}</a>
                            @endif
                            @if($contacts->tel2)
                            <a href="tel:{{$contacts->tel2}}" class="contactsMain__wrapper-tel">{{$contacts->tel2}}</a>
                            @endif
                            @if($contacts->email)
                            <a href="mailto:{{$contacts->email}}" class="contactsMain__wrapper-mail">{{$contacts->email}} </a>
                            @endif
                        </div>
                        <div class="contactsMain__wrapper_col">
                            @if($contacts->text)
                            {!! $contacts->text !!}
                            @endif
                            
                        </div>
                        <div class="contactsMain__wrapper_col">
                            @if($contacts->address)
                            {!! $contacts->address !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contactsLocation" data-aos="fade-down">
            <div class="_container">
                <div class="contactsLocation__body">
                <div class="map__body" id="map">
                      {!! $options->map !!}
                    </div>
                    <form method="POST" class="contactsLocation_form" id="contactform" name="myForm" onsubmit="return validate()">
                    
                    {{ csrf_field() }}

                    
                        <div class="contactsLocation_form-title">{{trans('Форма обратной связи')}}</div>
                        <div class="contactsLocation_form-subtitle">{{trans('Если у вас остались вопросы, на которые мы сможем вам ответить в процессе разговора - напишите нам. Мы открыты для диалога!')}}</div>
                        <div class="contactsLocation_form_wrapper">
                        <div class="contactsLocation_form_input">
                        <input type="tel" id="tel" name="tel" placeholder="{{trans('Ваш телефон')}}" class="contactsLocation_form-input focus">
                                    <span class="error"></span>
                                    </div>
                         
                                    <div class="contactsLocation_form_input">
                                    <input type="email" placeholder="{{trans('Ваш e-mail')}}" id="email" name="email" class="contactsLocation_form-input focus">
                                    <span class="error"></span>
                                    </div>
                                    <div class="contactsLocation_form_textarea">
                                    <textarea placeholder="{{trans('Ваше сообщение')}}" id="message" name="message" class="contactsLocation_form-textarea focus"></textarea>
                                    <span class="error"></span>
                                    </div>
                           
                        
                        </div>
                      
                    
                            
                        <button type="submit" class="contactsLocation_form-button">{{trans('Отправить')}}</button>
                       
                    </form>
                </div>
              
            </div>
        </section>

        <script>
  function validate() {

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

