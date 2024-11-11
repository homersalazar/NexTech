@extends('layout.app')

@section('content')
@include('media.edit_modal')

    <div class="flex justify-between border-b-2 border-gray-500">
        <h1 class="py-2 text-base md:text-2xl max-sm:text-x">Media</h1>
        <form method="POST" action="{{ route('media.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <div class="relative inline-flex">
                    <input class="block w-full mb-5 text-xs text-blue-900 border border-gray-300 rounded-lg cursor-pointer bg-blue-50 focus:outline-none" id="image" name="image" type="file" required>
                </div>
                <button type="submit" id="image" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Upload</button>
            </div>
        </form>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <tbody>
                @foreach ($images->chunk(7) as $chunk)
                    <tr class="bg-white border-b flex flex-row flex-wrap py-5 gap-2 md:gap-5">
                        @foreach ($chunk as $image)
                            <td>
                                <img
                                    src="/storage/images/{{ $image->path }}"
                                    alt="{{ $image->title }}"
                                    onclick="openModal('{{ $image->id }}', '{{ $image->path }}', '{{ $image->title }}', '{{ $image->caption }}', '{{ $image->uploaded_date }}')"
                                    class="border-2 w-40 h-40 bg-gray-800 cursor-pointer hover:border-blue-700"
                                />
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button id="edit_media_button" data-modal-target="imageModal" data-modal-toggle="imageModal"></button>
    <script>
        const openModal = (media_id, media_path, media_title, media_caption, dates) => {
            $('#edit_media_button').click();
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
    </script>
@endsection
