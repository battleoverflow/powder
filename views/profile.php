<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    License: BSD 2-Clause

    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
*/

use Jinx\Application;

$this->title = "Profile";

?>

<div class="bg-zinc-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <div class="mx-auto max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl text-center">
                Welcome, <?php echo Application::$jinx->user->getUsername(); ?>
            </h2>
        </div>

        <ul role="list" class="mx-auto mt-10 grid max-w-2xl grid-cols-1 lg:mx-0 lg:max-w-none lg:gap-8 justify-items-center">
            <li class="rounded-2xl bg-zinc-800 px-20 py-10 shadow-xl">
                <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="<?php echo Application::$jinx->user->getProfileImg(); ?>" alt="">
                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-white">
                    Hi, <?php echo Application::$jinx->user->getName(); ?>! 👋
                </h3>

                <ul class="text-white text-lg">
                    <li>
                        Username: @<?php echo Application::$jinx->user->getUsername(); ?>
                    </li>
                    <li>
                        Email: <a class="text-indigo-500" href="mailto:<?php echo Application::$jinx->user->getEmail(); ?>"><?php echo Application::$jinx->user->getEmail(); ?></a>
                    </li>
                    <li>
                        GitHub:  <a class="text-indigo-500" href="<?php echo Application::$jinx->user->getGithubUrl(); ?>" rel="noreferrer" target="_blank"><?php echo Application::$jinx->user->getGithubUsername(); ?></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
