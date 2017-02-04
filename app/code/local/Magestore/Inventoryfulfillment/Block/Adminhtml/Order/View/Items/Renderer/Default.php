<?php
/**
 * Magestore
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category    Magestore
 * @package     Magestore_Inventoryfulfillment
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

/**
 * Inventoryfulfillment Edit Block
 * 
 * @category     Magestore
 * @package     Magestore_Inventoryfulfillment
 * @author      Magestore Developer
 */
class Magestore_Inventoryfulfillment_Block_Adminhtml_Order_View_Items_Renderer_Default
    extends Mage_Adminhtml_Block_Sales_Order_View_Items_Renderer_Default
{
    /**
     * 
     * @return string
     */
    public function getFulfillmentStep(){
        return $this->helper('inventoryfulfillment')->getFulfillmentStep();
    }
    
    /**
     * 
     * @return boolean
     */
    public function unCheckDefaultItem() {
        if($this->getFulfillmentStep() == Magestore_Inventoryfulfillment_Model_Step::FFM_STEP_VERIFYING) {
            return false;
        }
        return true;
    }
    
}