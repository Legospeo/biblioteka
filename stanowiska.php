<head>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            border: 1px solid black;
            padding: 3px;
        }
    </style>
</head>
<h1>Tabela <i>czytelnicy</i></h1>
<?php
$query = 'SELECT * FROM `stanowiska`;';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    echo '<table><tr><th>Id_stanowiska</th><th>Nazwa</th></tr>';
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<tr>';
        foreach($row as $key => $value)
        {
            echo '<td>'.$value.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}