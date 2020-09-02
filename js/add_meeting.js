function do_add_meeting()
{
 var title=$("#inputTitle").val();
 var datetime=$("#inputDateTime").val();
 var tomeet=$("#inputToMeet").val();

 if(title!="" && datetime!="" && tomeet!="")
 {
  $.ajax
  ({
  type:'post',
  url:'add_meeting_back.php',
  data:{
   create:"create",
   title:title,
   datetime:datetime,
   tomeet:tomeet
  },
  success:function(response) {
  if(response=="success")
  {
    alert("Meeting created successfully !");
  }
 
  else if(response=="name")
  {
    alert("Invalid name (with numbers/special characters) !");
  }
  else if(response=="email")
  {
    alert("Invalid email or password !");
  }
  else if(response=="emailexists")
  {
    alert("This email already exists !");
  }
  else
  {
    alert("Registered successfully !");
  }
  }
  });
 }

 else
 {
  alert("Fill all the details !");
 }

 return false;
}