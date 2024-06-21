<div class="flex flex-wrap">
        <!-- Sidebar -->
        @include('livewire.side')

        <!-- Main content -->
        <div class="w-full md:w-4/5 p-4">
            <!-- Alert message -->
            @if(session()->has('message'))
                <div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('message') }}</span>
                </div>
            @endif

            @if($side == 'side')
                @livewire('main')
            @endif

            @if($authlogin === false)
                @include('livewire.login')
            @endif

            @if($authlogin === true)
                @include('livewire.create')
            @endif

            <!-- Discuss content -->
           
        </div>
       
    </div>

    <!-- Logout button -->
   