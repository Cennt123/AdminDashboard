{{-- view/welcome.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('asset/js/tailwind.min.js')}}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div class="fixed inset-0 flex justify-center items-center bg-gradient-to-b from-blue-500 to-transparent">
    <div class="w-full max-w-lx mx-4 rounded">
        <div class="flex space-x-4 m-20">
            <div class="flex justify-center p-6 w-1/2 bg-white rounded-lg shadow-2xl">
                <div class="flex flex-col items-center">
                    <div class="mb-4">
                        <h1 class="text-4xl font-semibold">Welcome!</h1>
                    </div>

                    <form action="{{ route('loginPost') }}" method="POST" class="flex flex-col space-y-4 mt-4 w-full">
                        @csrf
                        <div class="relative mb-4">
                            <input type="email" name="email" placeholder="Input email"
                                class="w-full border-2 border-blue-500 rounded-md py-2 pl-10 pr-4 outline-none transition-all duration-300 focus:border-dodgerBlue focus:ring-0 focus:ring-dodgerBlue focus:ring-opacity-50"/>
                            <i class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white rounded-l-md py-3 px-3 transition-colors duration-300 fas fa-envelope"></i>
                        </div>
                        <div class="relative mb-4">
                            <!-- Input field with padding for icons -->
                            <input type="password" name="password" placeholder="Input password"
                                class="w-full border-2 border-red-500 rounded-md py-2 pl-12 pr-12 outline-none transition-all duration-300 focus:border-dodgerBlue focus:ring-0 focus:ring-dodgerBlue focus:ring-opacity-50"/>

                            <!-- Lock icon on the left -->
                            <i class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-red-500 text-white rounded-l-md py-3 px-3 transition-colors duration-300 fas fa-lock"></i>

                            <!-- Eye icon on the right -->
                            <i class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 cursor-pointer fas fa-eye"></i>
                        </div>

                        <button type="submit" class="shadow-md px-4 py-2 bg-blue-500 hover:bg-blue-800 text-blue-100 rounded">Log In</button>
                    </form>

                    <div class="mt-2">
                        <h1 class="text-sm">Forgot password? <a href="{{ route('password.request') }}" class="hover:text-red-800 text-red-500">Reset Password</a></h1>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center p-6 items-center w-1/2 bg-gradient-to-b from-blue-500 to-teal-500 rounded-lg shadow-2xl">
                <img class="mb-2 drop-shadow-md" src="{{ asset('asset/images/mdc_logo.png')}}" height="200" width="200" alt="">
                <h1 class="mb-20 text-2xl text-white text-center font-serif">MDC Property Rental & <br> Reservation Management <br> System</h1>
                <h1 class="text-white">All rights reserved © 2024</h1>
            </div>
        </div>
    </div>
</div>

</body>
</html>
