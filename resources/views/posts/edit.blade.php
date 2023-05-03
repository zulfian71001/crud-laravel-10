<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tambah Data Post - SantriKoding.com</title>
</head>

<body class="bg-gray-100 items-center">

    <div class="w-auto h-auto bg-white rounded-md m-6 flex flex-col p-4">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="font-bold">GAMBAR</label>
                    <input type="file" class="w-full rounded-md @error('image') is-invalid @enderror" name="image">

                    <!-- error message untuk title -->
                    @error('image')
                    <div class="bg-red-200 mt-2  text-red-700 p-2 rounded-md">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-bold">JUDUL</label>
                    <input type="text" class="w-full rounded-md @error('title') is-invalid @enderror" name="title" value="{{ old('title', $post->title) }}" placeholder="Masukkan Judul Post">

                    <!-- error message untuk title -->
                    @error('title')
                    <div class="bg-red-200 mt-2  text-red-700 p-2 rounded-md">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-bold">KONTEN</label>
                    <textarea class="w-full rounded-md @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ old('content', $post->content) }}</textarea>

                    <!-- error message untuk content -->
                    @error('content')
                    <div class="bg-red-200 mt-2 text-red-700 p-2 rounded-md">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-500 rounded-md mt-4 p-2">SIMPAN</button>
                <button type="reset" class="bg-yellow-400 rounded-md mt-4 p-2">RESET</button>

            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>

</html>