<?php 


function encontrarMaiorNum(){
	$nums = [10, 25, 89, 4, 32, 0];
	$y = 0;
	$maior = $nums[0];

	while($nums[$y] != 0){
		if ($nums[$y] > $maior){
			$maior = $nums[$y];
		}
		$y++;

	}
	echo "O maior número é: ". $maior;
}

	encontrarMaiorNum();


 ?>