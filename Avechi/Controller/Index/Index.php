<?php 
namespace Globalshopping\Avechi\Controller\Index;
// use Globalshopping\Avechi\Model\DataExampleFactory;
// use Magento\Framework\Controller\ResultFactory;
// use Magento\Framework\App\Action\Context;
// class Index extends \Magento\Framework\App\Action\Action{
//     protected $_dataExample;
//     protected $resultRedirect;
//     public function __construct(\Magento\Framework\App\Action\Context $context,
//         \Globalshopping\Avechi\Model\DataExampleFactory  $dataExample,
//     \Magento\Framework\Controller\ResultFactory $result){
//         parent::__construct($context);
//         $this->_dataExample = $dataExample;
//         $this->resultRedirect = $result;
//     }
// 	public function execute(){
//         // $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
//         // $resultRedirect->setUrl($this->_redirect->getRefererUrl());
// 		// $model = $this->_dataExample->create();
// 		// $model->addData([
// 		// 	"title" => 'Title 02',
// 		// 	"content" => 'Content 02',
// 		// 	"sort_order" => 1
// 		// 	]);
//         // $saveData = $model->save();
//         // if($saveData){
//         //     $this->messageManager->addSuccess( __('Insert Record Successfully !') );
//         // }
//         // return $resultRedirect;
//         echo "We are damn Here";
// 	}
// }

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        array $data = [])
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}

// public function execute()
//         {
//             $block = $this->_view->getLayout()->createBlock('Globalshopping\Avechi\Block\Index');
//             $block->setTemplate('Globalshopping_Avechi::Index.phtml');
//             $this->getResponse()->appendBody($block->toHtml());
//         }

