
<!DOCTYPE html>
<html>

<head>
    <title>My form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
    
</head>


<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $a = "login";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $a);



        // Check connection
        if ($conn->connect_error) {
            die("<h1>Database Connection failed : Contact MD Toufique </h1>");
            exit();
        }

        $sql = "SELECT * FROM t ";
        $vec="Available seats : ";
        $result = $conn->query($sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["val"] == 0 ) {

                $vec=$vec."____".$row["id"];
            } 
           
        }
        $conn->close();
        ?>


<body>
    <br>
    <br>
    <div class="row">
    <div class="column">a1</div>
    <div class="column">a2</div>
    <div class="column">a3</div>
    <div class="column">a4</div>
    </div> 
    <div class="row">
    <div class="column">b1</div>
    <div class="column">b2</div>
    <div class="column">b3</div>
    <div class="column">b4</div>
    </div> 
    <div class="row">
    <div class="column">c1</div>
    <div class="column">c2</div>
    <div class="column">c3</div>
    <div class="column">c4</div>
    </div> 
    <div class="row">
    <div class="column">d1</div>
    <div class="column">d2</div>
    <div class="column">d3</div>
    <div class="column">d4</div>
    </div> 
    <div class="row">
    <div class="column">e1</div>
    <div class="column">e2</div>
    <div class="column">e3</div>
    <div class="column">e4</div>
    </div> 
    <div class="row">
    <div class="column">f1</div>
    <div class="column">f2</div>
    <div class="column">f3</div>
    <div class="column">f4</div>
    </div> 
    <div class="row">
    <?php
    echo $vec;
    ?>
    </div>
    
    <form method="post" action="fin.php" >
        <br>
        <br>
  <label for="t1" style="width:200px;display:block;margin:0 auto;">Enter seat numbers:</label><br>
  <input type="text" id="t1" name="t2" style="width:200px;display:block;margin:0 auto;" ><br>
 
  <input type="submit" style="width:200px;display:block;margin:0 auto;" >
</form> 
</body>

</html>