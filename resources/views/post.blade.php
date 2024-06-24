<x-layout>
    <x-slot:heading>
            Post 
        </x-slot:heading>
        <h4 class="text-lg text-sky-700 font-semibold">{{ $post['name'] }}</h4>
        <h4>Tags are => 

            @foreach ($post->tags as $tag)
                {{ $tag->name }}
            @endforeach
        </h4>
    </x-layout>