<?php
/**
 * Wallee OpenCart
 *
 * This OpenCart module enables to process payments with Wallee (https://www.wallee.com).
 *
 * @package Whitelabelshortcut\Wallee
 * @author wallee AG (https://www.wallee.com)
 * @license http://www.apache.org/licenses/LICENSE-2.0  Apache Software License (ASL 2.0)
 */

/**
 * Prevents loading inexisting model, but allow plugin status to be correct
 */
class ModelExtensionPaymentWallee extends Model {

	public function getMethod($address, $total){
		return array();
	}
}