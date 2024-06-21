<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Forum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
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
        .custom-bg {
        background-color: #17223B; /* Use the exact color from the image */
    }
    .custom-text {
        color: white; /* Use the exact color from the image */
    }
    .custom-hover:hover {
        background-color: #3B5998; /* Use the exact hover color */
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
        body {
            background-color: #0d1117;
            color: #c9d1d9;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #30363d;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        .header button {
            background-color: #1f6feb;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .header input {
            background-color: #21262d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
        .thread {
            background-color: #21262d;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            transition: background-color 0.3s;
            position: relative;
        }
        .thread:hover {
            background-color: #30363d;
        }
        .thread a {
            text-decoration: none;
            color: inherit;
        }
        .thread .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .thread .header .user-info {
            display: flex;
            align-items: center;
        }
        .thread .header img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .thread .header .username {
            color: #58a6ff;
        }
        .thread .body {
            margin-bottom: 10px;
        }
        .thread .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .thread .footer small {
            color: #8b949e;
        }
        .thread .footer .actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .thread .footer .actions button {
            background-color: transparent;
            border: none;
            color: #8b949e;
            cursor: pointer;
        }
        .thread .footer .actions button:hover {
            color: #58a6ff;
        }
    </style>
    @livewireStyles
</head>
<body class="bg-gray-900 text-white">
    <header class="bg-black-900 text-white text-center py-10 flex items-center justify-center relative h-24 rounded-3xl">
        <span class="z-10 text-2xl">Welcome to Developer Community</span>
        <div class="absolute inset-0 bg-header"></div>
    </header>

   @livewire('forum')

    <!-- Floating Action Button for Mobile -->
    <a class="fixed bottom-4 right-4 md:hidden bg-blue-600 w-12 h-12 rounded-full flex items-center justify-center text-white text-2xl">+</a>

    @livewireScripts
</body>
</html>
