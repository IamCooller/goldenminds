@extends('layouts.backend')
@php
    $title = 'Основные направления';
   
@endphp
@section('content')
<div class="card">
    <div class="card-header">
        <script src="{!! url('assets/tinymce/tinymce.min.js') !!}"></script>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form id="save-content-form" method="post" action="{{ route('mainstream.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label>Загловок</label>
                       
                        <input type="text" class="form-control {{ $errors->has('title') ? 'error' : '' }}" name="title" id="title" value="{{ $mainstream->title }}">    
                        <!-- Error -->
                        @if ($errors->has('title'))
                        <div class="error">
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                    </div>
                        <div class="form-group">

                        <label>Текст</label>
                        <textarea class="form-control" name="content"
                        id="tinymce">{{ $mainstream->content }}</textarea>
                        @if ($errors->has('content'))
                        <div class="error">
                            {{ $errors->first('content') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Проектирование</label>
                        <textarea class="form-control" name="project_content"
                        id="tinymce">{{ $mainstream->project_content }}</textarea>
                        @if ($errors->has('project_content'))
                        <div class="error">
                            {{ $errors->first('project_content') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                    <label>Расчеты</label>
                        <textarea class="form-control" name="economy_content"
                        id="tinymce">{{ $mainstream->economy_content }}</textarea>
                        @if ($errors->has('economy_content'))
                        <div class="error">
                            {{ $errors->first('economy_content') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                         <label>Консультация</label>
                        <textarea class="form-control" name="advice_content"
                        id="tinymce">{{ $mainstream->advice_content }}</textarea>
                        @if ($errors->has('advice_content'))
                        <div class="error">
                            {{ $errors->first('advice_content') }}
                        </div>
                        @endif
                    </div>
                    <label>Файл</label>
                        <input type="file" class="form-control {{ $errors->has('files') ? 'error' : '' }}" name="files" id="files" value="{{$mainstream->files}}"> 

                        {{$mainstream->files}}
                     
          
                 
                    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
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

     /*    $(document).ready(function() {

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