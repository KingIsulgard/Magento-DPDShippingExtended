<?php
/**
 * Created by PHPro
 *
 * @package      DPD
 * @subpackage   Shipping
 * @category     Checkout
 * @author       Gilles Lesire (aka KingIsulgard)
 */
/**
 * Class DPD_Shipping_Block_Adminhtml_Sales_Order_Grid_Renderer_Shippingmethod
 */
class DPD_Shipping_Block_Adminhtml_Sales_Order_Grid_Renderer_CustomerGroup extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    /**
     * Renders select between different customer groups.
     *
     * @param Varien_Object $row
     * @return string 
     */
    public function render(Varien_Object $row)
    {
        $value = $row->getData($this->getColumn()->getIndex());
		$group = Mage::getModel('customer/group')->load($value);
		return $group->getCode();
    }
}
