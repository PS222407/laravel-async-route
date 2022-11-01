<div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-gray-200 rounded-t-md">
    <div class="mr-5 w-12 h-12 capitalize text-red-500 bg-red-200 border rounded-full relative">
        <i class="fa-solid fa-triangle-exclamation absolute left-1/2 top-1/2 text-3xl" style="transform: translate(-50%, -50%);"></i>
    </div>
    <h5 class="text-xl font-medium leading-normal text-gray-800" id="deletionModal_ScrollableLabel">
        {{ __('admin.delete_confirmation') }}
    </h5>
    <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body relative">
    {{--                    --}}
</div>
<div class="modal-footer bg-gray-100 flex flex-shrink-0 flex-wrap items-center justify-end p-4 rounded-b-md">
    <form action="{{ $route }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="button" class="inline-block border border-gray-500 px-6 py-2.5 bg-white font-medium text-xs leading-tight capitalize rounded shadow-md hover:bg-gray-100 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out"
                data-bs-dismiss="modal">
            {{ __('admin.cancel') }}
        </button>
        <button type="submit" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight capitalize rounded shadow-md hover:bg-red-800 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-900 transition duration-150 ease-in-out ml-1">
            {{ __('admin.delete') }}
        </button>
    </form>
</div>
