<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('AutoloadIncluder', false) && !interface_exists('AutoloadIncluder', false) && !trait_exists('AutoloadIncluder', false)) {
    spl_autoload_call('RectorPrefix20220308\AutoloadIncluder');
}
if (!class_exists('ComposerAutoloaderInitc007ffeeca9f350b27b9eee6d2f987eb', false) && !interface_exists('ComposerAutoloaderInitc007ffeeca9f350b27b9eee6d2f987eb', false) && !trait_exists('ComposerAutoloaderInitc007ffeeca9f350b27b9eee6d2f987eb', false)) {
    spl_autoload_call('RectorPrefix20220308\ComposerAutoloaderInitc007ffeeca9f350b27b9eee6d2f987eb');
}
if (!class_exists('Helmich\TypoScriptParser\Parser\AST\Statement', false) && !interface_exists('Helmich\TypoScriptParser\Parser\AST\Statement', false) && !trait_exists('Helmich\TypoScriptParser\Parser\AST\Statement', false)) {
    spl_autoload_call('RectorPrefix20220308\Helmich\TypoScriptParser\Parser\AST\Statement');
}
if (!class_exists('Helmich\TypoScriptParser\Parser\Traverser\Traverser', false) && !interface_exists('Helmich\TypoScriptParser\Parser\Traverser\Traverser', false) && !trait_exists('Helmich\TypoScriptParser\Parser\Traverser\Traverser', false)) {
    spl_autoload_call('RectorPrefix20220308\Helmich\TypoScriptParser\Parser\Traverser\Traverser');
}
if (!class_exists('MissingReturnTypeParser', false) && !interface_exists('MissingReturnTypeParser', false) && !trait_exists('MissingReturnTypeParser', false)) {
    spl_autoload_call('RectorPrefix20220308\MissingReturnTypeParser');
}
if (!class_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !interface_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !trait_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false)) {
    spl_autoload_call('RectorPrefix20220308\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator');
}
if (!class_exists('Normalizer', false) && !interface_exists('Normalizer', false) && !trait_exists('Normalizer', false)) {
    spl_autoload_call('RectorPrefix20220308\Normalizer');
}
if (!class_exists('ReturnTypeWillChange', false) && !interface_exists('ReturnTypeWillChange', false) && !trait_exists('ReturnTypeWillChange', false)) {
    spl_autoload_call('RectorPrefix20220308\ReturnTypeWillChange');
}
if (!class_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false) && !interface_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false) && !trait_exists('Symplify\ComposerJsonManipulator\ValueObject\ComposerJson', false)) {
    spl_autoload_call('RectorPrefix20220308\Symplify\ComposerJsonManipulator\ValueObject\ComposerJson');
}
if (!class_exists('Symplify\SmartFileSystem\SmartFileInfo', false) && !interface_exists('Symplify\SmartFileSystem\SmartFileInfo', false) && !trait_exists('Symplify\SmartFileSystem\SmartFileInfo', false)) {
    spl_autoload_call('RectorPrefix20220308\Symplify\SmartFileSystem\SmartFileInfo');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('dump_with_depth')) {
    function dump_with_depth() {
        return \RectorPrefix20220308\dump_with_depth(...func_get_args());
    }
}
if (!function_exists('dn')) {
    function dn() {
        return \RectorPrefix20220308\dn(...func_get_args());
    }
}
if (!function_exists('dump_node')) {
    function dump_node() {
        return \RectorPrefix20220308\dump_node(...func_get_args());
    }
}
if (!function_exists('print_node')) {
    function print_node() {
        return \RectorPrefix20220308\print_node(...func_get_args());
    }
}
if (!function_exists('composerRequirec007ffeeca9f350b27b9eee6d2f987eb')) {
    function composerRequirec007ffeeca9f350b27b9eee6d2f987eb() {
        return \RectorPrefix20220308\composerRequirec007ffeeca9f350b27b9eee6d2f987eb(...func_get_args());
    }
}
if (!function_exists('scanPath')) {
    function scanPath() {
        return \RectorPrefix20220308\scanPath(...func_get_args());
    }
}
if (!function_exists('lintFile')) {
    function lintFile() {
        return \RectorPrefix20220308\lintFile(...func_get_args());
    }
}
if (!function_exists('parseArgs')) {
    function parseArgs() {
        return \RectorPrefix20220308\parseArgs(...func_get_args());
    }
}
if (!function_exists('showHelp')) {
    function showHelp() {
        return \RectorPrefix20220308\showHelp(...func_get_args());
    }
}
if (!function_exists('formatErrorMessage')) {
    function formatErrorMessage() {
        return \RectorPrefix20220308\formatErrorMessage(...func_get_args());
    }
}
if (!function_exists('preprocessGrammar')) {
    function preprocessGrammar() {
        return \RectorPrefix20220308\preprocessGrammar(...func_get_args());
    }
}
if (!function_exists('resolveNodes')) {
    function resolveNodes() {
        return \RectorPrefix20220308\resolveNodes(...func_get_args());
    }
}
if (!function_exists('resolveMacros')) {
    function resolveMacros() {
        return \RectorPrefix20220308\resolveMacros(...func_get_args());
    }
}
if (!function_exists('resolveStackAccess')) {
    function resolveStackAccess() {
        return \RectorPrefix20220308\resolveStackAccess(...func_get_args());
    }
}
if (!function_exists('magicSplit')) {
    function magicSplit() {
        return \RectorPrefix20220308\magicSplit(...func_get_args());
    }
}
if (!function_exists('assertArgs')) {
    function assertArgs() {
        return \RectorPrefix20220308\assertArgs(...func_get_args());
    }
}
if (!function_exists('removeTrailingWhitespace')) {
    function removeTrailingWhitespace() {
        return \RectorPrefix20220308\removeTrailingWhitespace(...func_get_args());
    }
}
if (!function_exists('regex')) {
    function regex() {
        return \RectorPrefix20220308\regex(...func_get_args());
    }
}
if (!function_exists('execCmd')) {
    function execCmd() {
        return \RectorPrefix20220308\execCmd(...func_get_args());
    }
}
if (!function_exists('ensureDirExists')) {
    function ensureDirExists() {
        return \RectorPrefix20220308\ensureDirExists(...func_get_args());
    }
}
if (!function_exists('uv_signal_init')) {
    function uv_signal_init() {
        return \RectorPrefix20220308\uv_signal_init(...func_get_args());
    }
}
if (!function_exists('uv_signal_start')) {
    function uv_signal_start() {
        return \RectorPrefix20220308\uv_signal_start(...func_get_args());
    }
}
if (!function_exists('uv_poll_init_socket')) {
    function uv_poll_init_socket() {
        return \RectorPrefix20220308\uv_poll_init_socket(...func_get_args());
    }
}
if (!function_exists('setproctitle')) {
    function setproctitle() {
        return \RectorPrefix20220308\setproctitle(...func_get_args());
    }
}
if (!function_exists('trigger_deprecation')) {
    function trigger_deprecation() {
        return \RectorPrefix20220308\trigger_deprecation(...func_get_args());
    }
}
if (!function_exists('array_is_list')) {
    function array_is_list() {
        return \RectorPrefix20220308\array_is_list(...func_get_args());
    }
}
if (!function_exists('enum_exists')) {
    function enum_exists() {
        return \RectorPrefix20220308\enum_exists(...func_get_args());
    }
}
if (!function_exists('includeIfExists')) {
    function includeIfExists() {
        return \RectorPrefix20220308\includeIfExists(...func_get_args());
    }
}
if (!function_exists('dump')) {
    function dump() {
        return \RectorPrefix20220308\dump(...func_get_args());
    }
}
if (!function_exists('dumpe')) {
    function dumpe() {
        return \RectorPrefix20220308\dumpe(...func_get_args());
    }
}
if (!function_exists('bdump')) {
    function bdump() {
        return \RectorPrefix20220308\bdump(...func_get_args());
    }
}
if (!function_exists('compressJs')) {
    function compressJs() {
        return \RectorPrefix20220308\compressJs(...func_get_args());
    }
}
if (!function_exists('compressCss')) {
    function compressCss() {
        return \RectorPrefix20220308\compressCss(...func_get_args());
    }
}

return $loader;
