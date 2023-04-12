@extends('layouts.app')
@section('content')
    @php
        $imageUrls = ['images/image-1.jpg', 'images/image-2.jpg', 'images/image-3.jpg', 'images/image-4.jpg', 'images/image-5.jpg'];
        $imageCaption = 'This is working!';
    @endphp

    @foreach ($imageUrls as $url)
        <x-post :url="$url" :caption="$imageCaption" />
    @endforeach
@endsection
