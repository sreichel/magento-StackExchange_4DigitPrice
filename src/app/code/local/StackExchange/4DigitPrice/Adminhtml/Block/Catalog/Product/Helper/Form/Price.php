<?php
/**
 * Maxxcount-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_4DigitPrice
 */
 
/**
 * Rewrite of Mage_Adminhtml_Block_Catalog_Product_Helper_Form_Price
 */
class StackExchange_4DigitPrice_Adminhtml_Block_Catalog_Product_Helper_Form_Price extends Mage_Adminhtml_Block_Catalog_Product_Helper_Form_Price
{
    /**
     * Get price with 4 digits
     *
     * Rewrite: original methode shows only 2
     *
     * @param  null $index
     * @return string $value product price
     */
    public function getEscapedValue($index = null)
    {
        $value = $this->getValue();
        if (!is_numeric($value)) {
            return null;
        }
        return number_format($value, 4, null, '');
    }
}
