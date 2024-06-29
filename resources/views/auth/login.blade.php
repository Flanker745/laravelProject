<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <form method="POST" class="space-y-6" action="/login">
        @csrf
        <x-form-input type="email" name="email" :value="old('email')" placeholder="E-mail" />
        <x-form-error name="email"></x-form-error>
        <x-form-input type="password" name="password" placeholder="Password" />
        <x-form-error name="password"></x-form-error>
        <x-form-button>Login</x-form-button>
    </form>
    <div class="text-neutral-600 flex gap-4 text-[12px]">
        <p>Don't have Account</p>
        <a class="underline" href="/register">Register</a>
    </div>
</x-layout>
