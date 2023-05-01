<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Todo List') }}
        </h2>
    </x-slot>
    <div class="isolate px-6 py-24 sm:py-0 lg:px-8">
        <x-validation-errors class="mx-auto max-w-xl sm:mt-10" />

        <form method="POST" action="{{ route('/todo/create') }}" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf

            <div>
                <x-label for="title" value="{{ __('What is in your pipe?') }}" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" />
            </div>

            <div class="flex items-center justify-left mt-4">
                <x-button class="ml-0">
                    {{ __('Create') }}
                </x-button>
            </div>
        </form>
    </div>

</x-app-layout>