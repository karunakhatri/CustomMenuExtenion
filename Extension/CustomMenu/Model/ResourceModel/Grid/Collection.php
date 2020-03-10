<?php

namespace Extension\CustomMenu\Model\ResourceModel\Grid;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Extension\CustomMenu\Model\Grid', 'Extension\CustomMenu\Model\ResourceModel\Grid');
    }
}