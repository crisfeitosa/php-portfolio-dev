<?php 
  $items = [
    ['href' => '#projetos', 'text' => 'Projetos'],
    ['href' => '#', 'text' => 'GitHub'],
    ['href' => '#', 'text' => 'LinkedIn'],
    ['href' => '#', 'text' => 'Twitter']
  ];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
  <div class="font-bold text-xl text-cyan-600">🐧 Meu portfólio...</div>

  <div>
    <ul class="flex gap-x-3 font-medium text-gray-200">
      <?php foreach($items as $item): ?>
        <li>
          <a href="<?= $item['href'] ?>" class="hover:underline">
            <?= $item['text'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>