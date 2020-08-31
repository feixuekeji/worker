<?php

namespace application\admin\controller;

use lib\Request;



class Base
{
    protected $adminInfo;
    /**
     * 初始化处理数据
     * Base constructor.
     */
    public function __construct(Request $request)
    {
        //$this->initAuth($request);
    }

    /**
     * 进行权限控制
     */
    public function initAuth(Request $request){
        $adminModel = new \application\admin\model\Admin();
        $adminId = $_SESSION['adminId'] ?? 0;
        if (!$adminId){
            throw new \Exception('未登录',401);
        }else{
            $this->adminInfo = $adminModel->getInfo($adminId);
            $api = $request->api();
            $authFlag = $adminModel->checkAdminAuth($adminId,$api);
        }
        if (!$authFlag){
            throw new \Exception('没有权限',403);
        }

    }



}
