<?php require base_path('views/partials/header'); ?>
<?php require base_path('views/partials/nav'); ?>

<?php require base_path('views/partials/banner'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 space-y-8 pr-2">

            <div class="block bg-gray-300 rounded border-0 w-full h-56 py-5 pl-3 shadow-sm focus:accent-yellow-600">
                <p class="ml-5">
                    <?= htmlspecialchars($note['body']) ?>
                </p>
            </div>
            <div>
                <a href="/notes" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Bo back</a>
            </div>
        </div>
    </main>

<?php require base_path('views/partials/footer'); ?>