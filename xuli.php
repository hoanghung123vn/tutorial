<?php
 $conn=mysqli_connect("localhost","dientumi","m1KqgB5i57","dientumi_esp8266");
 if(isset($_GET["laytrangthai"]))
   {
	 $trave=mysqli_query($conn,"select * from 5tb");
	 $data=mysqli_fetch_assoc($trave);
	 $tb1=$data["tb1"];
	 $tb2=$data["tb2"];
	 $tb3=$data["tb3"];
	 $tb4=$data["tb4"];
     $tb5=$data["tb5"];
     $ds=$data["dosang"];
     $auto=$data["auto"];
     if($auto=='1'){$text='AUTO:  ON';$color='#18aa8d';}
     else {$text='AUTO: OFF';$color='red';}
     
	 if($tb1 == "0")$tb1="<img class='i' src='of.png'>";
	 else $tb1="<img class='i' src='on.png'>";
   if($tb2 == "0")$tb2="<img class='i' src='of.png'>";
   else $tb2="<img class='i' src='on.png'>";
   if($tb3 == "0")$tb3="<img class='i' src='of.png'>";
   else $tb3="<img class='i' src='on.png'>";
   if($tb4 == "0")$tb4="<img class='i' src='of.png'>";
   else $tb4="<img class='i' src='on.png'>";
   if($tb5 == "0")$tb5="<img class='i' src='of.png'>";
   else $tb5="<img class='i' src='on.png'>";
	
	 $result = array('tb1'=> $tb1
                   ,'tb2' => $tb2
                   ,'tb3' => $tb3
                   ,'tb4' => $tb4
                   ,'ds' => $ds
                   ,'text' => $text
                   ,'color' =>$color
                   ,'tb5' => $tb5);
      echo json_encode($result);
   }
  else if(isset($_GET["tb1"]))
  {
  	$trave=mysqli_query($conn,"select * from 5tb");
    $data=mysqli_fetch_assoc($trave);
    $tb1=$data['tb1'];
    if($tb1=='1'){$trave=mysqli_query($conn,"update 5tb set tb1='0'");echo "<img class='i' src='of.png'>";}
    else {$trave=mysqli_query($conn,"update 5tb set tb1='1'");echo "<img class='i' src='on.png'>";}
  }
  else if(isset($_GET["tb2"]))
  {
  	$trave=mysqli_query($conn,"select * from 5tb");
    $data=mysqli_fetch_assoc($trave);
    $tb1=$data['tb2'];
    if($tb1=='1'){$trave=mysqli_query($conn,"update 5tb set tb2='0'");echo "<img class='i' src='of.png'>";}
    else {$trave=mysqli_query($conn,"update 5tb set tb2='1'");echo "<img class='i' src='on.png'>";}
  }
  else if(isset($_GET["tb3"]))
  {
  	$trave=mysqli_query($conn,"select * from 5tb");
    $data=mysqli_fetch_assoc($trave);
    $tb1=$data['tb3'];
    if($tb1=='1'){$trave=mysqli_query($conn,"update 5tb set tb3='0'");echo "<img class='i' src='of.png'>";}
    else {$trave=mysqli_query($conn,"update 5tb set tb3='1'");echo "<img class='i' src='on.png'>";}
  }
  else if(isset($_GET["tb4"]))
  {
  	$trave=mysqli_query($conn,"select * from 5tb");
    $data=mysqli_fetch_assoc($trave);
    $tb1=$data['tb4'];
    if($tb1=='1'){$trave=mysqli_query($conn,"update 5tb set tb4='0'");echo "<img class='i' src='of.png'>";}
    else {$trave=mysqli_query($conn,"update 5tb set tb4='1'");echo "<img class='i' src='on.png'>";}
  }
  else if(isset($_GET["tb5"]))
  {
  	$trave=mysqli_query($conn,"select * from 5tb");
    $data=mysqli_fetch_assoc($trave);
    $tb1=$data['tb5'];
    if($tb1=='1'){$trave=mysqli_query($conn,"update 5tb set tb5='0'");echo "<img class='i' src='of.png'>";}
    else {$trave=mysqli_query($conn,"update 5tb set tb5='1'");echo "<img class='i' src='on.png'>";}
  }
  else if(isset($_GET["auto"]))
  {
  	$trave=mysqli_query($conn,"select * from 5tb");
    $data=mysqli_fetch_assoc($trave);
    $auto=$data['auto'];
    if($auto=='1'){$trave=mysqli_query($conn,"update 5tb set auto='0'");
    $result = array('text'=> 'AUTO: OFF'
                   ,'color' => 'red');
    echo json_encode($result);    
    }
    else {$trave=mysqli_query($conn,"update 5tb set auto='1'");
    $result = array('text'=> 'AUTO:  ON'
                   ,'color' => '#18aa8d');
    echo json_encode($result);       
    }
  }
  else if(isset($_GET["trangthai"]))
  {
  	$trave=mysqli_query($conn,"select * from 5tb");
    $data=mysqli_fetch_assoc($trave);
    echo "*";
    echo $data["tb1"].$data["tb2"].$data["tb3"].$data["auto"];
    echo "#";
    $tt=$_GET["trangthai"];
    $trave=mysqli_query($conn,"update 5tb set dosang='$tt'");
  }
    else if(isset($_GET["ghi1"]))
  {
    $tt=$_GET["ghi1"];
    if($tt=='1')$trave=mysqli_query($conn,"update 5tb set tb1='1'");
    else $trave=mysqli_query($conn,"update 5tb set tb1='0'");
  }
  else if(isset($_GET["ghi2"]))
  {
    $tt=$_GET["ghi2"];
    if($tt=='1')$trave=mysqli_query($conn,"update 5tb set tb2='1'");
    else $trave=mysqli_query($conn,"update 5tb set tb2='0'");
  }
  else if(isset($_GET["ghi3"]))
  {
    $tt=$_GET["ghi3"];
    if($tt=='1')$trave=mysqli_query($conn,"update 5tb set tb3='1'");
    else $trave=mysqli_query($conn,"update 5tb set tb3='0'");
  }
  else if(isset($_GET["ghi4"]))
  {
    $tt=$_GET["ghi4"];
    if($tt=='1')$trave=mysqli_query($conn,"update 5tb set tb4='1'");
    else $trave=mysqli_query($conn,"update 5tb set tb4='0'");
  }
  else if(isset($_GET["ghi5"]))
  {
    $tt=$_GET["ghi5"];
    if($tt=='1')$trave=mysqli_query($conn,"update 5tb set tb5='1'");
    else $trave=mysqli_query($conn,"update 5tb set tb5='0'");
  }
  else if(isset($_GET["ghids"]))
  {
    $tt=$_GET["ghids"];
    $trave=mysqli_query($conn,"update 5tb set dosang='$tt'");
  }
  else if(isset($_GET["ghiat"]))
  {
    $tt=$_GET["ghiat"];
    $trave=mysqli_query($conn,"update 5tb set auto='$tt'");
  }
 
 die();
?>