@extends('layouts.app')

@section('content')
    <div class="w-full p-10 rounded-xl bg-gradient-to-r from-base-100 to-base-200 flex justify-center">
        <form class="rounded-xl flex justify-center items-center h-full flex-wrap w-3/4" action="/upload" method="POST"
            enctype="multipart/form-data">
            @csrf
            <input type="file" id="fileInput" name="image" class="hidden">
            <label for="fileInput"
                class="cursor-pointer opacity-70 hover:opacity-100 transition-all duration-300 ease-in-out">
                <img class="max-w-48 max-h-48" src="https://cdn-icons-png.flaticon.com/512/10025/10025551.png"
                    alt="Upload">
            </label>
            <h1 class="my-5 text-3xl font-[Rochester] tracking-wide text-secondary w-full text-center">Share your moments
            </h1>
            <textarea class="w-full my-5 p-5 bg-transparent resize-none outline-none" name="caption" rows="1"
                placeholder="WRITE A CAPTION"></textarea>
            <button type="submit" class="btn btn-block">Post</button>
        </form>
    </div>
@endsection
