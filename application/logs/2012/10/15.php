<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-15 08:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-15 08:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 08:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 08:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 08:24:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\classes\controller\group.php [ 44 ]
2012-10-15 08:24:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\classes\controller\group.php [ 44 ]
--
#0 Z:\home\pm11.localhost\www\application\classes\controller\group.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\pm11.lo...', 44, Array)
#1 [internal function]: Controller_Group->action_update()
#2 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#3 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 08:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 08:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 08:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 08:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 08:44:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\group.php [ 56 ]
2012-10-15 08:44:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\group.php [ 56 ]
--
#0 Z:\home\pm11.localhost\www\application\classes\controller\group.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\pm11.lo...', 56, Array)
#1 [internal function]: Controller_Group->action_update()
#2 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#3 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 08:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 08:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 08:48:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\group.php [ 51 ]
2012-10-15 08:48:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\group.php [ 51 ]
--
#0 Z:\home\pm11.localhost\www\application\classes\controller\group.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\pm11.lo...', 51, Array)
#1 [internal function]: Controller_Group->action_update()
#2 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#3 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 08:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 08:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:39:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\group.php [ 58 ]
2012-10-15 13:39:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\group.php [ 58 ]
--
#0 Z:\home\pm11.localhost\www\application\classes\controller\group.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\pm11.lo...', 58, Array)
#1 [internal function]: Controller_Group->action_update()
#2 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#3 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 13:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 13:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:37:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: groups ~ APPPATH\views\group\list.php [ 7 ]
2012-10-15 14:37:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: groups ~ APPPATH\views\group\list.php [ 7 ]
--
#0 Z:\home\pm11.localhost\www\application\views\group\list.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\pm11.lo...', 7, Array)
#1 Z:\home\pm11.localhost\www\system\classes\kohana\view.php(61): include('Z:\home\pm11.lo...')
#2 Z:\home\pm11.localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\pm11.lo...', Array)
#3 Z:\home\pm11.localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\pm11.localhost\www\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 Z:\home\pm11.localhost\www\application\classes\controller\group.php(10): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Group->action_index()
#7 Z:\home\pm11.localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Group))
#8 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-15 14:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-15 14:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}