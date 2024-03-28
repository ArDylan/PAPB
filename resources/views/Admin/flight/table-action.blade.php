<button data-dropdown-toggle="dropdown-{{ $id }}"
    class="text-white bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
    type="button">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
        viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path
            d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
    </svg>
</button>

<!-- Dropdown menu -->
<div id="dropdown-{{ $id }}"
    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
        <li class="px-4 py-2 hover:bg-gray-400">
            <button class="text-center  hover:bg-gray-400" data-modal-target="edit-voter-modal"
                data-modal-toggle="edit-voter-modal"
                onclick="">
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                    </svg>
                    <p class="ml-1">Edit</p>
                </div>
            </button>

        </li>
        <li class="px-4 py-2 hover:bg-gray-400">
            <button class="text-center  hover:bg-gray-400" data-modal-target="edit-voter-modal"
                data-modal-toggle="edit-voter-modal"
                onclick="">
                <div class="flex justify-center items-center">
                    <span class="fa fa-eye"></span>
                    <p class="ml-1">Detail</p>
                </div>
            </button>
        </li>
        <li class="px-4 py-2 hover:bg-gray-400">
            <form action="{{route('admin.management.flight.approve')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <button class="text-center hover:bg-gray-400" data-modal-target="edit-voter-modal"
                    data-modal-toggle="edit-voter-modal" type="submit">
                    <div class="flex justify-center items-center">
                        <span class="fa fa-check"></span>
                        <p class="ml-1">Approve</p>
                    </div>
                </button>
            </form>
        </li>
        <li class="px-4 py-2 hover:bg-gray-400">
            <button class="text-center  hover:bg-gray-400" data-modal-target="delete-voter-modal"
                data-modal-toggle="delete-voter-modal" onclick="">
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                    </svg>
                    <p class="ml-1">Delete</p>
                </div>
            </button>
        </li>
    </ul>
</div>
