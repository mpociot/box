<?php

declare(strict_types=1);

/*
 * This file is part of the box project.
 *
 * (c) Kevin Herrera <kevin@herrera.io>
 *     Théo Fidry <theo.fidry@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KevinGH\Box\PhpScoper;

use Humbug\PhpScoper\Symbol\SymbolsRegistry;

/**
 * @private
 */
final class NullScoper implements Scoper
{
    private SymbolsRegistry $symbolsRegistry;

    public function __construct(?SymbolsRegistry $symbolsRegistry = null)
    {
        $this->symbolsRegistry = $symbolsRegistry ?? new SymbolsRegistry();
    }

    /**
     * {@inheritdoc}
     */
    public function scope(string $filePath, string $contents): string
    {
        return $contents;
    }

    /**
     * {@inheritdoc}
     */
    public function changeSymbolsRegistry(SymbolsRegistry $symbolsRegistry): void
    {
        $this->symbolsRegistry = $symbolsRegistry;
    }

    /**
     * {@inheritdoc}
     */
    public function getSymbolsRegistry(): SymbolsRegistry
    {
        return $this->symbolsRegistry;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix(): string
    {
        return '';
    }
}
