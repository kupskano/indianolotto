<?php include "head.php"; ?>
<?php include "side.php"; ?>
<?php include "cloud.php";?>

  <br>
<center>
    <div class="container" style="padding-top: 10rem;">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">LOTTO DRAW LAST RESULT</h5>
          <br>
          <?php 
          $conn = mysqli_connect('localhost', 'root', '', 'lottoindia');

          $select = "SELECT * FROM lotto_results ORDER BY id DESC LIMIT 1";
          $result = $conn->query($select);


          ?>
          <?php while($row = $result->fetch_object()):?>
         <p class="card-text" id="numbers" >Date: <?php echo $row->dateto; ?> </p>
         <!-- <p class="card-text" id="numbers" >Result: <?php echo $row->result; ?> </p> -->
         <input readonly="" value="<?php echo $row->result;?>" >
       <?php endwhile; ?>
        </div>
        <br>
      </div>
      </div>
 
</center>
    

<?php include "footer.php" ?>