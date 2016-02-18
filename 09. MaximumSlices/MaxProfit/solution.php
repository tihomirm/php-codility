function solution($A) {
    // write your code in PHP5.5
    $N = count($A);
    
    $max_ending = $max_slice = 0;
    for($i=1;$i<$N;$i++) {
        $max_ending = max(0, $max_ending + $A[$i] - $A[$i-1]);
        $max_slice = max($max_slice, $max_ending);
    }
    
    return $max_slice;
}