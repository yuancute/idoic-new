<?php
namespace app\front\model;


use think\Model;

class Product extends Model
{
    protected $table = 'product';
    public function getNewList()
    {
        return $result = self::where('status',1)->field('id,name,brand,batch_num,package,stock')->limit(10)->select();
    }
    public function getList($text='')
    {
        $map = [
            ['name','like','%'.$text.'%'],
            ['status','=',1]
        ];
        return $result = self::where($map)->field('id,name,brand,batch_num,package,stock')->paginate(10);
    }
    public function detail($id)
    {
        return self::find($id);
    }
}