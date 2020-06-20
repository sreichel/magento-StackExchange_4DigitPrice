<?php
/**
 * StackExchange-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_4DigitPrice
 */
 
/**
 * Rewrite of Mage_Core_Model_Store
 */
class StackExchange_4DigitPrice_Core_Model_Store extends Mage_Core_Model_Store
{
    /**
     * Round price with 4 digits
     *
     * Rewrite: original methode rounds for 2 digits
     *
     * @param mixed $price
     * @return float
     */
    public function roundPrice($price): float
    {
        return round($price, 4);
    }
}
