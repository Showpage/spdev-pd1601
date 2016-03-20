<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <p class="lead margin-10">Outbound Journey</p>
      <form action="<?php echo base_url("index.php/booking/booking_detail_submit"); ?>" method="post">
      <div >
       <select class="form-control" name="outbound_start_destination">
		<option>Pickup point</option>
		<?php 
			foreach($venue_names as $venue) {
				echo "<option>{$venue->name}</option>";
			}
		?>
       </select>
       <select class="form-control margin-10" name="outbound_end_destination">
		<option>Destination</option>
		<?php 
			foreach($venue_names as $venue) {
				echo "<option>{$venue->name}</option>";
			}
		?>
       </select>
       <select class="form-control margin-10" name="outbound_passengers">
	    <option>Number of passengers</option>
	    <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>More than 23</option>
       </select>
       <!--[DATE PICKER]-->
       
<!--   <input type="date" title="pickupdate" class="form-control margin-10" placeholder="Pickup date" name="outbound_date"> -->

<!-- DATE PICKER -->
            
            
       <div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important; margin-bottom:10px;">
       
        <select name="pickupdate" class="form-control margin-10" id="c1-fromday">
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
       </select></div>
       
       
       <!-- DATE PICKER -->
    
    
       <select class="form-control margin-10" name="outbound_time_of_day">
            <option>Select a pick up time</option>
            <option>09:00</option>
            <option>09:15</option>
            <option>09:30</option>
            <option>09:45</option>
            <option>10:00</option>
            <option>10:15</option>
            <option>10:30</option>
            <option>10:45</option>
            <option>11:00</option>
            <option>11:15</option>
            <option>11:30</option>
            <option>11:45</option>
            <option>12:00</option>
            <option>12:15</option>
            <option>12:30</option>
            <option>12:45</option>
            <option>13:00</option>
            <option>13:15</option>
            <option>13:30</option>
            <option>13:45</option>
            <option>14:00</option>
            <option>14:15</option>
            <option>14:30</option>
            <option>14:45</option>
            <option>15:00</option>
            <option>15:15</option>
            <option>15:30</option>
            <option>15:45</option>
            <option>16:00</option>
            <option>16:15</option>
            <option>16:30</option>
            <option>16:45</option>
            <option>17:00</option>
            <option>17:15</option>
            <option>17:30</option>
            <option>17:45</option>
            <option>18:00</option>
            <option>18:15</option>
            <option>18:30</option>
            <option>18:45</option>
            <option>19:00</option>
            <option>19:15</option>
            <option>19:30</option>
            <option>19:45</option>
            <option>20:00</option>
            <option>20:15</option>
            <option>20:30</option>
            <option>20:45</option>
            <option>21:00</option>
            <option>21:15</option>
            <option>21:30</option>
            <option>21:45</option>
            <option>22:00</option>
            <option>22:15</option>
            <option>22:30</option>
            <option>22:45</option>
            <option>23:00</option>
       </select>
       <select class="form-control margin-10" name="outbound_extra_time">
            <option>Extra time required</option>
            <option>15 Mins</option>
            <option>30 Mins</option>
            <option>45 Mins</option>
            <option>60 Mins</option>
       </select>
       
       <div class="margin-10"> 
      <select class="form-control " name="outbound_vessel">
		<?php 
			foreach($team_info as $team) {
				echo "<option>{$team->vessel} (capacity {$team->capacity})</option>";
			}
		?>
       </select>
      </div>
      
      <!-- NEW RADIO GROUP -->
          
          <div class="row margin-10">
            <div class="col-lg-12">
              <div class="input-group"> <span class="input-group-addon">
                <input name="c1-direction" type="radio" id="direction" value="oneway">
                <label>&nbsp;One Way </label>
                </span> <span class="input-group-addon">
                <input name="c1-direction" type="radio" value="return">
                <label>&nbsp;Return </label>
                </span> </div>
            </div>
          </div>
          
          <!-- END RADIO GROUP --> 
      
       <!-- 
<div class="row margin-10">
         <div class="col-lg-6">
           <div class="input-group">
           <span class="input-group-addon">
             <input name="direction" type="radio" id="direction" value="single">
             </span>
             <input type="text" class="form-control" placeholder="Single">
           </div>
           <!~~ /input-group ~~>
         </div>
         <!~~ /.col-lg-6 ~~>
         <div class="col-lg-6">
           <div class="input-group"><span class="input-group-addon">
             <input name="direction" type="radio" value="return">
             </span>
             <input type="text" class="form-control" placeholder="Return">
           </div>
           <!~~ /input-group ~~>
         </div>
         <!~~ /.col-lg-6 ~~>
       </div>
 -->
      </div>
    
    </div>
    
    <div class="col-sm-3">
    <p class="lead margin-10"> Return Journey
    </p>
      <div >
       <select class="form-control" name="inbound_start_destination">
		<option>Pickup point</option>
		<?php 
			foreach($venue_names as $venue) {
				echo "<option>{$venue->name}</option>";
			}
		?>
       </select>
       <select class="form-control margin-10" name="inbound_end_destination">
		<option>Destination</option>
		<?php 
			foreach($venue_names as $venue) {
				echo "<option>{$venue->name}</option>";
			}
		?>
       </select>
       <select class="form-control margin-10" name="inbound_passengers">
	    <option>Number of passengers</option>
	    <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>More than 23</option>
       </select>
       <!--[DATE PICKER]-->
       
<!--        <input type="date" title="pickupdate" class="form-control margin-10" placeholder="Pickup date" name="inbound_date"> -->

<!-- DATE PICKER -->
            
            
       <div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important;">
       
        <select name="pickupdate" class="form-control margin-10" id="c1-fromday">
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
       <div class="col-sm-4" style="padding-left:0px !important; padding-right:0px !important; margin-bottom:10px;">
       <select name="c1-fromyear" class="form-control margin-10" id="c1-fromyear">
         <option>Year</option>
         <option value="2016">2016</option>
         <option value="2017">2017</option>
         <option value="2018">2018</option>
         <option value="2019">2019</option>
       </select>
       </div>
       
       
       <!-- DATE PICKER -->
    
    
       <select class="form-control margin-10" name="inbound_time_of_day">
            <option>Select a pick up time</option>
            <option>09:00</option>
            <option>09:15</option>
            <option>09:30</option>
            <option>09:45</option>
            <option>10:00</option>
            <option>10:15</option>
            <option>10:30</option>
            <option>10:45</option>
            <option>11:00</option>
            <option>11:15</option>
            <option>11:30</option>
            <option>11:45</option>
            <option>12:00</option>
            <option>12:15</option>
            <option>12:30</option>
            <option>12:45</option>
            <option>13:00</option>
            <option>13:15</option>
            <option>13:30</option>
            <option>13:45</option>
            <option>14:00</option>
            <option>14:15</option>
            <option>14:30</option>
            <option>14:45</option>
            <option>15:00</option>
            <option>15:15</option>
            <option>15:30</option>
            <option>15:45</option>
            <option>16:00</option>
            <option>16:15</option>
            <option>16:30</option>
            <option>16:45</option>
            <option>17:00</option>
            <option>17:15</option>
            <option>17:30</option>
            <option>17:45</option>
            <option>18:00</option>
            <option>18:15</option>
            <option>18:30</option>
            <option>18:45</option>
            <option>19:00</option>
            <option>19:15</option>
            <option>19:30</option>
            <option>19:45</option>
            <option>20:00</option>
            <option>20:15</option>
            <option>20:30</option>
            <option>20:45</option>
            <option>21:00</option>
            <option>21:15</option>
            <option>21:30</option>
            <option>21:45</option>
            <option>22:00</option>
            <option>22:15</option>
            <option>22:30</option>
            <option>22:45</option>
            <option>23:00</option>
       </select>
       <select class="form-control margin-10" name="inbound_extra_time">
            <option>Extra time required</option>
            <option>15 Mins</option>
            <option>30 Mins</option>
            <option>45 Mins</option>
            <option>60 Mins</option>
       </select>
       
       <div class="margin-10"> 
      <select class="form-control" name="inbound_vessel">
		<?php 
			foreach($team_info as $team) {
				echo "<option>{$team->vessel} (capacity {$team->capacity})</option>";
			}
		?>
       </select>
      </div>      </div>
      
    </div>
    <div class="col-sm-3 text-left">
    <p class="lead margin-10"> Customer detail
    </p>
      
      <div class="margin-10">
      <label>First Name</label>
        <input class="form-control" name="passenger_first_name" type="text" id="firstname" placeholder="Customer First Name">
      </div>
      <div class="margin-10">
      <label>Last Name</label>
        <input class="form-control" name="passenger_last_name" type="text" id="lastname" placeholder="Customer Last Name">
      </div>
      <div class="margin-10">
      <label>Contact Number</label>
        <input class="form-control" name="passenger_phone" type="text" id="phone" placeholder="Contact number">
      </div>
      <div class="margin-10">
      <label>Email</label>
        <input class="form-control" name="email" type="text" id="email" placeholder="Email">
      </div>
      <div class="margin-10">
      <label>Travellers Phone Number</label>
        <input class="form-control" name="contact_phone" type="text" id="email" placeholder="Travellers Phone Number">
      </div>
      
        
     
      <div class="margin-10">
      <div>
      <label>Comments</label>
      <textarea rows="4" class="form-control" placeholder="Notes"></textarea>
      </div>

      
 </div>
 
    
  </div>
  
  
    
    <div class="col-md-3">
    
    <!-- CALCULATE VALUE -->


<div class="margin-10">
	<label>Cost</label>
	<input class="form-control" style="background-color:#e7e7e7;" name="charge_amount" type="text" id="charge_amount" placeholder="Charge amount" title="charge_amount">
</div>
<div class="margin-10">
    <input type="button" class="form-control btn btn-warning" name="calculate" id="search" value="Calculate"></a>
</div>
    <p class="lead margin-10"> Payment details
    </p>
    
      <div >
      <div class="margin-10">
      <label>Name on Credit Card</label>
      <input class="form-control" name="name_on_card" type="text" id="cardname" placeholder="Name on Credit Card" title="cardname">
       </div>
       <div class="margin-10">
       <label>Card Number</label>
      <input class="form-control" name="card_number" type="text" id="cardnumber" placeholder="Card Number" title="cardnumber">
       </div>
       <div class="margin-10">
       <label>Expiry Date</label>
      <input class="form-control" name="expiry" type="text" id="expirydate" placeholder="Expiry Date" title="Expiry Date">
       </div>
       <div class="margin-10 margn-bottom-10">
       <label>Security Number</label>
      <input class="form-control" name="security_number" type="text" id="securitynumber" placeholder="Security number" title="securitynumber">
       </div>



      
<!-- SUBMIT PAYMENT -->       
<div class="col-md-12 margin-10">
    
</div>
</div>
<div class="margin-10">
<label>Click continue to process the payment.</label>
    <input type="submit" class="form-control btn btn-success" name="submit" id="search" value="Continue"></a>
</div>
 </form>
