<?php
	/**
	 * [setHeader 跨域设置]
	 */
	// protected function setHeader()
	// {
	// 	header('Content-Type:application/json; charset=utf-8');
	// 	header("Access-Control-Allow-Origin:*");
	// 	header("Access-Control-Allow-Methods:POST,GET");
	// }
	class base {
		public function getinfo() {
			// $this->setHeader();
			echo "echo text!";
		}
	}