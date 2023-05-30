<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    License: BSD 2-Clause

    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
*/

use Jinx\Jinx;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $this->title; ?>
    </title>
</head>

<body class="bg-zinc-900">
    <nav class="bg-zinc-800 sticky top-0 z-[999]">
        <div class="mx-auto max-w-7xl px-2 lg:px-8">
            <div class="relative flex h-20 items-center justify-between">
                <div class="flex flex-1 items-center justify-center">
                    <div class="">
                        <div class="flex space-x-4">
                            <a href="/" class="text-white hover:bg-zinc-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">
                                Home
                            </a>

                            <?php if (Jinx::isGuest()): ?>

                                <a href="/register" class="text-white hover:bg-zinc-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">
                                    Register
                                </a>

                                <a href="/login" class="text-white hover:bg-zinc-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">
                                    Login
                                </a>

                            <?php else: ?>

                                <a href="/logout" class="text-white hover:bg-zinc-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">
                                    Logout
                                </a>

                                <a href="/profile" class="text-white hover:bg-zinc-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">
                                    <?php echo Jinx::$jinx->user->getUsername(); ?>'s profile
                                </a>

                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{content}}

    <footer class="bg-zinc-800">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="https://github.com/azazelm3dj3d" class="text-white hover:text-indigo-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="mt-8 md:order-1 md:mt-0">
                <p class="text-center text-lg leading-5 text-white">Azazelm3dj3d &copy; 2023</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>