<div class="max-w-md mx-auto p-6 bg-white shadow-xl rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Simple Lead Submission</h2>

    <form wire:submit="save">
        @if ($success)
            <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 border-l-4 border-green-500 rounded-lg" role="alert">
                Lead successfully submitted!
            </div>
        @endif

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input wire:model="name" type="text" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-gray-900 bg-white">
            @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input wire:model="email" type="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-gray-900 bg-white">
            @error('email') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="notes" class="block text-sm font-medium text-gray-700">Notes (Optional)</label>
            <textarea wire:model="notes" id="notes" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-gray-900 bg-white"></textarea>
            @error('notes') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span wire:loading.remove>Submit Lead</span>
            <span wire:loading>Processing...</span>
        </button>
    </form>
</div>