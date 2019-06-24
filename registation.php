<html>
    
<head>
<style type="text/css">
    .full{width: 100% ;margin-top:10px;}
</style>
</head>

    <body>

    <form method = "POST">

    <input type="text" name="title" placeholder = "Title" class="full" />

    
    <input type="text" name="date" placeholder = "Date" class="full" />
        
        <input type="text" name="details" placeholder = "Details" class="full" />


    <input type="submit" name="register" value = "REGISTER" class="full" /> 

    </form>
</body>        
</html>

<?php

@$title_txt =$_POST["title"]; 
@$date_txt =$_POST["date"]; 
@$details_txt =$_POST["details"]; 


if(isset($_POST["register"]))
{
    @mysql_connect('localhost','root','1234') or die ('Could not connect : ' .@mysql_error());
    @mysql_select_db('cnsweb_db') or die('Error!'.@mysql_error());
    
    $sql = "INSERT INTO registration(title,date,details) VALUES('$title_txt','$date_txt','$details_txt')";
      mysql_query($sql) or die('Error! : '.@mysql_error());
    
    
}


?>
