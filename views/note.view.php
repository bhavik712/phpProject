<?php require('partials/head.php')?>
<?php require('partials/nav.php') ?>
<?php require('partials/header.php') ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <h1 class="text-2xl font-bold mb-4"><?= $note['content']?></h1>
    <h2 class="text-xl mb-3"> Author: <?= $note['name']?></h2>
    <h3 class="text-xl text-blue-400 hover:underline"><?= $note['email']?></h3>

    <?php foreach($notes as $note): ?>
        <li class="text-blue-500 hover:underline">
            <a href="/note?id=<?= $note['note_id']?>">
                <?= $note['content'] ?>
            </a>
        </li>
    <?php endforeach?>
  </div>
</main>
<?php require('partials/foot.php')?>