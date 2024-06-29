<x-layout>
<x-slot:heading>
        Job listings
    </x-slot:heading>
    <div class="space-y-2">
        @foreach ($jobs as $job )
        <div class="text-blue-600">{{ $job->staffs->name }}</div>
               <div class="border-black rounded-lg border px-3 py-2 ">
                    <a href="/jobs/{{ $job['id'] }}  "> <h5>{{ $job["title"]  }} : salary {{$job["salary"]}}</h5></a>
               </div>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>