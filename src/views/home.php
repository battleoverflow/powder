<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
    License: BSD 2-Clause
*/

$this->title = "Home";

?>

<div class="bg-zinc-900">
    <div class="relative isolate overflow-hidden pt-14">
        <img src="/img/powder.gif" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-10">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                    💥 <?php echo $name ?> 💥
                </h1>
                <p class="mt-6 text-lg leading-8 text-zinc-300">
                    Powder is a basic website to showcase the abilities of the open source <a href="https://github.com/azazelm3dj3d/jinx" class="text-indigo-500" target="_blank">Jinx Framework</a>.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-zinc-900 py-24 sm:py-24">
        <div class="relative isolate">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl text-center mb-10">
                What is the Jinx Framework?
            </h2>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="mx-auto flex max-w-2xl flex-col gap-16 px-6 py-16 ring-1 ring-white/10 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-20 xl:gap-x-20 xl:px-20 shadow-2xl">
                    <img class="h-96 w-full flex-none rounded-2xl object-cover shadow-xl lg:aspect-square lg:h-auto lg:max-w-sm" src="/img/jinx.jpg" alt="">
                    <div class="w-full flex-auto text-white">
                        <p>
                        The Jinx Framework is a mini PHP framework created to provide simple components for building basic websites. The Jinx Framework was created to build custom CTF websites, local development and testing using PHP, vulnerable websites for testing, and more. Jinx is intentially minimal to allow for full freedom on the user's end. This means all controllers, models, layouts, and more will need to be created by the user.
                        </p>

                        <p class="mt-8 mb-2">Install the Jinx Framework:</p>

                        <code class="ring-1 ring-white/10 p-2 bg-white/2 rounded-md">
                            composer require azazelm3dj3d/jinx
                        </code>

                        <p class="mt-8">
                            Development is still in very early stages, but it should be stable enough to use in most simple use cases. It's not recommended to push the code in this framework to production yet until it's a little more mature.
                        </p>

                        <div class="mt-10 flex">
                            <a href="https://github.com/azazelm3dj3d/jinx" class="text-xl font-semibold leading-6 text-indigo-500 hover:underline transition" rel="noreferrer" target="_blank">
                                Learn more about the Jinx Framework
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
