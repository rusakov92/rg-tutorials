<?php

declare(strict_types=1);

namespace RGTutorials\Types;

use Throwable;

class Iterator implements \Iterator
{
    private $count = 0;

    public function current(): mixed
    {
        return $this->count;
    }

    public function next(): void
    {
        ++$this->count;
    }

    public function key(): mixed
    {
        return $this->count;
    }

    public function valid(): bool
    {
        return is_int($this->count);
    }

    public function rewind(): void
    {
        $this->count = 0;
    }
}
