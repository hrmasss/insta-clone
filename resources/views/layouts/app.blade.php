<!DOCTYPE html>
<html data-theme="synthwave" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1384/1384172.png">
    <title>InstaBudget</title>

    {{-- DaisyUI & TailwindCSS, Replace with npm packages for prod. --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-screen">
    <div class="w-4/6 mx-auto">
        <div class="my-5 px-5 h-fit navbar bg-gradient-to-l from-base-100 to-base-200 flex justify-between rounded-xl">
            <a href="/">
                <img class="w-8 transition-all duration-300 hover:w-10"
                    src="https://cdn-icons-png.flaticon.com/512/1384/1384172.png" alt="Logo">
            </a>
            <div class="flex gap-5">
                <a href="/upload">
                    <img class="w-8 transition-all duration-300 hover:w-10"
                        src="https://cdn-icons-png.flaticon.com/512/1665/1665680.png" alt="Upload">
                </a>
            </div>
        </div>
        @yield('content')
    </div>
</body>


</html>
