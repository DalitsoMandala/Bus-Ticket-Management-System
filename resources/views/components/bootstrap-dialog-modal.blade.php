@props(['id' => null, 'maxWidth' => null])

<x-bootstrap-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="modal-content">
        <div class=" modal-header border-bottom-0">
            <h5 class="modal-title fs-0">{{ $title }}</h5>
            <button type="button" data-bs-dismiss="modal" class="btn-close" data-modal-toggle="defaultModal">

                <span class="sr-only">Close modal</span>
            </button>



        </div>
        <div class="pt-0 mt-0 modal-body">
            {{ $content }}
        </div>
        <div class="modal-footer bg-light d-none">
            {{ $footer }}
        </div>
    </div>
</x-bootstrap-modal >
