<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <form method="POST" class="space-y-6" action="/register">
        @csrf
        <x-form-input type="text" name="first_name" placeholder="First Name" />
        <x-form-error name="first_name"></x-form-error>
        <x-form-input type="text" name="last_name" placeholder="Last Name" />
        <x-form-error name="last_name"></x-form-error>
        <x-form-input type="email" name="email" placeholder="E-mail" />
        <x-form-error name="email"></x-form-error>
        <x-form-input type="password" name="password" placeholder="Password" />
        <x-form-error name="password"></x-form-error>
        <x-form-input type="password" name="password_confirmation" placeholder="Confirm Password" />
        <x-form-error name="password_confirmation"></x-form-error>
        <x-form-button>Register</x-form-button>
    </form>
    <div class="text-neutral-600 flex gap-4 text-[12px]">
        <p>Already have Account</p>
        <a class="underline" href="/login">Login</a>
    </div>
</x-layout>
