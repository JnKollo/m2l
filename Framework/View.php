<?php

/**
 * Class View
 */
class View
{
    private $file;
    private $title;
    private $script;
    private $breadcrumb;
    private $classBody;
    private $employee;
    private $formations;

    public function __construct($controller, $action) {
        $directory = "Views/" .$controller. "/";
        $this->file = $directory . $action . ".php";
    }

    public function generate($data) {
        $content = $this->generateFile($this->file, $data);
        $vue = $this->generateFile('Views/layout.php',
            array(
                'title' => $this->title,
                'script' => $this->script,
                'breadcrumb' => $this->breadcrumb,
                'classBody' => $this->classBody,
                'content' => $content,
                'employee' => $this->employee,
                'formations' => $this->formations
            )
        );
        echo $vue;
    }

    public function generateLogin($data) {
        $content = $this->generateFile($this->file, $data);
        $vue = $this->generateFile('Views/layout_login.php',
            array(
                'title' => $this->title,
                'script' => $this->script,
                'classBody' => $this->classBody,
                'content' => $content
            )
        );
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