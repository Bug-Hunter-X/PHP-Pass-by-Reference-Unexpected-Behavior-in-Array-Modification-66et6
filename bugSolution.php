```php
function increment_array_values_safe(array $arr, int $increment): array {
  $newArray = $arr; // Create a copy
  foreach ($newArray as &$value) {
    $value += $increment;
  }
  return $newArray; //Return a new array
}

$myArray = [1, 2, 3, 4, 5];
$incrementedArray = increment_array_values_safe($myArray, 1);
print_r($myArray); // Original array remains unchanged
print_r($incrementedArray); //Output: Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 [4] => 6 )
```