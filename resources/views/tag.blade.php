<x-layout>
    <x-slot:heading>
            Post 
        </x-slot:heading>
        <h4 class="text-lg text-sky-700 font-semibold">{{ $tag['name'] }}</h4>
        <h4>Posts are => 

            @foreach ($tag->posts as $post)
                {{ $post->name }}
            @endforeach
        </h4>
    </x-layout>