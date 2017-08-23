<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 02.10.2016
 * Time: 23:14
 */
namespace Ceive\Net\Connection {

	/**
	 * Interface ConnectionInterface
	 * @package Ceive\Net
	 */
	interface ConnectionInterface{

		/**
		 * @return bool
		 */
		public function isConnected();

		/**
		 * @return $this
		 */
		public function reconnect();

		/**
		 * @return $this
		 */
		public function connect();

		/**
		 * @return $this
		 */
		public function close();

		/**
		 * @return mixed
		 */
		public function getResource();

	}
}

