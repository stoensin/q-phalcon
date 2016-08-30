<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 调试模式
    |--------------------------------------------------------------------------
    |
    | 在调试模式下，报错信息和相关日志会更详细
    | 并且会尽可能的详细记录日志到文件
    |
    | 'debug' => bool
    |    调式开关，true表示启动调试模式，false表示关闭调试模式
    | 'prod_tip' => string
    |    非调试模式下的报错信息，建议在生产环境中，关闭调试模式
    |
    */

    'debug' => false,

    'prod_tip' => "Whoops, looks like something went wrong",

    /*
    |--------------------------------------------------------------------------
    | 日志
    |--------------------------------------------------------------------------
    |
    | 日志模块严格遵守PSR-3规范
    | 1.日志等级：debug,info,notice,warning,error,critical,alert,emergency
    | 2.日志占位符
    |
    | QP框架的日志模式：在良好的实践经验下，约束日志格式和位置，方便运维，如果你想自己
    | 设计一套符合自己业务的日志记录器，可以结合Phalcon的日志API来编写
    |
    | 'log_mode' => int
    |    日志模式，值为 0 到 8
    |    0.debug及以上级别的日志都要记录、1.info及以上级别的日志都要记录、以此类推
    |    当值为8时，表示清净模式，不会记录通过QPLog类编写的任何日志
    |
    | 'log_dir' => string
    |    日志目录，基于框架根目录；比如：app/log，表示日志存放于'XXX/app/log/'目录下
    |    注意：末尾不要加目录分割符，比如 '/' 符合。并且你应该确保该目录有写的权限
    |
    | 'request_start_log' => bool
    |    请求日志属于debug级别的日志，因此'log_mode'必须等于0，才可能有系统日志
    |    框架是否自动记录请求日志，true表示记录，false表示不记录
    |
    | 'request_log_post' => bool
    |    在'request_start_log'开启的情况下，请求日志中是否记录post表单参数
    |    这种方法往往能避免敏感数据被记录到文件中，防止用户信息泄露
    |    true表示记录，false表示不记录
    |
    */

    'log_mode' => 4,

    'log_dir' => 'logs',

    'request_start_log' => false,

    'request_log_post' => false,

    /*
    |--------------------------------------------------------------------------
    | 时区设置
    |--------------------------------------------------------------------------
    |
    | 几乎每个PHP脚本都需要设置时区，否则会报PHP警告
    | 时区也会影响着时间相关的php函数返回值
    |
    */
    'timezone' => "Asia/Shanghai",

    /*
    |--------------------------------------------------------------------------
    | 命名空间
    |--------------------------------------------------------------------------
    |
    | value是文件路径：常量 'QP_ROOT_PATH' 是项目根目录路径，key是命名空间
    |
    */
    'namespace' => [
    ],
];
