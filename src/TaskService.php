<?php

require_once _DIR_ . '/Task.php';
require_once _DIR_ . '/TaskRepository.php';

class TaskService
{
    private TaskRepository $repository;

    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }

    public function addTask(string $title): void
    {
        $this->repository->save(new Task($title));
    }

    public function getTasks(): array
    {
        return $this->repository->findAll();
    }

    public function deleteTask(int $index): void
    {
        $this->repository->delete($index);
    }

    public function completeTask(int $index): void
    {
        $task = $this->repository->findByIndex($index);
        $task->markAsDone();
    }
}