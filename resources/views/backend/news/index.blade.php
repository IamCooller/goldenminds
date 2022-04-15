@extends('layouts.backend')

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="{{ route('news.create') }}">Создать</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Автор</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($news) > 0)
                            @foreach ($news as $new)
                                <tr>
                                    <th scope="row">{{ $new->id }}</th>
                                    <td>{{ $new->name }}</td>
                                    <td>{{ $new->author }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('news.edit', $new->id) }}" class="btn btn-warning"><i class="fa-fw fas fa-edit"></i></a>
                                        <form action="{{ route('news.destroy', $new->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit"><i class="fa-fw fas fa-trash"></i></button>
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
                {!! $news->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection