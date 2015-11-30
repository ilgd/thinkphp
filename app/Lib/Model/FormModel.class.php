<?php
/**
 * Created by PhpStorm.
 * User: Jiera
 * Date: 2015/11/24
 * Time: 22:36
 */
//用于表单的自动验证和自动完成
class FormModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('title','require','标题必须'),
    );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
    );
}
