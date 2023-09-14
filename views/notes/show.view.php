<?php require(__DIR__.'/../partials/head.php')?>
<?php require(__DIR__.'/../partials/nav.php')?>
<?php require(__DIR__.'/../partials/header.php')?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <h1 class="text-2xl font-bold mb-4"><?= $note['content']?></h1>
    <h2 class="text-xl mb-3"> Author: <?= $note['name']?></h2>
    <h3 class="text-xl text-blue-400 hover:underline"><?= $note['email']?></h3>

    <form class="mt-6" method='POST' >
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?= $note['note_id'] ?>">
      <button class="text-sm text-red-600">Delete</button>
    </form>
  </div>
</main>
<?php require(__DIR__.'/../partials/foot.php')?>