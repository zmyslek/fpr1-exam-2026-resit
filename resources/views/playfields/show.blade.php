<x-main>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Playfield Details</h1>

        <div class="bg-white p-6 rounded shadow @if($playfield->size == "small") bg-yellow-100 @endif">
            <p><strong>ID:</strong> {{ $playfield->id }}</p>
            <p><strong>Sponsor:</strong> {{ $playfield->sponsor ?? 'NULL' }}</p>
            <p><strong>Name:</strong> {{ $playfield->name }}</p>
            <p><strong>Size:</strong> {{ $playfield->size }}</p>
            <p><strong>Last maintained at:</strong> {{ $playfield->last_maintained_at }}</p>
        </div>

        <div class="mt-4">
            <a href="{{ route('playfields.edit', $playfield) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
            <form action="{{ route('playfields.destroy', $playfield) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded ml-2" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
            <a href="{{ route('playfields.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Back to List</a>
        </div>
    </div>
</x-main>
