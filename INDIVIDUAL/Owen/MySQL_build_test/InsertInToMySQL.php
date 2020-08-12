<?php

    $json_string = file_get_contents('./Initial_member.json');  
    $data = json_decode($json_string, true);  
 
    // var_dump($data);

    // foreach($data[0] as $i => $value){
    //     echo "$i : $value <br>";
    // }
    // for($a=0 ; $a<14 ; $a++){
    //     echo $data[$a]['mem_id'], "<br>";
    // }
    // for($a=0 ; $a<14 ; $a++){
    //     echo "insert into member (mem_id,mem_name,mem_acc,mem_psw,mem_mail ) value (".$data[$a]['mem_id'].",".$data[$a]['mem_name'].",".$data[$a]['mem_acc'].",".$data[$a]['mem_psw'].",".$data[$a]['mem_mail'].");<br>";
    //     }

?>

<!-- ::::::::::測試連線:::::::::: -->
<?php 

$json_string = file_get_contents('./Initial_member.json');  
$data = json_decode($json_string, true);  
try	{
	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
	$user = "root";
	$password = "root";
	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn , $user , $password, $options);
		if($pdo != false){
			echo "連線成功<br>";
		}	else	{
			echo "<br>失敗ㄌ<br>";
		}
	}	catch	(PDOException $e)	{
		echo "錯誤原因：",$e->getMessage(), "<br>";
		echo "錯誤行號：",$e->getLine(),"<br>";
	}
?>


<!-- ::::::::::這是member會員的建立:::::::::: -->
<?php 

// $json_string = file_get_contents('./Initial_member.json');  
// $data = json_decode($json_string, true);  
// try	{
	// $dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
	// $user = "root";
	// $password = "root";
	// $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	// $pdo = new PDO($dsn , $user , $password, $options);
	// 	if($pdo != false){
	// 		echo "連線成功<br>";
    //         // ::::::::::新建前14位創始帳號::::::::::
    //         // for($a=0 ; $a<14 ; $a++){
    //         // $sql = "insert into member (mem_id,mem_name,mem_acc,mem_psw,mem_mail ) value ('".$data[$a]['mem_id']."','".$data[$a]['mem_name']."','".$data[$a]['mem_acc']."','".$data[$a]['mem_psw']."','".$data[$a]['mem_mail']."');";
    //         // echo $sql;
    //         // $affectedRow = $pdo -> exec($sql);
    //         // }

    //         // ::::::::::更新前7位超強帳號::::::::::
    //         // for($a=0 ; $a<7 ; $a++){
    //         // $sql = "update member set mem_point = 80000 , total_post = 200 , total_host = 200 , total_join = 500 , mem_point_forumpost = 20000 , mem_point_tourhost = 20000 , mem_point_tourjoin = 20000 , mem_point_game = 20000 where mem_no between 10001 and 10007;";
    //         // echo $sql;
    //         // $affectedRow = $pdo -> exec($sql);
    //         // }


	// 		echo "<br>異動成功<br>";
	// 	}	else	{
	// 		echo "<br>失敗ㄌ<br>";
	// 	}
	// }	catch	(PDOException $e)	{
	// 	echo "錯誤原因：",$e->getMessage(), "<br>";
	// 	echo "錯誤行號：",$e->getLine(),"<br>";
	// }
?>

<!-- ::::::::::這是administrator管理員的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_administrator.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
//             // ::::::::::新建前7位管理員帳號::::::::::
//             // for($a=0 ; $a<7 ; $a++){
//             // $sql = "insert into administrator (admin_name,admin_acc,admin_psw,admin_mail,admin_build) value ('".$data[$a]['admin_name']."','".$data[$a]['admin_acc']."','".$data[$a]['admin_psw']."','".$data[$a]['admin_mail']."',now());";
//             // echo $sql;
//             // $affectedRow = $pdo -> exec($sql);
//             // }



// 			echo "<br>異動成功<br>";
// 		}	else	{
// 			echo "<br>失敗ㄌ<br>";
// 		}
// 	}	catch	(PDOException $e)	{
// 		echo "錯誤原因：",$e->getMessage(), "<br>";
// 		echo "錯誤行號：",$e->getLine(),"<br>";
// 	}
?>


<!-- ::::::::::這是mountain山的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_mountain.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
            // ::::::::::新建16座山::::::::::
            // for($a=0 ; $a<16 ; $a++){
            // $sql = "insert into mountain (mountain_no,degree_category,mountain_name,mountain_latitude,mountain_longitude,mountain_area,mountain_image ) value  ('".$data[$a]['mountain_no']."',(select degree_category from degree where degree_describe = '".$data[$a]['degree_category']."'),'".$data[$a]['mountain_name']."','".$data[$a]['mountain_latitude']."','".$data[$a]['mountain_longitude']."','".$data[$a]['mountain_area']."','".$data[$a]['mountain_image']."');";
            // echo $sql;
            // $affectedRow = $pdo -> exec($sql);
            // }



	// 		echo "<br>異動成功<br>";
	// 	}	else	{
	// 		echo "<br>失敗ㄌ<br>";
	// 	}
	// }	catch	(PDOException $e)	{
	// 	echo "錯誤原因：",$e->getMessage(), "<br>";
	// 	echo "錯誤行號：",$e->getLine(),"<br>";
	// }
?>

<!-- ::::::::::這是achievement成就的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_achievement.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
//             // ::::::::::12個成就::::::::::
//             // for($a=0 ; $a<12 ; $a++){
//             // $sql = "insert into achievement (achievement_no,achievement_category,achievement_name,achievement_require,achievement_image) value  ('".$data[$a]['achievement_no']."','".$data[$a]['achievement_category']."','".$data[$a]['achievement_name']."','".$data[$a]['achievement_require']."','".$data[$a]['achievement_image']."');";
//             // echo $sql;
//             // $affectedRow = $pdo -> exec($sql);
//             // }



// 			echo "<br>異動成功<br>";
// 		}	else	{
// 			echo "<br>失敗ㄌ<br>";
// 		}
// 	}	catch	(PDOException $e)	{
// 		echo "錯誤原因：",$e->getMessage(), "<br>";
// 		echo "錯誤行號：",$e->getLine(),"<br>";
// 	}
?>



<!-- ::::::::::這是forum_post討論區發文的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_forum_post.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
//             // ::::::::::討論區4主題*2篇文+2公告發文::::::::::
//             // for($a=0 ; $a<10 ; $a++){
//             // $sql = "insert into forum_post (forum_post_poster,forum_post_category,forum_post_image,forum_post_time,forum_post_title,forum_post_innertext ) value  ((select mem_no from member where mem_acc = '".$data[$a]['forum_post_poster']."'),'".$data[$a]['forum_post_category']."','".$data[$a]['forum_post_image']."',now(),'".$data[$a]['forum_post_title']."','".$data[$a]['forum_post_innertext']."');";
//             // echo $sql;
//             // $affectedRow = $pdo -> exec($sql);
//             // }



// 			echo "<br>異動成功<br>";
// 		}	else	{
// 			echo "<br>失敗ㄌ<br>";
// 		}
// 	}	catch	(PDOException $e)	{
// 		echo "錯誤原因：",$e->getMessage(), "<br>";
// 		echo "錯誤行號：",$e->getLine(),"<br>";
// 	}
?>


<!-- ::::::::::這是comment_post留言的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_comment_post.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
//             // :::::::::: 8篇文*2留言 + 2公告*3留言::::::::::
//             // for($a=0 ; $a<22 ; $a++){
//             // $sql = "insert into comment_post (comment_poster,forum_post_no,comment_time,comment_innertext) value  ('".$data[$a]['comment_poster']."','".$data[$a]['forum_post_no']."',now(),'".$data[$a]['comment_innertext']."');";
//             // echo $sql;
//             // $affectedRow = $pdo -> exec($sql);
//             // }



// 			echo "<br>異動成功<br>";
// 		}	else	{
// 			echo "<br>失敗ㄌ<br>";
// 		}
// 	}	catch	(PDOException $e)	{
// 		echo "錯誤原因：",$e->getMessage(), "<br>";
// 		echo "錯誤行號：",$e->getLine(),"<br>";
// 	}
?>

<!-- ::::::::::這是tour揪團的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_tour.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
//             // ::::::::::4個團::::::::::
//             // for($a=0 ; $a<4 ; $a++){
//             // $sql = "insert into tour (tour_hoster,tour_mountain,tour_build,tour_end,tour_activitystart,tour_activityend,tour_min_number,tour_max_number,tour_sitiuation,tour_title,tour_innertext) value  ('".$data[$a]['tour_hoster']."','".$data[$a]['tour_mountain']."','".$data[$a]['tour_build']."','".$data[$a]['tour_end']."','".$data[$a]['tour_activitystart']."','".$data[$a]['tour_activityend']."','".$data[$a]['tour_min_number']."','".$data[$a]['tour_max_number']."','".$data[$a]['tour_sitiuation']."','".$data[$a]['tour_title']."','".$data[$a]['tour_innertext']."');";
//             // echo $sql;
//             // $affectedRow = $pdo -> exec($sql);
//             // }



// 			echo "<br>異動成功<br>";
// 		}	else	{
// 			echo "<br>失敗ㄌ<br>";
// 		}
// 	}	catch	(PDOException $e)	{
// 		echo "錯誤原因：",$e->getMessage(), "<br>";
// 		echo "錯誤行號：",$e->getLine(),"<br>";
// 	}
?>

<!-- ::::::::::這是product商品的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_product.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
//             // :::::::::: 5類別*4難度::::::::::
//             // for($a=0 ; $a<20 ; $a++){
//             // $sql = "insert into product (degree_category,product_category,product_name,product_price,product_description,product_image) value  ('".$data[$a]['degree_category']."','".$data[$a]['product_category']."','".$data[$a]['product_name']."','".$data[$a]['product_price']."','".$data[$a]['product_description']."','".$data[$a]['product_image']."');";
//             // echo $sql;
//             // $affectedRow = $pdo -> exec($sql);
//             // }



// 			echo "<br>異動成功<br>";
// 		}	else	{
// 			echo "<br>失敗ㄌ<br>";
// 		}
// 	}	catch	(PDOException $e)	{
// 		echo "錯誤原因：",$e->getMessage(), "<br>";
// 		echo "錯誤行號：",$e->getLine(),"<br>";
// 	}
?>

<!-- ::::::::::這是orders訂單的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_orders.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
//             // :::::::::: 3筆訂單::::::::::
//             // for($a=0 ; $a<3 ; $a++){
//             // $sql = "insert into orders (member_no,order_total,order_discount,order_build,order_position,order_logistics_deliver,order_logistics_recipient,order_logistics_phone,order_logistics_address,order_logistics_progress,order_cashflow,order_paytime) value  ('".$data[$a]['member_no']."','".$data[$a]['order_total']."','".$data[$a]['order_discount']."',now(),'".$data[$a]['order_position']."','".$data[$a]['order_logistics_deliver']."','".$data[$a]['order_logistics_recipient']."','".$data[$a]['order_logistics_phone']."','".$data[$a]['order_logistics_address']."','".$data[$a]['order_logistics_progress']."','".$data[$a]['order_cashflow']."','".$data[$a]['order_paytime']."');";
//             // echo $sql;
//             // $affectedRow = $pdo -> exec($sql);
//             // }



// 			echo "<br>異動成功<br>";
// 		}	else	{
// 			echo "<br>失敗ㄌ<br>";
// 		}
// 	}	catch	(PDOException $e)	{
// 		echo "錯誤原因：",$e->getMessage(), "<br>";
// 		echo "錯誤行號：",$e->getLine(),"<br>";
// 	}
?>

<!-- ::::::::::這是order_list訂單的建立:::::::::: -->
<?php 
// $json_string = file_get_contents('./Initial_order_list.json');  
// $data = json_decode($json_string, true);  
// try	{
// 	$dsn = "mysql:host=localhost;port=8889;dbname=meetainTest;charset=utf8";
// 	$user = "root";
// 	$password = "root";
// 	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
// 	$pdo = new PDO($dsn , $user , $password, $options);
// 		if($pdo != false){
// 			echo "連線成功<br>";
//             // :::::::::: 3筆訂單的詳細::::::::::
//             // for($a=0 ; $a<9 ; $a++){
//             // $sql = "insert into order_list (order_no,product_no,product_number,product_price) value  ('".$data[$a]['order_no']."','".$data[$a]['product_no']."','".$data[$a]['product_number']."','".$data[$a]['product_price']."');";
//             // echo $sql;
//             // $affectedRow = $pdo -> exec($sql);
//             // }



// 			echo "<br>異動成功<br>";
// 		}	else	{
// 			echo "<br>失敗ㄌ<br>";
// 		}
// 	}	catch	(PDOException $e)	{
// 		echo "錯誤原因：",$e->getMessage(), "<br>";
// 		echo "錯誤行號：",$e->getLine(),"<br>";
// 	}
?>

