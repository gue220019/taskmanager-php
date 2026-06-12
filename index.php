<?php

session_start();

require_once __DIR__ . '/src/Task.php';
require_once __DIR__ . '/src/TaskRepository.php';
require_once __DIR__ . '/src/TaskService.php';

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

$repository = new TaskRepository();

foreach ($_SESSION['tasks'] as $taskData) {
    $task = new Task($taskData['title']);
    if ($taskData['done']) {
        $task->markAsDone();
    }
    $repository->save($task);
}

$service = new TaskService($repository);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $service->addTask($_POST['title']);
    }

    if (isset($_POST['complete'])) {
        $service->completeTask((int)$_POST['index']);
    }

    if (isset($_POST['delete'])) {
        $service->deleteTask((int)$_POST['index']);
    }

    $_SESSION['tasks'] = [];

    foreach ($service->getTasks() as $task) {
        $_SESSION['tasks'][] = [
            'title' => $task->getTitle(),
            'done' => $task->isDone()
        ];
    }

    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>TaskMaster</title>
</head>
<body>
<h1>TaskMaster – Aufgabenliste</h1>

<form method="post">
    <input type="text" name="title" placeholder="Neue Aufgabe">
    <button type="submit" name="add">Hinzufügen</button>
</form>

<ul>
    <?php foreach ($service->getTasks() as $index => $task): ?>
        <li>
            <?= htmlspecialchars($task->getTitle()) ?>
            -
            <?= $task->isDone() ? "erledigt" : "offen" ?>

            <form method="post" style="display:inline;">
                <input type="hidden" name="index" value="<?= $index ?>">
                <button type="submit" name="complete">Erledigt</button>
            </form>

            <form method="post" style="display:inline;">
                <input type="hidden" name="index" value="<?= $index ?>">
                <button type="submit" name="delete">Löschen</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>