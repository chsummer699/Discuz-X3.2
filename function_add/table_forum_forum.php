//the function new add
function get_post_by_fid($fid, $start_time, $end_time, $table='forum_post'){
			
		return DB::fetch_all("SELECT first,author,authorid,subject,message,rate FROM %t where dateline <= %d AND dateline >= %d AND fid= %d ", array($table,$end_time,$start_time,$fid));

	}
