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
                <form id="save-content-form" method="post" action="{{ route('structure.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label>Главное изображение</label>
                       
                        <input type="file" class="form-control {{ $errors->has('image') ? 'error' : '' }}" name="image" id="image" value="{{$Structure->image}}"> 

                        {{$Structure->image}}
    
                    </div>
                        <div class="form-group">
                        <label>Ссылка</label>
                        <input type="text" class="form-control {{ $errors->has('link') ? 'error' : '' }}" name="link" id="link" value="{{ $Structure->link }}">    
                        <!-- Error -->
                        @if ($errors->has('link'))
                        <div class="error">
                            {{ $errors->first('link') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Таблица</label>
                        <textarea class="form-control" name="content"
                        id="tinymce">{{ $Structure->content }}</textarea>
                        @if ($errors->has('content'))
                        <div class="error">
                            {{ $errors->first('content') }}
                        </div>
                        @endif
                    </div>
                  
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