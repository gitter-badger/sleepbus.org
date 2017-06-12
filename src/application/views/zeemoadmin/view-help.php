<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo PREFIX_TITLE;?> Help Text For <?php  echo $module_name;?> : <?php  echo $submodule_name;?></title>
  <?=$this->admincss->IncludeCssFiles()?>
  <?=$this->adminjavascript->IncludeJsFiles()?>
  <style type="text/css">
  body{ margin:0px; padding:0px; height:30px;}
  	iframe{ border:1px solid #515151; height:500px;}
  </style>
</head>
<body>

<div style="border: solid thin #c1d7e6; padding: 6px 5px 23px 5px; background-color: #F5F5F5;height:485px;overflow:auto;">

  <span class="main_heading">Help for </span>  <span class="success"><b><?php echo $module_name;?> :  <?php echo $submodule_name;?></b></span>
  
  <div style="padding-top:10.1px;padding-left:3px; text-align:left">
  <?php echo $help_text; ?>
 </div>


</div>

</body>
</html>