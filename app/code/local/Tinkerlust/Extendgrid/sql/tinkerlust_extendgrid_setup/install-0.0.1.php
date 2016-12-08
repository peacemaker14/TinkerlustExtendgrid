<?php
$this->startSetup();

$this->getConnection()->addColumn(
  $this->getTable('sales/order_grid'),
  'shipping_description',
  'varchar(255) DEFAULT NULL'
);

$this->getConnection()->addKey(
  $this->getTable('sales/order_grid'),
  'shipping_description',
  'shipping_description'
);

$select = $this->getConnection()->select();
$select->join(
  array('order'=>$this->getTable('sales/order')),
  $this->getConnection()->quoteInto(
    'order.entity_id = order_grid.entity_id'
  ),
  array('shipping_description' => 'shipping_description')
);
$this->getConnection()->query(
  $select->crossUpdateFromSelect(
    array('order_grid' => $this->getTable('sales/order_grid'))
  )
);

$this->endSetup();
