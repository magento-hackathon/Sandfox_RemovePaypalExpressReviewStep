<?php

class Sandfox_RemovePaypalExpressReviewStep_Model_Observer
{
	public function controllerActionPredispatchPaypalExpressReview(Varien_Event_Observer $observer)
	{
		Mage::app()->getResponse()->setRedirect(Mage::getUrl('*/*/placeOrder'));
	}
}
