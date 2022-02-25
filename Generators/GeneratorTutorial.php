<?php

namespace RGTutorials\Generators;

use Generator;
use PDO;

/**
 * Overview @link https://www.php.net/manual/en/language.generators.overview.php
 * Syntax @link https://www.php.net/manual/en/language.generators.syntax.php
 */
class GeneratorTutorial
{
    public function simpleExample(): Generator
    {
        $value = 'data';

        yield $value;
    }

    public function keyValuePairExample(): Generator
    {
        $index = 'header';
        $value = 'data';

        yield $index => $value;
    }

    public function nullExample(): Generator
    {
        for ($i = 0; $i < 3; ++$i) {
            if ($i === 0) {
                yield;
            } elseif ($i === 1) {
                yield null;
            } else {
                yield $i;
            }
        }
    }

    public function &referenceExample(): Generator
    {
        $one = 1;
        $two = 2;
        $three = 3;

        yield $one;
        yield $two;
        yield $three;
    }

    /**
     * Where we will loop over automatically from the inner generator.
     */
    public function delegationExample(): Generator
    {
        yield from $this->innerGenerator();
    }

    public function delegationWithConflictingKeysExample(): Generator
    {
        yield 0;
        yield from $this->innerGenerator();
    }

    public function returnInGeneratorExample(): Generator
    {
        yield 1;

        return 2;
    }

    public function whatIfExample1()
    {
        return 1;

        yield 1;
    }

    public function whatIfExample2(): Generator
    {
        for ($i = 0; $i < 3; ++$i) {
            if ($i > 1) {
                yield $i;
            }
        }

        yield 1;
    }

    public function databaseGenerator(): Generator
    {
        $pdo = new PDO('mysql:dbname=rg_app;host=127.0.0.1:3306;charset=utf8', 'test', 'password');

        $statement = $pdo->prepare('select * from offices');
        $statement->execute();
        while (($row = $statement->fetch(PDO::FETCH_ASSOC))) {
            yield $row;
        }
    }

    private function innerGenerator(): Generator
    {
        yield 1;
    }
}
