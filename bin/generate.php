<?php

if ($argc < 3) {
    echo "USAGE: {$argv[0]} ALIASES_FILE SOURCE_FILE", PHP_EOL;
    exit(1);
}

$aliasesFile = $argv[1];
$sourceFile = $argv[2];

if (!file_exists($aliasesFile)) {
    echo "File '$aliasesFile' not found", PHP_EOL;
    exit(1);
}

$stubFiles = glob(dirname(__DIR__) . "/vendor/jetbrains/phpstorm-stubs/*/*.php");
$stubs = [];
$argLists = [];

$regexp = '~\/\*\*(?:\n\s\*.*)+\n+function\s+(\w+)\s*\((.*?)\):*\w*(?=\s*{\s*})~m';

foreach ($stubFiles as $file) {
    $contents = file_get_contents($file);

    if (!preg_match_all($regexp, $contents, $matches, PREG_PATTERN_ORDER)) {
        continue;
    }

    $stubs += array_combine($matches[1], $matches[0]);
    $argLists += array_combine($matches[1], $matches[2]);
}

$fpIn = fopen($aliasesFile, 'r');
$fpOut = fopen($sourceFile, 'w');

$head = <<<PHP
<?php

/**
 * Userland implementation of PHP RFC: Consistent Function Names
 * @see https://wiki.php.net/rfc/consistent_function_names
 *
 * There are many functions that named before naming standard in CODING_STANDARDS. Therefore, PHP has function names
 * like phpversion() and htmlspecialchars().
 *
 * We have many function names that comply IEEE 1003.1 standard names. IEEE 1003.1 is also well established names, but
 * it has different naming. IEEE 1003.1 names can be use as aliases.
 *
 * Without cleanups, PHP may have inconsistent API names even if PHP has new APIs for the same purpose because we care
 * compatibility a lot. Unless we have standard confirming function names at some point, we may keep inconsistent
 * function names forever and never have consistent function names.
 */


PHP;

fwrite($fpOut, $head);

while (!feof($fpIn)) {
    $line = trim(fgets($fpIn), " \r\n,");
    [$alias, $system] = explode(" ", $line) + [null, null];

    if (!isset($system) || !isset($stubs[$system]) || $alias === $system) {
        continue;
    }

    $stub = preg_replace("/'\w+\(.*?\)'/", "null", $stubs[$system]);
    $args = preg_match_all('/\$\w+/', $argLists[$system], $matches, PREG_PATTERN_ORDER)
        ? join(', ', $matches[0]) : '';

    // variadic
    $stub = str_replace('$_ = null', '...$_', $stub);
    $args = str_replace('$_', '...$_', $args);

    $code = <<<PHP
{
    return $system($args);
}
PHP;

    $function = str_replace("function $system", "function $alias", $stub) . "\n" . $code . "\n\n";

    fwrite($fpOut, $function);
}

fclose($fpIn);
fclose($fpOut);

echo "Created $sourceFile", PHP_EOL;
exit(0);
