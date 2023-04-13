<!DOCTYPE html>
<html data-theme="synthwave" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1384/1384172.png">
    <title>InstaBudget</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">

    {{-- DaisyUI & TailwindCSS, Replace with npm packages for prod. --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-screen">
    <div class="mb-5 px-80 z-10 h-fit navbar sticky top-0 bg-transparent backdrop-filter backdrop-blur-lg bg-opacity-50 flex justify-between">
        <a href="/">
            <img class="w-8 transition-all duration-300 hover:opacity-100 opacity-70"
                src="https://cdn-icons-png.flaticon.com/512/1384/1384172.png" alt="Logo">
        </a>
        <span class="font-[Rochester] text-lg tracking-wide font-semibold text-primary">InstaBudget</span>
        <div class="flex gap-5">
            <a href="/upload">
                <img class="w-8 transition-all duration-300 hover:opacity-100 opacity-70"
                    src="https://cdn-icons-png.flaticon.com/512/1665/1665680.png" alt="Upload">
            </a>
        </div>
    </div>
    <div class="w-4/6 mx-auto">
        @yield('content')
    </div>
</body>


</html>
