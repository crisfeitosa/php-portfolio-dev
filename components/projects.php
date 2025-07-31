<?php
  $projects = [
    [
      "title" => "Meu Portfolio",
      "finished" => false,
      "year" => 2021,
      "description" => "Meu primeiro Portfolio. Escrito em PHP e HTML.",
      "stack" => ["PHP", "HTML", "CSS", "JS"],
      "img" => "/img/project1.png"
    ],
    [
      "title" => "Lista de Tarefas",
      "finished" => true,
      "year" => 2022,
      "description" => "Lista de Tarefas. Escrito em PHP e HTML.",
      "stack" => ["PHP", "HTML", "CSS", "JS"],
      "img" => ""
    ],
    [
      "title" => "Controle de Leitura de Vídeos",
      "finished" => true,
      "year" => 2024,
      "description" => "Lista de Livros. Escrito em PHP e HTML.",
      "stack" => ["PHP", "HTML", "CSS", "JS"],
      "img" => ""
    ],
    [
      "title" => "Mais um Projeto",
      "finished" => false,
      "year" => 2025,
      "description" => "Projeto secreto em andamento. Escrito em PHP e HTML.",
      "stack" => ["PHP", "HTML", "CSS", "JS"],
      "img" => ""
    ],
  ];
?>

<?php foreach ($projects as $project): ?>
  <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
    <div class="w-1/5 flex items-center justify-middle">
      <img src="<?= $project['img'] ?>" class="w-42 rounded-md" alt="<?= $project['title'] ?>">
    </div>

    <div class="w-4/5 space-y-3">
      <div class="flex gap-3 justify-between">
        <h3 class="font-semibold text-xl">
          <?php if ($project['finished']): ?>
            ✅
          <?php endif; ?>

          <?= $project['title'] ?>

          <?php if ($project['finished']): ?>
            <span class="text-xs text-grey-400 opacity-50 italic">
              (Finalizado em <?= $project['year'] ?>)
            </span>
          <?php else: ?>
            <span class="text-xs text-grey-400 opacity-50 italic">(Em desenvolvimento)</span> 
          <?php endif; ?>
        </h3>

        <div class="space-x-1">
          <?php
            $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];

            foreach ($project['stack'] as $index => $language):
          ?>
            <span class="bg-<?= $colors[$index] ?>-400 text-<?= $colors[$index] ?>-900 rounded-md px-2 py-1 font-semibold text-xs">
              <?= $language ?>
            </span>
          <?php endforeach; ?>
        </div>

      </div>

      <p class="leading-6">
        <?= $project['description'] ?>
      </p>
    </div>
  </div>
<?php endforeach; ?>