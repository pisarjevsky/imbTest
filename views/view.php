<?php

class Output
{
    public function inviteRender()
    {
        echo ' <form id="form"  name="form" method="post" >
        <div>
            <input id="value" name="date" type="date">
            <input id="submit" type="submit" value="Цены">
        </div>
    </form>';
    }

    public function outputRender($infoArr)
    {
        foreach ($infoArr as $price) {

        }
    }
}