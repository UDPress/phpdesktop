<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | Workerman设置 php think worker命令行下有效
// +----------------------------------------------------------------------
return [
    // 扩展自身需要的配置
    'host'     => '0.0.0.0', // 监听地址
    'port'     => 46150, // 监听端口
    'app_path' => '', // 应用目录 守护进程模式必须设置（绝对路径）

    // 支持workerman的所有配置参数
    'name'     => 'thinkphp',
    'count'    => 4,
];