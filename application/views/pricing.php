<div class="container high400">
  <div class="row">
    <div class="text-left col-sm-3">
    <p class="lead">Select a starting venue</p>
    <form class="form-group">
      
        
        <select class="form-control margin-10">
	<?php 
		foreach($venue_names as $venue) {
			echo "<option>{$venue->name}</option>";
		}
	 ?> 
        
        </select>
 </form>
 
 <div class="margin-10">
        <span class="btn btn-warning btn-sm">Import CSV</span>
       
        <span class="btn btn-warning btn-sm pull-right">Export CSV</span>
        </div>
        <hr>
        <div class="margin-60">
        <p class="lead">Update &quot;Loading&quot; on selected </p>
      <label>Amount</label>
      <input class="form-control" type="text">
      </div>
      <div class="margin-bottom-10 margin-10"></div>
      <div margin-10>
        <input class="form-control btn btn btn-success" type="submit" name="submit" id="search" value="Update">
        
      </div>
    </div>
    
    <div class="col-sm-9 text-left"> 
    <form>
   
<div>
  <table class="table table-striped">
        <tbody>
          <tr class="bg-info">
            <th scope="col">Destination</th>
            <th scope="col"> Low Season</th>
            <th scope="col">High Season</th>
            <th scope="col">Loading</th>
            <th scope="col" class="hidden-xs">Select</th>
            <th scope="col" class="hidden-xs">&nbsp;</th>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox" id="checkbox"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox2" id="checkbox2"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox3" id="checkbox3"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox4" id="checkbox4"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox5" id="checkbox5"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox6" id="checkbox6"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox8" id="checkbox8"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
           <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox7" id="checkbox7"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox9" id="checkbox9"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox10" id="checkbox10"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox11" id="checkbox11"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          <tr>
            <td>Destination name</td>
            <td><input name="onewaylow" type="text" class="form-control" id="onewaylow" value="$100" size="2"></td>
            <td><input name="onewayhigh" type="text" class="form-control" id="onewayhigh" value="$120" size="2"></td>
            <td><input name="returnhigh" type="text" class="form-control" id="returnhigh" value="$50" size="2"></td>
            <td class="hidden-xs"><input type="checkbox" name="checkbox12" id="checkbox12"></td>
            <td class="hidden-xs"><span class="btn btn-warning btn-sm">Update</span></td>
          </tr>
          </tbody>
      </table>
  </div>
    </form>
    
    
    </div>
