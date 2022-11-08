<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Api\QueryParameterValidator;

use ApiPlatform\JsonSchema\Schema;

/**
 * Get the JSON Schema from a filter.
 */
interface ValidatedFilterInterface
{
    public function getSchema(): Schema;
}
