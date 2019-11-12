<?php 
$rows = $_GET["rows"];
$columns = $_GET["columns"];
$word =$_GET["word"];
?>

<style>
    table{
        width: 100%;
        height: 100%;
    }
     table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>

<form action="t1.php" method="GET">
    Rows: <input type="number" name="rows"><br>
    Cols: <input type="number" name="columns"><br>
    Word: <input type="text" name="word"><br>
    <input type="submit">
</form>

<table>
<?php 
    echo $rows . ":" . $columns;

    for($row = 0; $row < $rows; $row++){
        echo "<tr>";
        for($column = 0; $column < $columns; $column++){
            echo "<td>" . $word . "</td>";
        }
        echo "</tr>";
    }
?>

<table>