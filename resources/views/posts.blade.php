<x-layout>
    <x-slot:heading>
            Posts
        </x-slot:heading>
        <div class="w-[200px] flex-col text-sky-600 gap-3 border border-2 border-black rounded flex  justify-center items-center">
            <h2>
                @foreach ($posts as $post )
                    <a href="/post/{{ $post['id'] }}"><h3>{{ $post['name'] }}</h3></a>
                @endforeach
            </h2>
        </div>  
    </x-layout>