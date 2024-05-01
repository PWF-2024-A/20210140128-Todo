<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="px-6 pt-6 mb-5 md:w-1/2 2xl:w-1/3">
                    @if (request('search'))

                    <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                        Search result for : {{ request('search') }}
                    </h2>

                    @endif

                    <form class="flex items-center gap-2">
                        <x-text-input id="search" name="search" type="text" class="w-full"
                            placeholder="Search by name or email ..." value="{{ request('search') }}" autofocus/>
                        <x-primary-button type="submit">
                            {{ __('Search') }}
                        </x-primary-button>
                    </form>
                </div>
                <div class="px-6 text-xl text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between">
                        <div></div>

                        <div>
                            @if (session('success'))
                            <p x-data="{ show: true }" x-show="show" x-transition
                                x-init="setTimeout(() => show = false, 5000)"
                                class="pb-3 text-sm text-green-600 dark:text-green-400">{{ session('success') }}
                            </p>
                            @endif
                            @if (session('danger'))
                            <p x-data="{ show: true }" x-show="show" x-transition
                                x-init="setTimeout(() => show = false, 5000)"
                                class="pb-3 text-sm text-red-600 dark:text-red-400">{{ session('success') }}
                            </p>
                            @endif
                        </div>
                    </div>

                </div>
</x-app-layout>
