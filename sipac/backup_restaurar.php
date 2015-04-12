<?

 $end = false;

   if (isset($restore_query))
	 {
	   $sql_array = array();
	   $sql_length = strlen($restore_query);
	   $pos = strpos($restore_query, ';');
	   for ($i=$pos; $i<$sql_length; $i++)
	   {
	    if ($restore_query[0] == '#')
		{
			 $restore_query = ltrim(substr($restore_query, strpos($restore_query, "\n")));
			 $sql_length = strlen($restore_query);
			 $i = strpos($restore_query, ';')-1;
              continue;
		}
		if ($restore_query[($i+1)] == "\n")
		{
		  for ($j=($i+2); $j<$sql_length; $j++)
		  {
			 if (trim($restore_query[$j]) != '') {
				 $next = substr($restore_query, $j, 6);
				  if ($next[0] == '#') {
           for ($k=$j; $k<$sql_length; $k++) {
            if ($restore_query[$k] == "\n") break;
           }
           $query = substr($restore_query, 0, $i+1);
           $restore_query = substr($restore_query, $k);
           $restore_query = $query . $restore_query;
           $sql_length = strlen($restore_query);
           $i = strpos($restore_query, ';')-1;
           continue 2;
					}
					 break;
				 }
				}
				if ($next == '') { // get the last insert query
         $next = 'insert';
        }
        if ( (@eregi('create', $next)) || (@eregi('insert', $next)) || (@eregi('drop t', $next)) ) {
         $next = '';
         $sql_array[] = substr($restore_query, 0, $i);
         $restore_query = ltrim(substr($restore_query, $i+1));
         $sql_length = strlen($restore_query);
         $i = strpos($restore_query, ';')-1;
        }
			}
	   }
	   //Apagar as tabelas do banco
	   $SQL = "SHOW TABLES";
	   $result = $conn->sql($SQL);
	   while($tables = mysql_fetch_array($result))
	    $arraTables .= $tables[0].", ";
	    
	    $arraTables = rtrim($arraTables,", ");
	    $SQL = "DROP TABLES IF EXISTS ".$arraTables;
	    
	    for ($i=0, $n=sizeof($sql_array); $i<$n; $i++)
           $result =$conn->sql($sql_array[$i]);
           

	 }
 ?>