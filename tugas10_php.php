
<?php
$arr = array(1,3,8,2,5,7,4,0);

function bubble_sort($arr) {
	for($i=1; $i < count($arr) ; $i++){
		for($j = count($arr)-1 ; $j>=$i; $j--){
			if($arr[$j] < $arr[$j-1]){
				$temp 	= $arr[$j];
				$arr[$j] 	= $arr[$j-1];
				$arr[$j-1] = $temp;
			}
		}
	}
	print_r($arr);
}


print("Sebelum Di Sorting :<br>");
print_r($arr);

print("<br><br> Setelah Disorting (Buble Sort) :<br>");
echo bubble_sort($arr);


        
?>