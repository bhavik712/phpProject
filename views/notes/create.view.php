<?php require(__DIR__.'/../partials/head.php')?>
<?php require(__DIR__.'/../partials/nav.php')?>
<?php require(__DIR__.'/../partials/header.php')?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p>Create Your Note</p>

    <form method='POST'>
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">

          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
              <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
              <div class="mt-2">
                <textarea id="content" name="content" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" autofocus>
                  <?= trim($value) ?>
                </textarea>
                <?php if(isset($errors['content'])): ?>
                  <p class="text-red-500 text-xs "><?= $errors['content']; ?></p>
                <?php endif; ?>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>



  </div>
</main>
<?php require(__DIR__.'/../partials/foot.php')?>