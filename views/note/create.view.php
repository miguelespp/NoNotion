<?php require base_path('views/partials/header'); ?>
<?php require base_path('views/partials/nav'); ?>

<?php require base_path('views/partials/banner'); ?>

    <main>
        <div class="space-y-8 mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <form method="post" action="/notes" >
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <input type="hidden" name="user_id" value="<?= session_user_id ?>">
                                <label for="body-note" class="block text-sm font-medium leading-6 text-gray-900">Make your notes</label>
                                <div class="mt-2">
                                    <textarea id="body-note" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6" required></textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Open your mind and write :).</p>
                                <?php if (isset($errors['body'])) : ?>
                                    <p class="mt-3 text-sm leading-6 text-red-600"><?= $errors['body'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a href="/notes">Cancel</a></button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>
    </main>

<?php require base_path('views/partials/footer'); ?>