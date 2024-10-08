<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadHelper
{
    public function deleteFile(string $fileName): bool
    {
        return Storage::delete($fileName);
    }

    /**
     * @param UploadedFile $uploadedFile
     * @param string $name
     * @param string $folder
     * @return array
     */
    public function uploadFile(UploadedFile $uploadedFile, string $name, string $folder)
    {
        $timeStamp = Carbon::now()->timestamp;
        $fileName = $name . '_' . $timeStamp . '_' . uniqId();

        $fileName = $fileName . "." . $uploadedFile->getClientOriginalExtension();

        $path = Storage::disk('public')->putFileAs($folder, $uploadedFile, $fileName);

        return $folder . "/" . $fileName;
    }

}
