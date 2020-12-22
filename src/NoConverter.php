<?php

namespace Foostart\PathConverter;

/**
 * Don't convert paths.
 *
 * Please report bugs on https://github.com/foostart/path-converter/issues
 *
 * @author Foostart <foostart.com@gmail.com>
 * @copyright Copyright (c) 2015, Foostart. All rights reserved
 * @license MIT License
 */
class NoConverter implements ConverterInterface
{
    /**
     * {@inheritdoc}
     */
    public function convert($path)
    {
        return $path;
    }
}
