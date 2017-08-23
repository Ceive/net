<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 18.10.2016
 * Time: 17:44
 */
namespace Ceive\Net\Connection {

	/**
	 * Interface BrokerInterface
	 * @package Ceive\Net
	 */
	interface BrokerInterface{

		/**
		 * @param $host
		 * @param $port
		 * @param ConnectorInterface $connector
		 * @return Stream
		 */
		public function take($host, $port, ConnectorInterface $connector = null);


		/**
		 * @param Stream $stream
		 */
		public function pass(Stream $stream);
	}
}

