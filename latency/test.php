<?php
	function dateDiff ($ins){
		
		$from=date_create(date('Y-m-d'));
		$to=date_create($ins);
		$to2=date_create(date_format($to,"Y-m-d"));
		$diff=date_diff($to2,$from);
		return $diff->format('%a');
	}
	echo 1+dateDiff("2023-09-05 09:22:09");
	
	
?>