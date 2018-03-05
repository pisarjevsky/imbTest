<?php

class Price
{
    protected $date;
    protected $conn;
    public function __construct($connection, $date)
    {
        $this->date = $date;
        $this->conn = $connection;
    }

    public function getPrices()
    {
        $q = mysqli_query($this->conn,
            "SELECT pr.title as 'Наименование',pr.description as 'Описание',
dcp.id as 'Номер документа', dcp.datetime as 'Дата документа', dcpb.price as 'Цена'
FROM product pr
    INNER JOIN docpricebody dcpb ON pr.id = dcpb.product_id
    INNER JOIN docprice dcp ON dcpb.doc_id = dcp.id
    WHERE dcp.datetime<='" . $this->date . "' AND pr.status=0 AND dcp.status = 1
    GROUP BY pr.id
ORDER BY dcp.datetime DESC;");

        $resultArr = [];

        while ($row = mysqli_fetch_array($q)) {
            if($row['Цена']==0)
            {
                $row['Цена'] = 'Не указана';
            }
            $resultArr [] = ['Наименование' => $row['Наименование'], 'Описание' => $row['Описание'],
                'Номер документа' => $row['Номер документа'], 'Дата документа' => $row['Дата документа'],
                'Цена' => $row['Цена']];
        }

        mysqli_close($this->conn);
        return $resultArr;
    }
}