@extends('layout.app')

@section('content')
@include('modal.editMedia')

    <div class="flex justify-between border-b-2 border-gray-500">
        <h1 class="py-2 text-3xl max-sm:text-x">Media</h1>
        <form method="POST" action="{{ route('media.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <div class="relative inline-flex">
                    <label for="image" class="text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-800">
                        Upload an image
                    </label>
                    <input class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="image" name="image" type="file" required>
                </div>
                <button type="submit" id="image" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Upload</button>
            </div>
        </form>
    </div>
    <div class="flex flex-wrap py-5 gap-5">
        @foreach ($images as $row)
            <img 
                src="/storage/images/{{ $row->path }}" 
                onclick="openModal('{{ $row->id }}', '{{ $row->path }}', '{{ $row->title }}', '{{ $row->caption }}', '{{ $row->uploaded_date }}')" 
                class="border-2 w-40 bg-gray-800 cursor-pointer"
            />
        @endforeach
    </div>

    <script>
        const openModal = (media_id, media_path, media_title, media_caption, dates) => {
            const modal = document.getElementById("imageModal");
            modal.style.display = "block";
            $("#media_id").val(media_id);
            $("#media_path").val(media_path);
            $("#title").val(media_title);
            $("#caption").val(media_caption);
            $("#dates").val(dates);
            const img = document.querySelector("#image");
            img.src = `/storage/images/${media_path}`;
            img.width = 160;
            img.height = 160;
            $('#update_form').attr('action', '/media/' + media_id);

        }
        
        // Add a function to close the modal
        const closeModal = () => {
            const modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }
        
        // Close the modal when clicking outside of it
        // window.onclick = (event) => {
        //     const modal = document.getElementById("imageModal");
        //     if (event.target === modal) {
        //         closeModal();
        //     }
        // }
    </script>
@endsection
