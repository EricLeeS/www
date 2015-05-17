<?php 


ini_set("memcache.hash_strategy","consistent");
$a = new Memcache();
$a->addServer('localhost','11211');
// for($i = 0; $i < 1000; $i++) {
// 	$a->set("key".$i,$i,0);
// }

for($i = 0; $i < 1000; $i++) {
	echo $a->get("key".$i);
// 	if($a->get("key".$i)) $m++;
}
?>