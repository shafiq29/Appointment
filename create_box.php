<?php
  $pos="";
  $name="";
if(!empty($_POST['pos']) && !empty($_POST['name'])){
  $pos=$pos.$_POST['pos'];
  $name=$name.$_POST['name'];
}

echo '<div id="box"  class="'.$pos.'">
    <div id="box_top" class="rem'.$pos.'">
     '. $name.'
        <div class="cro"  id="'.$pos.'">
        </div>
    </div> 
    <div id="box_mid" >
      <div id="box_mid_in" class="box_mid">
      </div>
      <input type ="text" placeholder="Enter message " id="ent"/>
    </div>
  </div>';
?>