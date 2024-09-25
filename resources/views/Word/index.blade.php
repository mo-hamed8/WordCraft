<x-layout>
    <div class="bg-white shadow-lg rounded-lg p-8 w-full">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Word List</h1>

    <!-- Example Word List -->
    <ul class="space-y-4">
        <!-- Word Item -->
        @if ($words)
            @foreach ($words as $item)
                
            <li class="flex justify-between items-center">
                <span class="text-lg text-gray-700">{{$item->word}}</span>
                <form action="{{route("words.iKnow",$item->word)}}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">I know this</button>
                </form>
            </li>
            <hr>
            @endforeach
        @endif
    </ul>
</div>
</x-layout>