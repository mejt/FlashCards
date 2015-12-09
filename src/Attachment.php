<?php
namespace Fiche;

class Attachment
{
    private $filename;
    private $path;

    public function __construct(string $filename, string $path)
    {
        $this->filename = $filename;
        $this->path = $path;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}
