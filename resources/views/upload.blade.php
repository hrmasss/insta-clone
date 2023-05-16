@extends('layouts.app')

@section('content')
    <div class="w-full p-10 rounded-xl bg-gradient-to-r from-base-100 to-base-200 flex justify-center">
        <form class="rounded-xl flex justify-center items-center h-full flex-wrap w-3/4" action="/upload" method="POST"
            enctype="multipart/form-data">
            @csrf
            <input type="file" id="file-input" name="image" class="hidden" onchange="showPreview(event);">
            <label for="file-input" class="cursor-pointer">
                <img id="preview" class="rounded-xl max-h-80 hover:max-h-96 transition-all duration-300 ease-in-out"
                    src="https://cdn-icons-png.flaticon.com/512/10025/10025551.png" alt="Upload">
            </label>
            <h1 class="my-5 text-3xl font-[Rochester] tracking-wide text-secondary w-full text-center hide-after-select">
                Share your moments
            </h1>
            <textarea hidden class="w-full my-5 p-5 bg-transparent resize-none outline-none reveal-after-select" name="caption"
                rows="1" placeholder="WRITE A CAPTION"></textarea>
            <button hidden type="submit" class="btn btn-block reveal-after-select">Post</button>
        </form>
    </div>

    <script>
        const input = document.getElementById('file-input');
        const preview = document.getElementById('preview');
        const itemsToHide = document.getElementsByClassName('hide-after-select');
        const itemsToReveal = document.getElementsByClassName('reveal-after-select');

        function showPreview(event) {
            if (input.files[0]) {
                preview.src = URL.createObjectURL(input.files[0]);
            }

            [...itemsToHide].forEach(item => {
                item.setAttribute("hidden", true);
            });

            [...itemsToReveal].forEach(item => {
                item.removeAttribute("hidden");;
            });
        }
    </script>
@endsection
