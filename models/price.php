<?php

class Price
{
    public function __construct($connection, $date)
    {
        $this->getPrices($connection,$date);
    }

    private function getPrices($connection, $date)
    {
        $q = mysqli_query($connection, "select description from product");
        $return = [];
        while ($row = mysqli_fetch_array($q)) {
            $return [] = $row['description'];
        }
        var_dump($return);
        mysqli_close($connection);
    }
}