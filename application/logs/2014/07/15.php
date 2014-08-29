<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-15 09:08:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_teams' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 09:08:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:08:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_teams' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 09:08:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:10:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\games.php [ 9 ] in file:line
2014-07-15 09:10:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:27:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::result() ~ APPPATH\classes\Controller\games.php [ 24 ] in file:line
2014-07-15 09:27:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:28:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$result ~ APPPATH\classes\Controller\games.php [ 24 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:24
2014-07-15 09:28:23 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 24, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:24
2014-07-15 09:28:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::all() ~ APPPATH\classes\Controller\games.php [ 24 ] in file:line
2014-07-15 09:28:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:31:51 --- CRITICAL: ErrorException [ 2 ]: shuffle() expects parameter 1 to be array, object given ~ APPPATH\classes\Controller\games.php [ 24 ] in file:line
2014-07-15 09:31:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'shuffle() expec...', 'D:\\xampp\\htdocs...', 24, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(24): shuffle(Object(Database_Result_Cached))
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-15 09:32:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\games.php [ 27 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:27
2014-07-15 09:32:12 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 27, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:27
2014-07-15 09:32:21 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\games.php [ 27 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:27
2014-07-15 09:32:21 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 27, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:27
2014-07-15 09:32:37 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\games.php [ 26 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:26
2014-07-15 09:32:37 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:26
2014-07-15 09:32:42 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\games.php [ 26 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:26
2014-07-15 09:32:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:26
2014-07-15 09:32:45 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\games.php [ 26 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:26
2014-07-15 09:32:45 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:26
2014-07-15 09:35:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH\classes\Controller\games.php [ 24 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:24
2014-07-15 09:35:17 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 24, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:24
2014-07-15 09:37:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\games.php [ 21 ] in file:line
2014-07-15 09:37:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:40:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH\classes\Controller\games.php [ 30 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:30
2014-07-15 09:40:30 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 30, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:30
2014-07-15 09:41:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\games.php [ 31 ] in file:line
2014-07-15 09:41:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:41:21 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\games.php [ 31 ] in file:line
2014-07-15 09:41:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:41:35 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\games.php [ 31 ] in file:line
2014-07-15 09:41:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:41:38 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\games.php [ 31 ] in file:line
2014-07-15 09:41:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:42:25 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 4 ~ APPPATH\classes\Controller\games.php [ 29 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:29
2014-07-15 09:42:25 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\\xampp\\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:29
2014-07-15 09:42:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 4 ~ APPPATH\classes\Controller\games.php [ 29 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:29
2014-07-15 09:42:27 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\\xampp\\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:29
2014-07-15 09:42:32 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\games.php [ 30 ] in file:line
2014-07-15 09:42:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:42:38 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\games.php [ 30 ] in file:line
2014-07-15 09:42:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:42:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\games.php [ 27 ] in file:line
2014-07-15 09:42:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:43:12 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\games.php [ 30 ] in file:line
2014-07-15 09:43:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:44:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 09:44:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:44:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$teams' (T_VARIABLE) ~ APPPATH\classes\Controller\games.php [ 31 ] in file:line
2014-07-15 09:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:46:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_games' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 09:46:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 09:46:38 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 09:46:38 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('gameses')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(29): Kohana_ORM::factory('games')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 09:47:20 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_team_one_fk` FOREIGN KEY (`team_one`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ INSERT INTO games (team_one, team_two) VALUES ('българия', 'netherlands') ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 09:47:20 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO gam...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(32): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 09:59:32 --- CRITICAL: Kohana_Exception [ 0 ]: The team property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 09:59:32 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('team')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('team')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:01:40 --- CRITICAL: Kohana_Exception [ 0 ]: The game property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:01:40 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('game')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('game')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:01:42 --- CRITICAL: Kohana_Exception [ 0 ]: The team property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:01:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('team')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('team')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:01:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 10:01:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:01:59 --- CRITICAL: Kohana_Exception [ 0 ]: The team property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:01:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('team')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('team')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:02:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 10:02:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:02:39 --- CRITICAL: Kohana_Exception [ 0 ]: The team_one property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:02:39 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('team_one')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('team_one')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:03:09 --- CRITICAL: Kohana_Exception [ 0 ]: The team_one property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:03:09 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('team_one')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('team_one')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:03:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\views\games\edit.php [ 7 ] in file:line
2014-07-15 10:03:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:03:31 --- CRITICAL: Kohana_Exception [ 0 ]: The team_one property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:03:31 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('team_one')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('team_one')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:05:24 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'team.team_one' in 'where clause' [ SELECT team.id AS id, team.country AS country FROM team AS team WHERE team.team_one = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 10:05:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT team.id ...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(653): Kohana_ORM->find()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#5 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('teams')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#14 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#17 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 10:06:00 --- CRITICAL: Kohana_Exception [ 0 ]: The teams property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:06:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('teams')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:06:05 --- CRITICAL: Kohana_Exception [ 0 ]: The teams property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:06:05 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_ORM->__get('teams')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:07:14 --- CRITICAL: Kohana_Exception [ 0 ]: The teams property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:07:14 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_ORM->__get('teams')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:07:22 --- CRITICAL: Kohana_Exception [ 0 ]: The t_one property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:07:22 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('t_one')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('t_one')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:07:30 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 7 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:07:30 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 7, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:07:35 --- CRITICAL: Kohana_Exception [ 0 ]: The teams property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:07:35 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_ORM->__get('teams')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:07:38 --- CRITICAL: Kohana_Exception [ 0 ]: The teams property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:07:38 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('teams')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:08:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 10:08:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:08:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 10:08:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:08:37 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'team.team_one' in 'where clause' [ SELECT team.id AS id, team.country AS country FROM team AS team WHERE team.team_one = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 10:08:37 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT team.id ...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(653): Kohana_ORM->find()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#5 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('teams')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#14 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#17 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 10:09:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 10:09:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:10:16 --- CRITICAL: Kohana_Exception [ 0 ]: The teams property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:10:16 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('teams')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:10:58 --- CRITICAL: Kohana_Exception [ 0 ]: The t_two property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:10:58 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('t_two')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('t_two')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:12:03 --- CRITICAL: Kohana_Exception [ 0 ]: The t_two property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:12:03 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('t_two')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('t_two')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:12:41 --- CRITICAL: Kohana_Exception [ 0 ]: The t_one property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:12:41 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('t_one')
#1 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_ORM->__get('t_one')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(49): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-15 10:20:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\games.php [ 26 ] in file:line
2014-07-15 10:20:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:21:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::teamsToGames() ~ APPPATH\classes\Controller\games.php [ 49 ] in file:line
2014-07-15 10:21:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:23:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$execute ~ APPPATH\classes\Model\games.php [ 26 ] in D:\xampp\htdocs\kohana\application\classes\Model\games.php:26
2014-07-15 10:23:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Model\games.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(55): Model_Games->joinTeams()
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\application\classes\Model\games.php:26
2014-07-15 10:24:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Games::$game ~ APPPATH\classes\Controller\games.php [ 55 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:55
2014-07-15 10:24:23 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 55, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:55
2014-07-15 10:24:26 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 7 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:24:26 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 7, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:24:35 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 7 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:24:35 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 7, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:25:14 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 7 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:25:14 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 7, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:25:21 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 7 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:25:21 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 7, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:25:47 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 7 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:25:47 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 7, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:25:57 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:25:57 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:26:10 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 7 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:26:10 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 7, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:7
2014-07-15 10:26:19 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:26:19 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:27:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: game ~ APPPATH\classes\Controller\games.php [ 57 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:57
2014-07-15 10:27:08 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 57, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:57
2014-07-15 10:28:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Model\games.php [ 27 ] in file:line
2014-07-15 10:28:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:28:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Model\games.php [ 27 ] in file:line
2014-07-15 10:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:29:06 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:29:06 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:29:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:29:15 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:30:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\games\edit.php [ 9 ] in file:line
2014-07-15 10:30:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:30:49 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:30:49 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:31:14 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:31:14 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(57): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:8
2014-07-15 10:55:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT) ~ APPPATH\classes\Controller\games.php [ 14 ] in file:line
2014-07-15 10:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:56:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Date::timestamp() ~ APPPATH\classes\Controller\games.php [ 13 ] in file:line
2014-07-15 10:56:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:57:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Date::timestamp_format() ~ APPPATH\classes\Controller\games.php [ 13 ] in file:line
2014-07-15 10:57:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:57:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function timestamp_format() ~ APPPATH\classes\Controller\games.php [ 13 ] in file:line
2014-07-15 10:57:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:57:34 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'timestamp_format' ~ APPPATH\classes\Controller\games.php [ 13 ] in file:line
2014-07-15 10:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 10:59:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Date::formatted_tiome() ~ APPPATH\classes\Controller\games.php [ 13 ] in file:line
2014-07-15 10:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:00:10 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Date::days(), called in D:\xampp\htdocs\kohana\application\classes\Controller\games.php on line 13 and defined ~ SYSPATH\classes\Kohana\Date.php [ 222 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php:222
2014-07-15 11:00:10 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php(222): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 222, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(13): Kohana_Date::days()
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php:222
2014-07-15 11:09:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: game_starts ~ APPPATH\views\games\edit.php [ 10 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:10
2014-07-15 11:09:25 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 10, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(61): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:10
2014-07-15 11:11:24 --- CRITICAL: View_Exception [ 0 ]: The requested view games/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 11:11:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('games/show')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('games/show', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(61): Kohana_View::factory('games/show')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 11:15:41 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_Database_Query_Builder_Where::where(), called in D:\xampp\htdocs\kohana\application\classes\Model\games.php on line 27 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php [ 30 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query\Builder\Where.php:30
2014-07-15 11:15:41 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query\Builder\Where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 30, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Model\games.php(27): Kohana_Database_Query_Builder_Where->where('g.score', 'IS NULL')
#2 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(59): Model_Games->joinTeams()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query\Builder\Where.php:30
2014-07-15 11:16:06 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''NULL'' at line 1 [ SELECT g.id, g.winner, g.game_starts, t1.country AS team_one_country, t2.country AS team_two_country FROM games AS g JOIN team AS t1 ON (g.team_one = t1.id) JOIN team AS t2 ON (g.team_two = t2.id) WHERE g.score IS 'NULL' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 11:16:06 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT g.id, g....', false, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Model\games.php(28): Kohana_Database_Query->execute()
#2 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(59): Model_Games->joinTeams()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 11:35:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Games::as_assoc() ~ APPPATH\classes\Controller\games.php [ 68 ] in file:line
2014-07-15 11:35:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:35:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Controller\games.php [ 69 ] in file:line
2014-07-15 11:35:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:36:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: game ~ APPPATH\classes\Controller\games.php [ 70 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:70
2014-07-15 11:36:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 70, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:70
2014-07-15 11:36:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: game ~ APPPATH\classes\Controller\games.php [ 70 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:70
2014-07-15 11:36:04 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 70, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:70
2014-07-15 11:36:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::find() ~ APPPATH\classes\Controller\games.php [ 68 ] in file:line
2014-07-15 11:36:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:36:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Model\games.php [ 28 ] in file:line
2014-07-15 11:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:38:13 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Games::$respone ~ APPPATH\classes\Controller\games.php [ 69 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:69
2014-07-15 11:38:13 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 69, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:69
2014-07-15 11:38:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result\Cached.php:48
2014-07-15 11:38:20 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 48, Array)
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 D:\xampp\htdocs\kohana\application\views\games\edit.php(3): Kohana_Database_Result->offsetGet('id')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result\Cached.php:48
2014-07-15 11:38:44 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH\views\games\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:38:44 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(3): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:38:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$id ~ APPPATH\views\games\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:38:46 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(3): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:38:54 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:38:54 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(3): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:39:00 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:39:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(3): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:40:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result\Cached.php:48
2014-07-15 11:40:30 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 48, Array)
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 D:\xampp\htdocs\kohana\application\views\games\edit.php(3): Kohana_Database_Result->offsetGet('id')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#7 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Result\Cached.php:48
2014-07-15 11:41:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_assoc() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:41:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:41:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:41:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:41:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:41:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:41:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\games\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:41:17 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:41:21 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\games\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:41:21 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(3): Kohana_Core::error_handler(8, 'Array to string...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:3
2014-07-15 11:41:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_assoc() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:41:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:41:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_assoc() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:41:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:42:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_assoc() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:42:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:42:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:42:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:42:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::first() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:42:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:42:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::find() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:42:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:43:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::where() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:43:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:43:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'find' (T_STRING) ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:43:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::find() ~ APPPATH\classes\Controller\games.php [ 67 ] in file:line
2014-07-15 11:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:44:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: team_one ~ APPPATH\views\games\edit.php [ 5 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:5
2014-07-15 11:44:46 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 5, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:5
2014-07-15 11:45:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\games\edit.php [ 6 ] in file:line
2014-07-15 11:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:45:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: score ~ APPPATH\views\games\edit.php [ 6 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:6
2014-07-15 11:45:52 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 6, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:6
2014-07-15 11:48:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\views\games\edit.php [ 13 ] in D:\xampp\htdocs\kohana\application\views\games\edit.php:13
2014-07-15 11:48:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\edit.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 13, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(69): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\edit.php:13
2014-07-15 11:57:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 11:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 11:58:47 --- CRITICAL: Kohana_Exception [ 0 ]: The round property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-15 11:58:47 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('round', 1)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(45): Kohana_ORM->__set('round', 1)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-15 12:04:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'exit' (T_EXIT), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\games.php [ 64 ] in file:line
2014-07-15 12:04:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:06:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\games.php [ 62 ] in file:line
2014-07-15 12:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:06:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH\classes\Controller\games.php [ 64 ] in file:line
2014-07-15 12:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:07:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find() ~ APPPATH\classes\Controller\games.php [ 62 ] in file:line
2014-07-15 12:07:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:09:03 --- CRITICAL: ErrorException [ 2 ]: array_map(): Argument #2 should be an array ~ APPPATH\classes\Controller\games.php [ 63 ] in file:line
2014-07-15 12:09:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map(): Ar...', 'D:\\xampp\\htdocs...', 63, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(63): array_map('current', Object(Database_Result_Cached))
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-15 12:09:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\games.php [ 62 ] in file:line
2014-07-15 12:09:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:09:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\games.php [ 62 ] in file:line
2014-07-15 12:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:09:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: round ~ APPPATH\classes\Controller\games.php [ 65 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:65
2014-07-15 12:09:22 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 65, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:65
2014-07-15 12:09:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\games.php [ 62 ] in file:line
2014-07-15 12:09:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:10:21 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ APPPATH\classes\Controller\games.php [ 63 ] in file:line
2014-07-15 12:10:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 63, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(63): array_merge('current', Array)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-15 12:10:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\games.php [ 63 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:63
2014-07-15 12:10:29 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 63, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:63
2014-07-15 12:11:24 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 2 to be array, object given ~ APPPATH\classes\Controller\games.php [ 63 ] in file:line
2014-07-15 12:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'D:\\xampp\\htdocs...', 63, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(63): call_user_func_array('array_merge', Object(Database_Result_Cached))
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-15 12:13:11 --- CRITICAL: ErrorException [ 2 ]: array_walk_recursive() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\games.php [ 63 ] in file:line
2014-07-15 12:13:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_walk_recu...', 'D:\\xampp\\htdocs...', 63, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(63): array_walk_recursive(NULL, Array)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-15 12:13:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_assoc() ~ APPPATH\classes\Controller\games.php [ 65 ] in file:line
2014-07-15 12:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:14:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\games.php [ 62 ] in file:line
2014-07-15 12:14:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:17:02 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\games\show.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\games\show.php:8
2014-07-15 12:17:02 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\show.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(68): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\games\show.php:8
2014-07-15 12:33:24 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'round' in 'field list' [ SELECT DISTINCT round FROM games ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:33:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT DISTINCT...', false, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(61): Kohana_Database_Query->execute()
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:34:00 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'round' in 'field list' [ INSERT INTO games (team_one, team_two, game_starts, round) VALUES ('4', '2', '2014-07-15 15:34:00', 1) ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:34:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO gam...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(46): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:35:34 --- CRITICAL: Kohana_Exception [ 0 ]: The id_round property does not exist in the Model_Games class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-15 12:35:34 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('id_round', 1)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(45): Kohana_ORM->__set('id_round', 1)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-15 12:50:24 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '1' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:50:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(96): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:50:45 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '1' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:50:45 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(96): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:50:46 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '1' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:50:46 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(96): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:50:53 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\games.php [ 100 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:100
2014-07-15 12:50:53 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(100): Kohana_Core::error_handler(2, 'Creating defaul...', 'D:\\xampp\\htdocs...', 100, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:100
2014-07-15 12:50:59 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '2' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:50:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(96): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:54:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\games\edit.php [ 17 ] in file:line
2014-07-15 12:54:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:54:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\games\edit.php [ 20 ] in file:line
2014-07-15 12:54:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:54:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\games\edit.php [ 20 ] in file:line
2014-07-15 12:54:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:54:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\games\edit.php [ 20 ] in file:line
2014-07-15 12:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 12:58:32 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_team_two_fk` FOREIGN KEY (`team_two`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ INSERT INTO games (team_one, round) VALUES ('4', 2) ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 12:58:32 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO gam...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(107): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:10:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\games.php [ 114 ] in file:line
2014-07-15 13:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:13:05 --- CRITICAL: Exception [ 0 ]: DateTime::__construct(): Failed to parse time string (+ 2014-07-15 19:03:23 + 3 hours) at position 0 (+): Unexpected character ~ SYSPATH\classes\Kohana\Date.php [ 593 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php:593
2014-07-15 13:13:05 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php(593): DateTime->__construct('+ 2014-07-15 19...', Object(DateTimeZone))
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(118): Kohana_Date::formatted_time('+ 2014-07-15 19...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php:593
2014-07-15 13:16:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$as_assoc ~ APPPATH\classes\Controller\games.php [ 60 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:60
2014-07-15 13:16:46 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(60): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 60, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:60
2014-07-15 13:16:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_assoc() on a non-object ~ APPPATH\classes\Controller\games.php [ 61 ] in file:line
2014-07-15 13:16:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:19:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: games ~ APPPATH\classes\Controller\games.php [ 62 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:62
2014-07-15 13:19:34 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 62, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:62
2014-07-15 13:19:42 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\games.php [ 64 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:64
2014-07-15 13:19:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(64): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 64, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:64
2014-07-15 13:19:48 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\games.php [ 64 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:64
2014-07-15 13:19:48 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(64): Kohana_Core::error_handler(8, 'Array to string...', 'D:\\xampp\\htdocs...', 64, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:64
2014-07-15 13:20:14 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\games.php [ 64 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:64
2014-07-15 13:20:14 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(64): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 64, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:64
2014-07-15 13:21:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\games.php [ 66 ] in file:line
2014-07-15 13:21:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:21:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\games.php [ 65 ] in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:65
2014-07-15 13:21:15 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(65): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 65, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\games.php:65
2014-07-15 13:24:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\games.php [ 29 ] in file:line
2014-07-15 13:24:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:48:33 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:48:33 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(103): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:48:59 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:48:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(103): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:49:22 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:49:22 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:49:26 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:49:26 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:49:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::labe() ~ APPPATH\views\games\edit.php [ 9 ] in file:line
2014-07-15 13:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 13:50:22 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:50:22 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:51:18 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:51:18 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:52:42 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:52:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:52:49 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:52:49 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:52:52 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:52:52 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:53:38 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:53:38 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:53:42 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:53:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:53:48 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '3' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:53:48 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 13:56:33 --- CRITICAL: Exception [ 0 ]: DateTime::__construct(): Failed to parse time string (2014-07-15 11) at position 11 (1): Unexpected character ~ SYSPATH\classes\Kohana\Date.php [ 593 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php:593
2014-07-15 13:56:33 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php(593): DateTime->__construct('2014-07-15 11', Object(DateTimeZone))
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(103): Kohana_Date::formatted_time('2014-07-15 11')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php:593
2014-07-15 13:57:05 --- CRITICAL: Exception [ 0 ]: DateTime::__construct(): Failed to parse time string (2014-07-15 11) at position 11 (1): Unexpected character ~ SYSPATH\classes\Kohana\Date.php [ 593 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php:593
2014-07-15 13:57:05 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php(593): DateTime->__construct('2014-07-15 11', Object(DateTimeZone))
#1 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(103): Kohana_Date::formatted_time('2014-07-15 11')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Date.php:593
2014-07-15 14:01:07 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`kohana_worldcup`.`games`, CONSTRAINT `team_winner_fk` FOREIGN KEY (`winner`) REFERENCES `team` (`id`) ON DELETE CASCADE) [ UPDATE games SET winner = '0' WHERE id = '1' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 14:01:07 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE games SE...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(104): Kohana_ORM->save()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 14:18:24 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Team::action_search(), called in D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\team.php [ 103 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:103
2014-07-15 14:18:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(103): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 103, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:103
2014-07-15 14:18:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Team::action_search(), called in D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\team.php [ 103 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:103
2014-07-15 14:18:35 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(103): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 103, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:103
2014-07-15 14:18:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: term ~ APPPATH\classes\Controller\team.php [ 106 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:106
2014-07-15 14:18:44 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 106, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:106
2014-07-15 14:21:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH\classes\Controller\team.php [ 105 ] in file:line
2014-07-15 14:21:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:23:48 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Security::check(), called in D:\xampp\htdocs\kohana\application\classes\Controller\team.php on line 105 and defined ~ SYSPATH\classes\Kohana\Security.php [ 82 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Security.php:82
2014-07-15 14:23:48 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Security.php(82): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 82, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(105): Kohana_Security::check()
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Security.php:82
2014-07-15 14:24:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Security::xss_clean() ~ APPPATH\classes\Controller\team.php [ 105 ] in file:line
2014-07-15 14:24:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:24:40 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Security::strip_image_tags(), called in D:\xampp\htdocs\kohana\application\classes\Controller\team.php on line 105 and defined ~ SYSPATH\classes\Kohana\Security.php [ 95 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Security.php:95
2014-07-15 14:24:40 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Security.php(95): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 95, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(105): Kohana_Security::strip_image_tags()
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Security.php:95
2014-07-15 14:33:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_assoc() ~ APPPATH\classes\Controller\team.php [ 113 ] in file:line
2014-07-15 14:33:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:35:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country ~ APPPATH\classes\Controller\team.php [ 113 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:113
2014-07-15 14:35:34 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(113): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 113, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:113
2014-07-15 14:35:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find() ~ APPPATH\classes\Controller\team.php [ 110 ] in file:line
2014-07-15 14:35:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:35:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\team.php [ 110 ] in file:line
2014-07-15 14:35:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:35:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::find() ~ APPPATH\classes\Controller\team.php [ 112 ] in file:line
2014-07-15 14:35:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:49:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::search() ~ APPPATH\views\search\index.php [ 6 ] in file:line
2014-07-15 14:49:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:49:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::search() ~ APPPATH\views\search\index.php [ 6 ] in file:line
2014-07-15 14:49:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 14:50:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\views\search\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\search\index.php:3
2014-07-15 14:50:30 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\search\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(119): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\search\index.php:3
2014-07-15 14:51:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\views\search\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\search\index.php:3
2014-07-15 14:51:07 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\search\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(120): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\search\index.php:3
2014-07-15 14:51:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$controller ~ APPPATH\classes\Controller\team.php [ 119 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:119
2014-07-15 14:51:09 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(119): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 119, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:119
2014-07-15 14:51:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\views\search\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\search\index.php:3
2014-07-15 14:51:21 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\search\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(120): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\search\index.php:3
2014-07-15 14:53:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\team.php [ 118 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:118
2014-07-15 14:53:18 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(118): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 118, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:118
2014-07-15 14:56:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\search\index.php [ 16 ] in D:\xampp\htdocs\kohana\application\views\search\index.php:16
2014-07-15 14:56:55 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\search\index.php(16): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\\xampp\\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(122): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\search\index.php:16
2014-07-15 14:56:59 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\search\index.php [ 16 ] in D:\xampp\htdocs\kohana\application\views\search\index.php:16
2014-07-15 14:56:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\search\index.php(16): Kohana_Core::error_handler(8, 'Array to string...', 'D:\\xampp\\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(122): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\search\index.php:16
2014-07-15 14:59:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\search\index.php [ 18 ] in D:\xampp\htdocs\kohana\application\views\search\index.php:18
2014-07-15 14:59:19 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\search\index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 18, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(122): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_search()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\search\index.php:18
2014-07-15 15:13:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '' AS name'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\search.php [ 16 ] in file:line
2014-07-15 15:13:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:13:52 --- CRITICAL: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'country' in 'where clause' [ SELECT name AS name, id FROM player WHERE country LIKE '%versie%' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 15:13:52 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT name AS ...', false, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\search.php(19): Kohana_Database_Query->execute()
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-15 15:18:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:18:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:18:40 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\player\edit.php [ 5 ] in D:\xampp\htdocs\kohana\application\views\player\edit.php:5
2014-07-15 15:18:40 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\edit.php(5): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\\xampp\\htdocs...', 5, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(68): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\edit.php:5
2014-07-15 15:18:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:18:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:18:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:18:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:14 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:60
2014-07-15 15:19:14 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM->find()
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:60
2014-07-15 15:19:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_players' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_teams' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:19:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:20:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:20:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:20:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\Controller\player.php [ 62 ] in file:line
2014-07-15 15:20:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:21:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:21:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:21:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:21:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:21:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:21:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:21:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:21:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:21:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:21:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:21:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:21:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:22:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:22:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:22:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:22:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:23:19 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:61
2014-07-15 15:23:19 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_ORM->find_all()
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:61
2014-07-15 15:23:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_teams' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:23:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:25:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:25:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:25:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:25:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:25:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:25:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:25:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:26:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:26:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:26:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:26:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:26:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:26:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:26:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:26:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:26:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:26:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\player\edit.php [ 11 ] in D:\xampp\htdocs\kohana\application\views\player\edit.php:11
2014-07-15 15:26:45 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\edit.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 11, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(67): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\edit.php:11
2014-07-15 15:26:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:26:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:27:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:27:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:27:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:27:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:27:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:27:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:27:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:27:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:28:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-15 15:28:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:34:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: layout ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:34:56 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:36:52 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:36:52 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/base')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/base', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/base')
#3 D:\xampp\htdocs\kohana\application\classes\Controller\template\base.php(10): Kohana_Controller_Template->before()
#4 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(7): Controller_Template_Base->before()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Games->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:37:06 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:37:06 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/base')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/base', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/base')
#3 D:\xampp\htdocs\kohana\application\classes\Controller\template\base.php(10): Kohana_Controller_Template->before()
#4 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(7): Controller_Template_Base->before()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Games->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:37:13 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/base could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:37:13 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/base')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/base', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/base')
#3 D:\xampp\htdocs\kohana\application\classes\Controller\template\base.php(10): Kohana_Controller_Template->before()
#4 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(7): Controller_Template_Base->before()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Games->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:37:26 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/empty could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:37:26 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/empty')
#1 D:\xampp\htdocs\kohana\application\classes\Controller\template\base.php(31): Kohana_View->__construct('layouts/empty')
#2 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(7): Controller_Template_Base->before()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Games->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:37:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\template\base.php [ 16 ] in file:line
2014-07-15 15:37:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:37:59 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:37:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 D:\xampp\htdocs\kohana\application\classes\Controller\template\base.php(13): Kohana_View->__construct('')
#2 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(7): Controller_Template_Base->before()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Games->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:38:36 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:38:36 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 D:\xampp\htdocs\kohana\application\classes\Controller\template\base.php(10): Kohana_Controller_Template->before()
#4 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(7): Controller_Template_Base->before()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Games->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:41:29 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/home could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:41:29 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/home')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/home', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\games.php(17): Kohana_View::factory('pages/home')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Games->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 15:43:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\Controller\games.php [ 17 ] in file:line
2014-07-15 15:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:45:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\games\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:18 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\application\views\template.php(8): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\games\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\application\views\template.php(8): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\games\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:25 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\application\views\template.php(8): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\games\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:33 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\application\views\template.php(8): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:45:41 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:45:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\games\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:51 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(668): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::find_file('views', Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:45:51 --- CRITICAL: ErrorException [ 2 ]: include(): Filename cannot be empty ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:45:51 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(2, 'include(): File...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\application\views\template.php(8): include()
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:46:22 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template.php [ 8 ] in file:line
2014-07-15 15:46:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:46:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\games\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:46:26 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:46:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\games\index.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:46:28 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\games\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\games\index.php:3
2014-07-15 15:47:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\games.php [ 20 ] in file:line
2014-07-15 15:47:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:47:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\games.php [ 20 ] in file:line
2014-07-15 15:47:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 15:48:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:16 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:43 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:43 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:43 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:48:44 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:49:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:49:04 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:49:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:49:29 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Games))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:50:11 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\player.php [ 13 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:13
2014-07-15 15:50:11 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(13): Kohana_Core::error_handler(2, 'Creating defaul...', 'D:\\xampp\\htdocs...', 13, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:13
2014-07-15 15:50:20 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\player.php [ 13 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:13
2014-07-15 15:50:20 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(13): Kohana_Core::error_handler(2, 'Creating defaul...', 'D:\\xampp\\htdocs...', 13, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:13
2014-07-15 15:50:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:50:49 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:51:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:51:26 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:59:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 15:59:43 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 16:05:23 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 16:05:23 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#6 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('ava@ava7.eu', 'parolanema', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(36): Kohana_Auth->login('ava@ava7.eu', 'parolanema')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 16:05:54 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 16:05:54 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#6 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('ava@ava7.eu', 'parolanema', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(36): Kohana_Auth->login('ava@ava7.eu', 'parolanema')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 16:25:10 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:25:10 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(13): Kohana_ORM->save()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:26:54 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:26:54 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(13): Kohana_ORM->save()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:29:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pass ~ APPPATH\classes\Controller\login.php [ 44 ] in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:44
2014-07-15 16:29:22 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 44, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:44
2014-07-15 16:29:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pass ~ APPPATH\classes\Controller\login.php [ 44 ] in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:44
2014-07-15 16:29:33 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 44, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:44
2014-07-15 16:29:55 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Auth::login(), called in D:\xampp\htdocs\kohana\application\classes\Controller\login.php on line 44 and defined ~ MODPATH\auth\classes\Kohana\Auth.php [ 87 ] in D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php:87
2014-07-15 16:29:55 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(87): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 87, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(44): Kohana_Auth->login(Array)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php:87
2014-07-15 16:33:18 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Auth::get_user() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\login.php [ 45 ] in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:45
2014-07-15 16:33:18 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(45): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\\xampp\\htdocs...', 45, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:45
2014-07-15 16:33:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Auth_Orm::check_password(), called in D:\xampp\htdocs\kohana\application\classes\Controller\login.php on line 45 and defined ~ APPPATH\classes\auth\orm.php [ 16 ] in D:\xampp\htdocs\kohana\application\classes\auth\orm.php:16
2014-07-15 16:33:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(45): Auth_Orm->check_password()
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\application\classes\auth\orm.php:16
2014-07-15 16:40:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Config_Database' not found ~ APPPATH\bootstrap.php [ 119 ] in file:line
2014-07-15 16:40:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 16:41:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_Orm::getUser() ~ APPPATH\classes\Controller\login.php [ 20 ] in file:line
2014-07-15 16:41:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 16:51:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\classes\Controller\login.php [ 42 ] in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:42
2014-07-15 16:51:55 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 42, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:42
2014-07-15 16:53:11 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:11 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(14): Kohana_ORM->save()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:28 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:28 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(14): Kohana_ORM->save()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:33 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(14): Kohana_ORM->save()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:36 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:36 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(13): Kohana_ORM->save()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:37 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:37 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(13): Kohana_ORM->save()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:37 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 16:53:37 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(13): Kohana_ORM->save()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2014-07-15 17:02:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_Orm::force_login() ~ APPPATH\classes\Controller\login.php [ 43 ] in file:line
2014-07-15 17:02:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 17:02:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth_Orm::force_login() ~ APPPATH\classes\Controller\login.php [ 43 ] in file:line
2014-07-15 17:02:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 17:03:02 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Auth::login(), called in D:\xampp\htdocs\kohana\application\classes\Controller\login.php on line 43 and defined ~ MODPATH\auth\classes\Kohana\Auth.php [ 87 ] in D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php:87
2014-07-15 17:03:02 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(87): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 87, Array)
#1 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Kohana_Auth->login('user')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php:87
2014-07-15 17:05:39 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:05:39 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#6 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Kohana_Auth->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:05:49 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:05:49 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#6 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Kohana_Auth->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:11:53 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:11:53 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Kohana_Auth->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:13:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH\auth\classes\Kohana\Auth.php [ 37 ] in file:line
2014-07-15 17:13:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-15 17:14:29 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:14:29 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(58): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:15:24 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:15:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(58): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:17:15 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:17:15 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(58): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:17:51 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:17:51 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(58): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:18:03 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:18:03 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(58): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:18:08 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:18:08 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(58): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:18:37 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:18:37 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(52): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:18:46 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:18:46 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(41): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:19:15 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:19:15 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(23): Kohana_ORM::factory('Role', Array)
#6 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(62): Auth_Orm->_login('user', 'pass', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(43): Auth_Orm->login('user', 'pass')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-15 17:20:50 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Session.php:125
2014-07-15 17:20:50 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(15): Kohana_Auth::instance()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Session.php:125
2014-07-15 17:28:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:28:56 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:29:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:29:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:30:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:30:44 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:30:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:30:44 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:31:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:31:06 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:31:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:31:06 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:31:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:31:28 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:31:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\views\template.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:31:32 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\template.php(8): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\application\views\template.php:8
2014-07-15 17:39:07 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\login.php [ 57 ] in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:57
2014-07-15 17:39:07 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(57): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\xampp\\htdocs...', 57, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:57
2014-07-15 17:39:36 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 17:39:36 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(28): Kohana_View::factory('')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-15 17:40:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH\auth\classes\Kohana\Auth.php [ 37 ] in file:line
2014-07-15 17:40:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line