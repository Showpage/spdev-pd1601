<div class="container">
  <div class="row">
  
    <div class="text-left col-sm-3">
    <!-- SEARCH BOX -->
    <p class="lead">Find a customer</p>
    <form class="form-group">
      <p>
        <input class="form-control" name="textfield" type="text" id="textfield" placeholder="Surname Firstname">
      </p>
      <p>
        <input class="form-control btn btn btn-success" type="submit" name="submit" id="search" value="Select">
        
      </p>
 </form>
    </div>
    <div class="col-sm-3 text-left"> 
    <!-- DETAILS PANEL -->
     <form>
      <div>
      <label>First Name</label>
        <input class="form-control" name="textfield" type="text" id="firstname" placeholder="First Name">
      </div>
      <div class="margin-10">
      <label>Last Name</label>
        <input class="form-control" name="textfield" type="text" id="lastname" placeholder="Last Name">
      </div>
      <div class="margin-10">
      <label>Phone</label>
        <input class="form-control" name="textfield" type="text" id="phone" placeholder="Phone">
      </div>
      <div class="margin-10">
      <label>Email</label>
        <input class="form-control" name="email" type="text" id="email" placeholder="Email">
        </div>
      <div class="margin-10">
      <label>Comments</label>
        <textarea name="textarea" rows="5" class="form-control" id="comments" placeholder="Comments" type="textarea"></textarea>
        </div>
        
      <div class="margin-10">
        <input class="form-control btn btn btn-success" type="submit" name="submit" id="submit" value="Display History">
        </div>
        <hr>
        <div class="margin-10">
        <span class="btn btn-success btn-sm">Save</span>
        <span class="btn btn-info btn-sm">Cancel</span>
        <span class="btn btn-danger btn-sm pull-right">Delete</span>
        </div>
      
 </form>
 
 
    
    </div>
    <div class="col-sm-6 text-left"> 
    <!-- NEW TABLE -->
    <form>
    <div>
      <table class="table table-stripped table-responsive">
        <tbody>
          <tr class="bg-info">
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Pick Up</th>
            <th scope="col">Drop Off</th>
            </tr>
            
             <td>
          <?php
          // I AM NOT SELECTING FROM THE DB CORRECTLY. 
          // AM I EXPECTING A NEW CUSTOMER MODEL?
          
          
			// foreach($customer_bookings as $booking) 
			{
				echo "<tr>";
				echo "<td>DB_Date</td>";
				echo "<td>DB_Time</td>";
				echo "<td>DB_Pick Up</td>";
				echo "<td>DB_Drop Off</td>";
				echo "</tr>";
			}
		?>
		</td>
          </tbody>
      </table>
    
    <!-- TABLE VIEW -->
    <form>
    <!-- 
<div>
      <table class="table table-stripped table-responsive">
        <tbody>
          <tr class="bg-info">
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Pick Up</th>
            <th scope="col">Drop Off</th>
            </tr>
          <tr>
            <td>November 14 2014</td>
            <td>16.30</td>
            <td>Rose Bay</td>
            <td>Pyrmont</td>
            </tr>
          <tr>
            <td>November 14 2014</td>
            <td>16.30</td>
            <td>Rose Bay</td>
            <td>Pyrmont</td>
            </tr>
          <tr>
            <td>November 14 2014</td>
            <td>16.30</td>
            <td>Rose Bay</td>
            <td>Pyrmont</td>
            </tr>
          <tr>
            <td>November 14 2014</td>
            <td>16.30</td>
            <td>Rose Bay</td>
            <td>Pyrmont</td>
            </tr>
          <tr>
            <td>November 14 2014</td>
            <td>16.30</td>
            <td>Rose Bay</td>
            <td>Pyrmont</td>
            </tr>
          <tr>
            <td>November 14 2014</td>
            <td>16.30</td>
            <td>Rose Bay</td>
            <td>Pyrmont</td>
            </tr>
        </tbody>
      </table>
    </div>
 -->
    </form>
    
    
    </div>
