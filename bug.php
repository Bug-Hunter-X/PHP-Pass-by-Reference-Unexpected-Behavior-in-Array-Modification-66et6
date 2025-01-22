```php
function increment_array_values(array &$arr, int $increment): void {
  foreach ($arr as &$value) {
    $value += $increment; 
  }
}

$myArray = [1, 2, 3, 4, 5];
increment_array_values($myArray, 1);
print_r($myArray); //Output: Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 [4] => 6 )

//Problem
$myArray = [1, 2, 3, 4, 5];
increment_array_values($myArray, 1);
print_r($myArray); //Output: Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 [4] => 6 )

$myArray2 = [1,2,3,4,5];
increment_array_values($myArray2, 1);
print_r($myArray2); //Output: Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 [4] => 6 )

//The problem is that the function modifies the original array in place, which can lead to unexpected behavior if the array is used elsewhere in the code.
```