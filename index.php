<?php

?>

<!DOCTYPE html><html lang="vi">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/><title>Đồ án ESP8266</title>
<style type="text/css">
	a{
	  color: red;
       text-decoration: none;}
    .i{width: 65px; height: auto;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

<script>
$(document).ready(function(){ 
        $("#tb1").click(function(){
            $.ajax({
            url:"xuli.php",
            type:"get",
            data:"tb1=ok",
            async:false,
            success:function(kq)
            {
              $("#tb1").html(kq);
            }
        })  
    });

        $("#tb2").click(function(){
            $.ajax({
            url:"xuli.php",
            type:"get",
            data:"tb2=ok",
            async:false,
            success:function(kq)
            {
               $("#tb2").html(kq);
            }
        })  
    });

        $("#tb3").click(function(){
            $.ajax({
            url:"xuli.php",
            type:"get",
             data:"tb3=ok",
            async:false,
            success:function(kq)
            {
               $("#tb3").html(kq);
            }
        })  
    });
    
    $("#auto").click(function(){
            $.ajax({
            url:"xuli.php",
            type:"get",
             data:"auto=ok",
            async:false,
            success:function(kq)
            {
               var dulieu = $.parseJSON(kq);
               $("#auto").html(dulieu.text);
               $("#auto").css({"background-color": dulieu.color});
            }
        })  
    });
});  

 $(document).ready(function(){ 
        // lấy dữ liệu từ file xuli.php hiển thị lại lên màn hình cứ sau mỗi 2s 
    $.ajax({
        url:"xuli.php",
        type:"get",
        data:"laytrangthai=ok",
        async:false,
        success:function(kq)
        {
         var dulieu = $.parseJSON(kq);
         $("#tb1").html(dulieu.tb1);
         $("#tb2").html(dulieu.tb2);
         $("#tb3").html(dulieu.tb3);
         $("#tb3").html(dulieu.tb3);
         $("#ds").html("Độ sáng: " + dulieu.ds + " %");
         $("#auto").html(dulieu.text);
         $("#auto").css({"background-color": dulieu.color});
        }
    })  

    });  
    
setInterval(function()
{
    $(document).ready(function(){ 
        // lấy dữ liệu từ file xuli.php hiển thị lại lên màn hình cứ sau mỗi 2s 
    $.ajax({
        url:"xuli.php",
        type:"get",
        data:"laytrangthai=ok",
        async:false,
        success:function(kq)
        {
         var dulieu = $.parseJSON(kq);
         $("#tb1").html(dulieu.tb1);
         $("#tb2").html(dulieu.tb2);
         $("#tb3").html(dulieu.tb3);
         $("#tb3").html(dulieu.tb3);
         $("#ds").html("Độ sáng: " + dulieu.ds + " %");
         $("#auto").html(dulieu.text);
         $("#auto").css({"background-color": dulieu.color});
        }
    })  

    });  
}, 2000);



</script>

</head>
<body>
    
<h1 style="text-align: center;">Hệ thống IOT điều khiển từ xa qua WIFI ESP8266</h1>

<div id="thantrang" style="width: 250px; height: 200px;margin: 0 auto">
  <div style="margin: 0 auto">
    <a href='#' id='tb1'><img class='i' src='of.png'></a>
    <a href='#' id='tb2'><img class='i' src='of.png'></a>
    <a href='#' id='tb3'><img class='i' src='of.png'></a>
  </div>
  <div id='ds' style='font-size: 35px; padding-top: 20px; padding-left: 10px;' > Độ sáng: 0%</div>
  <div><button id="auto" style="margin-top: 30px ; margin-left: 50px ; padding: 10px 10px 10px 10px; border-radius: 10px; background-color:red; color: #FFF; outline:none; cursor:pointer;">AUTO : OFF</button></div>
</div>    
</body>
</html>