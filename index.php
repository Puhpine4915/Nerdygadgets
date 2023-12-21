<?php
    include("header.php");
?>

<style>
    body {
        overflow: hidden;
    }
</style>

<div class="indexContent">
    <div class="indexTitle">
        <i>Nerdygadgets</i>
    </div>
    <div class="indexProduct">
        <div class="indexProductName">
        <?php
            $query = "
            SELECT name, price, imageNameHigh
            FROM graphicsCard
            WHERE ID = 1
            ";
            try {
                $result = mysqli_query($databaseConnection, $query);
            } catch (mysqli_sql_exception $e) {
                echo "Query error: ". $e->getMessage() ."";
            }
            foreach ($result as $row) {
                echo $row["name"] . "<br><div class='price'><i>€ ". $row["price"] . "</i></div>";
            ?>
        </div>
        <div>
            <img src='
            <?php 
                echo $row["imageNameHigh"];}
            ?>' style="width: 40vw;">
        </div>
    </div>
</div>

<?php
    include("footer.php");
?>