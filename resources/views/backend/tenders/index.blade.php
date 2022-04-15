@extends('layouts.backend')

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="{{ route('tenders.create') }}">Создать</a>
    </div>
    <div class="card-body">
        <div class="row">
      
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Изображение</th>
                            <th scope="col">Дата</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($tenders) > 0)
                            @foreach ($tenders as $tender)
                                <tr>
                                    <th scope="row">{{ $tender->id }}</th>
                                    <td>{{ $tender->name }}</td>
                                    <td><img src="{{ $tender->image }}" width="100px"></td>
                                    <td>{{ $tender->created_at }}</td>
                                    <td>
                                    <form action="{{ route('tenders.destroy',$tender->id) }}" method="POST">
     
                                            <a class="btn btn-info" href="{{ route('tenders.show',$tender->id) }}">Открыть</a>

                                            <a class="btn btn-primary" href="{{ route('tenders.edit',$tender->id) }}">Редактировать</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                        </form>
                                    </td>
                                </tr>


                            @endforeach
                        @else
                            <tr>
                                <th colspan="3" class="text-center">Ничего не найдено</th>
                           </tr>
                        @endif
                    </tbody>
                </table>
                {!! $tenders->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection