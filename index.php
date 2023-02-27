<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
        $db_connection = pg_connect("host=data_host_prueba port=5432 dbname=dbOnil user=2171805 password=2171805");
        $SQLQuery = 'SELECT * FROM Comidas';
        $RecordSet = pg_query($db_connection, $SQLQuery);
    ?>
    <h1> Comidas </h1>
    <table class="table table-bordered">
        <thead>
            <th>Nombre</th>
            <th>Pais Prueba</th>
        </thead>
        <tbody>
            <?php
               while ($row = pg_fetch_row($RecordSet)) {
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
            </tr>
            <?php
                }
                pg_close($db_connection);
            ?>
        </tbody>
    </table>
</body>

</html>
