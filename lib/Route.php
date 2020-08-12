<?php

namespace lib;

class Route
{
    /**
     * 路由分发
     * @param Request $request
     * @return mixed|void
     */
    public static function dispatch(Request $request)
    {
        $module = $request->module();
        $controller = $request->controller();
        $action = $request->action();

        $className = '\\Applications\\' . $module . '\\controller\\' . ucfirst($controller);

        $obj = new $className($request);
        $res = call_user_func_array(array($obj, $action), array($request));
        return $res;


    }
}
