

<body class="bg-gray-900 text-white">
    

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <form method="POST" action="">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" class="bg-gray-700 text-white border border-gray-600 rounded py-2 px-3 w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" class="bg-gray-700 text-white border border-gray-600 rounded py-2 px-3 w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded w-full">Login</button>
                </div>
                <div class="flex items-center justify-between mb-6">
                    <hr class="w-1/5 border-gray-600">
                    <span class="text-sm text-gray-400">or login with</span>
                    <hr class="w-1/5 border-gray-600">
                </div>
                <div class="flex space-x-4">
                    <button type="button" class="bg-red-600 text-white py-2 px-4 rounded flex-grow flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21.35 11.1h-9.8v2.73h5.65c-.66 3.28-3.5 5.65-7.03 5.65-4.14 0-7.5-3.36-7.5-7.5s3.36-7.5 7.5-7.5c1.9 0 3.64.71 4.97 1.87l2.03-2.03c-2-1.77-4.58-2.85-7.5-2.85-5.52 0-10 4.48-10 10s4.48 10 10 10c5.47 0 9.93-4.42 9.93-9.85 0-.66-.06-1.3-.16-1.92z"/>
                        </svg>
                        Google
                    </button>
                    <button  wire:click.prevent="github()"type="button" class="bg-gray-700 text-white py-2 px-4 rounded flex-grow flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.725-4.042-1.614-4.042-1.614-.546-1.387-1.333-1.757-1.333-1.757-1.091-.745.084-.729.084-.729 1.205.084 1.838 1.24 1.838 1.24 1.07 1.834 2.805 1.304 3.492.998.107-.775.42-1.305.764-1.605-2.665-.305-5.466-1.334-5.466-5.931 0-1.311.467-2.381 1.235-3.221-.124-.305-.535-1.535.117-3.194 0 0 1.01-.324 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.29-1.554 3.3-1.23 3.3-1.23.653 1.659.242 2.889.118 3.194.77.84 1.235 1.91 1.235 3.221 0 4.61-2.805 5.624-5.475 5.921.432.371.81 1.102.81 2.222 0 1.606-.015 2.898-.015 3.292 0 .322.217.697.825.578 4.77-1.587 8.207-6.083 8.207-11.384 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

<
