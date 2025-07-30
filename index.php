<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Portifólio</title>
</head>

<body>

  <?php

  $name = 'João';

  $greeting = 'Oi';

  $title = $greeting . ' Portfolio do ' . $name;

  $subtitle = 'Seja bem vindo ao meu portfolio!!';

  $year = 2024;

  $project = 'Meu Portfolio';

  $finished = false; // true,1 ou false,0

  $dateProject = '2024-10-11';

  $description = 'Meu primeiro portfolio. Escrito em PHP e HTML.';

  $projects = [
    [
      "title" => "Meu Portfolio",
      "finished" => false,
      "year" => 2021,
      "description" => "Meu primeiro portfolio. Escrito em PHP e HTML."
    ],
    [
      "title" => "Lista de Tarefas",
      "finished" => true,
      "year" => 2022,
      "description" => "Lista de Tarefas. Escrito em PHP e HTML."
    ],
    [
      "title" => "Controle de Leitura de Livros",
      "finished" => true,
      "year" => 2024,
      "description" => "Lista de livros. Escrito em PHP e HTML."
    ],
    [
      "title" => "Mais um projeto",
      "finished" => false,
      "year" => 2025,
      "descricao" => "Projeto secreto em andamento. Escrito em PHP e HTML.",
      "stack" => ["PHP", "HTML", "CSS", "JS"]
    ],
    // "Lista de Tarefas",
    // "Controle de Leitura de Livros",
    // "mais um projeto",

  ];

  function checkIsFinished($project) {
    if ($project['finished']) {
      return '<span style="color: green;">✅ finalizado</span>';
    }
    return '<span style="color: green;">⛔ não finalizado</span>';
  }

  $projectsFiltered = array_filter($projects, function ($project) {
    return $project['year'] === 2024 || $project['year'] === 2021;
  });

  ?>

  <h1><?= $title ?></h1>

  <p><?= $subtitle ?></p>

  <p><?php echo $year ?></p>

  <hr>

  <ul>

    <?php foreach ($projectsFiltered as $project): ?>

      <div

        <?php if (! ((2024 - $year) > 2)): ?>

        style="background-color: burlywood"

        <?php endif; ?>>

        <h2><?= $project['title'] ?></h2>

        <p><?= $project['description'] ?></p>

        <div>

          <div><?= $project['year'] ?></div>

          <div>Projeto:
            <?=checkIsFinished($project); ?>
          </div>

        </div>

      </div>

    <?php endforeach; ?>

  </ul>

</body>

</html>