<?php
namespace Bhagyashri\Info\Model;
use Magento\Framework\Model\AbstractModel;

class Info extends \Magento\Framework\Model\AbstractModel {

    protected function _construct() {
        $this->_init('Bhagyashri\Info\Model\ResourceModel\Info');
    }
}