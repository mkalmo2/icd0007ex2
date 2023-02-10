<?php

// print header from file 'table-header.php'

// Sample code to generate contents.
// Make the data tabular by inserting <table>,
// <tr> and <td> tags to the correct positions.

foreach (range(0, 9) as $first) {
    foreach (range(0, 9) as $second) {
        print("$first x $second" . PHP_EOL);
    }
}

// print footer from file 'table-footer.php'
