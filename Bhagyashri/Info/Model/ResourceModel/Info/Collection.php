<?php
namespace Bhagyashri\Info\Model\ResourceModel\Info;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init('Bhagyashri\Info\Model\Info', 'Bhagyashri\Info\Model\ResourceModel\Info');
    }
}