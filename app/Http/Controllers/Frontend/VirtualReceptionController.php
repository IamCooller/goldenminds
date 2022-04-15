<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\FromsCallback;
use App\Model\Virtual;
use App\Model\Options;
class VirtualReceptionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $virtual = virtual::latest()->first();
   
        return view('frontend/virtual-reception/index',compact('virtual'));
    }

    public function send(Request $request, FromsCallback $model)
    {

       

    if ($request->isMethod('post')) {

       
        $model->tel = $request->tel;
        $model->email = $request->email;
        $model->service = $request->service;
        $model->name = $request->name;
        $model->index = $request->indexx;
        $model->subject = $request->message;
      //  $model->count+1
  
      Virtual::latest()->first()->increment('count');

        
        
        $model->form = 'Форма виртуальной приемной';

        $result = $model->save();
        
        $name = $request->name;
        $email = $request->email;
        $tel = $request->tel;
        $service = $request->service;
        $index = $request->indexx;

        $emailTo = Options::latest()->first()->value('email');
       
        $header = 'Форма виртуальной приемной';
        $headerTo = 'Виртуальная приемная';
        $message = $request->message;;
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = "Имя: $name \nE-mail: $email\nТелефон: $tel\nСервис: $service\nИндекс: $index \nТема: $header \nТекст: $message";
        $mesTo= "Здравствуйте: $name \nМы скоро с вами свяжемся";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
        $sendTo = mail($email, $headerTo, $mesTo, "Content-type:text/plain; charset = UTF-8\r\nFrom:$emailTo");
    }


    if($result) {
        return back()->with('success','Сообщение было отправлено!');
    }
    }
    
}


