<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Model\FromsCallback;
use App\Model\Options;

use Illuminate\Http\Request;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, FromsCallback $model)
    {
               $result = false;
          // выполнять код, если есть POST-запрос
    if ($request->isMethod('post')) {

        // валидация формы
        $request->validate([
            'email'   => 'required',
        ]);

        $model->email = $request->email;
        $model->form = 'Форма Подписки';

        $result = $model->save();
        

        $email = $request->email;
        $emailTo = Options::latest()->first()->value('email_form');
       
        $header = 'Форма Подписки';
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = " \nE-mail: $email \nТема: $header \nТекст: $email";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
     
    }


    if($result) {
        return back()->with('success','Подписка оформлена!');
    }
    }

    public function send(Request $request, FromsCallback $model)
    {
               $result = false;
          // выполнять код, если есть POST-запрос
    if ($request->isMethod('post')) {

        // валидация формы
        $request->validate([
            'tel'   => 'required',
            'email'   => 'required',
            'subject'   => 'required',
        ]);

        $model->email = $request->email;
        $model->tel = $request->tel;
        $model->subject = $request->subject;
        $model->form = 'Форма Обратной связи';

        $result = $model->save();
        

        $email = $request->email;
        $tel = $request->tel;
        $subject = $request->subject;
        $emailTo = Options::latest()->first()->value('email_form');
       
        $header = 'Форма Обратной связи';
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = " \nE-mail: $email \nТема: $header  \Телефон: $tel \nТекст: $subject";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
     
    }


    if($result) {
        return back()->with('success','Сообщение отправлено!');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
