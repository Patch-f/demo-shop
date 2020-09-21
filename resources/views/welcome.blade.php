@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
        <h1>Тест API</h1>
        <p class="lead text-muted">
            Проект представляет из себя импровизированный магазин. 
            Создан для того, чтобы показать работу с <a href="{{route('help.api')}}">API</a>.
            На этой странице общий список данных.
        </p>
        <p>
            {{-- <a href="#" class="btn btn-primary my-2">На главную</a> --}}
            <a href="{{route('help.api')}}" class="btn btn-secondary my-2">Справка по API</a>
        </p>
        </div>
    </section>
    <section class="text-center">
        <div class="container">
            <h2>Товары</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Название</th>
                        <th>Цена</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                    <tr>
                        <th>{{$item['id']}}</th>
                        <th>{{$item['name']}}</th>
                        <th>{{$item['price']}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section class="text-center">
        <div class="container">
            <h2>Категории</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Название</th>
                        <th>Товаров</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                    <tr>
                        <th>{{$item['id']}}</th>
                        <th>{{$item['name']}}</th>
                        <th>{{$item->products()->count()}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection