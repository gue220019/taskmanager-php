<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Task.php';

class TaskTest extends TestCase
{
    public function testANF01TaskCanBeCreated(): void
    {
        $task = new Task("Mathe lernen");

        $this->assertEquals("Mathe lernen", $task->getTitle());
        $this->assertFalse($task->isDone());
    }

    public function testANF01EmptyTitleThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Task("");
    }
}