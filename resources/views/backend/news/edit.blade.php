@extends('layouts.backend')
@php
    $title = 'Edit';
    $breadcrumbs[] = ['label'=>'Articles', 'url' => route('news.index')];
@endphp
@section('content')
<div class="card">
    <div class="card-header">
        <script src="{!! url('assets/tinymce/tinymce.min.js') !!}"></script>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form id="save-content-form" method="post" action="{{ route('news.update', $model->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{ $model->name }}">
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
                        id="tinymce">{{ $model->content }}</textarea>
                        @if ($errors->has('content'))
                        <div class="error">
                            {{ $errors->first('content') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Автор</label>
                        <input type="text" class="form-control {{ $errors->has('author') ? 'error' : '' }}" name="author" id="author" value="{{ $model->author }}">
                        @if ($errors->has('author'))
                        <div class="error">
                            {{ $errors->first('author') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Главное изображение</label>
                        <x-upload-image name="image" :url="$model->image" :error="$errors->has('image')"/>
                        @if ($errors->has('image'))
                        <div class="error">
                            {{ $errors->first('image') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="image_label">Image</label>
                                <div class="input-group">
                                    <input type="text" id="image1" class="form-control" name="images"
                                           aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image_label">Image2</label>
                                <div class="input-group">
                                    <input type="text" id="image2" class="form-control" name="images"
                                           aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image2">Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<label>Дополнительные изображения</label>
                        <input type="file" multiple class="form-control {{ $errors->has('images') ? 'error' : '' }}" name="images[]" id="images">
                        -->@if ($errors->has('images'))
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