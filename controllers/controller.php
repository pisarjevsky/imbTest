<?php
include 'models/price.php';

class IndexController
{
    protected $view;
    protected $price;

    function __construct()
    {
        $this->view = new Output();
        $this->view->inviteRender();
    }

    public function renderView($connection)
    {
        if(isset($_POST['date']))
        {
            echo $_POST['date'];
            $price = new Price($connection, $_POST['date']);
        }
    }
}
