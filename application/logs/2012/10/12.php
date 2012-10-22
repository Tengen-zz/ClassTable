<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-12 09:37:43 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-12 09:37:43 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('students')
#3 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 Z:\home\pm11.localhost\www\application\classes\controller\welcome.php(28): Kohana_ORM::factory('student')
#8 [internal function]: Controller_Welcome->action_index()
#9 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-12 09:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 09:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 09:40:52 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-12 09:40:52 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('students')
#3 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 Z:\home\pm11.localhost\www\application\classes\controller\welcome.php(28): Kohana_ORM::factory('student')
#8 [internal function]: Controller_Welcome->action_index()
#9 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-12 09:55:40 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-12 09:55:40 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('students')
#3 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 Z:\home\pm11.localhost\www\application\classes\controller\welcome.php(28): Kohana_ORM::factory('student')
#8 [internal function]: Controller_Welcome->action_index()
#9 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-12 09:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 09:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 09:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 09:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:04:15 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-12 10:04:15 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('students')
#3 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 Z:\home\pm11.localhost\www\application\classes\controller\welcome.php(28): Kohana_ORM::factory('student')
#8 [internal function]: Controller_Welcome->action_index()
#9 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-12 10:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/classes/controller/welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/classes/controller/welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/classes/controller/welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/classes/controller/welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:28:16 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`pm11`.`groups`, CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`group`)) [ INSERT INTO `groups` (`name`) VALUES ('ПМ-11-1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-12 10:28:16 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`pm11`.`groups`, CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`group`)) [ INSERT INTO `groups` (`name`) VALUES ('ПМ-11-1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `gr...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 Z:\home\pm11.localhost\www\application\classes\controller\group.php(18): Kohana_ORM->save()
#4 [internal function]: Controller_Group->action_create()
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-12 10:28:32 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`pm11`.`groups`, CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`group`)) [ INSERT INTO `groups` (`name`) VALUES ('ПМ-11-1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-12 10:28:32 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`pm11`.`groups`, CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`group`)) [ INSERT INTO `groups` (`name`) VALUES ('ПМ-11-1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `gr...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 Z:\home\pm11.localhost\www\application\classes\controller\group.php(18): Kohana_ORM->save()
#4 [internal function]: Controller_Group->action_create()
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-12 10:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:38:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\controller\group.php [ 32 ]
2012-10-12 10:38:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\controller\group.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-12 10:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 10:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 10:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 11:07:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\controller\group.php [ 34 ]
2012-10-12 11:07:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\controller\group.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-12 11:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 11:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 11:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 11:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 11:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 11:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 11:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 11:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-12 11:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-12 11:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}