<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Model\Vacancy;
use Illuminate\Http\Request;
use App\Model\FromsCallback;
use App\Model\Options;
use Illuminate\Support\Facades\Storage;
class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $vacancy = Vacancy::all();
        return view('frontend.institute.vacancy', compact('vacancy'));
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

    public function send(Request $request, FromsCallback $model)
    {

        $result = false;
          // выполнять код, если есть POST-запрос
           // валидация формы
        $request->validate([
            'tel'  => 'required|max:255',
            'email'   => 'required',
            'name' =>'required|max:255',
            'file'=>'max:3000',
            'subject' => 'nullable',
        ]);

    if ($request->isMethod('post')) {

       
        $model->tel = $request->tel;
        $model->email = $request->email;
        $model->subject = $request->subject;
        $model->name = $request->name;
        $model->vacancy = $request->vacancy;
        
        

        $file = $request->file('file');
        $upload_folder = 'public/rezume/';

  
        $filename = $file->getClientOriginalName(); // image.jpg

        Storage::putFileAs($upload_folder, $file, $filename);
        
        $model->file = '/storage/rezume/'.$filename;
        

     
        $model->form = 'Форма Вакансии';

        $result = $model->save();
        
        $name = $request->email;
        $email = $request->email;
        $tel = $request->tel;
        $vacancy = $request->vacancy;
        $file = $request->file;
        $emailTo = Options::latest()->first()->value('emailVac');
       
        $header = 'Форма Вакансии';
        $message = $request->subject;;
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = "ФИО: $name \nE-mail: $email\nТелефон: $tel\nВакансия: $vacancy\nРезюме: $file \nТема: $header \nТекст: $message";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
     
    }


    if($result) {
        return back()->with('success','Сообщение было отправлено!');
    }
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
