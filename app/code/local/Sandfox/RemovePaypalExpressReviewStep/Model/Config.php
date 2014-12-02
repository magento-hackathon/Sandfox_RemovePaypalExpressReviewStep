<?php

class Sandfox_RemovePaypalExpressReviewStep_Model_Config extends Mage_Paypal_Model_Config
{
	public function getExpressCheckoutStartUrl($token)
	{
		return $this->getPaypalUrl(array(
			'cmd'           => '_express-checkout',
			'useraction'    => 'commit',
			'token'         => $token
		));
	}
}
