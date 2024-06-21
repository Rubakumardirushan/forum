
<div class="flex flex-wrap">
        <!-- Sidebar -->
        @include('livewire.side')

        <!-- Main content -->
       @if($side=='side')
        <main class="w-full md:w-4/5 p-4">
            @livewire('main')
        </main>
        @endif
    
        @if($authlogin ===false)
        <main class="w-full md:w-4/5 p-4">
            @include('livewire.login')
        </main>
        @endif
        @if($authlogin ===true)
        <main class="w-full md:w-4/5 p-4">
            @include('livewire.create')
        </main>
        @endif

<button wire:click.prevent="logout()">logout</button>
        <!-- Discuss content -->
        <main class="w-full md:w-4/5 p-4">
            @livewire('discuss')
        </main>
        
       
    </div>