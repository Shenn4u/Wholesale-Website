<!DOCTYPE html>

<html lang="en">
<head>
    
    
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Product Search</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  
  <style>
        table {
            margin: 0 auto;
            font-size: large;
        }
  
        h1 {
            text-align: center;
            color: #0000FF;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #40E0D0;
        }
  
        th,
        td {
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
  
  
</head>
<body>
<div class="wrapper"><center>
    <header>Shanthan Wholesale Dealers<br><center>Product Search<center></header>
    </center>
  
  
  
  <table>
    
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    <?php
    
        
          $name = (isset($_POST['name']) ? $_POST['name']:'');
          $city = (isset($_POST['city']) ? $_POST['city']:'');
          $minQ = (isset($_POST['minQ']) ? $_POST['minQ']:'');
          $maxQ = (isset($_POST['maxQ']) ? $_POST['maxQ']:'');
          $minPrice = (isset($_POST['minP']) ? $_POST['minP']:'');
          $maxPrice = (isset($_POST['maxP']) ? $_POST['maxP']:'');
          
        
          if(empty($city)){
            $city = "";
          }
          if(empty($name)){
            $name = "";
          }
          if(empty($minQ)){
            $minQ = 0;
          }
          if(empty($maxQ)){
            $maxQ = 100000000;
          }
          if(empty($minPrice)){
            $minPrice = 0;
          }
          if(empty($maxPrice)){
            $maxPrice = 100000000;
          }
        
           
          $servername = "localhost";
          $username  = "id20555292_v552d3547";
          $password = "?89Oi<WHUP@[j3V&";
          $dbname = "id20555292_projectsql";
          $conn =  new mysqli($servername,$username,$password,$dbname);
              
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        
        $sql = "select * from products where (pname like '%$name%') and (city like '%$city%') and (quantity between $minQ and $maxQ) and (price between $minPrice and $maxPrice)";
            $result = mysqli_query($conn,$sql);
        if($result){
            if ($result->num_rows > 0) {
                while($rows=$result->fetch_assoc()) {
     ?>
    <tr>
           <td><?php echo $rows['pid'];?></td>
        <td><?php echo $rows['pname'];?></td>
        <td><?php echo $rows['city'];?></td>
        <td><?php echo $rows['quantity'];?></td>
        <td><?php echo $rows['price'];?></td>
    </tr>
    <?php
                }
            } 
        }
        else{
          echo "database error";
        }
        $conn->close();
     ?>
</table>

    <br>
    <br>
    <center>
      <div class="dbl-field">
      <div class="button-area">
         <button onclick="ch_back()">Perform Another search</button>
        <span></span>
      </div>
      </div>
      </center>
      
          <br>
    <br>
    <script>
        function ch_back(){
            window.history.back();
        }
    </script>
</div>

</body>
</html>
  




