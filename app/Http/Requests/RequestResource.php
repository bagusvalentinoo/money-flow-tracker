<?php

namespace App\Http\Requests;

interface RequestResource
{
    /**
     * Get Create Rules
     *
     * @return array<string, mixed>
     */
    public function getCreateRules(): array;

    /**
     * Get Update Rules
     *
     * @return array<string, mixed>
     */
    public function getUpdateRules(): array;

    /**
     * Get Delete Rules
     *
     * @return array<string, mixed>
     */
    public function getDeleteRules(): array;
}
