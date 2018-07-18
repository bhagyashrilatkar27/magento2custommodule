<?php

namespace Bhagyashri\Info\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Register extends \Magento\Framework\App\Action\Action
{
    protected $info;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Bhagyashri\Info\Model\InfoFactory $infoFactory){
        parent::__construct($context);
        $this->info = $infoFactory;
    }
    /**
     * Register action
     *
     * @return void
     */
    public function execute()
    {
        // die("calling");
        // echo "Sssssss"; exit;
        // 1. POST request : Get registered data
        $data = (array) $this->getRequest()->getPost();

        //print_r($data); exit;
        if (!empty($data)) {
            // Retrieve your form data
            $firstname   = $data['firstname'];
            $lastname    = $data['lastname'];
            $phone       = $data['phone'];
            $age = $data['age'];

            // Doing-something with...
            $student_Info_object = $this->info->create();

            $date = date('Y-m-d h:i:sa');

            $student_Info_object->setData('firstname', $data['firstname']);
            $student_Info_object->setData('lastname', $data['lastname']);
            $student_Info_object->setData('phone', $data['phone']);
            $student_Info_object->setData('age', $data['age']);
            $student_Info_object->setData('created_at', $date);

            $student_Info_object->save();

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('You have registered successfully !');

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/info/index/register');

            return $resultRedirect;
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}