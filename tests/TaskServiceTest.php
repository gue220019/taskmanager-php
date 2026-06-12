<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Task.php';
require_once __DIR__ . '/../src/TaskRepository.php';
require_once __DIR__ . '/../src/TaskService.php';

class TaskServiceTest extends TestCase
{
    public function testANF03TaskCanBeDeleted(): void
    {
        $repository = new TaskRepository();
        $service = new TaskService($repository);

        $service->addTask("Löschen testen");
        $service->deleteTask(0);

        $this->assertCount(0, $service->getTasks());
    }

    public function testANF04TaskCanBeCompleted(): void
    {
        $repository = new TaskRepository();
        $service = new TaskService($repository);

        $service->addTask("Erledigen testen");
        $service->completeTask(0);

        $this->assertTrue($service->getTasks()[0]->isDone());
    }
}