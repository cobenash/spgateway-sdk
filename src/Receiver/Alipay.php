<?php
/**
 * Part of spgateway project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Asika\Spgateway\Receiver;

use Asika\Spgateway\Payment\AbstractPayment;

/**
 * The Alipay payment.
 *
 * @method  string  getReceiver()  getReceiver()
 * @method  Alipay  setReceiver()  setReceiver($value)
 * @method  string  getTel1()      getTel1()
 * @method  Alipay  setTel1()      setTel1($value)
 * @method  string  getTel2()      getTel2()
 * @method  Alipay  setTel2()      setTel2($value)
 * @method  string  getCount()     getCount()
 * @method  Alipay  setCount()     setCount($value)
 *
 * @since  {DEPLOY_VERSION}
 */
class Alipay extends AbstractPayment
{
	/**
	 * Property laterPayment.
	 *
	 * @var  boolean
	 */
	protected $deferralPayment = true;

	/**
	 * getName
	 *
	 * @return  string
	 */
	public function getName()
	{
		return 'ALIPAY';
	}
}
