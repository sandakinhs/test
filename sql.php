<?php


$sql = "SELECT call_log.* , users.user_name AS owner, modi.user_name AS modified, assi.user_name AS assigned, contacts.contact_firstname, groups.group_name, CONCAT (  COALESCE(stat.status,'')  ,   COALESCE(stat1.status,'')  )
														FROM call_log INNER JOIN users ON                 
		                                                          call_log.call_owner=users.user_id
		                                                INNER JOIN contacts ON 
		                                                		  call_log.contact_id=contacts.id	         
		                                                LEFT OUTER JOIN users AS modi ON
		                                                		  call_log.call_modified_by=modi.user_id
		                                                LEFT OUTER JOIN users AS assi ON
		                                                		  call_log.assignedto=assi.user_id
														INNER JOIN groups ON 
								                                  call_log.group=groups.group_id
														LEFT OUTER JOIN inquiry AS stat ON
																  call_log.id = stat.call_log_id
														LEFT OUTER JOIN sales AS stat1 ON
																   call_log.id = stat1.call_log_id	
		                                                		             WHERE call_log.deleted = '0' ";



  $sql = "SELECT contact_no, customer, status, type, time FROM (
    			  SELECT contacts.contact_no , contacts.contact_firstname AS customer, sales.status AS status , IF(sales.total != '','Sales',1) AS type, sales.created_time AS time FROM sales 
						  INNER JOIN contacts ON s
						  				ales.customer_id = contacts.id 
			  UNION ALL
		          SELECT call_log.cli, contacts.contact_firstname , CONCAT ( COALESCE(stat.status,'') , COALESCE(stat1.status,'')) , call_type, call_log.call_created_time FROM call_log
                 		 INNER JOIN contacts ON 
		                                call_log.contact_id=contacts.id	 
    					 LEFT OUTER JOIN inquiry AS stat ON
										call_log.id = stat.call_log_id
						 LEFT OUTER JOIN sales AS stat1 ON
										call_log.id = stat1.call_log_id  ) AS T ORDER BY time DESC";

?>