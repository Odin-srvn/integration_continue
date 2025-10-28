<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(['src', 'tests'])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new Config())
    ->setRiskyAllowed(false) // on précise qu'on n'accepte pas les fixers risqués
    ->setRules([
        '@PSR12' => true,
       // 'declare_strict_types' => true, retiré car declaré risky 
        'array_syntax' => ['syntax' => 'short'],
        'single_quote' => true,
        'no_unused_imports' => true,
        'blank_line_before_statement' => ['statements' => ['return']],
    ])
    ->setFinder($finder);
