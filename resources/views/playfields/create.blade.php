<x-main>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Create New Playfield</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('playfields.store') }}" method="POST" class="max-w-md">
            @csrf

            <div class="mb-4">
                <label for="sponsor" class="block text-gray-700">Sponsor </label>
                <input type="text" name="sponsor" id="sponsor" value="{{ old('sponsor'), "Input sponsor" }}"
                       class="w-full px-3 py-2 border rounded @error('sponsor') border-red-500 @enderror" >
                @error('sponsor') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="size" class="block text-gray-700">Size *</label>
                <input type="text" name="size" id="size" value="{{ old('size') }}"
                       class="w-full px-3 py-2 border rounded @error('size') border-red-500 @enderror" required>
                @error('size') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="last_maintained_at" class="block text-gray-700">Last maintained at *</label>
                <input type="date" name="last_maintained_at" id="last_maintained_at" value="{{ old('last_maintained_at') }}"
                       class="w-full px-3 py-2 border rounded @error('last_maintained_at') border-red-500 @enderror" required>
                @error('last_maintained_at') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Playfield</button>
            <a href="{{ route('playfields.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Cancel</a>
        </form>
    </div>
</x-main>
