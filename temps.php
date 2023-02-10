<?php

// require_once '../ex1/ex7.php'; // use existing code
// require_once '../ex1/ex8.php';
require_once 'functions.php'; // separate functions from main program

$opts = getopt('c:y:t:', ['command:', 'year:', 'temp:']);

$command = $opts['command'] ?? null;

if ($command === 'days-under-temp') {
    // validate that required parameters are provided
    // if not show error and exit
    // calculate result using getDaysUnderTemp()
    // print result

} else if ($command === 'days-under-temp-dict') {
    // validate that required parameters are provided
    // if not show error and exit
    // calculate result using getDaysUnderTempDictionary()
    // print result
} else {
    showError('command is missing or is unknown');
}

function showError(string $message): void {
    fwrite(STDERR, $message . PHP_EOL);
    exit(1);
}
