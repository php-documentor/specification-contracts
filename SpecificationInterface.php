<?php

declare(strict_types=1);

namespace PhpDocumentor\Contracts\Specification;

/**
 * Specification must know which elements a document can consist of, contain rules
 * for construction and interaction of elements with each other.
 */
interface SpecificationInterface
{
    /**
     * @return string Name of specification
     */
    public function getName(): string;

    /**
     * @return array List of supported document elements
     */
    public function getElements(): array;

    /**
     * @param string $name Name of element
     * @return array List of element rules
     */
    public function getRules(string $name): array;

    /**
     * @return bool Are elements not specified in specification supported?
     */
    public function supportUserElements(): bool;
}
