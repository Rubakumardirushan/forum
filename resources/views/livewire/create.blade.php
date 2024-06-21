<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Forum - Create Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #121212;
            color: #fff;
        }

    </style>
</head>

<body class="bg-gray-900 text-white">
   
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Create a New Forum Post</h2>
            <form method="POST" action=>
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium mb-2">Title</label>
                    <input  wire:model="title" type="text" id="title" name="title" class="bg-gray-700 text-white border border-gray-600 rounded py-2 px-3 w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="body" class="block text-sm font-medium mb-2">Body</label>
                    <textarea wire:model='body' id="body" name="body" class="bg-gray-700 text-white border border-gray-600 rounded py-2 px-3 w-full focus:outline-none focus:border-blue-500" rows="5"></textarea>
                </div>
                <div class="mb-4">
                    <label for="channel" class="block text-sm font-medium mb-2">Channel</label>
                    <select  wire:model='channel' id="channel" name="channel" class="bg-gray-700 text-white border border-gray-600 rounded py-2 px-3 w-full focus:outline-none focus:border-blue-500">
                        <option value="general">General</option>
                        <option value="laravel">Laravel</option>
                        <option value="vuejs">Vue.js</option>
                        <option value="reactjs">React.js</option>
                        <option value="tailwindcss">Tailwind CSS</option>
                    </select>
                </div>
                <div class="mb-6">
                    <button wire:click.prevent="store()" type="submit" class="bg-blue-600 text-white py-2 px-4 rounded w-full">Create Post</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
