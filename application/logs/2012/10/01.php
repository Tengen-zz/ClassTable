<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-01 15:11:16 --- ERROR: Database_Exception [ 1146 ]: Table 'pm11.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-01 15:11:16 --- STRACE: Database_Exception [ 1146 ]: Table 'pm11.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/vitek/Repos/pm11.localhost/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/vitek/Repos/pm11.localhost/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 /home/vitek/Repos/pm11.localhost/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /home/vitek/Repos/pm11.localhost/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /home/vitek/Repos/pm11.localhost/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /home/vitek/Repos/pm11.localhost/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(1)
#6 /home/vitek/Repos/pm11.localhost/application/classes/controller/welcome.php(14): Kohana_ORM::factory('user', 1)
#7 [internal function]: Controller_Welcome->action_index()
#8 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/vitek/Repos/pm11.localhost/index.php(109): Kohana_Request->execute()
#12 {main}
2012-10-01 15:13:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/controller/welcome.php [ 23 ]
2012-10-01 15:13:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/controller/welcome.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-01 15:13:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/controller/welcome.php [ 25 ]
2012-10-01 15:13:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/controller/welcome.php [ 25 ]
--
#0 /home/vitek/Repos/pm11.localhost/application/classes/controller/welcome.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/vitek/Rep...', 25, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/vitek/Repos/pm11.localhost/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-01 15:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-01 15:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/pm11.localhost/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 15:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-01 15:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/pm11.localhost/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 15:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-01 15:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/pm11.localhost/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 15:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-01 15:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/pm11.localhost/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 15:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-01 15:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/pm11.localhost/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-01 15:26:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-01 15:26:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdasd/asdasd/9 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/vitek/Repos/pm11.localhost/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/vitek/Repos/pm11.localhost/index.php(109): Kohana_Request->execute()
#3 {main}