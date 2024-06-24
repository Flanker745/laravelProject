<x-layout>
<x-slot:heading>
        Job 
    </x-slot:heading>
    <h4 class="text-lg text-sky-700 font-semibold">{{ $job['title'] }}</h4>
    <p class="text-sky-500 ">This pays you {{ $job['salary'] }}</p>
</x-layout>