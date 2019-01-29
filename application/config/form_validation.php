<?php
$config =[
	'add_article_rules' => [
								[
								'field'=>'Title',
								'lable'=>' Article Title',
								'rules'=>'required'
								],
								[
									'field'=>'Body',
									'lable'=>'Article Body',
									'rules'=>'required'
								]
							],
			'admin_login'=>  [
								[
								'field'=>'Username',
								'lable'=>'Username',
								'rules'=>'trim|required|alpha'
								],
								[
								'field'=>'Password',
								'lable'=>'Password',
								'rules'=>'required'
								]
							]
];
?>