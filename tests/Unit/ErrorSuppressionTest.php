<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ErrorSuppressionTest extends TestCase
{
    public function testFileWriting(): void
    {
        $writer = new FileWriter;

        $this->assertFalse(@$writer->write('/is-not-writeable/file', 'stuff'));
    }
}

final class FileWriter
{
    public function write($file, $content)
    {
        $file = fopen($file, 'w');

        if ($file === false) {
            return false;
        }

        // ...
    }
}