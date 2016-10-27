<?php

class View
{
    private $file;
    private $title;

    public function __construct($action, $controleur = "") {
        $fichier = "Views/";
        if ($controleur != "") {
            $fichier = $fichier . $controleur . "/";
        }
        $this->fichier = $fichier . $action . ".php";
    }

    public function generate($data) {
        $content = $this->generateFile($this->file, $data);
        $vue = $this->generateFile('Views/Layout.php',
            array('title' => $this->title, 'content' => $content));
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