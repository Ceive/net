<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 04.10.2016
 * Time: 18:12
 */
namespace Ceive\Net\Stream {

	/**
	 * Interface StreamInteractionInterface
	 * @package Ceive\Util\Communication\Connection
	 */
	interface StreamInteractionInterface{

		/**
		 * @param $data
		 * @param $length
		 * @return mixed
		 */
		public function write($data, $length = null);

		/**
		 * @param $length
		 * @return mixed
		 */
		public function read($length);

		/**
		 * @param null $length
		 * @return mixed
		 */
		public function readLine($length = null);

		/**
		 * @return mixed
		 */
		public function isEof();

		/**
		 * @param $offset
		 * @param $whence
		 * @return mixed
		 */
		public function seek($offset, $whence = SEEK_SET);

	}
}

