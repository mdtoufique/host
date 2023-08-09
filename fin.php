<!DOCTYPE html>
<html>
  <head>
    <title>My form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
  </head>

  <body>
    <br>
   
    <h1>Toufique's webpage</h1>
    <div class="dc" style="min-height:40vh;">
      
    

<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $a = "login";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $a);


        $val=$_POST['t2'];
        
        $arr = explode(" ", $val);
        $st=array("a1"=>0,"a2"=>0,"a3"=>0,"a4"=>0,"b1"=>0,"b2"=>0,"b3"=>0,"b4"=>0,"c1"=>0,"c2"=>0,"c3"=>0,"c4"=>0,"d1"=>0,"d2"=>0,"d3"=>0,"d4"=>0,"e1"=>0,"e2"=>0,"e3"=>0,"e4"=>0,"f1"=>0,"f2"=>0,"f3"=>0,"f4"=>0,);
        // Check connection
        if ($conn->connect_error) {
            die("<h1>Database Connection failed : Contact MD Toufique </h1>");
            exit();
        }

        $sql = "SELECT * FROM t ";
        $vec="Available seats : ";
        $result = $conn->query($sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
            $st[$row["id"]]=$row["val"];
           
        }
        $ck=1;
        
        foreach($arr as $x => $x_value) {
            if( $st[$x_value]==1)
            {
                $ck=0;
            }
            else
            {
            
            }
          }
          if($ck==0)
          {
            echo "seat already booked";
          }
          else
          {
            $c=1;
            foreach($arr as $x => $x_value) {
                $xx="'".$x_value."'";
                
                $sql = "UPDATE t SET val=1 WHERE id=$xx";
                //echo $sql."\n";
                if ($conn->query($sql) === TRUE) {
                   
                  } else {
                    $c=0;
                  }
                
              }
              if($c==1)
              echo"Seat successfully booked";
              else
              echo"failed";


            
          }
          

        $conn->close();
        ?>

            
    </div>
    
    </body>
  </html>