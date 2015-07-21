<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	'admin'   => 'admin/admin/index',
	'admin/index'   => 'admin/admin/index',
	'admin/login'   => 'admin/admin/login',
	'admin/resetsession'   => 'admin/admin/resetsession',
	'admin/create-admin'   => 'admin/admin/register',
	'admin/manage-admin' => 'admin/admin/manage',
	'admin/logout' => 'admin/admin/logout',
	'admin/block/(:num)/(:num)' => 'admin/admin/block/$1/$2' ,
	//'admin/list-thanh-pho' => 'thanhpho/admingetthanhpho',
	'admin/edit/(:num)/(:any)' => 'thanhpho/edit/$1/$2',
	'admin/del/(:num)/(:any)' => 'thanhpho/del/$1/$2',	
	'admin/list/(:any)' => 'thanhpho/getlist/$1',
	'admin/add/(:any)' => 'thanhpho/add/$1',	
	//user
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'tho-can' => 'welcome/thocan', //the user home page function	
	'can-tho' => 'welcome/cantho',//action nap tien
	'index' => 'welcome/index',//action nap tien
	'can-viec-gap' => 'welcome/canviecgap', // sao khe tai khoan 
	'can-tho-gap' => 'welcome/canthogap', //action thanh toan tab
	'dang-ki-tim-viec' => 'users/dangki',
	'dang-ki-tim-tho' => 'company/dangki',//trang nhat ky truy cap
	'thong-tin-ca-nhan' => 'users/userinfo',//trang thong tin ca nhan
	'thay-doi-mat-khau' => 'users/change_password',//thay doi mk
	'users/login' => 'users/login',
	'users/logout' => 'users/logout',	
	//ajax
	'get-nganh-nghe/(:num)' => 'welcome/getalljob/$1',	
);