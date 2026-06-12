<?php

class Task
{
    private string $title;
    private bool $done;

    public function __construct(string $title)
    {
        if (trim($title) === '') {
            throw new InvalidArgumentException("Titel darf nicht leer sein.");
        }

        $this->title = $title;
        $this->done = false;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isDone(): bool
    {
        return $this->done;
    }

    public function markAsDone(): void
    {
        $this->done = true;
    }
}