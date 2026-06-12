<?php

require_once __DIR__ . '/Task.php';

class TaskRepository
{
    private array $tasks = [];

    public function save(Task $task): void
    {
        $this->tasks[] = $task;
    }

    public function findAll(): array
    {
        return $this->tasks;
    }

    public function findByIndex(int $index): Task
    {
        if (!isset($this->tasks[$index])) {
            throw new InvalidArgumentException("Aufgabe existiert nicht.");
        }

        return $this->tasks[$index];
    }

    public function delete(int $index): void
    {
        if (!isset($this->tasks[$index])) {
            throw new InvalidArgumentException("Aufgabe existiert nicht.");
        }

        unset($this->tasks[$index]);
        $this->tasks = array_values($this->tasks);
    }
}