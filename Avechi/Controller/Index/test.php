<?php
namespace Globalshopping\Avechi\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Session\SessionManagerInterface;
use Magento\Framework\Controller\ResultFactory;
use Globalshopping\Avechi\Model\DataExampleFactory;
use Globalshopping\Avechi\Model\Example;

class Test extends \Magento\Framework\App\Action\Action
{
	// protected $_pageFactory;
	// protected $_modelBlogFactory;
    // protected $resultPageFactory;
	// protected $_sessionManager;
	protected $_test;
	protected $_dataExample;
	protected $_example;
    protected $resultRedirect;

	public function __construct(
		// Context $context,
        // Post $modelBlogFactory,
        // PageFactory  $resultPageFactory,
		// SessionManagerInterface $sessionManager
		Context $context,
		TestFactory $test,
		\Globalshopping\Avechi\Model\DataExampleFactory  $dataExample,
		\Globalshopping\Avechi\Model\ExampleFactory  $Example,
		\Magento\Framework\Controller\ResultFactory $result
		)
	{
		// parent::__construct($context);
        // $this->_post = $modelBlogFactory;
        // $this->resultPageFactory = $resultPageFactory;
		// $this->_sessionManager = $sessionManager;
		$this->_test = $test;
		parent::__construct($context);
		$this->_dataExample = $dataExample;
		$this->_example = $Example;
        $this->resultRedirect = $result;
	}

	public function execute()
	{
		//echo "Kip is The Best";
		// $firstname = $this->getRequest()->getParam('firstname');
		// $lastname = $this->getRequest()->getParam('lastname');
		// echo $firstname. "  ".$lastname;
		// 1. POST request : Get booking data 

		$post = (array) $this->getRequest()->getPost();
		//var_dump(empty($post));
		if (!empty($post)) {
            //Retrieve your form data
            $name   = $post['name'];
			$address    = $post['address'];
			$phonenumber    = $post['phonenumber'];
			$email    = $post['email'];
			$productname    = $post['productname'];
			$productlink    = $post['productlink'];
			$option    = $post['option'];
			$quantity    = $post['quantity'];
			$specs    = $post['specs'];

			// echo "Name => ".$name."<br>";
			// echo "Address => ".$address."<br>";
			// echo "Phonenumber => ".$phonenumber."<br>";
			// echo "Email => ".$email."<br>";
			// echo "Productname => ".$productname[0]."<br>";
			// echo "Productlink => ".$productlink[0]."<br>";
			// echo "Option => ".$option[0]."<br>";
			// echo "Quantity => ".$quantity[0]."<br>";
			// echo "Specs => ".$specs."<br>";
			// echo sizeof($productlink);
			// die;
			//echo sizeof($productlink);
			//var_dump($productlink[0]);
		// 	echo $firstname. "  ".$lastname;

			// $resultRedirect     = $this->resultRedirectFactory->create();
			// $BlogModel          = $this->_modelBlogFactory->create();
			// $BlogModel->setData('post_id', '3');
			// $BlogModel->setData('name', 'Avechi Dev3');
			// $BlogModel->setData('url_key', '/magento/just/work/please');
			// $BlogModel->setData('post_content', 'Magento Model Test Please');
			// $BlogModel->setData('tags', 'Magento2');
			// $BlogModel->setData('status', '1');
			// $BlogModel->setData('created_at', '2019-01-25 14:30:29');
			// $BlogModel->setData('updated_at', '2019-01-25 14:30:29');
			// $test = $BlogModel->save();
			// var_dump($test);
			//Mage::getModel('mageplaza_helloworld_post/Post')->load(2);
			// $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			// $question = $this->_objectManager->create('Mageplaza\HelloWorld\Model\Post');
			// var_dump(empty($question));
			// $question->setPost_id('3');
			// $question->setName('Avechi Dev3');
			// $question->setUrl_key('/magento/just/work/please');
			// $question->setPost_content('Magento Model Test Please');
			// $question->setTags('Magento2');
			// $question->setStatus('1');
			// $question->setCreated_at('2019-01-25 11:15:29');
			// $question->setUpdated_at('2019-01-25 11:15:29');
			// $test = $question->save();

			// $question = $this->_objectManager->create('Mageplaza\HelloWorld\Model\Post');
			// $question->setPost_id('3');
			// $question->setName('Avechi Dev3');
			// $question->setUrl_key('/magento/just/work/please');
			// $question->setPost_content('Magento Model Test Please');
			// $question->setTags('Magento2');
			// $question->setStatus('1');
			// $question->setCreated_at('2019-01-25 11:15:29');
			// $question->setUpdated_at('2019-01-25 11:15:29');
			// $test = $question->save();
			// exit;

			//$test = $this->_test->create();
			// $test->setPost_id('3');
			// $test->setName('Avechi Dev3');
			// $test->setUrl_key('/magento/just/work/please');
			// $test->setPost_content('Magento Model Test Please');
			// $test->setTags('Magento2');
			// $test->setStatus('1');
			// $test->setCreated_at('2019-01-25 11:15:29');
			// $test->setUpdated_at('2019-01-25 11:15:29');
			// $test = $test->save();
			// $test->addData([
			// 	"Post_id" => '3',
			// 	"Name" => 'Avechi Dev3',
			// 	"Url_key" => '/magento/just/work/please',
			// 	"Post_content" => 'Magento Model Test Please',
			// 	"Tags" => 'Magento2',
			// 	"Status" => '1',
			// 	"Created_at" => '2019-01-29 09:15:29',
			// 	"Updated_at" => '2019-01-29 09:15:29',
			// 	"sort_order" => 1
			// 	]);

			// $post = $this->getRequest();
			// $email   = $post['email'];
			// echo "<pre>".var_dump($email)."</pre>";
			// echo "Done";

			// $post = (array) $this->getRequest()->getPost();
		    // //var_dump(empty($post));
		    // if (!empty($post)) {

			// 	$productname   = $post['productname'];
			// 	var_dump($productname);
			//     die;

			// }

			// var_dump($post);
			// die;

			// echo "name";

			//This one will be used to save the data from the form to the data base. It works!!
			// $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
            // $resultRedirect->setUrl($this->_redirect->getRefererUrl());
			// $model = $this->_dataExample->create();
			// $model->addData([
			// 	"rid" => 'RID-0001',
			// 	"name" => 'Declan Rice',
			// 	"address" => '1234 Nairobi',
			// 	"email" => 'declan@rice.com',
			// 	"phonenumber" => '0808080808',
			// 	"sort_order" => 1
			// 	]);
			// $saveData = $model->save();
			// if($saveData){
			// 	$resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
            //     $resultRedirect->setUrl($this->_redirect->getRefererUrl());
			//     $model = $this->_example->create();
			//     $model->addData([
			// 		"rid" => 'RID-0001',
			// 		"productname" => 'WestHam',
			// 		"productlink" => 'https://westham.com/',
			// 		"sizecoloroption" => 'Hammers',
			// 		"quantity" => '20',
			// 		"specificinstruction" => 'Javier Hernandez Chicharito!!!',
			// 		"sort_order" => 1
			// 		]);
			// 		$save = $model->save();
			// 	}
			// 	echo "Save";

			$size = sizeof($productname);
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
			$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
			$connection = $resource->getConnection();
			$tableName = $resource->getTableName('avechi_requests'); //gives table name with prefix
 
			//Select Data from table
			$sql = "SELECT `rid` FROM " . $tableName;
			$result = $connection->fetchAll($sql); // gives associated array, table fields as key in array.
			// var_dump($result[1]["productname"]);
			// echo $result[1]["productname"];
			// die;

			// echo "Diana Ameweza";
			function checkkeys($randomstring, $result)
                    {
        
                        foreach ($result as $value) {
                            if ($value == $randomstring) {
                                $keyexists = true;
                                break;
                            } else {
                                $keyexists = false;
                            }
                        }
                    }
        
                    function generatekey($result)
                    {
                        $length = 8;
                        $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
                        $randomstring = substr(str_shuffle($str), 0, $length);
        
                        $checkkey = checkkeys($randomstring, $result);
        
                        while ($checkkey == true) {
                            $randomstring = substr(str_shuffle($str), 0, $length);
                            $checkkey = checkkeys($randomstring);
                        }
        
                        return $randomstring;
                    }
        
					$rid = generatekey($result);
					// echo $rid;
			//This one will be used to save the data from the form to the data base. It works!!
			$resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl($this->_redirect->getRefererUrl());
			$model = $this->_dataExample->create();
			$model->addData([
				"rid" => $rid,
				"name" => $name,
				"address" => $address,
				"email" => $email,
				"phonenumber" => $phonenumber,
				"sort_order" => 1
				]);
			$saveData = $model->save();
			if($saveData){
				for ($x = 0; $x < $size; $x++) {

					$resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
					$resultRedirect->setUrl($this->_redirect->getRefererUrl());
					$model = $this->_example->create();
					$model->addData([
						"rid" => $rid,
						"productname" => $productname[$x],
						"productlink" => $productlink[$x],
						"sizecoloroption" => $option[$x],
						"quantity" => $quantity[$x],
						"specificinstruction" => $specs,
						"sort_order" => 1
						]);
					$save = $model->save();
					
				} 
				
				}

			if($save)
			{
				$resultRedirect = $this->resultRedirectFactory->create();
				$resultRedirect->setUrl('https://avechi.com/thank-you/');
				return $resultRedirect;
			}
	}
	
}
}
