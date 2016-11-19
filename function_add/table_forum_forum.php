//the function new add
function get_post_by_fid($fid, $start_time, $end_time, $table='forum_post'){
			
		return DB::fetch_all("SELECT first,author,authorid,subject,message,rate FROM %t where dateline <= %d AND dateline >= %d AND fid= %d ", array($table,$end_time,$start_time,$fid));

	}

			
//the function modify
function get_post_by_fid_and_tid($fid, $start_time, $end_time, $table1,$table2){
			
		return DB::fetch_all("SELECT t1.first,t1.author,t1.authorid,t1.subject,t1.message,t1.rate,t1.dateline,t2.tid,t2.typeid,t2.icon,t2.stamp FROM %t as t1 ,%t as t2 where t1.dateline >= %d AND t1.dateline <= %d AND t1.fid= %d and t1.tid = t2.tid", array($table1,$table2,$start_time,$end_time,$fid));

	}
