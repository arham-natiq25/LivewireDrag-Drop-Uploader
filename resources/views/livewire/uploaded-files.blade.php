<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">

        @foreach ($this->files as $file )
            <a href="#" wire:click.prevent='download({{ $file->id }})' class="text-primary text-sm">{{ $file->file_name }}</a> <br>
        @endforeach
    </div>
</div>
