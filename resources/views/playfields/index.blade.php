<x-main>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Playfields Overview</h1>

        <a href="{{ route('playfields.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
            Add New Playfield
        </a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Sponsor</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Size</th>
                    <th class="py-2 px-4 border-b">Last maintained at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($playfields as $playfield)
                    <tr class="@if($playfield->size == "small") bg-yellow-100 @endif">
                        <td class="py-2 px-4 border-b">{{ $playfield->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $playfield->sponsor ?? 'NULL' }}</td>
                        <td class="py-2 px-4 border-b">{{ $playfield->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $playfield->size }}</td>
                        <td class="py-2 px-4 border-b">{{ $playfield->last_maintained_at }}</td>
                        <td class="py-2 px-4 border-b">{{ $playfield->games_count }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('playfields.show', $playfield) }}" class="text-blue-500">View</a>
                            <a href="{{ route('playfields.edit', $playfield) }}" class="text-yellow-500 ml-2">Edit</a>
                            <form action="{{ route('playfields.destroy', $playfield) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $playfields->links() }}
        </div>
    </div>
</x-main>
