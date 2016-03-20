<div class="container">
  <div class="row">
    <div class="text-left col-lg-12 margin-bottom-10">
      <p class="lead">Update Language</p>
      <p> Forms to update language strings like messages, phone numbers etc</p>
    </div>

<?php 

$update_url = base_url('index.php/admin/language_update');
foreach($language_rules as $rule) {
echo "<form action=\"{$update_url}\" method=\"post\">";
echo <<<END
<div class="row">
<div class="col-lg-12">
<hr/>
  <div class="col-lg-3">
    <p class="lead">{$rule->key_name}</p>
  </div>
  <div class="col-lg-8">
    <div class="col-lg-4">
      <input type="text" class="form-control" value="{$rule->value}" name="{$rule->key_name}">
    </div>
    <div class="col-lg-2">
      <input class="form-control btn btn btn-success" type="submit" id="search" value="Submit">
    </div>
  </div>
</div>
</div>
</form>

END;
}

?>   

</div>
