@extends('layouts.app')

@section('content')
    {{-- Image Preview --}}
    <div class="my-10 rounded-xl flex gap-3">
        @foreach ($images as $image)
            <label for="image-modal"
                class="btn border-0 bg-[url('{{ asset($image) }}')] h-96 basis-1 grow rounded-xl bg-cover hover:basis-6/12 bg-center transition-all duration-300 ease-in-out cursor-pointer">
            </label>
        @endforeach
    </div>

    <!-- Image Modal -->
    <input type="checkbox" id="image-modal" class="modal-toggle" />
    <label for="image-modal" class="modal">
            <div class="modal-box max-w-full p-0">
                <img src="{{ asset($image) }}" alt="Photo">
            </div>
    </label>

    <!-- Add Image Button -->
    <div class="my-5 rounded-xl">
        <input type="file" id="fileInput" class="hidden">
        <label for="fileInput" class="btn border-0 btn-block bg-gradient-to-r from-base-100 to-base-200 group h-fit">
            <img class="w-8 m-3 transition-all duration-300 group-hover:w-16"
                src="https://cdn-icons-png.flaticon.com/512/9380/9380151.png" alt="Add Image">
        </label>
    </div>
@endsection
