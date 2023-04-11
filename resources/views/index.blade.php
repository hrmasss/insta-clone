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
    <form class="my-5 rounded-xl" action="/" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" id="fileInput" name="image" class="hidden" onchange="this.form.submit()">
        <label for="fileInput" class="btn border-0 btn-block bg-gradient-to-r from-base-100 to-base-200 group h-fit">
            <img class="w-8 m-3 transition-all duration-300 group-hover:w-16"
                src="https://cdn-icons-png.flaticon.com/512/9380/9380151.png" alt="Add Image">
        </label>
    </form>
@endsection
