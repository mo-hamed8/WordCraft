<x-layout>
    <div class="container mx-auto py-8 text-center">
        <h1 class="text-3xl font-bold mb-6">Word to Review Today</h1>
    
@if (session("message"))
<div class="bg-green-100 text-blue-900 p-6 rounded-lg shadow-md">
        {{session("message")}}
</div> 
@endif

        @if($words)
        @foreach ($words as $item)
        <div class="bg-blue-100 text-blue-900 p-6 rounded-lg shadow-md">
            <a href="" class="text-2xl font-semibold hover:underline">
                {{$item->word}}
            </a>
        </div> 
        @endforeach
        @else
            <p class="text-gray-500">No words to review today.</p>
        @endif
    </div>
</x-layout>