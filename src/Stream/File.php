<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 18.10.2016
 * Time: 0:14
 */
namespace Ceive\Net\Stream {

	/**
	 * Class File
	 * @package Ceive\Net\Stream
	 */
	class File extends StreamInteraction implements StreamInteractionInterface{

		/**
		 * File constructor.
		 * @param $path
		 * @param null $mode
		 */
		public function __construct($path, $mode = null){
			$this->resource = fopen($path, $mode?:'r+');
		}

	}
}

