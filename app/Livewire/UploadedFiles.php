<?php

namespace App\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class UploadedFiles extends Component
{
    protected $listeners = [
        'refresh' => '$refresh'
    ];
    public function getFilesProperty() {
        return File::latest()->get();
    }
    public function download($id) {

        $vid = File::findOrFail($id);

        return Storage::download($vid->file_path);

    }
    public function render()
    {
        return view('livewire.uploaded-files');
    }
}
