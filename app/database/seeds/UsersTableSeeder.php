<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		Sentry::register(array(
			'avatar' => 'http://7sbxao.com1.z0.glb.clouddn.com/login.jpg',
			'username' => 'yangfusheng',
		    'email'    => 'yangfusheng@congcong.com',
		    'password' => '12345678',
        	'gender'   => 0,
        	'mobile'   => '13560474456',
        	'activated' => 1
		));

		Sentry::register(array(
			'avatar' => 'http://7sbxao.com1.z0.glb.clouddn.com/login.jpg',
			'username' => 'aaa',
		    'email'    => 'aaa@congcong.com',
		    'password' => '12345678',
        	'gender'   => 1,
        	'mobile'   => '13560474456',
        	'activated' => 1
		));

		Sentry::register(array(
			'avatar' => 'http://7sbxao.com1.z0.glb.clouddn.com/login.jpg',
			'username' => 'cyrilzhao',
		    'email'    => 'cyrilzhao@congcong.com',
		    'password' => '12345678',
        	'gender'   => 1,
        	'mobile'   => '12434931123',
        	'activated' => 1
		));

		Sentry::register(array(
			'avatar' => 'http://7sbxao.com1.z0.glb.clouddn.com/login.jpg',
			'username' => 'cyrilzhaoa',
		    'email'    => 'cyrilzhaoa@congcong.com',
		    'password' => '12345678',
        	'gender'   => 1,
        	'mobile'   => '12434931123',
        	'activated' => 1
		));

		Sentry::register(array(
			'avatar' => 'http://7sbxao.com1.z0.glb.clouddn.com/login.jpg',
			'username' => 'cyrilzhaob',
		    'email'    => 'cyrilzhaob@congcong.com',
		    'password' => '12345678',
        	'gender'   => 1,
        	'mobile'   => '12434931123',
        	'activated' => 1
		));

		Sentry::register(array(
			'avatar' => 'http://7sbxao.com1.z0.glb.clouddn.com/login.jpg',
			'username' => 'cyrilzhaoc',
		    'email'    => 'cyrilzhaoc@congcong.com',
		    'password' => '12345678',
        	'gender'   => 1,
        	'mobile'   => '12434931123',
        	'activated' => 1
		));

		Sentry::register(array(
			'avatar' => 'http://7sbxao.com1.z0.glb.clouddn.com/login.jpg',
			'username' => 'cyrilzhaod',
		    'email'    => 'cyrilzhaod@congcong.com',
		    'password' => '12345678',
        	'gender'   => 1,
        	'mobile'   => '12434931123',
        	'activated' => 1
		));
	}

}