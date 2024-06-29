<x-layout>
    <x-slot:heading>
            Update Job: {{ $job->title }}
        </x-slot:heading>
        <form  class="space-y-6" method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method("PATCH")
            <input 
            type="text" 
            name="title" 
            for="title" 
            value="{{ $job->title }}"
            class="w-[70%] border border-gray-400 shadow rounded px-2 py-1 " 
            placeholder="Job title">
            @error('title')
                <p class="text-sm text-red-500 text-semibold">{{ $message }}</p>    
            @enderror
            <input 
            type="text" 
            name="salary" 
            for="salary" 
            value="{{ $job->salary }}"
            class="w-[70%] border border-gray-400 shadow rounded px-2 py-1 " 
            placeholder="Salary">
            @error('salary')
                <p class="text-sm text-red-500 text-semibold">{{ $message }}</p>    
            @enderror
            <div>
                <button class=" "><a href="/jobs/{{ $job->id }}">Cancel</a></button>
            <button type="submit" class=" px-4 py-2 bg-blue-500 ms-6 text-white rounded btn">Update</button>
            </div>
        </form>
    </x-layout>