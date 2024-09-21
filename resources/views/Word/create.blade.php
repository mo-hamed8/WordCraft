<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form action="" method="POST" class="bg-white p-6 rounded-lg shadow-lg space-y-4 w-full max-w-sm">
            @csrf

            <div>
                <label for="text" class="block text-sm font-medium text-gray-700">Text:</label>
                <input 
                    type="text" 
                    name="text" 
                    id="text" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Enter your word">
            </div>

            <div>
                <button 
                    type="submit" 
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-200">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>
