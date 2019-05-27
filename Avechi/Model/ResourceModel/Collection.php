<?php 
namespace Globalshopping\Avechi\Model\ResourceModel\DataExample;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	public function _construct(){
		$this->_init("Globalshopping\Avechi\Model\DataExample","Globalshopping\Avechi\Model\ResourceModel\DataExample");
	}
}
 ?>