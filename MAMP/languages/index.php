   <?php
        $main1 = 'RUS';
        $main2 = 'LVL';
        $main3 = 'ENG';

        $servername = "localhost";
        $username = "root";
        $password = "root";
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>
<div class="mainTable">
    <div class="firstTable">
     <?php

        try {
            $conn = new PDO("mysql:host=$servername;dbname=contries_db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM table1 WHERE table1.lang IN ('$main1','$main2','$main3')");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach($stmt->fetchAll() as $k=>$v) {
                echo '<br>';
                foreach ($v as $z){
                    echo $z  ;
                }

            }

        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>



    <div class="secondTable">
        <?php
        try {
            $conn = new PDO("mysql:host=$servername;dbname=contries_db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT table1.lang  FROM table1  ORDER BY table1.id");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach($stmt->fetchAll() as $k=>$v) {
                echo '<br>';
                foreach ($v as $z){
                    echo $z ;
                }

            }


        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        ?>
    </div>
</div>

</body>
</html>