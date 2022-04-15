@extends('layouts.backend')
@php
    $title = 'Создать Новость';
    $breadcrumbs[] = ['label'=>'Новости', 'url' => route('news.index')];
@endphp
@section('content')
<div class="card">
    <div class="card-header">
        <script src="{!! url('assets/tinymce/tinymce.min.js') !!}"></script>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form id="save-content-form" method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{ old('name') }}">
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
                        id="tinymce">{{ old('content') }}</textarea>
                        @if ($errors->has('content'))
                        <div class="error">
                            {{ $errors->first('content') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Автор</label>
                        <input type="text" class="form-control {{ $errors->has('author') ? 'error' : '' }}" name="author" id="author" value="{{ old('author') }}">
                        @if ($errors->has('author'))
                        <div class="error">
                            {{ $errors->first('author') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Главное изображение</label>
                        <input type="file" class="form-control {{ $errors->has('image') ? 'error' : '' }}" name="image" id="image" value="{{ old('image') }}">
                        @if ($errors->has('image'))
                        <div class="error">
                            {{ $errors->first('image') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Дополнительные изображения</label>
                        <input type="file" multiple class="form-control {{ $errors->has('images') ? 'error' : '' }}" name="images[]" id="images" value="{{ old('images') }}">
                        @if ($errors->has('images'))
                        <div class="error">
                            {{ $errors->first('images') }}
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