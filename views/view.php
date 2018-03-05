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
        $result = '<table style="border: 1px solid black; text-align: center">
   <tr>
    <th>Наименование</th>
    <th>Описание</th>
    <th>Номер документа</th>
    <th>Дата документа</th>
    <th>Цена</th>
   </tr>';
        foreach ($infoArr as $info) {
            $result .= '<tr>
<td>' . $info['Наименование'] . '</td>
<td>' . $info['Описание'] . '</td>
<td>' . $info['Номер документа'] . '</td>
<td>' . $info['Дата документа'] . '</td>
<td>' . $info['Цена'] . '</td>
</tr>';
        }
        $result .= '</table>';

        echo $result;
    }
}