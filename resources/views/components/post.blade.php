<div class="bg-gradient-to-r from-base-100 to-base-200 rounded-xl p-20 my-5">
    <img class="rounded-xl" src="{{ $url }}" alt="{{ $caption }}">

    <div class="flex justify-between my-3">
        <div class="flex gap-5">
            <form action="">
                <input type="hidden" name="imageName" value="">
                <button type="submit">
                    @if (false)
                        <img class="w-8 opacity-50 transition-opacity hover:opacity-100"
                            src="https://cdn-icons-png.flaticon.com/512/9045/9045145.png">
                    @else
                        <img class="w-8 opacity-50 transition-opacity hover:opacity-100"
                            src="https://cdn-icons-png.flaticon.com/512/10302/10302975.png">
                    @endif

                </button>
            </form>
            <form action="">
                <input type="hidden" name="imageName" value="">
                <button type="submit">
                    <img class="w-8 opacity-50 transition-opacity hover:opacity-100"
                        src="https://cdn-icons-png.flaticon.com/512/9741/9741360.png">
                </button>
            </form>
        </div>

        <button type="submit">
            <img class="w-8 opacity-50 transition-opacity hover:opacity-100"
                src="https://cdn-icons-png.flaticon.com/512/875/875584.png">
        </button>
    </div>

    <div class="font-sans tracking-wide text-justify text-neutral-content">
        {{ $caption }}
    </div>

</div>