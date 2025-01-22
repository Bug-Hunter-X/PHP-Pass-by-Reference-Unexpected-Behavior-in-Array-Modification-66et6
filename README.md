# PHP Pass-by-Reference Array Modification Bug

This repository demonstrates a common error in PHP involving unexpected behavior when modifying arrays using pass-by-reference.  The `increment_array_values` function, while seemingly straightforward, modifies the original array directly, potentially causing problems if that array is used elsewhere in the code.

The `bug.php` file shows the problem, and `bugSolution.php` offers a solution to avoid this pitfall.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output and note the unexpected side effects.
4. Examine `bugSolution.php` for a corrected approach.

## Solution

The solution involves creating a copy of the array before modification to avoid altering the original.  This ensures that the function operates on its own copy, preserving the original array's integrity.

This example highlights the importance of understanding PHP's pass-by-reference mechanism and how it can impact code functionality.