<?php
defined('ABSPATH') || exit;
function obWPgenerator_sc(){
	if(is_admin() && current_user_can('administrator')){
/*Initialise all the variable during first load*/
  $tagName='';
  $closingType='';
  $filterType='';
  $functionName='';
  $attributeName='';
  $filterName='';
  $attrNameOne='';
  $attrValOne='';
  $attrNameTwo='';
  $attrValTwo='';
  $attrNameThree='';
  $attrValThree='';
  $custom_code='';

    $attribute_code_2='';
    $filter_code='';
    $attrNameOne_output='';
    $attrNameTwo_output='';
    $attrNameThree_output='';
    $filter_code_concate='';
    add_option('ob-custom-code', '', '', 'true');

if(isset($_POST["genCode"]) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ))
{
	if (isset($_POST["tagName"]))
    {
  $tagName=esc_html(sanitize_text_field(trim($_POST["tagName"])));
	}
	if (isset($_POST["closingType"]))
    {
  $closingType=esc_html(sanitize_text_field(trim($_POST["closingType"])));
	}
  	if (isset($_POST["filterType"]))
    {
	$filterType=esc_html(sanitize_text_field(trim($_POST["filterType"])));
	} 
	if (isset($_POST["functionName"]))
    {
  $functionName=esc_html(sanitize_text_field(trim($_POST["functionName"])));
	}
	if (isset($_POST["attributeName"]))
    {
  $attributeName=esc_html(sanitize_text_field(trim($_POST["attributeName"])));
	}
	if (isset($_POST["filterName"]))
    {
  $filterName=esc_html(sanitize_text_field(trim($_POST["filterName"])));
  	}
  	if (isset($_POST["attrNameOne"]))
    {
  $attrNameOne=esc_html(sanitize_text_field(trim($_POST["attrNameOne"])));
	}
	if (isset($_POST["attrValOne"]))
    {
  $attrValOne=esc_html(sanitize_text_field(trim($_POST["attrValOne"])));
	}
	if (isset($_POST["attrNameTwo"]))
    {
  $attrNameTwo=esc_html(sanitize_text_field(trim($_POST["attrNameTwo"])));
	}
	if (isset($_POST["attrValTwo"]))
    {
  $attrValTwo=esc_html(sanitize_text_field(trim($_POST["attrValTwo"])));
	}
	if (isset($_POST["attrNameThree"]))
    {
  $attrNameThree=esc_html(sanitize_text_field(trim($_POST["attrNameThree"])));
	}
	if (isset($_POST["attrValThree"]))
    {
  $attrValThree=esc_html(sanitize_text_field(trim($_POST["attrValThree"])));
	}
  $custom_code=stripslashes(esc_textarea($_POST["custom_code"]));
  $custome_code_decode=base64_encode($custom_code);
  update_option('ob-custom-code', $custome_code_decode, '', 'true');

  if($filterType=='no'){
    $filter_code='';
  } elseif($filterType=='yes_tag_name'){
    $filter_code="'$tagName'";
  } elseif($filterType=='yes_custom_name'){
    $filter_code="'$filterName'";
  } else {}

  if($filterType=='yes_tag_name' || $filterType=='yes_custom_name'){
   $filter_code_concate=',';
  }

  if($attrNameOne != null){
    $attrNameOne_output="'$attrNameOne' => '$attrValOne',";
  }

   if($attrNameTwo != null){
    $attrNameTwo_output="'$attrNameTwo' => '$attrValTwo',";
  }

   if($attrNameThree != null){
    $attrNameThree_output="'$attrNameThree' => '$attrValThree',";
  }


  if($attributeName=='1')
  {
  $closingType_code_2='$atts , $content = null';
  } else {
  $closingType_code_2='$atts , $content = null';
  $attribute_code_2='// Attributes
  $atts = shortcode_atts(
    array(';
  $attribute_code_2.="\n&nbsp;&nbsp;&nbsp;&nbsp;$attrNameOne_output\n";
  $attribute_code_2.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$attrNameTwo_output";
  $attribute_code_2.="\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$attrNameThree_output\n";
  $attribute_code_2.='&nbsp;&nbsp;),
    $atts';

    $attribute_code_2.="$filter_code_concate";
    $attribute_code_2.="\n$filter_code";

    $attribute_code_2.="\n);\n";
  }

}
 $s="function $functionName(";
  if($closingType=='2'){
     $s.='$atts , $content = null';
   } else {
    if($attributeName=='2')
    {
    $s.='$atts';
    } else {
      $s.='';
    }
   }
     $s.=") {

       $attribute_code_2";
       if($custom_code != null) {
       $s.="$custom_code\n";
     }

  $s.="}
  add_shortcode( '$tagName', '$functionName' );";
?>
	<div class="wrap">
	<div class="header-heading-area">
  <p class="heading">
  <span class="responsive-remove">Spice up your wordpress development with</span>
  <span class="title-animation">
    SHORTCODE GENERATOR
  </span>
  <span class="responsive-remove">&mdash; no Development Knowledge required &mdash;</span>
  </p>
  </div>

	<div clas="main-content-area">
	<div class="ob-tab">
	  <button class="tablinks" onclick="openOB(event, 'info')">Info</button>
	  <button class="tablinks active" onclick="openOB(event, 'shortcode')">Shortcode</button>
	  <button class="tablinks" onclick="openOB(event, 'attributes')">Attributes</button>
	  <button class="tablinks" onclick="openOB(event, 'code')">Code</button>
	</div>
  <form id="tform" method="POST" action="#" class="ob-gen-form">
	<div id="info" class="tabcontent">
	<div class="ob-twoinone-container">
    <label for="help">Use this tool to create custom code for Shortcodes with <span style="color: blue;">add_shortcode()</span> function.<br></label>
    <div id="left">
    <label for="heading"><span style="color: blue;">Usage</span></label>
    <ul>
    <li>Fill in the user-friendly form.</li>
    <li>Click the “Update Shortcode button.</li>
    <li>Copy the code to your project.</li>
    <li>Or copy the code and share with the world.</li>
    </ul>
    </div>
    <div id="right">
    <label for="heading">If you are still learning how to use this tool, <span style="color: blue;">check out the following examples:</span></label>
    <ul>
    <li><a target="_blank" class="info-linking" href="<?php echo admin_url(); ?>admin.php?page=obWPgeneratorDOC#exampleone">[video_embed_shortcode src="" width="" height=""]</a></li>
    <li><a target="_blank" class="info-linking" href="<?php echo admin_url(); ?>admin.php?page=obWPgeneratorDOC#exampletwo">[image_shortcode width="300" height="300"]https://...[/image_shortcode]</a></li>
    <li><a target="_blank" class="info-linking" href="<?php echo admin_url(); ?>admin.php?page=obWPgeneratorDOC#examplethree">[bold]Hello World[/bold]</a>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;<a target="_blank" class="info-linking" href="<?php echo admin_url(); ?>admin.php?page=obWPgeneratorDOC#examplesix">[cloak-shortcode email="me@email.com"]</a></li>
    <li><a target="_blank" class="info-linking" href="<?php echo admin_url(); ?>admin.php?page=obWPgeneratorDOC#examplefive">[recent-posts-shortcode]</a>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;<a target="_blank" class="info-linking" href="<?php echo admin_url(); ?>admin.php?page=obWPgeneratorDOC#examplefour">[link-to-post-by-id id=""]</a></li>
    </ul>
    </div>
	</div>
	</div>

	<div id="shortcode" class="tabcontent" style="display: block;">
	<div class="ob-twoinone-container">

  <div id="left">
  <ul>
  	<li>
    <label style="color: green;" for="tagname">Tag Name</label>
     <input type="text" name="tagName" value="<?php if ( isset( $_POST['tagName'] ) ) echo $_POST['tagName']; ?>"/>
    <span>Shortcode tag in the content. e.g. <span style="color: #000;">[tag]</span></span>
	</li>

	<li>
    <label for="shortcodetype">Shortcode Type</label>
     <select name="closingType">
        <option value="1" <?php if ($closingType == '1' || $closingType == '') echo ' selected="selected"'; ?>>Self-closing</option>
        <option value="2" <?php if ($closingType == '2') echo ' selected="selected"'; ?>>Enclosing</option>
      </select>
    <span>Self-closing shortcode: <span style="color: #000;">[tag]</span> Enclosing shortcode: <span style="color: #000;">[tag]content[/tag]</span></span>
	</li>

	<li>
    <label for="addattributesfilter">Add Attributes Filter</label>
    <select id="filterType" name="filterType">
        <option value="no"  <?php if ($filterType == 'no' || $filterType == '') echo ' selected="selected"'; ?>>No filter (Default)</option>
        <option value="yes_tag_name" <?php if ($filterType == 'yes_tag_name') echo ' selected="selected"'; ?>>Yes - Use tag name (Recomended)</option>
        <option value="yes_custom_name" <?php if ($filterType == 'yes_custom_name') echo ' selected="selected"'; ?>>Yes - Use custom name</option>
      </select>
    <span>Use <span style="color: #000;">"shortcode_atts_{$shortcode}"</span> filter, to allow shortcode attributes filtering.</span>
	</li>
  </ul>
  </div>

  <div id="right">

  <ul>
  	<li>
    <label for="functionname">Function Name</label>
    <input type="text" value="<?php if ( isset( $_POST['functionName'] ) ) { echo $_POST['functionName'];} else {echo 'custom_shortcode';} ?>" name="functionName" />
    <span>The function used in the code.</span>
	</li>

	<li>
    <label for="attributes">Attributes</label>
    <select id="attributeName" name="attributeName">
        <option value="1" <?php if ($attributeName == '1' || $attributeName == '') echo ' selected="selected"'; ?>>No</option>
        <option value="2" <?php if ($attributeName == '2') echo ' selected="selected"'; ?>>Yes</option>
      </select>
    <span>Enable attributes such as <span style="color: #000;">[tag foo="123" bar="456"]</span>.</span>
	</li>

	<li>
    <label for="customfiltername">Custom Filter Name</label>
    <input type="text" id="filterName" name="filterName" value="<?php if ( isset( $_POST['filterName'] ) ) echo $_POST['filterName']; ?>"/>
    <span>Set custom filter name.</span>
	</li>
  </ul>
  </div>
	</div>
	</div>

	<div id="attributes" class="tabcontent">
	   <div class="ob-twoinone-container">

  <div id="left">
  <ul>
  	<li>
    <label for="firstattributename">1st Attribute Name</label>
     <input type="text" id="attrNameOne" name="attrNameOne" value="<?php if ( isset( $_POST['attrNameOne'] ) ) echo $_POST['attrNameOne']; ?>"/>
    <span>Attribute name. <span style="color: #000;">Lowercase.</span></span>
	</li>

	  	<li>
    <label for="secondattributename">2nd Attribute Name</label>
     <input type="text" id="attrNameTwo" name="attrNameTwo" value="<?php if ( isset( $_POST['attrNameTwo'] ) ) echo $_POST['attrNameTwo']; ?>"/>
    <span>Attribute name. <span style="color: #000;">Lowercase.</span></span>
	</li>

	  	<li>
    <label for="thirdattributename">3rd Attribute Name</label>
     <input type="text" id="attrNameThree" name="attrNameThree" value="<?php if ( isset( $_POST['attrNameThree'] ) ) echo $_POST['attrNameThree']; ?>"/>
    <span>Attribute name. <span style="color: #000;">Lowercase.</span></span>
	</li>
	</ul>
	</div>

	  <div id="right">
  <ul>
  	<li>
    <label for="firstattributevalue">1st Attribute Default Value</label>
     <input type="text" id="attrValOne" name="attrValOne" value="<?php if ( isset( $_POST['attrValOne'] ) ) echo $_POST['attrValOne']; ?>"/>
    <span>Default value.</span>
	</li>

	  	<li>
    <label for="secondattributevalue">2nd Attribute Default Value</label>
     <input type="text" id="attrValTwo" name="attrValTwo" value="<?php if ( isset( $_POST['attrValTwo'] ) ) echo $_POST['attrValTwo']; ?>"/>
    <span>Default value.</span>
	</li>

	  	<li>
    <label for="thirdattributevalue">3rd Attribute Default Value</label>
     <input type="text" id="attrValThree" name="attrValThree" value="<?php if ( isset( $_POST['attrValThird'] ) ) echo $_POST['attrValThird']; ?>"/>
    <span>Default value.</span>
	</li>

  </ul>
	</div>

  </div>
	</div>

	<div id="code" class="tabcontent">
  <div class="ob-twoinone-container">
  <label for="code" style="color: green;">Code</label>
	<textarea id="ob-custom-php-code" name="custom_code" class="ob-gen-res"></textarea>
  <textarea readonly="readonly" onclick="this.focus();this.select()"><?php echo $cc_code=base64_decode(get_option('ob-custom-code')); ?></textarea>
   <span>Custom code to generate the output. Should only <span style="color: blue;">"return" the text, never produce the output directly.</span></span>
   </div>
	</div>
 <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
<div class="on-gen-button">
 <input class="button button-primary genCode" name="genCode" type="submit" value=":::Update Shortcode:::"/>
</div>
</form>
	<div class="ob-gen-res-wrap">
	 <textarea class="ob-gen-res" onclick="this.focus();this.select()" readonly="readonly">// Add Shortcode
  <?php
   if ($s != null){
    echo $s;
   } else {
    echo "function custom_shortcode() {
}
add_shortcode( '', 'custom_shortcode' );";
   }
  ?>
	</textarea> 
	</div>
	</div>
  </div>
<script type="text/javascript">
 jQuery("#filterType").prop('disabled',true);

    jQuery("#filterName").prop('disabled',true);

    jQuery("#attrNameOne").prop('disabled',true);
    jQuery("#attrNameTwo").prop('disabled',true);
    jQuery("#attrNameThree").prop('disabled',true);

    jQuery("#attrValOne").prop('disabled',true);
    jQuery("#attrValTwo").prop('disabled',true);
    jQuery("#attrValThree").prop('disabled',true);


jQuery('#attributeName').change(function(e){
if(jQuery(this).val() == "2"){
    //alert('hi');
    jQuery("#filterType").prop('disabled',false);

    jQuery("#attrNameOne").prop('disabled',false);
    jQuery("#attrNameTwo").prop('disabled',false);
    jQuery("#attrNameThree").prop('disabled',false);

    jQuery("#attrValOne").prop('disabled',false);
    jQuery("#attrValTwo").prop('disabled',false);
    jQuery("#attrValThree").prop('disabled',false);
    }
  else {
    jQuery("#filterType").prop('disabled',true);

    jQuery("#attrNameOne").prop('disabled',true);
    jQuery("#attrNameTwo").prop('disabled',true);
    jQuery("#attrNameThree").prop('disabled',true);

    jQuery("#attrValOne").prop('disabled',true);
    jQuery("#attrValTwo").prop('disabled',true);
    jQuery("#attrValThree").prop('disabled',true);
  }
});

jQuery(document).ready(function(){
jQuery('#filterType').change(function(e){
if(jQuery(this).val() == "yes_custom_name"){
    //alert('hi2');
    jQuery("#filterName").prop('disabled',false);
    }
  else  
    jQuery("#filterName").prop('disabled',true);
  })
})
</script>
	<?php
	}
}



