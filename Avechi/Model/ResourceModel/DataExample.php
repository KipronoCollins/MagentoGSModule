<?php 
namespace Globalshopping\Avechi\Model\ResourceModel;
class DataExample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
 public function _construct(){
 $this->_init("avechi_userdetails","id");
 }
}
 ?>