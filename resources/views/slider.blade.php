@extends('index')

@section('content')

    <ul  data-speed="6000">
        <li>
            <img src="{{ asset('index/img/slideshow/1.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/2.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/3.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/4.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/5.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/6.jpg') }}" alt="">
        </li>
        <li>
            <img src="{{ asset('img/slideshow/7.jpg') }}" alt="">
        </li>
    </ul>

@endsection
