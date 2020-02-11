<?php
namespace application\controllers\Form;


class FormController{
    public function __construct()
    {
            $this->form();
    }

    public function form(){
        echo '----> form controller';
        echo '<br>';
        $id = $_GET['id'];
        require_once '../views/form.php';
    }
}