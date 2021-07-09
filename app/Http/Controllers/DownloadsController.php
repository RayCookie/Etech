<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect; 
use App\Models\Entities\File;

class DownloadsController extends Controller
{
    /**
     * Download a file
     *
     * @param $fileId
     */
    public function index($fileId)
    {
        $file = File::where("id", $fileId)->firstOrFail();
        $size = $file->meta_data["filesize"];
        $contentType = array_key_exists("mime_type",$file->meta_data) ?
            $file->meta_data["mime_type"] :
            "application/octet-stream";

        header('Content-Description: File Transfer');
        header("Content-Type: $contentType");
        header("Content-Disposition: attachment");
        header("Content-Length: $size");

        readfile(
            storage_path("app/files/$file->storage_name")
        );
        $file->downloaded = 1;
        $file->save(); 
        
        exit;
    }

    public function unarchive($fileId){
        $file = File::where("id", $fileId)->firstOrFail();
        
        $file->downloaded = 0;
        $file->save(); 
        
        
        return Redirect::to('/archived');
    }
}
