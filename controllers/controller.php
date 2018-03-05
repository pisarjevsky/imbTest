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
            $price = new Price($connection, $_POST['date']);
            $resultArr = $price->getPrices();
            $view = new Output();
            $view->outputRender($resultArr);
            unset($_POST['date']);
        }
    }
}
