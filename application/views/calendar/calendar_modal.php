<!-- create modal of order item -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Please Leave your order information</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			        	<div class="row">
			        		<div class="col-6">
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Start Date:</label>
					            <input type="text" class="form-control datepicker" id="recipient-name"  >
					          </div>
			        			
			        		</div>
			        		<div class="col-6">
					           <div class="form-group">
					            <label for="recipient-name" class="col-form-label">End date:</label>
					            <input type="text" class="form-control datepicker" id="recipient-name" >
					          </div> 
			        		</div>
			        	</div>
			        	<div class="row">
			        		<div class="col-6">
			        			 <div class="form-group">
			        			  <label for="recipient-name" class="col-form-label">Choose plate of food</label>
			        			 <select name="plate" class="form-control" id="recipient-name" >
			        			 	<?php 
			        			 		$plates  = array(0 ,1, 2, 3 , 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24 ,25);
			        			 	foreach ($plates as  $value) {
			        			 		echo "<option>".$value."</option>";
			        			 		}
			        			 	?>
			        			 </select>	
			        			</div>
			        		</div>
			        		<div class="col-6">
			        			<div class="form-group">
					          	<label for="recipient-name" class="col-form-label">Choose price of food</label>
					           	<select name="plate" class="form-control" id="recipient-name" >
					           			<?php 
					           				$price  = array( 0,1500, 2000, 2500,3000);
					           						foreach ($price as  $value) {
					           								echo "<option>".$value."</option>";
					           				}
					           			?>
					           </select>	
					          </div>
			        		</div>
			        	</div>
			        	<div class="row">
			        		<div class="col-6">
			        			<div class="form-group">
					          	<label for="recipient-name" class="col-form-label">Choose Plate of rice</label>
					           	<select name="plate" class="form-control" id="recipient-name" >
					           		<?php 
					           			$plates  = array(0,1, 2, 3 , 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24 ,25);
					           		foreach ($plates as  $value) {
					           			echo "<option>".$value."</option>";
					           			}
					           		?>
					           </select>	
					          </div>		        			
			        		</div>
			        		<div class="col-6">
			        			<div class="form-group">
					          	<label for="recipient-name" class="col-form-label">Choose price of rice</label>
					           	<select name="plate" class="form-control" id="recipient-name" >
					           			<?php 
					           				$price  = array(0,1000, 1500, 2000);
					           			foreach ($price as  $value) {
					           				echo "<option>".$value."</option>";
					           				}
					           			?>
					           </select>	
					          </div>
			        		</div>
			        	</div>
			        	<div class="row">
			        		<div class="col-12">
					           <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Choose Meal Time</label>
					           <select name="foodTime" class="form-control" id="recipient-name" >
					           	<?php 
					           		$foodTimes  = array('---Select One---','Breakfast', 'Lunch ', 'Dinner');
					           	foreach ($foodTimes as  $value) {
					           		echo "<option>".$value."</option>";
					           		}
					           	?>
					           </select>	
					          </div>
			        		</div>
			        	</div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			        <button type="button" class="btn btn-success" data-dismiss="modal">Order Now</button>
			      </div>
			    </div>
			  </div>
			</div>
<!-- End of modal creation -->