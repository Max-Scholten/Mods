<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATM8</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />


</head>

<body class="bg-gray-800 text-white relative grid grid-rows-5 grid-cols-3">

<header class="fixed bg-green-500 top-0 left-0 right-0 z-0 grid grid-rows-1 grid-cols-3 ">
    <div class="container mx-auto flex justify-between p-3 col-span-3">
        <h1 class="grid grid-rows-1 col-span-3 text-4xl py-1">Mods Library For ATM8</h1>

        <nav class="grid grid-rows-2 grid-cols-3 col-span-2">

            <a href="{{ route('mods.index') }}" class="text-white bg-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Index</a>

            <a href="{{ route('mods.create') }}" class="text-white bg-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</a>

        </nav>
    </div>
</header>


<main class="grid grid-rows-3 col-span-3 py-1">
    <!-- Body Content -->
    @extends('layouts.app') {{-- If you have a layout, you can extend it --}}

    @section('content')
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold">Mod List</h2>
            <ul>
                @foreach ($Mods as $Mod)
                    <li>
                        <a class="text-xl font-bold" href="{{ route('mods.show', ['index' => $Mods->id]) }}">{{ $Mods->title }}</a>
                        <form method="POST" action="{{ route('mods.destroy', ['song' => $Mods->id]) }}" onsubmit="return confirm('Are you sure you want to delete this mod?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded-lg hover:bg-red-600">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    @endsection

</main>
<footer class="fixed bottom-0 left-0 right-0 bg-green-500 p-4 text-center grid grid-rows-5 col-span-3 h-12">
    <div class="container mx-auto">
        <p>&copy; Max Scholten | Mods List</p>
    </div>
</footer>

</body>

</html>

