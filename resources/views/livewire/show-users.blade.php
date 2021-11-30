<tr>
    @if (!$edit)
        <td class="px-6 py-4 whitespace-nowrap">
            {{ $showit->id }}
        </td>

        <td class="px-6 text-center py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $showit->Firstname }}
        </td>

        <td class="px-6 text-center py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $showit->Lastname }}
        </td>

        <td class="px-6 text-center py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $showit->email }}
        </td>

        <td class="px-6 text-center py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $showit->phonenumber }}
        </td>

        <td class="px-6 text-center py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $showit->address }}
        </td>

        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <button wire:click.prevent="showEdit"
                class="bg-green-300 hover:bg-green-400 text-green-800 font-bold py-1 px-4 pl-2 inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path
                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                </svg>
                <span>Redaguoti</span>
            </button>
        </td>
    @else
        <td class="px-6 py-4 align-top bg-yellow-50">
            {{ $showit->id }}
        </td>
        <td colspan="3" class="px-6 py-4  bg-yellow-50">
            <div class="text-right">

            </div>
            <form action="{{ route('home') }}" method="POST">
            <div class="w-full h-full">

                <div class="my-3">
                    <label class="uppercase ml-2 font-semibold" for="Firstname_{{ $showit->id }}" :value="__('Firstname*')" />Firstname
                    <input class="block mt-1 w-full border-2" wire:model="Firstname" id="Firstname_{{ $showit->id }}" class="block mt-1 w-full h-64" type="text"
                        required autofocus /></textarea>

                </div>

                <div class="my-3">
                    <label class="uppercase ml-2 font-semibold" for="Lastname_{{ $showit->id }}" :value="__('Lastname*')" />Lastname
                    <input class="block rounded-lg mt-1 w-full border-green-700 border-2" wire:model="Lastname" id="Lastname_{{ $showit->id }}" class="block mt-1 w-full" type="text"
                        required autofocus />

                </div>

                <div class="my-3">
                    <label class="uppercase ml-2 font-semibold" for="phonenumber_{{ $showit->id }}" :value="__('phonenumber*')" />Phone number
                    <input class="block rounded-lg mt-1 w-full border-green-700 border-2" wire:model="phonenumber" id="phonenumber_{{ $showit->id }}" class="block mt-1 w-full" type="number"
                        required autofocus />

                </div>

                <div class="my-3">
                    <label class="uppercase ml-2 font-semibold" for="email_{{ $showit->id }}" :value="__('email*')" />Email
                    <input class="block rounded-lg mt-1 w-full border-green-700 border-2" wire:model="email" id="email_{{ $showit->id }}" class="block mt-1 w-full" type="text"
                        required autofocus />

                </div>

                <div class="my-3">
                    <label class="uppercase ml-2 font-semibold" for="address_{{ $showit->id }}" :value="__('address*')" />Address
                    <input class="block rounded-lg mt-1 w-full border-green-700 border-2" wire:model="address" id="address_{{ $showit->id }}" class="block mt-1 w-full" type="text"
                        required autofocus />

                </div>

                <select wire:model="role_id" name="role_id" class="form-control" required>
                    @foreach ($role as $goal)
                        <option value="{{ $goal->id }}">{{ $goal->name }}</option>
                    @endforeach
                </select>

            </form>
        </td>
        <td class="px-6 py-4 text-right text-sm font-medium align-top bg-yellow-50">
            <button wire:click.prevent="hideEdit"
                class="whitespace-nowrap bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path
                        d="M13.889,11.611c-0.17,0.17-0.443,0.17-0.612,0l-3.189-3.187l-3.363,3.36c-0.171,0.171-0.441,0.171-0.612,0c-0.172-0.169-0.172-0.443,0-0.611l3.667-3.669c0.17-0.17,0.445-0.172,0.614,0l3.496,3.493C14.058,11.167,14.061,11.443,13.889,11.611 M18.25,10c0,4.558-3.693,8.25-8.25,8.25c-4.557,0-8.25-3.692-8.25-8.25c0-4.557,3.693-8.25,8.25-8.25C14.557,1.75,18.25,5.443,18.25,10 M17.383,10c0-4.07-3.312-7.382-7.383-7.382S2.618,5.93,2.618,10S5.93,17.381,10,17.381S17.383,14.07,17.383,10">
                    </path>
                </svg>
                <span>Išjungti redagavimą</span>
            </button>
            <br>
            <button wire:click.prevent="saveChanges"
                class="whitespace-nowrap bg-green-300 hover:bg-green-400 text-green-800 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path
                        d="M17.064,4.656l-2.05-2.035C14.936,2.544,14.831,2.5,14.721,2.5H3.854c-0.229,0-0.417,0.188-0.417,0.417v14.167c0,0.229,0.188,0.417,0.417,0.417h12.917c0.229,0,0.416-0.188,0.416-0.417V4.952C17.188,4.84,17.144,4.733,17.064,4.656M6.354,3.333h7.917V10H6.354V3.333z M16.354,16.667H4.271V3.333h1.25v7.083c0,0.229,0.188,0.417,0.417,0.417h8.75c0.229,0,0.416-0.188,0.416-0.417V3.886l1.25,1.239V16.667z M13.402,4.688v3.958c0,0.229-0.186,0.417-0.417,0.417c-0.229,0-0.417-0.188-0.417-0.417V4.688c0-0.229,0.188-0.417,0.417-0.417C13.217,4.271,13.402,4.458,13.402,4.688">
                    </path>
                </svg>
                <span>Išsaugoti pakeitimus</span>
            </button>
        </td>
    @endif
</tr>
