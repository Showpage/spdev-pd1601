<div class="container"> <div class="row">
    <div class="text-left col-sm-3">
    <p class="lead">Find a venue</p>
    <form class="form-group" action="<?php echo base_url('index.php/venue/select_venue'); ?>" method="post">
      <p>
      <select name="venue_dropdown" class="form-control margin-10" >
<?php
foreach($venue_names as $venue) {
	if($venue_data->name === $venue->name) {
		echo "<option selected=\"selected\">{$venue->name}</option>";
	} else {
		echo "<option>{$venue->name}</option>";
	}
}
?>
        </select>
      </p>
       <div class="col-md-6 pull-right">
        	<input class="form-control btn btn btn-warning" type="submit" name="submit" id="submit" value="Select">
        </div>
 </form>


<div class="col-md-12 margin-10">	
<hr/>
<form action="<?php echo base_url("index.php/venue/delete_venue/{$venue_data->id}"); ?>">
      <button class="form-control btn btn-danger">Delete this venue</button> 
</form>
</div>

<div class="col-md-12 margin-10">
<hr/>
<form action="<?php echo base_url('index.php/venue/create_venue'); ?>">
      <button type="submit" class="form-control btn btn btn-success">Create a new venue</button>
</form>
</div>
 
    </div>
    <div class="col-sm-3 text-left"> 
    <p class="lead">Update Information </p>
    <form action="<?php echo base_url("index.php/venue/update_venue/{$venue_data->id}"); ?>" method="post">
      <div>
      <input class="form-control" name="name" type="text" id="name" value="<?php echo "{$venue_data->name}" ?>" placeholder="Venue name">
      </div>
      
      
        
        <div>
        <label>Price</label>
      <input class="form-control" name="price" type="text" id="price" value="<?php echo "{$venue_data->price}" ?>" placeholder="Price">
      </div>
      
      <div>
        <label>Zone</label>
        <input class="form-control" name="zone" type="text" id="zone" value="<?php echo "{$venue_data->zone}" ?>" placeholder="Zone">
      </div>
      
     
      
      <div>
        <label>Loading</label>
        <input class="form-control" name="loading" type="text" id="zone" value="<?php echo "{$venue_data->loading}" ?>" placeholder="Loading">
      </div>
      
      <div class="margin-10">
      
<textarea name="comments" rows="10" class="form-control" id="comments"  type="textarea" placeholder="Comments">
<?php echo "{$venue_data->comments}" ?>
</textarea>
        </div>
        
      <div class="margin-10">
      <div class="col-md-6">
        <input class="form-control btn btn btn-success" type="submit" name="submit" id="submit" value="Update">
        </div>
       </div>
        <hr>
 </form>
 
    </div>
    <div class="col-sm-6 text-left"> 
    <form>
    <div></div>
    </form>
</div>

<div class="text-left col-sm-6">
<p class="lead">Quick reference list</p>

        <!-- NEW TABLE -->
    
    
    <table class="table table-stripped table-responsive" >
        <tbody>
        
           <tr class="bg-info">
            <th scope="col">Name</th>
            <th scope="col" style="text-align:center;">Price</th>
            <th scope="col" style="text-align:center;">Zone</th>
            <th scope="col" style="text-align:center;">Loading</th>
          </tr>
          
          <tr>
          <td>
          <?php
			foreach($venue_names as $venuelist) {
				echo "<tr>";
				echo "<td>{$venuelist->name}</td>";
				echo "<td style=\"text-align:center;\">{$venuelist->price}</td>";
				echo "<td style=\"text-align:center;\">{$venuelist->zone}</td>";
 				echo "<td style=\"text-align:center;\">{$venuelist->loading}</td>";
 				// echo "<td><a href=# \"<span class=\"btn btn-warning btn-sm\">Update</span></a><td>";
				echo "</tr>";
				
			}
		?>
		</td>

   
        
    </tbody>
      </table>
    
    
      <!-- TABLE VIEW -->

</div>
