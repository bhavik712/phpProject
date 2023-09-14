<?php require('partials/head.php')?>
<?php require('partials/nav.php') ?>
<?php require('partials/header.php') ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p>Notes</p>

    <?php foreach($notes as $note): ?>
        <li class="text-blue-500 hover:underline">
            <a href="/note?id=<?= $note['note_id']?>">
                <?= $note['content'] ?>
            </a>
        </li>
    <?php endforeach?>

    <a href="/notes/create" class="text-black-500 mt-10 hover:text-blue-500 hover:underline ">Create New Note</a>
  </div>
</main>
<?php require('partials/foot.php')?>