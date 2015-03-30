<script>
function colorCheck() {
    if (document.getElementById('clrCheck').checked) {
        document.getElementById('ifColor').style.display = 'block';
        document.getElementById('ifImage').style.display = 'none';
        document.getElementById('imgBackground').style.display = 'none';
    }
    else {
      document.getElementById('ifColor').style.display = 'none';
      document.getElementById('ifImage').style.display = 'block';
      document.getElementById('imgBackground').style.display = 'block';
  }
}

function imgChanged(){
  document.getElementById("imgBackground").src= document.getElementById("imgSource").value;
}

function buttonBackground(color){
  document.getElementById("saveButton").className = "btn btn-"+color;
}

$(function() {
    $('#form').submit(function() {
        if (document.getElementById('clrCheck').checked) {
		document.getElementById('background_image_selected').value="false";
	}else{
		document.getElementById('background_image_selected').value="true";
	}
       
	return true; // return false to cancel form action
    });
});


</script>

<script>
colorCheck();
</script>
<h3 class="text-center">Design your Faucet:</h3>
  <table class="table table-hover">
    <tbody>
      <tr>
        <td>Background</td>
	<input type="hidden" id="background_image_selected" name="background_image_selected">
        <td>
          Color <input type="radio" onclick="javascript:colorCheck();" name="background" id="clrCheck"
          <?php if($settings["background_image_selected"]=="false") {
            echo " checked";
            } ?>>
          <div id="ifColor" >
            <input type="color" id="colorSource" name="background_color" <?php if($settings["background_color"]!="") {
              echo "value=".$settings["background_color"];
              } ?>>
          </div>
          Image <input type="radio" onclick="javascript:colorCheck();" name="background" id="imgCheck" <?php if($settings["background_image_selected"]=="true") {
            echo " checked";
            } ?>><br>
          <div id="ifImage" style="display:none">
            <input id="imgSource" size="35" placeholder="Insert the url of your image here" type="text" name="background_image" onchange="imgChanged()"
            <?php if($settings["background_image"]!="") {
              echo "value=".$settings["background_image"];
              } ?>>
          </div>
          <br>
          <img alt="Could not find the image in the url" id="imgBackground" style="display:none" height="100px" width="100px"
          <?php if($settings["background_image"]!="") {
            echo "src=".$settings["background_image"];
            } ?>>
        </td>
      </tr>
      <tr>
        <td>Title</td>
        <td><input type="color" name="title_background" value=<?php echo $settings["title_color"]?>></td>
      </tr>
      <tr>
        <td>Subtitle</td>
        <td><input type="color" name="subtitle_background" value=<?php echo $settings["subtitle_color"]?>></td>
      </tr>
      <tr>
        <td>Submit button</td>
        <td>
          <div class="btn-group prev-box picker-chooser">
            <strong><span style="color:black">Default</span></strong> <input <?php if($settings["button_background"]=="default") echo "checked"; ?> type="radio"  onclick="javascript:buttonBackground('default');" name="button_background" id="default" value="default">
            <strong><span style="color:#337ab7">Blue</span></strong> <input <?php if($settings["button_background"]=="primary") echo "checked"; ?> type="radio" onclick="javascript:buttonBackground('primary');" name="button_background" id="primary" value="primary">
            <strong><span style="color:#5cb85c">Green</span></strong> <input <?php if($settings["button_background"]=="success") echo "checked"; ?> type="radio" onclick="javascript:buttonBackground('success');"  name="button_background" id="success" value="success">
            <strong><span style="color:#5bc0de">Skyblue</span></strong> <input <?php if($settings["button_background"]=="info") echo "checked"; ?> type="radio" onclick="javascript:buttonBackground('info');" name="button_background" id="info" value="info">
            <strong><span style="color:#f0ad4e">Orange</span></strong> <input <?php if($settings["button_background"]=="warning") echo "checked"; ?> type="radio" onclick="javascript:buttonBackground('warning');" name="button_background" id="warning" value="warning">
            <strong><span style="color:#d9534f">Red</span></strong> <input <?php if($settings["button_background"]=="danger") echo "checked"; ?> type="radio" onclick="javascript:buttonBackground('danger');" name="button_background" id="danger" value="danger">
          </div>
        </td>
      </tr>

      <tr>
        <td>Submit button text</td>
        <td><input type="text" name="submit_button_text" value="<?php echo $settings["submit_button_text"];?>"></td>
      </tr>
    </tbody>
  </table>
  
  <div class="form-group">
<label for="top_horizontal_ad">Top horizontal Ad script:</label>
<textarea class="form-control" rows="3" id="top_horizontal_ad" name="top_horizontal_ad"><?php echo $settings["top_horizontal_ad"];?></textarea>
<span class="help-block with-errors">Recommended size 728x90</span>
</div>
<div class="form-group">
<label for="left_vertical_ad">Left vertical Ad script:</label>
<textarea class="form-control" rows="3" id="left_vertical_ad" name="left_vertical_ad"><?php echo $settings["left_vertical_ad"];?></textarea>
</div>
<div class="form-group">
<label for="right_vertical_ad">Right vertical Ad script:</label>
<textarea class="form-control" rows="3" id="right_vertical_ad" name="right_vertical_ad"><?php echo $settings["right_vertical_ad"];?></textarea>
</div>
<div class="form-group">
<label for="middle_horizontal_ad">Middle horizontal Ad script:</label>
<textarea class="form-control" rows="3" id="middle_horizontal_ad" name="middle_horizontal_ad"><?php echo $settings["middle_horizontal_ad"];?></textarea>
<span class="help-block with-errors">Recommended size 320x100</span>
</div>
<div class="form-group">
<label for="bottom_horizontal_ad">Bottom horizontal Ad script:</label>
<textarea class="form-control" rows="3" id="bottom_horizontal_ad" name="bottom_horizontal_ad"><?php echo $settings["bottom_horizontal_ad"];?></textarea>
<span class="help-block with-errors">Recommended size 300x250</span>
</div>

