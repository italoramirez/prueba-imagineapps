<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">A Recibido un correo
            de {{ $msg['name'] }}</h5>
        <h2 class="text-white">Mensaje: {{ $msg['message'] }}</h2>
        <div class="mt-8">
            <a class="text-center text-white" href="{{ route('mail') }}">Volver</a>

        </div>
    </div>
</div>

</body>
</html>
