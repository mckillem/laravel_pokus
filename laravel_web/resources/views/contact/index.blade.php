<form method="POST" action="/kontakt">
    @csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="sm:col-span-3">
                        <label for="firstname" class="block text-sm/6 font-medium text-gray-900">Jméno</label>
                        <input
                            id="firstname"
                            type="text"
                            class="@error('firstname') is-invalid @enderror block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        />

                        @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="lastname" class="block text-sm/6 font-medium text-gray-900">Příjmení</label>
                        <input
                            id="lastname"
                            type="text"
                            class="@error('lastname') is-invalid @enderror block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        />

                        @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="message" class="block text-sm/6 font-medium text-gray-900">Poznámka</label>
                        <textarea
                            id="message"
                            class="@error('message') is-invalid @enderror block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        ></textarea>

                        @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button>Odeslat</button>
                </div>
            </div>
        </div>
    </div>
</form>
