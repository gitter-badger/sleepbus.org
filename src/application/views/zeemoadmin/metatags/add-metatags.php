<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo PREFIX_TITLE.$title;?></title>
  <?=$this->admincss->IncludeCssFiles()?>
  <?=$this->adminjavascript->IncludeJsFiles()?>
</head>
<body>
 <?php
  echo form_open_multipart(base_url().admin."/metatags/validatemetatags", $attributes['form']);
  echo form_hidden('page_id',$page_id);
  echo form_hidden('page_type',$page_type);
  echo form_hidden('meta_id',$meta_id);
  echo form_hidden('heading',$heading);
  echo form_hidden('section',$section);
  echo form_hidden('main_section',$main_section);
  
  
 ?>

<div style=" padding: 6px 5px 8px 5px !important;">


  <span class="main_heading" style="padding-top:3px;padding-bottom:5px;">Meta/Title Tags for <span class="success"><b><?php echo ucfirst(urldecode($main_section));?> >> <?php echo ucfirst(urldecode($heading));?></b></span> <?php if($page_id == '0'){ ?> (Main Page) <?php }?></span>
  <?php
   if(isset($last_modified) and count($last_modified) > 0)
   {
	echo "<span class='last_modified_pop_up'>Last Modified by <span class='success'>".$last_modified['username']."</span> on <span class='success'>".$last_modified['time']."</span></span>";
   }
  ?>
 
</div>
             <table width="98%" border="0" cellpadding="0" cellspacing="0" style="color: #636466;font-family: Arial;font-size: 11px;font-weight: bold;text-align: left;padding-left:22px;">
     		    
               <?php
               if(isset($attributes['url']) and !empty($attributes['url']))
			   {
			    ?>
			    <tr>
                 <td style="padding-top:0px;padding-bottom:5px;padding-top:5px;">
                 *Page URL &nbsp;<span class="error1" id="error"><?php echo form_error('url'); ?></span>
                 </td>
                </tr>
                <tr>
                 <td colspan="4" align="left" valign="bottom">
                 <?php echo form_input($attributes['url']); ?>
                 </td>
                </tr> 
				<?php
			   }
			   ?>
			   <tr><td style="padding-top:0px;padding-bottom:5px;padding-top:5px;">
                 *Page Title &nbsp;<span class="error1" id="error1"><?php echo form_error('page_title'); ?></span>
               </td></tr>
               <tr>
                <td colspan="4" align="left" valign="bottom">
                 <?php echo form_textarea($attributes['page_title']); ?>
                 &nbsp;<span style="padding-bottom:5px;"><?php echo form_input($attributes['limit1']);
				  ?><span class="remarks">&nbsp;&nbsp;(Max. 200 chars)</span></span>
                </td>
               </tr> 
			   <tr><td style="padding-top:0px;padding-bottom:5px;padding-top:5px;">
                 Meta Keyword &nbsp;<span class="error1" id="error2"><?php echo form_error('meta_keyword'); ?></span>
               </td></tr>
               <tr>
                <td colspan="4" align="left" valign="top">
                 <?php echo form_textarea($attributes['meta_keyword']); ?>
                 &nbsp;<span><?php echo form_input($attributes['limit2']);
				  ?><span class="remarks">&nbsp;&nbsp;(Max. 200 chars)</span></span>
                </td>
               </tr> 
			   <tr><td style="padding-top:0px;padding-bottom:5px;padding-top:5px;">
                 Meta Description &nbsp;<span class="error1" id="error3"><?php echo form_error('meta_description'); ?></span>
               </td></tr>
               <tr>
                <td colspan="4" align="left" valign="top">
                 <?php echo form_textarea($attributes['meta_description']); ?>
                 &nbsp;<span><?php echo form_input($attributes['limit3']);
				  ?><span class="remarks">&nbsp;&nbsp;(Max. 200 chars)</span></span>
                </td>
               </tr> 


			   <tr><td style="padding-top:0px;padding-bottom:5px;padding-top:5px;">
                 JSON Code <span class="remarks">&nbsp;&nbsp;(For SEO)</span><span class="error1" id="error4"><?php echo form_error('json_code'); ?></span>
               </td></tr>
               <tr>
                <td colspan="4" align="left" valign="top">
                 <?php echo form_textarea($attributes['json_code']); ?>
                </td>
               </tr> 

               
			   <tr><td colspan="4" height="10" style="padding-top:10px;padding-bottom:10px;">
                <?php
				 echo form_submit($attributes['submit']);
                ?>
                 </td>
                </tr>                
               </table>

  <div style="padding-top:13px;padding-bottom:5px;padding-left:3px;">
 </div>

 </form>

</body>
</html>