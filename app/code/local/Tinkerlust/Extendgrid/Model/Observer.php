<?php

class Tinkerlust_Extendgrid_Model_Observer
{
  public function appendCustomColumn(Varien_Event_Observer $observer) {
    /*$block =$observer->getBlock();
    if (!isset($block)) {
      return $this;
    }
    if ($block->getType() == 'adminhtml/sales_order_grid') {
      $block->addColumnAfter('shipping_description', array(
        'header' => 'Bidji',
        'index'  => 'shipping_description'
      ), 'billing_name');
    }*/
  }

  /*
  public function salesOrderGridCollectionLoadBefore($observer)
  {
    $collection = $observer->getOrderGridCollection();
    $select = $collection->getSelect();
    $resource = Mage::getSingleton('core/resource');
    $select->join(
                  array('order' => $resource->getTableName('sales/order')),
                  'main_table.entity_id = order.entity_id',
                  array('shipping_description')
                );
  }
  */
}
