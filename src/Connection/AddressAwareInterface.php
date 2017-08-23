<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 15.10.2016
 * Time: 0:36
 */
namespace Ceive\Net\Connection {

	/**
	 * Interface AddressAwareInterface
	 * @package Ceive\Net
	 */
	interface AddressAwareInterface{

		/**
		 * @return string
		 */
		public function getHost();

		/**
		 * @return int
		 */
		public function getPort();

	}
}

