<x-layout>
    <x-slot:heading>
            Tags 
        </x-slot:heading>
        <div class="w-[200px] flex-col text-sky-600 gap-3 border border-2 border-black rounded flex  justify-center items-center">
            <h2>
                @foreach ($tags as $tag )
                    <a href="/tag/{{ $tag['id'] }}"><h3>{{ $tag['name'] }}</h3></a>
                @endforeach
            </h2>
        </div>  
    </x-layout>