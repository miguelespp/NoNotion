<?php require base_path('views/partials/header'); ?>
<?php require base_path('views/partials/nav'); ?>

<?php require base_path('views/partials/banner'); ?>

    <main>
        <div class="space-y-8 mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul>
                <?php foreach ($notes as $note) : ?>
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200 flex justify-between items-center">
                            <a id="papu" href="/note?id=<?= $note['id'] ?> " class=" text-l font-bold text-gray-900 hover:bg-amber-200 hover:underline"><?= htmlspecialchars($note['body']) ?></a>
                            <form class="end" method="post">

                                <input type="hidden" name="__request_method" value="DELETE">
                                <input type="hidden" name="user_id" value="<?= $note['user_id'] ?>">
                                <input type="hidden" name="note_id" value="<?= $note['id']?>">
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>
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