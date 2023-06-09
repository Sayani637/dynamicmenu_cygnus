<?php

function connect(){
$con=mysqli_connect("localhost","root","","dynamicmenu");
if(!$con){
	die('Failed to connect DB');
}
return $con;
}

function show_menu(){
$con=connect();
$menus='';
$menus .=generate_multilevel_menus($con);
}
function generate_multilevel_menus($con,$parent_id=NULL){
	$menu='';
	$sql='';
	if(is_null($parent_id)){
		$sql="SELECT * FROM `menu` WHERE `parent_id`IS NULL";
	}
	else{
		$sql="SELECT * FROM `menu` WHERE `parent_id`=$parent_id";
	}
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result)){
		if($row['page']){
			$menu .='<li><a href=""></a>';
		}
		else{
            $menu .='<li><a href=""></a>';
		}
  $menu .='<ul class="dropdown">'.generate_multilevel_menus($con,$row['id']).'</ul>'
	}

}
?>