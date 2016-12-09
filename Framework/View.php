<?php

class View
{
    private $file;
    private $title;
    private $body;
    private $employee;


    public function __construct($action, $controller = "") {
        $file = "Views/";
        if ($controller != "") {
            $file = $file . $controller . "/";
        }
        $this->file = $file . $action . ".php";
    }

    public function generate($data) {
        $content = $this->generateFile($this->file, $data);
        $vue = $this->generateFile('Views/layout.php',
            array('title' => $this->title, 'classBody' => $this->classBody, 'content' => $content, 'employee' => $this->employee));
        echo $vue;
    }

    public function generateLogin($data) {
        $content = $this->generateFile($this->file, $data);
        $vue = $this->generateFile('Views/layout_login.php',
            array('title' => $this->title, 'classBody' => $this->classBody, 'content' => $content));
        echo $vue;
    }
    private function generateFile($file, $data) {
        if (file_exists($file)) {
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier '$file' introuvable");
        }
    }
}