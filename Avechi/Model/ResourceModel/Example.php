<?php 
namespace Globalshopping\Avechi\Model\ResourceModel;
class Example extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
 public function _construct(){
 $this->_init("avechi_requests","id");
 }
}
 ?>