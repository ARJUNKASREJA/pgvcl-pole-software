<?php

namespace App\Traits;

trait HasStatus
{
    public function isActive(): bool
    {
        return (bool) $this->status;
    }

    public function isInactive(): bool
    {
        return !$this->status;
    }

    public function activate(): bool
    {
        return $this->update([
            'status' => 1
        ]);
    }

    public function deactivate(): bool
    {
        return $this->update([
            'status' => 0
        ]);
    }

    public function getStatusTextAttribute(): string
    {
        return $this->status
            ? 'Active'
            : 'Inactive';
    }

    public function getStatusBadgeAttribute(): string
    {
        return $this->status
            ? '<span class="badge bg-success">Active</span>'
            : '<span class="badge bg-danger">Inactive</span>';
    }

    public function toggleStatus(): bool
    {
        return $this->update([
            'status' => !$this->status
        ]);
    }
}