<?php

namespace App\Traits;

use App\Services\ImageUploadService;

trait HasPhoto
{
    public function hasPhoto(): bool
    {
        return !empty($this->photo);
    }

    public function photoUrl(): string
    {
        return ImageUploadService::url($this->photo);
    }

    public function deletePhoto(): void
    {
        if ($this->hasPhoto()) {

            ImageUploadService::delete($this->photo);

            $this->update([
                'photo' => null,
            ]);
        }
    }

    public function replacePhoto($file): void
    {
        if ($this->hasPhoto()) {
            ImageUploadService::delete($this->photo);
        }

        $path = ImageUploadService::upload(
            $file,
            'survey'
        );

        $this->update([
            'photo' => $path,
        ]);
    }

    public function photoName(): ?string
    {
        if (!$this->hasPhoto()) {
            return null;
        }

        return basename($this->photo);
    }

    public function photoExtension(): ?string
    {
        if (!$this->hasPhoto()) {
            return null;
        }

        return pathinfo(
            $this->photo,
            PATHINFO_EXTENSION
        );
    }
}