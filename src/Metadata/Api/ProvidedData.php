<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Api;

final readonly class ProvidedData
{
    public function __construct(
        private string $providerLabel,
        private mixed $data
    ) {
    }

    public function getData(): mixed
    {
        return $this->data;
    }

    public function getProviderLabel(): string
    {
        return $this->providerLabel;
    }
}
