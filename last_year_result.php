<?php include "head.php"; ?>
<?php include "side.php"; ?>
<?php include "cloud.php";?>

<br>

<center>
  <br>
  <div class="card">
  <label>LAST YEAR RESULTS</label>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Result</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $conn = mysqli_connect('localhost', 'root', '', 'lottoindia');

      $select  = "SELECT * FROM lotto_results ORDER BY dateto ASC";
      $result = $conn->query($select);
    ?>
    <?php while($row = $result->fetch_object()):?>
    <tr>
      <td>
          <?php
        if($row->dateto <= date("Y")){
          echo $row->result;
        }
        ?>
      </td>
       <td>
        <?php

        // echo $row->dateto;

      if($row->dateto <= date("Y")){
        $input =  $row->dateto;
        $date = strtotime($input);
        echo date('M/d/y h:i:s', $date);
      }
     
         ?>
           
       </td>
    </tr>
  <?php endwhile;?>
  </tbody>
</table>
 </div>
</center>
    
<?php include "footer.php" ?>