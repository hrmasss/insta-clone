@extends('layouts.app')

@section('content')
    @php
        // Set maximum numbers of displayed images
        $imageLimit = 5;
    @endphp

    {{-- Image preview --}}
    <div class="my-10 rounded-xl flex gap-3">
        @foreach ($images as $index => $image)
            @if ($index < $imageLimit)
                <label for="image-modal-{{ $index }}"
                    class="btn border-0 bg-[url('{{ asset($image) }}')] h-96 basis-1 grow rounded-xl bg-cover hover:basis-6/12 bg-center transition-all duration-300 ease-in-out cursor-pointer">
                </label>
            @endif
        @endforeach
        <div
            class="group btn border-0 h-96 basis-1 grow rounded-xl hover:basis-6/12 transition-all duration-300 ease-in-out">
            <a href="/upload" class="block w-full h-full flex justify-center items-center p-5">
                <img class="object-contain max-w-32 max-h-32 w-8 m-3 transition-all duration-300 group-hover:w-full"
                    src="https://cdn-icons-png.flaticon.com/512/9380/9380151.png" alt="Add Image">
            </a>
        </div>
    </div>

    <!-- Image modal -->
    @foreach ($images as $index => $image)
        @if ($index < $imageLimit)
            <input type="checkbox" id="image-modal-{{ $index }}" class="modal-toggle" />
            <label for="image-modal-{{ $index }}" class="modal">
                <div class="modal-box max-w-full p-0">
                    <img src="{{ asset($image) }}" alt="Photo">
                </div>
            </label>
        @endif
    @endforeach

    <!-- Add image button -->
    <div
        class="my-5 rounded-xl bg-gradient-to-r from-base-100 to-base-200 p-5 text-lg tracking-[0.5rem] hover:tracking-[1rem] transition-all duration-300 ease-in-out">
        <a href="/feed" class="uppercase font-medium text-center block text-secondary">
            All Posts
        </a>
    </div>
@endsection
