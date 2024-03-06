<?php

namespace src\Controller;

use src\Model\FileModel;

class FileController
{
    
    public function FileOperation()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $fileName = $_POST['filename'];
            $fileContent = $_POST['content'];
            $fileOperation = $_POST['operation'];
            $fileDelete = $_POST['delete'] ?? '';
            $fileRead = $_POST['read'] ?? '';
            $fileOperation = new FileModel($_POST['filename'], $_POST['content'], 
            $_POST['operation'], $fileDelete, $fileRead);
            $fileOperation->operation();
        } 
    }
}
