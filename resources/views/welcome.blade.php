<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Forum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #121212;
            color: #fff;
        }

        .bg-header {
            background-image: url('bg-headder.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
        }

        .forum-text {
            display: none;
        }

        @media (max-width: 576px) {
            .center {
                display: flex;
                justify-content: center;
            }

            .forum-text {
                display: block;
                font-size: 12px;
            }
        }

        @media (min-width: 577px) {
            .forum-text {
                display: block;
            }
        }

        .btn-small {
            font-size: 0.8rem;
            padding: 5px 10px;
        }

        @media (max-width: 576px) {
            .hide-on-small {
                display: none;
            }

            .plus-btn {
                display: block;
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #007bff;
                color: white;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                text-align: center;
                line-height: 50px;
                font-size: 24px;
                z-index: 1000;
            }
        }

        @media (min-width: 577px) {
            .plus-btn {
                display: none;
            }
        }
    </style>
    @livewireStyles
</head>
<body class="bg-gray-900 text-white">
    <header class="bg-blue-900 text-white text-center py-10 flex items-center justify-center relative h-24">
        <span class="z-10 text-2xl">Welcome to Developer Community</span>
        <div class="absolute inset-0 bg-header"></div>
    </header>

   @livewire('forum')

    <!-- Floating Action Button for Mobile -->
    <a class="fixed bottom-4 right-4 md:hidden bg-blue-600 w-12 h-12 rounded-full flex items-center justify-center text-white text-2xl">+</a>

    @livewireScripts
</body>
</html>
