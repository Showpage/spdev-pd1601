<div class="container">
  <div class="row">
    <div class="text-left col-sm-3">
    <p class="lead">Find a team</p>
    <form action="<?php echo base_url('index.php/team/find_team'); ?>" class="form-group" method="post">
      <div >
      <select name="vessel_search" class="form-control margin-10">
	<?php
		foreach($team_list as $team) {
			if($team->vessel === $team_info->vessel){
				echo "<option selected=\"selected\">$team->vessel</option>\n";
			} else {
				echo "<option>$team->vessel</option>\n";
			}
		}
	?>
        </select>
      </div>
      <div class="margin-10">
        <input type="submit" class="form-control btn btn btn-success" name="submit" id="search" value="View">
      </div>
 </form>
    </div>
    <div class="col-sm-3 text-left"> 
    <p class="lead">Update Information</p>
    <form action="<?php echo base_url("index.php/team/update_team/$team_info->id"); ?>" method="post">
      <div>
      <label>Vessel Name</label>
      <input class="form-control" name="vessel" type="text" id="vessel" value="<?php echo "{$team_info->vessel}"; ?>" placeholder="Vessel name">
      </div>
      <div class="margin-10">
      <label>Owner Name</label>
      <input class="form-control" name="owner" type="text" id="owner" value="<?php echo "{$team_info->owner}"; ?>" placeholder="Owner">
      </div>
      <div class="margin-10">
      <label>Phone Number</label>
      <input class="form-control" name="phone" type="text" id="phone" value="<?php echo "{$team_info->phone}"; ?>" placeholder="Phone">
      </div>
      <div class="margin-10">
      <label>Email</label>
      <input class="form-control" name="email" type="text" id="email" value="<?php echo "{$team_info->email}"; ?>" placeholder="Email address">
      </div>
      <div class="margin-10">
      <label>Phone</label>
      <input class="form-control" name="mobile" type="text" id="mobile" value="<?php echo "{$team_info->mobile}"; ?>" placeholder="Mobile">
      </div>
      <div class="margin-10">
      <label>Vessel Capacity</label>
      <input class="form-control" name="capacity" type="text" id="capacity" value="<?php echo "{$team_info->capacity}"; ?>" placeholder="Capacity">
      </div>
      <div class="margin-10">
      <input type="checkbox" title="Active" name="active" <?php if($team_info->active){ echo "checked"; } ?>> <label>Active</label>
      </div>
        
      <div class="margin-10"> </div>
      <div>
        <input type="submit" class="form-control btn btn btn-success" name="submit" id="save" value="Save">
         </div>
    
    </div>
    <div class="col-sm-6 text-left"> 
    <div>
    <div>
    <label class="pull-right">[ID #<?php echo "{$team_info->id}" ?>]</label></div>
    <div><textarea name="comments" rows="10" class="form-control" placeholder="Comments"><?php echo "{$team_info->comments}"?></textarea>
    </div>
   
    </div>
    </form>

    <form action="<?php echo base_url("index.php/team/team_index/{$team_info->id}"); ?>">
         <button class="btn btn-info btn-sm">Cancel</button>
	</form>
	<form action="<?php echo base_url("index.php/team/delete_team/{$team_info->id}"); ?>">
        <button class="btn btn-danger btn-sm pull-right">Delete team</button>
	</form>
	<form action="<?php echo base_url("index.php/team/new_team"); ?>">
        	<button class="btn btn-danger btn-sm pull-right">New team</button>
	</form>
    </div>
