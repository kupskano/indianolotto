<?php include "head.php"; ?>
<?php include "side.php"; ?>
<?php include "cloud.php";?>

<div class="card">
<table class="table responsive" >
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Result</th>
    </tr>
  </thead>
  <tbody>
  <?php 
      $conn = mysqli_connect('localhost', 'root', '', 'lottoindia');

      $select = "SELECT * FROM lotto_results ORDER BY id DESC LIMIT 10";
      $result = $conn->query($select);


      ?>
      <?php while($row = $result->fetch_object()):?>
    <tr>
      <td><?php
              $input = $row->dateto;
              $date = strtotime($input);
              echo date('M/d/Y h:i:s', $date);
            ?></td>
      <td><?php echo $row->result;?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>


<?php include "footer.php" ?>