<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-3xl font-extrabold mb-6 text-indigo-700 text-center">Word Information</h2>
            
            <div class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Word:</h3>
                <p class="text-2xl text-indigo-600 font-bold">{{$data["word"]}}</p>
            </div>
            
            <!-- Hidden section with dropdown for definition, example, and part of speech -->
            <details class="mb-6 bg-gray-100 p-4 rounded-md">
                <summary class="cursor-pointer text-lg font-semibold text-indigo-600">Review word details</summary>

                <div class="mt-3">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Definition:</h3>
                        <p class="text-gray-700">{{$data["definition"]}}</p>
                    </div>
                    
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Example:</h3>
                        <p class="italic text-gray-600">{{$data["example"]}}</p>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Part of Speech:</h3>
                        <p class="text-gray-700">{{$data["part_of_speech"]}}</p>
                    </div>
                </div>
            </details>

            <div class="bg-gray-100 p-4 rounded-md mb-6">
                <p class="text-gray-800 font-semibold mb-3">How would you rate the difficulty of this word?</p>
                <form method="POST" action="{{route("review.store",$data["word"])}}">
                    @csrf
                    <label class="block mb-2">
                        <input type="radio" name="difficulty" value="easy" class="mr-2 text-indigo-600 focus:ring focus:ring-indigo-200">
                        Easy
                    </label>
                    <label class="block mb-2">
                        <input type="radio" name="difficulty" value="medium" class="mr-2 text-indigo-600 focus:ring focus:ring-indigo-200">
                        Medium
                    </label>
                    <label class="block mb-4">
                        <input type="radio" name="difficulty" value="hard" class="mr-2 text-indigo-600 focus:ring focus:ring-indigo-200">
                        Hard
                    </label>
                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition duration-300">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
