<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $header }}
        </h2>
    </x-slot>

    @can('create', Auth::user())

        <div class="grid grid-cols-12 py-12">

            <div class="col-span-3 w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        menu

                    </div>
                </div>
            </div>

            <div class="col-span-9 w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        create user

                    </div>
                </div>
            </div>

        </div>

    @endcan
 
</x-app-layout>
