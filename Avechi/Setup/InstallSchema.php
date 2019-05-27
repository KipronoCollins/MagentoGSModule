<?php 
namespace Globalshopping\Avechi\Setup;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;
class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup,ModuleContextInterface $context){
        $setup->startSetup();
        $conn = $setup->getConnection();
        $tableName = $setup->getTable('avechi_userdetails');
        if($conn->isTableExists($tableName) != true){
            $table = $conn->newTable($tableName)
                            ->addColumn(
                                'id',
                                Table::TYPE_INTEGER,
                                null,
                     ['identity'=>true,'auto_increment' => true,'unsigned'=>true,'nullable'=>false,'primary'=>true]
                                )
                            ->addColumn(
                                'rid',
                                Table::TYPE_TEXT,
                                255,
                                ['nullable'=>false,'default'=>'','nullable'=>false]
                                    )
                            ->addColumn(
                                'name',
                                Table::TYPE_TEXT,
                                255,
                                ['nullable'=>false,'default'=>'','nullable'=>false]
                                )
                            ->addColumn(
                                'address',
                                Table::TYPE_TEXT,
                                255,
                                ['nullbale'=>false,'default'=>'']
                                )
                            ->addColumn(
                                'email',
                                Table::TYPE_TEXT,
                                255,
                                ['nullbale'=>false,'default'=>'']
                                )
                            ->addColumn(
                                'phonenumber',
                                Table::TYPE_TEXT,
                                255,
                                ['nullbale'=>false,'default'=>'']
                                )
                            ->addColumn(
                                'created_at',
                                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                                null,
                                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                                'Created At'
                            )
                            ->addColumn(
                                'updated_at',
                                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                                null,
                                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                                'Updated At'
                            )    
                            ->setOption('charset','utf8');
            $conn->createTable($table);
        }

        $tableName = $setup->getTable('avechi_requests');
        if($conn->isTableExists($tableName) != true){
            $table = $conn->newTable($tableName)
                            ->addColumn(
                                'id',
                                Table::TYPE_INTEGER,
                                null,
                     ['identity'=>true,'auto_increment' => true,'unsigned'=>true,'nullable'=>false,'primary'=>true]
                                )
                            ->addColumn(
                                'rid',
                                Table::TYPE_TEXT,
                                255,
                                ['nullable'=>false,'default'=>'']
                                )
                            ->addColumn(
                                'productname',
                                Table::TYPE_TEXT,
                                255,
                                ['nullbale'=>false,'default'=>'']
                                )
                            ->addColumn(
                                'productlink',
                                Table::TYPE_TEXT,
                                1000,
                                ['nullbale'=>false,'default'=>'']
                                )
                            ->addColumn(
                                'sizecoloroption',
                                Table::TYPE_TEXT,
                                255,
                                ['nullbale'=>false,'default'=>'']
                                )
                            ->addColumn(
                                'quantity',
                                Table::TYPE_INTEGER,
                                null,
                                ['nullbale'=>false]
                                )
                            ->addColumn(
                                'specificinstruction',
                                Table::TYPE_TEXT,
                                255,
                                ['nullbale'=>false,'default'=>'']
                                )
                            ->addColumn(
                                'created_at',
                                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                                null,
                                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                                'Created At'
                            )
                            ->addColumn(
                                'updated_at',
                                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                                null,
                                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                                'Updated At'
                            )    
                            ->setOption('charset','utf8');
            $conn->createTable($table);
        }
        $setup->endSetup();
    }
}
 ?>