<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\ContactMain;
use App\Model\FromsCallback;
use App\Model\Options;
class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactMain::latest()->first();
   
        return view('frontend/contacts/index', compact('contacts'));
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
    public function send(Request $request, FromsCallback $model)
    {

        $result = false;
          // выполнять код, если есть POST-запрос
    if ($request->isMethod('post')) {

        // валидация формы
        $request->validate([
            'tel'  => 'required|max:255',
            'email'   => 'required',
            'message' => 'nullable',
        ]);

        $model->tel = $request->tel;
        $model->email = $request->email;
        $model->subject = $request->message;
        $model->form = 'Форма контактов';

        $result = $model->save();
        
        $name = $request->email;
        $email = $request->email;
        $emailTo = Options::latest()->first()->value('email_form');
       
        $header = 'Форма контактов';
        $message = $request->message;;
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
     
    }


    if($result) {
        return back()->with('success','Сообщение было отправлено!');
    }
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
