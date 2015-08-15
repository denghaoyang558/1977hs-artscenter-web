<?php
/**
* Author:cmb
*/
namespace Home\Model;
use Think\Model\RelationModel;

class achievementStatusRelationModel extends RelationModel{

    Protected $tableName = 'achievement';

    Protected $_link = array(
        'achievement_status' => array(
            'mapping_type' => self::HAS_MANY,
            'mapping_name' => 'school',
            'foreign_key' => 'achievement_id',
        ), 
    );
}
?>