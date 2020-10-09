<?php include "head.php"; ?>
<?php include "side.php"; ?>
<?php include "cloud.php";?>

  <br>
  <div class="card">
    <label>FILTER DATA BY YEAR</label>
       <form method="post">
       <select name="filter_year" class="form-control">
        <option>2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
      </select>
      <br>
      <button name="filter_data" class="btn btn-info">Filter</button>
     </form>



     <?php
      // $conn = mysqli_connect('localhost', 'root', '', 'lottoindia');


      if(isset($_POST['filter_data'])) {

        $filter_year = $_POST['filter_year'];


        $hostname="localhost";
        $username="root";
        $password="";
        $db = "lottoindia";
        $dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
        foreach($dbh->query("SELECT * FROM lotto_results WHERE YEAR(dateto) = '$filter_year'") as $row) {
        echo "<tr>";
        echo "<br>";
        echo "<td>" . $row['dateto'] . "</td>";
        echo "<br>";
        echo "<td>" . $row['result'] . "</td>";
        echo "<br>";
        echo "</tr>";
        }

        // echo $filter_year;

          // $select = "SELECT * FROM lotto_results WHERE YEAR(dateto)= '$filter_year'";
          // $ps = $conn->query($select);

          // foreach ($ as $key => $value) {
          //   # code...
          // }

      }
 
     ?>





 
  </div>
 


<?php include "footer.php" ?>