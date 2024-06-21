<div class="container">
        <div class="header">
            <div>
                <button>Latest</button>
                <button>All</button>
            </div>
            <input type="text" placeholder="Begin your search...">
        </div>
        @foreach ($threads as $thread)
        <div class="thread">
            <a href="#">
                <div class="header">
                    <div class="user-info">
                        <img src="{{ $thread->avatar }}" alt="{{ $thread->name }}">
                        <div>
                            <div class="username">{{ $thread->author_name }}</div>
                            <small>{{ $thread->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <h5>{{ $thread->title }}</h5>
                    <p>{{ Str::limit($thread->body, 150) }}</p>
                </div>
                <div class="footer">
                    <small>
                        <span><i class="fas fa-eye"></i> {{ $thread->views }}</span>
                        <span><i class="fas fa-comments"></i> {{ $thread->replies_count }}</span>
                        <span><i class="fas fa-tag"></i> {{ $thread->channel }}</span>
                    </small>
                    <button wire:click.prevent="check({{$thread->user_id}},{{$thread->id}})" class="actions" >.....</button>
                </div>
            </a>
            @if($showbutton == true && $thread->id == $clickid)
                <div class="absolute top-0 right-0 bg-gray-900 text-white p-2 rounded shadow-lg flex space-x-2">
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-2 rounded" wire:click.prevent="edit({{ $thread->id }})">Edit</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded" wire:click.prevent="delete({{ $thread->id }})">Delete</button>
                </div>
            @endif
        </div>
        @endforeach
    </div>