<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 16.10.2016
 * Time: 18:15
 */
namespace Ceive\Net\Connection {

	/**
	 * Interface ConnectorInterface
	 * @package Ceive\Net
	 */
	interface ConnectorInterface{

		/**
		 *
		 * @param $host
		 * @param $port
		 * @param Stream $stream
		 * @return Stream
		 */
		public function open($host, $port, Stream $stream = null);

		/**
		 * @param resource $connection
		 * @return void
		 */
		public function close($connection);

		/**
		 * @param $host
		 * @param $port
		 * @return string
		 */
		public function slug($host, $port);

		/**
		 * @return ConnectorInterface[]
		 */
		public function getAncestors();

	}
}

