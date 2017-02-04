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
class Magestore_Inventoryfulfillment_Block_Adminhtml_Fulfillment_Picking_Items
    extends Magestore_Inventoryfulfillment_Block_Adminhtml_Order_View_Items
{
    /**
     * 
     */
    protected function _prepareLayout() {
        parent::_prepareLayout();
        $this->setTemplate('inventoryfulfillment/picking/items.phtml');
        $this->addItemRender('default', 'inventoryfulfillment/adminhtml_fulfillment_picking_items_renderer_default', 'inventoryfulfillment/picking/items/renderer/default.phtml');
    }
    
    /**
     * Get picking packages
     * 
     */
    public function getPackages() {
        return Mage::getModel('inventoryfulfillment/package')->getPackages($this->getOrder()->getId, Magestore_Inventoryfulfillment_Model_Package::STATUS_PICKING);
    }
    
    /**
     * 
     * @return bool
     */
    public function showBarcode() {
        return Mage::helper('core')->isModuleEnabled('inventorybarcode');
    }    
}