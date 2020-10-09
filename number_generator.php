<?php include "head.php"; ?>
<?php include "side.php"; ?>
<?php include "cloud.php";?>

  		<!-- <form method="POST"> -->
  			<div class="card mx-auto mt-4 col-10">
			  <div class="card-body text-center">
			    <h5 class="card-title mx-auto col-12">GENERATED LOTTO NUMBERS</h5>
			   <p class="card-text" id="numbers" >1 - 2 - 3 - 4 - 5 - 6</p>
			    <a  class="btn btn-primary text-light mx-auto"  onclick="generate(6, 1, 60);">Generate Number</a>
			  </div>
			  <br>
			  <button class="btn btn-info mx-auto submit_generated_num" type="submit" name="">Submit Generated Numbers</button>
			</div>
  		<!-- </form> -->
		  


<?php include "footer.php" ?>
<script src="script/swal.js"></script>

<script type="text/javascript">
    	function generate(size, lowest, highest) {
	var numbers = [];
	for(var i = 0; i < size; i++) {
		var add = true;
		var randomNumber = Math.floor(Math.random() * highest) + 1;
		for(var y = 0; y < highest; y++) {
			if(numbers[y] == randomNumber) {
				add = false;
			}
		}
		if(add) {
			numbers.push(randomNumber);
		} else {
			i--;
		}
	}
  
	var highestNumber = 0;
	for(var m = 0; m < numbers.length; m++) {
		for(var n = m + 1; n < numbers.length; n++) {
			if(numbers[n] < numbers[m]) {
				highestNumber = numbers[m];
				numbers[m] = numbers[n];
				numbers[n] = highestNumber;
			}
		}
	}
  
	document.getElementById("numbers").innerHTML = numbers.join(" - ");
}
    </script>

<script type="text/javascript">
    	$(document).ready(function(){
    		$('.submit_generated_num').click(function(){
    			// var number = $('#numbers').val();
    			var numbers = document.getElementById("numbers").innerHTML;
    			console.log(numbers);
    			Swal.fire({
    				  title: 'Are you sure?',
					  text: "You won't be able to revert this!",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Yes, generate it!'
    			}).then((result) => {
    				if(result.value) {
    					Swal.fire(

    						  'Generated!',
						      'Your numbers has been generated.',
						      'success'

    						)
    					$.ajax({
    						url: 'phpfunction/generatefunction.php',
    						type: 'post',
    						data: {
    							submit_generated_num: 1,
    							numbers: numbers
    						},success:function(response){
    							setTimeout(function(){
    								location.reload();
    							}, 1000);
    						}
    					})
    				}
    			})
    		})
    	})
    </script>