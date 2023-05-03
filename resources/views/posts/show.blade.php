<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div class="w-auto h-auto bg-white rounded-2xl m-6 p-4 items-center justify-center ">
        <div class="items-center justify-center px-[200px] mb-2">
            <img src="{{ asset('storage/posts/'.$post->image) }}" class=" rounded-md w-[100px]">
        </div>
        <hr>
        <h4 class="font-bold text-2xl my-2">{{ $post->title }}</h4>
        <p>
            {!! $post->content !!}
        </p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>