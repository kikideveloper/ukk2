<?php 
$action = isset($_GET['action'])?$_GET['action']:'';
if ($action!="") {
	$id=isset($_GET['id'])?$_GET['id']:'';
	if ($action="plus") {
		$post=$base->sant(INPUT_POST);
		extract($post);
		$pas = password_hash($password, PASSWORD_DEFAULT);
		$data = $base->insert("user","'','$name','$email','$pas','$fullname','$level'");
		$jav->alert("your Acount has been saved!!");
		$jav->redir("index.php?page=user/index");
	}elseif ($action="up") {
		$post=$base->sant(INPUT_POST);
		extract($post);
		$pas = password_hash($password, PASSWORD_DEFAULT);
		$data = $base->update("user","name='$name',email='$email',password='$pas',fullname='$fullname',level='$level' where id='$id'");
		$jav->alert("your Acount has been Updated!!");
		$jav->redir("index.php?page=user/index");
	}
}
 ?>