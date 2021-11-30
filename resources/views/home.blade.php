<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pagrindinis puslapis') }}
        </h2>
    </x-slot>
    <div class="mt-24 container mx-auto">
        <div class="border-b-2 w-full overflow-hidden sm:my-1 sm:px-1">
            <h2 class="py-6 mt-10 font-semibold uppercase text-dark text-lg"><i class="fas fa-sliders-h"></i> </h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">

                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1">
                            ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vardas
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Pavardė
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            El. paštas
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tel. numeris
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Address
                        </th>

                        <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Valdymas
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $showit)
                        @livewire('show-users', compact(['showit']), key($showit->id))
                    @endforeach
                </tbody>

            </table>

            <div class="m-4">
                {{ $users->links() }}
            </div>
        </div>
</x-app-layout>
