

@extends('layouts.main')



@section('content')   
<section class="instituteMain" data-aos="fade-down">
            <div class="_container">
                <div class="instituteMain__body">

                @include('frontend.institute.submenu')

                    <h1 class="instituteMain__body-title">
                    {{trans('Вакансии')}}
                    </h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">{{trans('Главная')}}</a></li>
                    <li><span> {{trans('Вакансии')}}</span></li>
                </ul>
            </div>
        </section>

        <section class="vacancy" data-aos="fade-down">

            <div class="_container">
                <div class="sidebar__wrapp">
                    <ul class="sidebar__left">
                        <li><a class="active" href="#vacancy">{{trans('Вакансии')}}</a></li>
                        <li><a href="#requirements">{{trans('Общие требования к кандидатам')}}</a></li>
                        <li><a href="#document">{{trans('Отправить документ для трудоустройства')}}</a></li>
                    </ul>
                    <div class="sidebar__right">
                        <div class="sidebar__right_block" id="vacancy">
                            <div class="sidebar__right_block_accordions">
                               @foreach($vacancy as $el)
                               @if(($el->tab == 0) && ($el->title) ) 
                                <button class="accordion">{{$el->title}}<svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.43639 8.65791L14.8728 8.65791L11.9666 11.5649C10.3682 13.1637 9.06046 14.5087 9.06046 14.5538C9.06046 14.5988 9.30453 14.8779 9.6028 15.1739L10.1452 15.7122L14.0727 11.7841L18 7.8561L14.0727 3.92811L10.1452 4.34256e-05L9.6028 0.5383C9.30453 0.834328 9.06046 1.11336 9.06046 1.15842C9.06046 1.20348 10.3682 2.54852 11.9666 4.14733L14.8728 7.05429L7.43639 7.05429L-3.78447e-07 7.05429L-3.43399e-07 7.8561L-3.08351e-07 8.65791L7.43639 8.65791Z" fill="#1E2A5E"/>
                                    </svg>
                                    </button>
                                <div class="panel">
                                    <div class="accordion-title">{{$el->vacancy}}</div>
                                    {!! $el->vacancy_desc !!}
                                    <div class="accordion-title">{{trans('Обязанности')}}:</div>
                                    {!! $el->function !!}
                                    <div class="accordion-title">{{trans('Требования')}}: ​​​​</div>
                                    {!! $el->requirement !!}
                                    <div class="accordion-title">{{trans('Условия работы')}}: ​​​​</div>
                                    {!! $el->conditions !!}
                                    </p>
                                    <div class="accordion-title">{{trans('Ключевые навыки')}}: ​​​​</div>
                                    {!! $el->skills !!}
                                </div>
                                @endif
                                @endforeach
                   
                            </div>
                            <form method="POST" class="vacancy__form" id="contactform" name="myForm1" enctype="multipart/form-data" onsubmit="return validate1()">
                             @csrf

                                <div class="vacancy__form-title">{{trans('Отправить свое резюме')}}</div>
                                <div class="vacancy__form_wrapper">
                                <div class="vacancy__form_wrapper_input">
                                <input type="text" name="name" id='name' placeholder="{{trans('Ваше ФИО')}}" class="focus">
                                    <span class="error"></span>
                                    </div>
                                    
                                    <div class="vacancy__form_wrapper_input">
                                    <input type="email" name="email" id="email" placeholder="{{trans('Ваш e-mail')}}" class="focus">
                                    <span class="error"></span>
                                    </div>
                                    <div class="vacancy__form_wrapper_input">
                                    <input type="tel" name="tel" id="tel" placeholder="{{trans('Ваш телефон')}}" class="focus">
                                    <span class="error"></span>
                                    </div>
                                    
                                    
                                    <div class="select">
                                        
                                  
                                        <input class="select__input" type="hidden" name="vacancy" id="vacancy">
                                      
                                 
                                        <div class="select__head">{{trans('Вакансии')}}</div>
                                        <ul class="select__list" style="display: none;">
                                        @foreach($vacancy as $el)
                                        @if($el->title)
                                            <li class="select__item">{{$el->vacancy}}</li>
                                        @endif
                                        @endforeach
                                        </ul>

                                        <span class="error"></span>
                                    </div>
                                    <div class="file_upload" id="file" >
                                        <button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 18C4.46 18 2 15.535 2 12.5C2 9.465 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.12 15 7 13.88 7 12.5C7 11.12 8.12 10 9.5 10H17V11.5H9.5C8.95 11.5 8.5 11.945 8.5 12.5C8.5 13.055 8.95 13.5 9.5 13.5H18C19.38 13.5 20.5 12.38 20.5 11C20.5 9.62 19.38 8.5 18 8.5H7.5C5.29 8.5 3.5 10.29 3.5 12.5C3.5 14.71 5.29 16.5 7.5 16.5H17V18H7.5Z" fill="#263475"/>
                                            </svg>
                                            </button>
                                        <div>{{trans('Файл')}}</div>
                                        <p>{{trans('Максималый размер файла 3.00мб')}}</p>
                                        <input type="file" name="file" id="file" class="focus">
                                        <span class="error"></span>
                                    </div>
                                    <div class="vacancy__form_wrapper_textarea">
                                    <textarea placeholder="Сообщение" type="text" name="subject" id="subject" class="focus"></textarea>
                                    <span class="error"></span>
                                    </div>
                                    
                                </div>

                                <button class="vacancy__form-button button" type="submit">{{trans('Отправить')}}</button>
                               
                            </form>
                        </div>
                        <div class="sidebar__right_block" id="requirements">
                            <div class="sidebar__right_block_accordions">
                            @foreach($vacancy as $el)
                               @if(($el->tab == 1) && ($el->title)) 
                                <button class="accordion">{{$el->title}}<svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.43639 8.65791L14.8728 8.65791L11.9666 11.5649C10.3682 13.1637 9.06046 14.5087 9.06046 14.5538C9.06046 14.5988 9.30453 14.8779 9.6028 15.1739L10.1452 15.7122L14.0727 11.7841L18 7.8561L14.0727 3.92811L10.1452 4.34256e-05L9.6028 0.5383C9.30453 0.834328 9.06046 1.11336 9.06046 1.15842C9.06046 1.20348 10.3682 2.54852 11.9666 4.14733L14.8728 7.05429L7.43639 7.05429L-3.78447e-07 7.05429L-3.43399e-07 7.8561L-3.08351e-07 8.65791L7.43639 8.65791Z" fill="#1E2A5E"/>
                                    </svg>
                                    </button>
                                <div class="panel">
                                    <div class="accordion-title">{{$el->vacancy}}</div>
                                    {!! $el->vacancy_desc !!}
                                    <div class="accordion-title">{{trans('Обязанности')}}:</div>
                                    {!! $el->function !!}
                                    <div class="accordion-title">{{trans('Требования')}}: ​​​​</div>
                                    {!! $el->requirement !!}
                                    <div class="accordion-title">{{trans('Условия работы')}}: ​​​​</div>
                                    {!! $el->conditions !!}
                                    </p>
                                    <div class="accordion-title">{{trans('Ключевые навыки')}}: ​​​​</div>
                                    {!! $el->skills !!}
                                </div>
                                @endif
                                @endforeach
                            </div>

                        </div>
                        <div class="sidebar__right_block" id="document" >
                            <form method="POST" class="vacancy__form" id="contactform" name="myForm" enctype="multipart/form-data" onsubmit="return validate()">
                             @csrf

                                <div class="vacancy__form-title">{{trans('Отправить свое резюме')}}</div>
                                <div class="vacancy__form_wrapper">
                                <div class="vacancy__form_wrapper_input">
                                <input type="text" name="name" id='name' placeholder="{{trans('Ваше ФИО')}}" class="focus">
                                    <span class="error"></span>
                                    </div>
                                    
                                    <div class="vacancy__form_wrapper_input">
                                    <input type="email" name="email" id="email" placeholder="{{trans('Ваш e-mail')}}" class="focus">
                                    <span class="error"></span>
                                    </div>
                                    <div class="vacancy__form_wrapper_input">
                                    <input type="tel" name="tel" id="tel" placeholder="{{trans('Ваш телефон')}}" class="focus">
                                    <span class="error"></span>
                                    </div>
                                    
                                    
                                    <div class="select">
                                
                                        <input class="select__input" type="hidden" name="vacancy" id="vacancy">
                                       
                                  
                                        <div class="select__head">{{trans('Вакансии')}}</div>
                                        <ul class="select__list" style="display: none;">
                                        @foreach($vacancy as $el)
                                        @if($el->title)
                                            <li class="select__item">{{$el->vacancy}}</li>
                                        @endif
                                        @endforeach
                                        </ul>
                                        <span class="error"></span>
                                    </div>
                                    <div class="file_upload" id="file" >
                                        <button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 18C4.46 18 2 15.535 2 12.5C2 9.465 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.12 15 7 13.88 7 12.5C7 11.12 8.12 10 9.5 10H17V11.5H9.5C8.95 11.5 8.5 11.945 8.5 12.5C8.5 13.055 8.95 13.5 9.5 13.5H18C19.38 13.5 20.5 12.38 20.5 11C20.5 9.62 19.38 8.5 18 8.5H7.5C5.29 8.5 3.5 10.29 3.5 12.5C3.5 14.71 5.29 16.5 7.5 16.5H17V18H7.5Z" fill="#263475"/>
                                            </svg>
                                            </button>
                                        <div>{{trans('Файл')}}</div>
                                        <p>{{trans('Максималый размер файла 3.00мб')}}</p>
                                        <input type="file" name="file" id="file" class="focus">
                                        <span class="error"></span>
                                    </div>
                                    <div class="vacancy__form_wrapper_textarea">
                                    <textarea placeholder="Сообщение" type="text" name="subject" id="subject" class="focus"></textarea>
                                    <span class="error"></span>
                                    </div>
                                    
                                </div>

                                <button class="vacancy__form-button button" type="submit">{{trans('Отправить')}}</button>
                               
                            </form>
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
        a.parentElement.querySelector('.error').innerText = "{{trans('Укажите ваше ФИО')}}";
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


    let g = document.forms["myForm"]["vacancy"];
    if (g.value == "") {
        g.classList.add("errorInput");
        g.parentElement.querySelector('.error').innerText ="{{trans('Выбирете вакансию')}}";
      return false;
    }else{
        g.classList.remove('errorInput');
        g.parentElement.querySelector('.error').innerText='';
    }
    let j = document.forms["myForm"]["file"];
    if (j.value == "") {
        j.classList.add("errorInput");
        j.parentElement.querySelector('.error').innerText ="{{trans('Добавьте резюме')}}";
      return false;
    }else{
        j.classList.remove('errorInput');
        j.parentElement.querySelector('.error').innerText='';
    }

    if(j.files[0].size > 3145728 ){
        j.classList.add("errorInput");
        j.parentElement.querySelector('.error').innerText ="{{trans('Слишком большой файл')}}";
      return false;
    }else{
        j.classList.remove('errorInput');
        j.parentElement.querySelector('.error').innerText='';
    }
    

    if ((d.value == "") || (!regex.test(d.value))) {

      d.classList.add("errorInput");
        d.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш телефон')}}";
      return false;
    }else{
        d.classList.remove('errorInput');
        d.parentElement.querySelector('.error').innerText='';
    }
 
    let x = document.forms["myForm"]["subject"];
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
<script>
  function validate1() {
   
      let a = document.forms["myForm1"]["name"];
    if (a.value == "") {
        a.classList.add("errorInput");
        a.parentElement.querySelector('.error').innerText = "{{trans('Укажите ваше ФИО')}}";
      return false;
    }else{
        a.classList.remove('errorInput');
        a.parentElement.querySelector('.error').innerText='';
    }
    let c = document.forms["myForm1"]["email"];
    if (c.value == "") {
        c.classList.add("errorInput");
        c.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш Email')}}";
      return false;
    }else{
        c.classList.remove('errorInput');
        c.parentElement.querySelector('.error').innerText='';
    }
    let d = document.forms["myForm1"]["tel"];
    let regex = /^((8|\+7|\+3)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;



    if ((d.value == "") || (!regex.test(d.value))) {

      d.classList.add("errorInput");
        d.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш телефон')}}";
      return false;
    }else{
        d.classList.remove('errorInput');
        d.parentElement.querySelector('.error').innerText='';
    }
    let g = document.forms["myForm1"]["vacancy"];
    if (g.value == "") {
        g.classList.add("errorInput");
        g.parentElement.querySelector('.error').innerText ="{{trans('Добавьте резюме')}}";
      return false;
    }else{
        g.classList.remove('errorInput');
        g.parentElement.querySelector('.error').innerText='';
    }

    let j = document.forms["myForm1"]["file"];
    if (j.value == "") {
        j.classList.add("errorInput");
        j.parentElement.querySelector('.error').innerText ="{{trans('Добавьте резюме')}}";
      return false;
    }else{
        j.classList.remove('errorInput');
        j.parentElement.querySelector('.error').innerText='';
    }
    
    if(j.files[0].size > 3145728){
        j.classList.add("errorInput");
        j.parentElement.querySelector('.error').innerText ="{{trans('Слишком большой файл')}}";
        console.log(j.files[0].size);
      return false;
    }else{
        j.classList.remove('errorInput');
        j.parentElement.querySelector('.error').innerText='';
    }
    let x = document.forms["myForm1"]["subject"];
    if (x.value == "") {

      x.classList.add("errorInput");
        x.parentElement.querySelector('.error').innerText ="{{trans('Введите сщщбщение')}}";
      return false;
    }else{
        x.classList.remove('errorInput');
        x.parentElement.querySelector('.error').innerText='';
    }

 
    
    }
</script>
@endsection

