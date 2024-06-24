<x-layout>
    <x-slot:heading>
            Create Job
        </x-slot:heading>
        <form method="POST" class="space-y-3" action="/jobs">
            @csrf
            <input type="text" name="title" for="title" class="w-[70%] border border-gray-400 shadow rounded px-2 py-1 " placeholder="Job title">
            <input type="text" name="salary" for="salary" class="w-[70%] border border-gray-400 shadow rounded px-2 py-1 " placeholder="Salary">
            <button type="submit" class="block m-auto px-4 py-2 bg-blue-500 text-white rounded btn">Submit</button>
        </form>
    </x-layout>