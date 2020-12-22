<?php

namespace Foostart\PathConverter;

/**
 * Convert file paths.
 *
 * Please report bugs on https://github.com/foostart/path-converter/issues
 *
 * @author Foostart <foostart.com@gmail.com>
 * @copyright Copyright (c) 2015, Foostart. All rights reserved
 * @license MIT License
 */
interface ConverterInterface
{
    /**
     * Convert file paths.
     *
     * @param string $path The path to be converted
     *
     * @return string The new path
     */
    public function convert($path);
}
