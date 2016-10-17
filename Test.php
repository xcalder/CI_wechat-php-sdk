<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		# 配置参数
		$config = array(
		'token'          => 'openant',
		'appid'          => 'wxfc790e2eb9601add',
		'appsecret'      => '39ea2b90c55ec14462b1967909316895',
		'encodingaeskey' => '',
		'type'			 => 'user',
		);
		
		# 加载对应操作接口
		//文件夹名注意大写
		$this->load->library('Wechat/wechat_user', $config);
		
		var_dump($this->wechat_user->getUserList());
	}
	
	public function index(){
		/*
		# 配置参数
		$config = array(
			'token'          => 'openant',
			'appid'          => 'wxfc790e2eb9601add',
			'appsecret'      => '39ea2b90c55ec14462b1967909316895',
			'encodingaeskey' => '',
		);

		# 加载对应操作接口
		$this->wechat->get('User', $config);
		//$userlist = $wechat->getUserList();
*/
		//var_dump($userlist);
		//var_dump($wechat->errMsg);
		//var_dump($wechat->errCode);
	}
}
