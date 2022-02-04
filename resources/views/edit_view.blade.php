<!DOCTYPE html>
<html lang="en">

<head>
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

    <title>Edit</title>
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
    <!-- <form method="POST">
        @csrf
        <h2>Edit Student's Details</h2>
        <label for="fname">First name:</label>
        <input value="{{$student->fname}}" type="text" id="fname" name="fname">
        @error("fname")
        <div>{{$message}}</div>
        @enderror
        <br><br>
        <label for="lname">Last name:</label>
        <input value="{{$student->lname}}" type="text" id="lname" name="lname"><br><br>
        @error("lname")
        <div>{{$message}}</div>
        @enderror
        <label for="class">Class:</label>
        <input value="{{$student->class}}" type="text" id="class" name="class"><br><br>
        @error("class")
        <div>{{$message}}</div>
        @enderror
        <label for="roll">Roll No:</label>
        <input value="{{$student->roll}}" type="text" id="roll" name="roll"><br><br>
        @error("roll")
        <div>{{$message}}</div>
        @enderror
        <input type="submit" value="Update">
    </form> -->
    <form method="POST">
    @csrf
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-300 to-gray-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold">Edit Student's Details</h1>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input value="{{$student->fname}}" type="text" id="fname" name="fname" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Enter Your First Name" />
                                    <label for="fname" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">First Name</label>
                                </div>
                                @error("fname")
                                <div>{{$message}}</div>
                                @enderror
                                <div class="divide-y divide-gray-200">
                                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="relative">
                                            <input value="{{$student->lname}}" type="text" id="lname" name="lname" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Enter Your Last Name" />
                                            <label for="lname" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Last Name</label>
                                        </div>
                                        @error("lname")
                                        <div>{{$message}}</div>
                                        @enderror
                                        <div class="divide-y divide-gray-200">
                                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                                <div class="relative">
                                                    <input value="{{$student->class}}" type="text" id="class" name="class" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email Your Class" />
                                                    <label for="class" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Class</label>
                                                </div>
                                                @error("class")
                                                <div>{{$message}}</div>
                                                @enderror
                                                <div class="divide-y divide-gray-200">
                                                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                                        <div class="relative">
                                                            <input value="{{$student->roll}}" type="text" id="roll" name="roll" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email Your Roll Number" />
                                                            <label for="roll" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Roll No</label>
                                                        </div>
                                                        @error("roll")
                                                        <div>{{$message}}</div>
                                                        @enderror
                                                        <div class="relative flex justify-center">
                                                            <button class="bg-gray-800 mt-10  text-white rounded-md px-2 py-1">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    </form>
</body>

</html>