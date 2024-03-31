<?php require base_path('views/partials/header'); ?>
<?php require base_path('views/partials/nav'); ?>

<?php require base_path('views/partials/banner'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <p>
                <?= htmlspecialchars($note['body']) ?>
            </p>
            <a href="/notes" class="text-blue-700 underline hover:bg-amber-300">Bo back</a>
        </div>
    </main>

<?php require base_path('views/partials/footer'); ?>