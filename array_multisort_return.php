<?php
/**
 *Usage:
 *  $array = array(
 *  	array(
 *  		"name" => "Christian Wiles",
 *  		"github" => "christianjameswiles",
 *  		"count" => 1
 *  	) ,
 *  	array(
 *  		"name" => "John Doe",
 *  		"github" => "johndoe",
 *  		"count" => 2
 *  	)
 *  );
 *  $count_column = array_column($array, "count");
 *  $sorted = array_multisort_return($count_column, SORT_DESC, $array);
 *  print_r($sorted);
 **/

/**
 *  @param string $data (array_column)
 *  @param string $sort_type (SORT_DESC | SORT_ASC, etc.)
 *  @param array $array (array)
**/

function array_multisort_return($data, $sort_type, $array) {
        array_multisort($data, $sort_type, $array);
        return $array;
    }

/**
 *Should return:
 *Array
 *(
 *    [0] => Array
 *        (
 *            [name] => John Doe
 *            [github] => johndoe
 *            [count] => 2
 *        )
 *    [1] => Array
 *        (
 *            [name] => Christian Wiles
 *            [github] => christianjameswiles
 *            [count] => 1
 *        )
 *)
**/
?>