<?php
/**
 * Created by PhpStorm.
 * User: Jiera
 * Date: 2015/11/24
 * Time: 22:21
 */
//D函数需要有对应的模型类
class FormAction extends Action{
    public function insert(){
        $Form   =   D('Form');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }
    public function read($id=0){
        $Form   =   M('Form');
        // 读取数据
        $data =   $Form->find($id);
        if($data) {
            $this->data =   $data;// 模板变量赋值
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }
}
