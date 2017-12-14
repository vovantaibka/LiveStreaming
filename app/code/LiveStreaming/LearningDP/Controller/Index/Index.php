<?php
/**
 * Created by PhpStorm.
 * User: francy
 * Date: 12/14/17
 * Time: 7:42 AM
 */
namespace LiveStreaming\LearningDP\Controller\Index;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context, 
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}