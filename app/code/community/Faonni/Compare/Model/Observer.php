<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_Compare
 * @copyright   Copyright (c) 2015 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Faonni_Compare_Model_Observer
{
    /**
     * Dispatch event before action
     *
     * @param   Varien_Event_Observer $observer
     * @return  Faonni_Compare_Model_Observer
     */
    public function preDispatch(Varien_Event_Observer $observer)
    {
		if (Mage::helper('faonni_compare')->isEnabled()) {
            return $this;
        }
		/** @var $action Mage_Core_Controller_Varien_Action */
        $action = $observer->getEvent()->getControllerAction();
		if ($action && 'product_compare' == $action->getRequest()->getControllerName()) {
			$action->norouteAction();
		}
        return $this;
    }
	
    /**
     * Rendering layout
     *
     * @param   Varien_Event_Observer $observer
     * @return  Faonni_Compare_Model_Observer
     */
    public function renderLayout(Varien_Event_Observer $observer)
    {
		if (Mage::helper('faonni_compare')->isDisplayInSidebar()) {
            return $this;
        }
		/* @var $update Mage_Core_Model_Layout_Update */
		$update = $observer->getEvent()->getLayout()->getUpdate();
		$update->addHandle('faonni_compare_handle');
		
        return $this;
    }
}