<!DOCTYPE html>
<html>

<body>
    <center><img src="logo.png"></center>
    <?php
    include('connect.php');
    echo 'a&nbsp;aaaaaaaasssssssss';
    echo "<br/>";

    $query = "SELECT * FROM image ";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo $row["code"], "<br/>";
    }
    //$row = mysqli_fetch_array($result);
    //echo $row["code"];
    echo "<img src='image\CPU\AMD Ryzen 3 3200g.png'>";

    $query = "SELECT * FROM image where cpu = 'AMD'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo "<img src = $row[cpu].jpg>";


    $query = "SELECT * FROM ssd where Price = '3,490'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    echo "<br/>";
    echo $row['Product'];
    echo "<br/>";
    echo "<img src = 'image/SSD/$row[Product].jpg'>";
    
    ?>
</body>

</html>