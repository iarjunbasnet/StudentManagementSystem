<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Management System</title>
    <link rel="icon" href="file:///home/arjun/Pictures/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            font-family: "Rubik", sans-serif;
        }

        /* navigation 
 - show navigation always on the large screen devices with (min-width:1024)
*/

        @media (min-width: 1024px) {
            .top-navbar {
                display: inline-flex !important;
            }
        }
    </style>

    <nav class="flex items-center bg-gray-800 p-3 flex-wrap position-sticky">
        <a href="/" class="p-2 mr-4 inline-flex items-center">
            <span class="text-xl text-white font-bold uppercase tracking-wide">Student Management System</span>
        </a>
        <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
            <div class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto">

                <a href="/" title="Home" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <svg class="h-8 w-8 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <polyline points="5 12 3 12 12 3 21 12 19 12" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <rect x="10" y="12" width="4" height="4" />
                    </svg>
                </a>
                <a href="/add_student" title="Add New Student" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".nav-toggler").each(function(_, navToggler) {
                var target = $(navToggler).data("target");
                $(navToggler).on("click", function() {
                    $(target).animate({
                        height: "toggle"
                    });
                });
            });
        });
    </script>
</head>

<body>

    <div class="flex">
        <!-- <a href="/add_student">Add</a> -->
        <!-- <button href="/add_student" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Add</button> -->
        <!-- <a href="/edit_details">Edit</a> -->
        <!-- <a href="/delete_student">Delete</a> -->
    </div>
    <div class="text-center mx-4 space-y-2">

        <h1 class="text-gray-800 text-3xl font-bold mb-10 mt-10">List of all Students</h1>
    </div>
    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-2xs text-gray-500">SN</th>
                                <th class="px-6 py-2 text-2xs text-gray-500">Name</th>
                                <th class="px-6 py-2 text-2xs text-gray-500">Class</th>
                                <th class="px-6 py-2 text-2xs text-gray-500">Roll No</th>
                                <th class="px-6 py-2 text-2xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-2xs text-gray-500">
                                    Delete

                            </tr>
                        </thead>


                        @foreach($students as $student)
                        <tbody class="bg-white">
                            <tr class="whitespace-nowrap">
                            <tr>
                                <td class="text-sm text-gray-900">
                                    <div class="px-6 py-4">{{$page}}
                                    </div>
                                </td>
                                <td class="text-sm text-gray-900">
                                    <div class="px-6 py-4">{{$student->fname}} {{$student->lname}}
                                    </div>
                                </td>
                                <td class="text-sm text-gray-900">
                                    <div class="px-6 py-4">{{$student->class}}
                                    </div>
                                </td>
                                <td class="text-sm text-gray-900">
                                    <div class="px-6 py-4">{{$student->roll}}
                                    </div>
                                </td>
                                <!-- <td> -->
                                <!-- <a href="/edit_details/{{$student->id}}">Edit</a>
                &nbsp;
                <a href="/delete_details/{{$student->id}}">Delete</a> -->
                                <!-- <button href="/edit_details/{{$student->id}}">
                                    Edit
                                </button>
                                &nbsp;
                                <button href="/delete_details/{{$student->id}}">
                                    Delete
                                </button> -->
                                <td class="px-6 py-4">
                                    <a href="/edit_details/{{$student->id}}" class="px-4 py-1 text-sm text-white bg-blue-400 rounded hover:bg-blue-600">Edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a class="btn btn-danger px-4 py-1 text-sm text-white bg-red-400 rounded hover:bg-red-600" onclick="return confirm('Are you sure?')" href="/delete_details/{{$student->id}}">Delete</a>
                                </td>
                                </td>
                            </tr>
                        </tbody>
                        @php
                        $page++;
                        @endphp
                        @endforeach
                    </table>
                    <div class="bg-gray-100 text-2xs">
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center text-gray-500">
                            {!! $students->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</body>


</html>