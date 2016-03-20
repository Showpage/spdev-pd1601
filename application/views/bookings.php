<div class="container">
  <div class="row">
    <div class="text-left col-sm-3 margin-bottom-10">
    <!-- SEARCH BOX -->
    <form class="form-group">
      <p class="lead">Find a booking        </p>
      <div class="margin-10">
        <select class="form-control">
        <option>All Teams</option>
		<?php
			foreach($team_names as $team) {
				echo "<option value=\"{$team->vessel}\">{$team->vessel}</option>";
			}
		?>
        </select>
      </div>
      <div class="margin-10">
     
<!-- <input class="form-control" type="date"> -->
<!-- DATE PICKER -->            
       <div class="col-sm-12 margin-10" style="padding-left:0px !important;"><label>From</label></div>
       		<div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important;">
       
        <select name="c1-fromday" class="form-control margin-10" id="c1-fromday">
          <option selected>Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
       </div>
       		<div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important;">
       <select name="c1-frommonth" class="form-control margin-10" id="c1-frommonth">
         <option selected>Month</option>
         <option value="January">January</option>
         <option value="February">February</option>
         <option value="March">March</option>
         <option value="April">April</option>
         <option value="May">May</option>
         <option value="June">June</option>
         <option value="July">July</option>
         <option value="Auust">August</option>
         <option value="September">September</option>
         <option value="October">October</option>
         <option value="November">November</option>
         <option value="December">December</option>
       </select>
       </div>
			<div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important;">
       <select name="c1-fromyear" class="form-control margin-10" id="c1-fromyear">
         <option>Year</option>
         <option value="2016">2016</option>
         <option value="2017">2017</option>
         <option value="2018">2018</option>
         <option value="2019">2019</option>
       </select>
       </div>
		</div>
       <!-- DATE PICKER -->


	<div class="margin-10">
<!--<input class="form-control" type="date"> -->
<!-- DATE PICKER -->
       	<div class="col-sm-12 margin-10" style="padding-left:0px !important;"><label>To</label></div>
       		<div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important;">
       
        <select name="c1-fromday" class="form-control margin-10" id="c1-fromday">
          <option selected>Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
       </div>
       		<div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important;">
       <select name="c1-frommonth" class="form-control margin-10" id="c1-frommonth">
         <option selected>Month</option>
         <option value="January">January</option>
         <option value="February">February</option>
         <option value="March">March</option>
         <option value="April">April</option>
         <option value="May">May</option>
         <option value="June">June</option>
         <option value="July">July</option>
         <option value="Auust">August</option>
         <option value="September">September</option>
         <option value="October">October</option>
         <option value="November">November</option>
         <option value="December">December</option>
       </select>
       </div>
      	 	<div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important;">
       <select name="c1-fromyear" class="form-control margin-10" id="c1-fromyear">
         <option>Year</option>
         <option value="2016">2016</option>
         <option value="2017">2017</option>
         <option value="2018">2018</option>
         <option value="2019">2019</option>
       </select>
       </div>
      </div>
<!-- DATE PICKER -->      
      <div>
        <input class="form-control btn btn btn-success margin-10" type="button" name="viewbooking" id="search" value="View Bookings">
      </div>
 </form>
 
 <form>
  <div margin-10>
  <input name="submit" type="submit" class="form-control btn btn btn-warning" id="search" formaction="<?php echo base_url('index.php/booking/booking_detail'); ?>" value="Create a Booking">
        
      </div>
      </form>
 
 <div class="margin-60">
        <span class="btn btn-warning btn-sm">Export CSV</span>
       
        <span class="btn btn-info btn-sm pull-right">Print</span>
        </div>
    </div>
    <div class="col-sm-9 text-left" > 
    
    
    <!-- NEW TABLE -->
    
    
    <table class="table table-stripped table-responsive" >
        <tbody>
        
           <tr class="bg-info">
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Pick Up</th>
            <th scope="col">Drop Off</th>
            <th scope="col" class="hidden-xs">Customer</th>
            <th scope="col" class="hidden-xs">Phone</th>
            <th scope="col">Update</th>
          </tr>
          
          <tr>
          <td>
          <?php
			foreach($team_bookings as $booking) {
				echo "<tr>";
				echo "<td>Date</td>";
				echo "<td>Time</td>";
				echo "<td>{$booking->start_destination}</td>";
				echo "<td>{$booking->end_destination}</td>";
				echo "<td>{$booking->passenger_first_name} {$booking->passenger_last_name}</td>";
				echo "<td>Phone {$booking->id}</td>";
				echo "<td><a href=# \"<span class=\"btn btn-warning btn-sm\">Update</span></a><td>";
				echo "</tr>";
				
			}
		?>
		</td>

   
        
    </tbody>
      </table>
    
    
      <!-- TABLE VIEW -->
    <div>
      <!-- 
<table class="table table-stripped table-responsive" >
        <tbody>
          <tr class="bg-info">
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Pick Up</th>
            <th scope="col">Drop Off</th>
            <th scope="col" class="hidden-xs">Customer</th>
            <th scope="col" class="hidden-xs">Phone</th>
            <th scope="col">Update</th>
          </tr>
          <tr>
            <td>November 14 2014</td>
            <td>16.30</td>
            <td>Rose Bay</td>
            <td>Pyrmont</td>
            <td class="hidden-xs"><a href="#">John Doe</a></td>
            <td class="hidden-xs">12 1234 1234</td>
            <td><a href="<?php echo base_url('index.php/booking/booking_detail_index'); ?>"><span class="btn btn-warning btn-sm">Update</span></a></td>
          </tr>
          <tr>
            <td>November 14 2014</td>
            <td>16.30</td>
            <td>Rose Bay</td>
            <td>Pyrmont</td>
            <td class="hidden-xs"><a href="#">John Doe</a></td>
            <td class="hidden-xs">12 1234 1234</td>
            <td><a href="<?php echo base_url('index.php/booking/booking_detail_index'); ?>"><span class="btn btn-warning btn-sm">Update</span></a></td>
          </tr>
          </tbody>
      </table>
 -->
    </div>
  </div>
