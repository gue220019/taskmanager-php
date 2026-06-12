<?php

require_once __DIR__ . '/src/Task.php';
require_once __DIR__ . '/src/TaskRepository.php';
require_once __DIR__ . '/src/TaskService.php';

$repository = new TaskRepository();
$service = new TaskService($repository);

$service->addTask("PHP Projekt fertig machen");
$service->addTask("GitHub Screenshots machen");
$service->completeTask(0);

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>TaskMaster</title>
</head>
<body>
<h1>TaskMaster – Aufgabenliste</h1>

<ul>
    <?php foreach ($service->getTasks() as $task): ?>
        <li>
            <?= htmlspecialchars($task->getTitle()) ?>
            -
            <?= $task->isDone() ? "erledigt" : "offen" ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>