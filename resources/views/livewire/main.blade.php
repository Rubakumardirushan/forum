<div class="w-full md:w-4/5 p-4">
    <div class="flex justify-between items-center border-b border-gray-700 mb-4 pb-2">
        <div class="flex space-x-2">
            <button class="bg-blue-600 text-white py-2 px-4 rounded">Latest</button>
            <button class="bg-blue-600 text-white py-2 px-4 rounded">All</button>
        </div>
        <input type="text" placeholder="Begin your search..." class="bg-gray-800 text-white py-2 px-4 rounded">
    </div>

    @foreach ($threads as $thread)
    <div class="relative bg-gray-800 mb-3 p-4 rounded-3xl hover:bg-gray-700">
        <a href="#" class="block">
            <div class="flex justify-between items-center">
      

                <!-- Display User Avatar -->
                <img src="{{ $thread->avatar }}" alt="{{ $thread->name }}" class="rounded-full w-10 h-10 mr-3">
                
                <h5 class="text-xl font-bold text-white">{{ $thread->title }}</h5>
                <small class="text-gray-500">
                    <i class="fas fa-eye"></i> {{ $thread->views }} • 
                    <i class="fas fa-comments"></i> {{ $thread->replies_count }} • 
                    <i class="fas fa-tag"></i> {{ $thread->channel }}
                </small>
            </div>
            <p class="text-gray-400">{{ Str::limit($thread->body, 150) }}</p>
        </a>
        <button class="absolute bottom-2 right-2 text-white py-1 px-2 rounded" wire:click.prevent="check({{$thread->user_id}},{{$thread->id}})">.....</button>
        @if($showbutton == true && $thread->id == $clickid)
            <div class="absolute top-0 right-0 bg-gray-900 text-white p-2 rounded shadow-lg flex space-x-2">
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-2 rounded" wire:click.prevent="edit({{$thread->id}})">Edit</button>
                <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded" wire:click.prevent="delete({{$thread->id}})">Delete</button>
            </div>
        @endif
    </div>
    @endforeach

</div>