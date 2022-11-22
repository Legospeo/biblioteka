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
<h1>Tabela <i>ksiazki</i></h1>
<?php
$query = 'SELECT * FROM `ksiazki`;';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    echo '<table><tr><th>Sygnatura</th><th>Tytul</th><th>Nazwisko</th><th>Imie</th><th>Wydawnictwo</th><th>Miejsce_wyd</th><th>Rok_wyd</th><th>Objetosc_ks</th><th>Cena</th><th>Id_dzial</th></tr>';
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