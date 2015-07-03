<?php
$conexao = mysql_connect('localhost', 'root', '');
mysql_select_db('looktome');
//abaixo configura acentuação para bd
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>