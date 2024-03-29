<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_Eway
 * @copyright  Copyright (c) 2008 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * eWAY 3D-Secure Model
 *
 * @category   Mage
 * @package    Mage_Eway
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Eway_Model_Secure extends Mage_Eway_Model_Shared
{
    protected $_code  = 'eway_secure';

    protected $_formBlockType = 'eway/secure_form';
    protected $_paymentMethod = 'secure';

    /**
     * Get url of eWAY 3D-Secure Payment
     *
     * @return string
     */
    public function getEwaySecureUrl()
    {
         if (!$url = Mage::getStoreConfig('payment/' . $this->getCode() . '/api_url')) {
             $url = 'https://www.eway.com.au/gateway_3d/payment.asp';
         }
         return $url;
    }

}
