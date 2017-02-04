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
 * @package     Magestore_Inventorybarcode
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

/**
 * Inventorybarcode Model
 * 
 * @category    Magestore
 * @package     Magestore_Inventorybarcode
 * @author      Magestore Developer
 */
class Magestore_Inventorybarcode_Model_Barcode extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('inventorybarcode/barcode');
    }

    /**
     * Get barcodes from product Id
     * 
     * @param int $productId
     * @return array
     */
    public function getBarcodeByProductId($productId) {
        $barcodes = array();
        $barcodeCollection = $this->getCollection()
                                    ->addFieldToFilter('product_entity_id', $productId);
        if (count($barcodeCollection)) {
            foreach ($barcodeCollection as $barcode) {
                $barcodes[] = $barcode->getBarcode();
            }
        }
        return $barcodes;
    }

}
