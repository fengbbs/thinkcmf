<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 小夏 < 449134904@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\controller;

use cmf\controller\AdminBaseController;
use think\Db;

class DialogController extends AdminBaseController
{
    public function _initialize()
    {

    }

    public function map()
    {
        $location = $this->request->param('location');
        $location = explode(',', $location);
        $lng      = empty($location[0]) ? 116.424966 : $location[0];
        $lat      = empty($location[1]) ? 39.907851 : $location[1];

        $this->assign(['lng' => $lng, 'lat' => $lat]);
        return $this->fetch();
    }

}