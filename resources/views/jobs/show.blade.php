<x-layout>
<x-slot:heading>
        Job 
    </x-slot:heading>
    <h4 class="text-lg text-sky-700 font-semibold">{{ $job['title'] }}</h4>
    <p class="text-sky-500 ">This pays you {{ $job['salary'] }}</p>
    <div class="flex gap-7 ">
        @can("edit-job" , $job)
        <button form="delete-form" class="px-3 py-1 bg-red-500 rounded btn text-white mt-3 ms-9">Delete</button>
        <button class="px-3 py-1 bg-blue-500 rounded btn text-white mt-3 ms-9"> <a href="/jobs/{{ $job->id }}/update">Update</a></button>
        @endcan
    </div>
    <form method="POST" id="delete-form" action="/jobs/{{ $job->id }} " class="hidden">
    @csrf
    @method('DELETE')
    </form>
</x-layout>