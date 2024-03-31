<?php require base_path('views/partials/header'); ?>
<?php require base_path('views/partials/nav'); ?>

<?php require base_path('views/partials/banner'); ?>

    <main>
        <div class="space-y-8 mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul>
                <?php foreach ($notes as $note) : ?>
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200 flex">
                            <a href="/note?id=<?= $note['id'] ?> " class=" text-l font-bold text-gray-900 hover:bg-amber-200 hover:underline"><?= htmlspecialchars($note['body']) ?></a>
                            <div class="end">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 justify-end">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                                </svg>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </ul>
            <p class="">
                <a href="/note/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
            </p>
        </div>
    </main>

<?php require base_path('views/partials/footer'); ?>