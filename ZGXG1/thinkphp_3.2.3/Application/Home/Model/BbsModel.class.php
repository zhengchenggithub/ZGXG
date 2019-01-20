<?php
namespace Home\Model;
use Think\Model;
class BbsModel extends Model
{
    public function set_solve($id='')
    {
        $map['bid']=intval($id);
        $map['issolve']=1;
        $this->save($map);
        return true;
    }
}
