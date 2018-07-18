<?php
namespace Bhagyashri\Info\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Info extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('student_info', 'id');
    }
}