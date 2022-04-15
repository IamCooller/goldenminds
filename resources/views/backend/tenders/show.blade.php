@extends('layouts.backend')
@php
    $title = 'Тендер';
    $breadcrumbs[] = ['label'=>'Тендеры', 'url' => route('tenders.index')];
@endphp
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb d-flex ">
            <div class="pull-right ml-auto">
                <a class="btn btn-primary" href="{{ route('tenders.index') }}"> Назад</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Название:</strong>
                {{ $tender->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Описание:</strong>
                {!! $tender->content !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Изображение:</strong>
                <img src="{{ $tender->image }}" width="500px" class="d-block">
            </div>
        </div>
    </div>
@endsection