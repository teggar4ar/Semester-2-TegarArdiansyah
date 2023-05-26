<?php
    include_once 'template/header.php';
?>

<div class="container-fluid">
<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Text Field..</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Text Area</label> 
    <div class="col-8">
      <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Checkboxes</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" checked="checked" class="custom-control-input" value="rabbit"> 
        <label for="checkbox_0" class="custom-control-label">Rabbit</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="duck"> 
        <label for="checkbox_1" class="custom-control-label">Duck</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="fish"> 
        <label for="checkbox_2" class="custom-control-label">Fish</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Text Field</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>



<?php
    include_once 'template/footer.php';
?>