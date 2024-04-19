<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\QuillJs\DTO\Fields\Interfaces;

interface QuillGroupInterface
{
    /**
     * @return array<QuillInlineFieldInterface>
     */
    public static function build(QuillInlineFieldInterface ...$fields): array;
}