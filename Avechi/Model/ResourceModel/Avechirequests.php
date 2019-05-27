<?php 
namespace Globalshopping\Avechi\Model\ResourceModel\Example;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	public function _construct(){
		$this->_init("Globalshopping\Avechi\Model\Example","Globalshopping\Avechi\Model\ResourceModel\Example");
	}
}
 ?>