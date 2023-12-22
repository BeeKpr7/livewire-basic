<form wire:submit.prevent="submitForm" action="/contact" class="w-3/4 mt-10">
    <div class="space-y-12">
        <div class="pb-12 border-b border-gray-900/10">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful
                what you share.</p>

        </div>
        @if ($successMessage)
            <div
                class="fixed inset-x-0 top-0 w-64 px-4 py-2 mx-auto text-sm text-center text-gray-600 bg-green-200 rounded-xl">
                <p>
                    {{ $successMessage }}
                </p>
                <button type="button" wire:click="$set('successMessage', null)"
                    class="absolute p-1 bg-green-100 rounded cursor-pointer top-2 right-2">X</button>
            </div>
        @endif

        <div class="pb-12 border-b border-gray-900/10">

            <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                    <div class="mt-2">
                        <input wire:model.lazy="first_name" type="text" name="first_name" id="first_name"
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('first_name')
                        <p class="mt-1 text-sm text-red-500 w-fit">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                    <div class="mt-2">
                        <input wire:model.lazy="last_name" type="text" name="last_name" id="last_name"
                            autocomplete="last-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ">
                    </div>
                    @error('last_name')
                        <p class="max-w-xs mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        address</label>
                    <div class="mt-2">
                        <input wire:model.lazy="email" id="email" name="email" type="email"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('email')
                        <p class="max-w-xs mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone number</label>
                    <div class="mt-2">
                        <input wire:model.lazy="phone" id="phone" name="phone" type="phone"
                            autocomplete="phone"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('phone')
                        <p class="max-w-xs mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Message</label>
                    <div class="mt-2">
                        <textarea wire:model.lazy="message" id="phone" name="phone" type="phone" autocomplete="phone"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                    @error('message')
                        <p class="max-w-xs mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

    </div>

    <div class="flex items-center justify-end mt-6 gap-x-6">
        <button type="submit"
            class="flex items-center px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:opacity-50">
            <svg wire:loading wire:target='submitForm' class="w-5 h-5 mr-3 -ml-1 text-white animate-spin"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                    stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <span>Save</span>
        </button>
    </div>
</form>
