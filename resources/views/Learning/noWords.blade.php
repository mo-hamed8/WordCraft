<x-layout>
    <div class="text-center p-6 max-w-lg mx-auto bg-white rounded-lg shadow-lg">
        <!-- Motivational Message -->
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Start Your Learning Journey Today!</h1>
        <p class="text-gray-600 text-lg mb-6">
            Learning begins by adding words. Take a simple step today by adding the words you want to learn, and get ready to master new skills.
        </p>

        <!-- Call-to-Action Button -->
        <a href="{{route("words.create")}}" class="inline-block px-6 py-3 text-white bg-blue-500 rounded-md text-lg font-medium hover:bg-blue-600 transition duration-300">
            Add Your Words Now
        </a>
        
        <!-- Reminder Message -->
        <p class="mt-6 text-gray-500">
            You haven't added any words yet. Add some words to get started with learning.
        </p>
    </div>
</x-layout>