<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Горячие блюда</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

@extends('layouts.app')

@section('content')
<nav>
    <ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">Горячие блюда</a></li>
        <li><a href="#">Холодные блюда</a></li>
    </ul>
</nav>

<div class="container mt-4">

<h1 class="title">ГОРЯЧИЕ БЛЮДА</h1>
<div class="line"></div>
    <div class="arrow"></div>
    <div class="row">
        @foreach ($dishes as $dish)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset($dish->image_path) }}" alt="{{ $dish->name }}">
                    <div class="card-body">
                        <h5>{{ $dish->name }}</h5>
                        <p>{{ $dish->description }}</p>

                        <div class="time">
                            <img src="{{ asset($dish->time_image) }}" alt="Время приготовления" style="width: 20px; height: 20px;">
                            <span>{{ $dish->time }}</span>
                        </div>

                        <div class="difficulty">
                            <img src="{{ asset($dish->difficulty_image) }}" alt="Сложность" style="width: 20px; height: 20px;">
                            <span>{{ $dish->difficulty }}</span>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="#" class="btn btn-success">Посмотреть больше</a>
</div>
@endsection

</body>
</html>