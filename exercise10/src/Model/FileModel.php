<?php

namespace src\Model;

class FileModel
{

    private $fileName;
    private $fileContent;
    private $operation;
    private $delete;
    private $read;

    public function __construct($fileName, $fileContent, $operation, $delete, $read)
    {
        $this->fileName = $fileName;
        $this->fileContent = $fileContent;
        $this->operation = $operation;
        $this->delete = $delete;
        $this->read = $read;
    }

    public function createFile()
    {
        $this->fileName;
    }

    public function writeFile()
    {
        return $this->fileContent;
    }

    public function deleteFile()
    {
        return $this->delete;
    }

    public function readFile()
    {
        return $this->read;
    }

    public function operation()
    {
        switch ($this->operation) {
            case 'Create':
                $file = fopen($this->fileName . ".txt", "a");
                fwrite($file,  $this->fileContent);
                break;

            case 'Read':
                if (file_exists($this->read . '.txt')) {
                    $file = fopen($this->read . '.txt', "r");
                    echo fread($file, filesize($this->read . '.txt'));
                } else {
                    echo "No file to read.";
                }
                break;

            case 'Delete':
                if (file_exists($this->delete)) {
                    unlink($this->delete);
                } else {
                    echo "No file to delete.";
                }
        }
    }
}
