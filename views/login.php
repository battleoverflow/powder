<?php
/*
    Project: Powder (https://github.com/battleoverflow/powder)
    License: BSD 2-Clause

    Author: battleoverflow (https://github.com/battleoverflow)
*/

$this->title = "Login";

?>

<div class="isolate bg-zinc-900 px-6 py-24 sm:py-32 lg:px-8 mb-10">
    
    <div class="mx-auto max-w-2xl text-center mb-5">
        <h2 class="text-4xl font-bold tracking-tight text-white">
            Login
        </h2>
    </div>

    <div class="border-2 border-black mx-auto p-10 shadow-xl w-1/2 content-center">
        <?php $form = Jinx\Client\Form::begin($class="mx-auto mt-16 max-w-xl sm:mt-20", $action="", $method="POST") ?>
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

                <div class="sm:col-span-2">
                    <?php echo $form->field($model, $attribute="username", $class="block text-sm font-semibold leading-6 text-white", $field="label"); ?>
                    <div class="mt-2.5">
                        <?php echo $form->field($model, $attribute="username", $class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-2 ring-inset ring-black placeholder:text-black focus:ring-indigo-500 sm:leading-6 focus:outline-none", $field="input"); ?>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <?php echo $form->field($model, $attribute="password", $class="block text-sm font-semibold leading-6 text-white", $field="label"); ?>
                    <div class="mt-2.5">
                        <?php echo $form->field($model, $attribute="password", $class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-2 ring-inset ring-black placeholder:text-black focus:ring-indigo-500 sm:leading-6 focus:outline-none", $field="input"); ?>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit" class="block w-full rounded-md border border-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xl hover:bg-black hover:text-white transition">
                    Login
                </button>
            </div>
        
        <?php echo Jinx\Client\Form::end() ?>

    </div>
</div>
