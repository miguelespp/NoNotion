<?php require 'views/partials/header.php'; ?>
<?php require 'views/partials/nav.php'; ?>

<?php require 'views/partials/banner.php'; ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <p>
                <?= htmlspecialchars($note['body']) ?>
            </p>
            <a href="/notes" class="text-blue-700 underline hover:bg-amber-300">Bo back</a>
        </div>
    </main>

<?php require 'views/partials/footer.php'; ?>