<?php
  $items = [
    ['href' => '#', 'src' => '/img/twitter.png', 'alt' => 'Twitter Logo'],
    ['href' => '#', 'src' => '/img/facebook.png', 'alt' => 'Facebook Logo'],
    ['href' => '#', 'src' => '/img/linkedin.png', 'alt' => 'LinkedIn Logo'],
    ['href' => '#', 'src' => '/img/youtube.png', 'alt' => 'YouTube Logo']
  ];
?>

<section class="flex gap-x-3">
  <div class="w-2/3">
    <h1 class="text-3xl font-bold">Oi, meu nome é Cristiano.</h1>

    <p class="text-xl leading-6 mt-6">
      Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas
      tecnologias.
      Especializado em PHP e HTML, mas também tenho conhecimento em outras linguagens como Python e Java.
    </p>

    <ul class="flex gap-x-3 mt-3">
      <?php foreach ($items as $item): ?>
        <li>
          <a href="<?= $item['href'] ?>" target="_blank">
            <img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"> 
          </a>
        </li>

      <?php endforeach; ?>
    </ul>
  </div>

  <div class="w-1/3 flex items-center justify-center">
    <div>
      <img class="h-60 -mt-6 hover:animate-pulse" src="/img/avatar.svg" alt="Foto Cristiano">
    </div>
  </div>
</section>