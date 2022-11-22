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
<h1>Tabela <i>pracownicy</i></h1>
<?php
$query = 'SELECT * FROM `pracownicy`;';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    echo '<table><tr><th>Id_pracownika</th><th>Nazwisko</th><th>Imie</th><th>Id_stanowisko</th><th>Miasto</th><th>Data zatrudnienia</th><th>Wynagrodzenie</th></tr>';
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