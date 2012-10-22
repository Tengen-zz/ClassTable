<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-21 21:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 21:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 21:07:27 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ DELETE FROM `students` WHERE `id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-21 21:07:27 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ DELETE FROM `students` WHERE `id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `st...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\application\classes\controller\student.php(87): Kohana_ORM->delete()
#3 [internal function]: Controller_Student->action_delete()
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Student))
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-21 21:12:11 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ DELETE FROM `students` WHERE `id` = '11' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-21 21:12:11 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ DELETE FROM `students` WHERE `id` = '11' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `st...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\application\classes\controller\student.php(87): Kohana_ORM->delete()
#3 [internal function]: Controller_Student->action_delete()
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Student))
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-21 21:13:21 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `students` WHERE `id` = '11' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-21 21:13:21 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ DELETE FROM `students` WHERE `id` = '11' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `st...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\application\classes\controller\student.php(87): Kohana_ORM->delete()
#3 [internal function]: Controller_Student->action_delete()
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Student))
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-21 21:13:57 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ DELETE FROM `students` WHERE `id` = '11' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-21 21:13:57 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ DELETE FROM `students` WHERE `id` = '11' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `st...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\application\classes\controller\student.php(87): Kohana_ORM->delete()
#3 [internal function]: Controller_Student->action_delete()
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Student))
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-21 21:14:07 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ INSERT INTO `students` (`name`, `email`) VALUES ('asd', 'd') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-21 21:14:07 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ INSERT INTO `students` (`name`, `email`) VALUES ('asd', 'd') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `st...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 Z:\home\pm11.localhost\www\application\classes\controller\student.php(71): Kohana_ORM->save()
#4 [internal function]: Controller_Student->action_update()
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Student))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-21 21:14:12 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ INSERT INTO `students` (`name`, `email`) VALUES ('asd', 'd') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-21 21:14:12 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`pm11`.`students`, CONSTRAINT `students_ibfk_3` FOREIGN KEY (`group_id`) REFERENCES `students` (`group_id`)) [ INSERT INTO `students` (`name`, `email`) VALUES ('asd', 'd') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `st...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 Z:\home\pm11.localhost\www\application\classes\controller\student.php(71): Kohana_ORM->save()
#4 [internal function]: Controller_Student->action_update()
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Student))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-21 21:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 21:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 21:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 21:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 21:16:20 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`groups`, CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`group_id`)) [ DELETE FROM `students` WHERE `id` = '12' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-21 21:16:20 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`pm11`.`groups`, CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`group_id`)) [ DELETE FROM `students` WHERE `id` = '12' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\pm11.localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `st...', false, Array)
#1 Z:\home\pm11.localhost\www\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\pm11.localhost\www\application\classes\controller\student.php(87): Kohana_ORM->delete()
#3 [internal function]: Controller_Student->action_delete()
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Student))
#5 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-21 21:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL group/read18 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-10-21 21:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL group/read18 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 21:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 21:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 21:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 21:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 21:35:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\controller\student.php [ 76 ]
2012-10-21 21:35:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\controller\student.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 21:35:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\controller\student.php [ 76 ]
2012-10-21 21:35:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\controller\student.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 21:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 21:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:00:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: student ~ APPPATH\views\student\update.php [ 6 ]
2012-10-21 22:00:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: student ~ APPPATH\views\student\update.php [ 6 ]
--
#0 Z:\home\pm11.localhost\www\application\views\student\update.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\pm11.lo...', 6, Array)
#1 Z:\home\pm11.localhost\www\system\classes\kohana\view.php(61): include('Z:\home\pm11.lo...')
#2 Z:\home\pm11.localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\pm11.lo...', Array)
#3 Z:\home\pm11.localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\pm11.localhost\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 Z:\home\pm11.localhost\www\application\classes\controller\student.php(87): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Student->action_update()
#7 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Student))
#8 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-21 22:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student/update/.32 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student/update/.32 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student/update/.32 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student/update/.32 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student/update/.32 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: student/update/.32 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL security/rlogin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-10-21 22:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL security/rlogin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 22:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL security/rlogin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-10-21 22:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL security/rlogin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 22:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:46:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH\classes\controller\group.php [ 29 ]
2012-10-21 22:46:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH\classes\controller\group.php [ 29 ]
--
#0 Z:\home\pm11.localhost\www\application\classes\controller\group.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\pm11.lo...', 29, Array)
#1 [internal function]: Controller_Group->action_read()
#2 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#3 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 22:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 22:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-21 22:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}