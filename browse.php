<?php
    include("header.php");
?>

<div class="browseContent">
    <div class="browseFilter">
        <p>Filter</p>
    </div>
    <div class="browseProducts">
        <?php
            $query = "
            SELECT name, price, imageNameHigh
            FROM graphicsCard
            ";
            try {
                $result = mysqli_query($databaseConnection, $query);
            } catch (mysqli_sql_exception $e) {
                echo "Query error: ". $e->getMessage() ."";
            }
            foreach ($result as $row) {
                echo $row["name"] . "<br><div class='price'><i>€ ". $row["price"] . "</i></div>";
            }
        ?>
    </div>
    <div class="browseEmptyDiv">
    </div>
</div>

<?php
    include("footer.php");
?>