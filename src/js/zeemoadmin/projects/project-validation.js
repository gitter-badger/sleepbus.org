function ValidateProjectForm()
{
 var errors=new Array("error","error1","error2","error3");	
 var errorFields=new Array(),e=0;
 MakeValueEmpty(errors);
 if(trim($("#project_title").val())=="") 
 {
  errorFields[e]=new Array("error1","Please enter project title","project_title");
  e++;
 }else RemoveError("project_title");
 if(ValidateCkeditorFieldValue(CKEDITOR.instances.intro_text.getData(),'intro_text'))
 {
  errorFields[e]=new Array("error2","Please enter intro text","cke_intro_text");
  e++;
 }else RemoveError("intro_text");
 

 if(ValidateCkeditorFieldValue(CKEDITOR.instances.description.getData(),'description'))
 {
  errorFields[e]=new Array("error3","Please enter description","cke_description");
 }
 return ShowErrorOnField(errorFields);
}


