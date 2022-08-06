<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Stock Controll</title>
    </head>
    <body>
        <div class="bg-gray-100 flex h-screen justify-center items-center">
            <form method="post" action="{{ route('submit_login') }}" class="bg-white shadow-md p-8 rounded">
                @csrf
                @method('POST')
                <div>
                    <label for="">Email</label>
                    <input type="text" class="shadow-sm appearence-none border rounded w-full p-3" placeholder="Email" name="email">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" class="shadow-sm appearence-none border rounded w-full p-3" placeholder="******" name="password">
                </div>

                <div class="mt-4 mb-2">
                    <div class="w-full p-2 border-2 border-red-500 text-white rounded-sm shadow">Error text</div>
                </div>

                <div>
                    <button type="submit" class="w-full p-3 shadow-sm rounded-sm text-white bg-blue-300 mt-2">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>
