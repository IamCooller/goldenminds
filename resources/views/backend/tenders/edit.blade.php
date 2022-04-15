@extends('layouts.backend')
@php
    $title = 'Редактировать Тендер';
    $breadcrumbs[] = ['label'=>'Тендеры', 'url' => route('tenders.index')];
@endphp
@section('content')
<div class="card">
    <div class="card-header">
        <script src="{!! url('assets/tinymce/tinymce.min.js') !!}"></script>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ошибка, проверьте поля.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form id="save-content-form" method="post" action="{{ route('tenders.update',$tender->id) }}" enctype="multipart/form-data">
                @csrf
               @method('PUT')
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{ $tender->name }}">
                        <!-- Error -->
                        @if ($errors->has('name'))
                        <div class="error">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Контент</label>
                        <textarea class="form-control" name="content"
                        id="tinymce">{{ $tender->content }}</textarea>
                        @if ($errors->has('content'))
                        <div class="error">
                            {{ $errors->first('content') }}
                        </div>
                        @endif
                    </div>
                 
                    <div class="form-group">
                        <label>Изображение</label>
                        <x-upload-image name="image" :url="$tender->image" :error="$errors->has('image')"/>
                        @if ($errors->has('image'))
                        <div class="error">
                            {{ $errors->first('image') }}
                        </div>
                        @endif
                    </div>
                
                    <div class="form-group">
                        <label>Приём платежей</label>
                        
                        <input type="checkbox" value="1" checked="checked" class="mr-3" name="open" id="open" value="{{ $tender->open }}"> 
         
                    </div>

                    <div class="form-group">
                        <label>Файлы</label>
                        <input type="file" multiple class="form-control {{ $errors->has('files') ? 'error' : '' }}" name="files[]" id="files" value=""> 
                        @foreach($tender->files as $el)
                        {{$el}}
                        @endforeach
                    </div>
                   
                    <input type="submit" name="send" value="Submit" class="btn btn-success btn-block">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#tinymce',
            height: 600
        });

   /*      $(document).ready(function() {

            var formId = '#save-content-form';

            $(formId).on('submit', function(e) {
                e.preventDefault();

                var data = $(formId).serializeArray();
                data.push({name: 'content', value: tinyMCE.get('tinymce').getContent()});

                $.ajax({
                    type: 'POST',
                    url: $(formId).attr('data-action'),
                    data: data,
                    success: function (response, textStatus, xhr) {
                        window.location=response.redirectTo;
                    },
                    complete: function (xhr) {
                        
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        var response = XMLHttpRequest;

                    }
                }); 
            });
        }); */
    </script>
@endsection