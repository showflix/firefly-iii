<?php


/*
 * NodeGroup.php
 * Copyright (c) 2025 https://github.com/Sobuno
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see https://www.gnu.org/licenses/.
 */

declare(strict_types=1);

namespace FireflyIII\Support\Search\QueryParser;

/**
 * Represents a group of nodes.
 *
 * NodeGroups can be nested inside other NodeGroups, making them subqueries
 */
class NodeGroup extends Node
{
    /** @var Node[] */
    private array $nodes;

    /**
     * @param Node[] $nodes
     */
    public function __construct(array $nodes, bool $prohibited = false)
    {
        $this->nodes      = $nodes;
        $this->prohibited = $prohibited;
    }

    /**
     * @return Node[]
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }
}
