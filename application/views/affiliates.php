<div class="container">
  <div class="row"> 
    <!-- COLUMN 1 -->
    <div class="text-left col-sm-3"> 
      
      <!-- SEARCH BOX -->
      <form class="form-group" action="<?php echo base_url("index.php/affiliate/search_affiliate");?>" method="post">
        <p class="lead">Find Affiliates</p>
        <div>
      	<select name="search_name" class="form-control margin-10">
	  <?php 
	    foreach($affiliate_names as $affiliate) {
	      echo "<option>{$affiliate->company}</option>";
	    }
	  ?>
        </select>

        </div>
        <div class="margin-10">
          <input class="form-control btn btn btn-success" type="submit" name="submit" id="search" value="Search">
        </div>
      </form>

	<!-- NEW AFFILIATE -->
      <hr>
	<form action="<?php echo base_url("index.php/affiliate/new_affiliate"); ?>">
      <button class="btn btn-warning btn-sm">New Affiliate</button>
      <hr>
      <div class="margin-10 margin-bottom-10"> 
	</form>
        
        <!-- CODE GENERATOR -->
        <p class="lead">Generate Embed Code</p>
        <div class="row margin-12">
         <!-- 
<div class="col-lg-6">
           <div class="input-group">
           <span class="input-group-addon">
             <input name="orientation" type="radio" id="portrait" value="portrait">
             </span>
             <input type="text" class="form-control" placeholder="Portrait">
           </div>
           <!~~ /input-group ~~>
         </div>
 -->
         <!-- /.col-lg-6 -->
       <!-- 
  <div class="col-lg-6">
           <div class="input-group"><span class="input-group-addon">
             <input name="orientation" type="radio" value="return">
             </span>
             <input type="text" class="form-control" placeholder="Return Trip">
           </div>
           <!~~ /input-group ~~>
         </div>
         <!~~ /.col-lg-6 ~~>
       
 -->
        </div>
        <!-- NEW RADIO GROUP -->
          
          <div class="row margin-10">
            <div class="col-lg-12">
              <div class="input-group"> 
              <span class="input-group-addon">
                <input name="banner-shape" type="radio" id="direction" value="portrait">
                 <label>&nbsp;Portrait </label>
                </span>
                <span class="input-group-addon">
                <input name="banner-shape" type="radio" value="landscape">
                <label>&nbsp;Landscape </label>
                </span>
              </div>
            </div>
          </div>
            
            <!-- END RADIO GROUP -->
        
        
       
        <input type="button" class=" form-control btn btn-success margin-10" value="Generate embed code">
        <div class="margin-10">
<textarea name="codearea" rows="4" class="form-control" id="codearea" placeholder="EMBED CODE SNIPPET" 
        type="codearea">[[EMBED CODE SNIPPET]]</textarea></div>
      </div>
      <p class="small">Copy this code and forward it to the affiliates web developer to embed in the affiliates website.</p>
    </div>
    
    <!-- COLUMN 2 -->
    
    <div class="col-sm-3 text-left"> 
      
<!-- DETAIL PANEL -->

	<!-- SAVE AFFILIATE INFO -->      
	<div>
      <form action="<?php echo base_url("index.php/affiliate/save_affiliate/{$affiliate_info->id}"); ?>" method="post">
        <div class="margin-bottom-10"> 
        	<span class="pull-left">
				<input type="checkbox" name="active" <?php if($affiliate_info->active){ echo "checked"; } ?>>
	  				Active</span> 
	  		<span class="pull-right">
				<?php 
				$num = str_pad($affiliate_info->id, 3, '0', STR_PAD_LEFT); 
				echo "AFID$num";
				?>
			</span> 
		</div>
		<div class="row">
		<hr/>
		</div>
        <div class="margin-10">
        <label>Company Name</label>
	<input class="form-control" name="company" type="text" id="company" value="<?php echo "{$affiliate_info->company}"; ?>" placeholder="Company name">
        </div>
        <div class="margin-10">
        <label>Contact Name</label>
	<input class="form-control" name="contact" type="text" id="contact" value="<?php echo "{$affiliate_info->contact}"; ?>" placeholder="Contact name">
        </div>
        <div class="margin-10">
        <label>Phone Number</label>
	<input class="form-control" name="phone" type="text" id="phone" value="<?php echo "{$affiliate_info->phone}"; ?>" placeholder="Phone">
        </div>
        <div class="margin-10">
        <label>Website</label>
	<input class="form-control" name="url" type="text" id="url" value="<?php echo "{$affiliate_info->url}"; ?>" placeholder="Website URL">
          <p class="small">Will show the page in the adjacent column</p>
        </div>
        <div class="margin-10">
        <label>Email</label>
	<input class="form-control" name="email" type="email" id="email" value="<?php echo "{$affiliate_info->email}"; ?>" placeholder="Email address">
        </div>
        <div class="margin-10">
        <label>Comments</label>
	<textarea name="comments" rows="5" class="form-control" id="comments" type="textarea" placeholder="Comments">
<?php echo "{$affiliate_info->comments}"; ?>
</textarea>
        </div>
        
		<div class="margin-10">
          <input class="form-control btn btn btn-success" type="submit" name="submit" id="submit" value="Save">
        </div>
        <hr>
     </form>
</div>

<div class="col-lg-3 pull-left">
	<!-- CANCEL UPDATE -->
	<form action="<?php echo base_url("index.php/affiliate/affiliate_index/{$affiliate_info->id}"); ?>">
      	<button class="btn btn-info btn-sm">Cancel</button>
	</form>
</div>

	<!-- DELETE AFFILIATE -->
<div class="col-lg-3 pull-right">	
	<form action="<?php echo base_url("index.php/affiliate/delete_affiliate/{$affiliate_info->id}"); ?>">
      <button class="btn btn-danger btn-sm pull-right">Delete</button> 
	</form>
</div>
   
</div>

    <!-- COLUMN 3 -->
    <div class="col-sm-6 text-left"> 
      
      <!-- WEBSITE PREVIEW --> 
      <!-- IFRAME URL IS TAKEN FROM THE FORM ITEM AFFILIATEURL -->
      
      <div class="scaleframe margin-bottom-10">
      <iframe src="<?php echo "http://{$affiliate_info->url}"; ?>" width="100%" height="1200px"></iframe>
      </div>
    </div>
  </div>

<script type="text/javascript">
$(function() {
	$( "#Autocomplete1" ).autocomplete(); 
});
$(function() {
	$( "#Autocomplete2" ).autocomplete(); 
});
</script>

