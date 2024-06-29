<x-layout>
    <x-slot:heading>
            Create Job
        </x-slot:heading>
        <form method="POST" class="space-y-6" action="/jobs">
            @csrf
            <x-form-input  type="text"  name="title" placeholder="title"/>
            <x-form-error name="title"></x-form-error>
            <x-form-input type="text" name="salary" placeholder="Salary"/>
            <x-form-error name="salary"></x-form-error>
            <x-form-button>Submit</x-form-button>
        </form>
    </x-layout>

    {{-- @if($errors->any())
                @foreach ($errors->all() as $err )
                    <ul>
                        <li class="text-red-500">{{$err}}</li>
                    </ul>
                @endforeach
            @endif --}}