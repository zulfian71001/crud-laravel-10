<x-app-layout>
    <h3 class="font-bold text-center mt-10">Tutorial Laravel 10 untuk Pemula with laravel</h3>
    <h5 class="text-center font-semibold"><a href="https://santrikoding.com">Zulfian Nafis Corp</a></h5>
    <hr>
    <div class="w-auto h-auto bg-white items-center rounded-2xl m-6 p-4 shadow-xl">
        <div class="card-body">
            <a href="{{ route('posts.create') }}" class="bg-green-400 p-2 rounded-md">TAMBAH POST</a>
            <table class="table-auto border-collapse border border-slate-400 mt-4">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="p-3 px-[90px] text-left tracking-wide border-collapse border border-gray-300">GAMBAR</th>
                        <th class="p-3 px-[90px] text-left tracking-wide border-collapse border border-gray-300">JUDUL</th>
                        <th class="p-3 px-[90px] text-left tracking-wide border-collapse border border-gray-300">CONTENT</th>
                        <th class="p-3 px-[90px] text-left tracking-wide border-collapse border border-gray-300">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                    <tr>
                        <td class="text-center border border-gray-300 tracking-wide px-10 py-2">
                            <img src="{{ asset('storage/posts/'.$post->image) }}" class=" rounded-md w-[150px]">
                        </td>
                        <td class="px-[90px] border border-gray-300 text-center tracking-wide">{{ $post->title }}</td>
                        <td class="px-[90px] border border-gray-300 text-center tracking-wide">{!! $post->content !!}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                <a href="{{ route('posts.show', $post->id) }}" class="bg-stone-400 text-white p-1 rounded-md ">SHOW</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-400 text-white p-[0.28rem] px-[0.8rem] rounded-md">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-300 text-white p-1 rounded-md">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="bg-red-200 my-3 text-red-700 p-4 rounded-md">
                        Data Post belum Tersedia.
                    </div>
                    @endforelse
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>