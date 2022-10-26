<?php

declare(strict_types=1);

class Task
{
    public $name;
    public $priority;  //優先度
    public $progress;  //進行度


    public function isCompleted(): bool
    {
        return $this->progress >= 100;
    }
}
