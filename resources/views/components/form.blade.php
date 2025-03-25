<form method="GET" action="/search" class="max-w-2xl mx-auto space-y-6">
    <div class="flex items-center">
        <input 
            type="text" 
            id="query" 
            name="query" 
            placeholder="Spiderman..." 
            class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
        >
        <button 
            type="submit" 
            class="ml-2 px-4 py-4 bg-blue-500 text-white rounded-xl"
        >
            Search
        </button>
    </div>
    
    @error('query')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</form>