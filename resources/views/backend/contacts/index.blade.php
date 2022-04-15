@extends('layouts.backend')
@php
    $title = 'Контакты';
   
@endphp
@section('content')
<div class="card">
    <div class="card-header">
        <script src="{!! url('assets/tinymce/tinymce.min.js') !!}"></script>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form id="save-content-form" method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label>Номер телефона №1:</label>
                       
                        <input type="tel" class="form-control {{ $errors->has('tel1') ? 'error' : '' }}" name="tel1" id="tel1" value="{{ $contacts->tel1 }}">    
                        <!-- Error -->
                        @if ($errors->has('tel1'))
                        <div class="error">
                            {{ $errors->first('tel1') }}
                        </div>
                        @endif
                        <label>Номер телефона №2:</label>
                        <input type="tel" class="form-control {{ $errors->has('tel2') ? 'error' : '' }}" name="tel2" id="tel2" value="{{ $contacts->tel2 }}">
                              <!-- Error -->
                              @if ($errors->has('tel2'))
                        <div class="error">
                            {{ $errors->first('tel2') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" value="{{ $contacts->email }}">
                              <!-- Error -->
                              @if ($errors->has('email'))
                        <div class="error">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>График работы</label>
                        <input type="text" class="form-control {{ $errors->has('schedule') ? 'error' : '' }}" name="schedule" id="schedule" value="{{ $contacts->schedule }}">
                        @if ($errors->has('schedule'))
                        <div class="error">
                            {{ $errors->first('schedule') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Рабочее время</label>
                        <input type="text" class="form-control {{ $errors->has('time') ? 'error' : '' }}" name="time" id="time" value="{{ $contacts->time }}">
                        @if ($errors->has('time'))
                        <div class="error">
                            {{ $errors->first('time') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Перерыв</label>
                        <input type="text" class="form-control {{ $errors->has('pause') ? 'error' : '' }}" name="pause" id="pause" value="{{ $contacts->pause }}">
                        @if ($errors->has('pause'))
                        <div class="error">
                            {{ $errors->first('pause') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Выходные дни</label>
                        <input type="text" class="form-control {{ $errors->has('rest') ? 'error' : '' }}" name="rest" id="rest" value="{{ $contacts->rest }}">
                        @if ($errors->has('rest'))
                        <div class="error">
                            {{ $errors->first('rest') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Адрес</label>
                        <input class="form-control" name="address" id="tinymce" value="{{ $contacts->address }}">
                        @if ($errors->has('address'))
                        <div class="error">
                            {{ $errors->first('address') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Карта</label>
                        <input type="text" class="form-control {{ $errors->has('map') ? 'error' : '' }}" name="map" id="map" value="{{ $contacts->map }}">
                        @if ($errors->has('map'))
                        <div class="error">
                            {{ $errors->first('map') }}
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