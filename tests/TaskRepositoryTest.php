<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Task.php';
require_once __DIR__ . '/../src/TaskRepository.php';

class TaskRepositoryTest extends TestCase
{
    public function testANF02TaskCanBeSavedAndListed(): void
    {
        $repository = new TaskRepository();
        $task = new Task("Git üben");

        $repository->save($task);

        $this->assertCount(1, $repository->findAll());
        $this->assertEquals("Git üben", $repository->findAll()[0]->getTitle());
    }

    public function testANF02TaskCanBeFoundByIndex(): void
    {
        $repository = new TaskRepository();
        $repository->save(new Task("PHP testen"));

        $task = $repository->findByIndex(0);

        $this->assertEquals("PHP testen", $task->getTitle());
    }
}