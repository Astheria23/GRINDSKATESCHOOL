<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>GSSB Contact</title>
</head>
<body>
    

<!-- Navbar -->
<section class="bg-gray-300 fixed top-0 w-full z-50 shadow-md">
        <div class="w-full container ml-36 px-4 sm:px-6 lg:px-8" x-data="{open:false}">
            <nav class=" flex items-center justify-between  py-3">
                <div class="lg:flex lg:items-center mr-24 ">
                <ul class="hidden lg:w-auto lg:space-x-6 lg:flex items-center  ">
                <a href="" class=" items-center justify-center text-center flex text-xl font-semibold leading-none text-blue-600"><img src="{{asset('folder_image-login/logo.png')}}" class="w-12  my-auto" alt="">Grind Skate School </a>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Home</a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Lessons</a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Activities</a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Location </a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">About Us</a>
                    </li>
                    <li><a href="" class="text-blue-600 flex h-8 w-20 rounded-lg font-bold items-center justify-center overflow-hidden text-white transition-all duration-300 before:absolute before:inset-0 before:border-0 before:border-white before:duration-100 before:ease-linear hover:bg-blue-600 hover:text-yellow-300 hover:before:border-[25px]">Contact</a>
                    </li>
                </ul>
                </div>
                <div class="lg:hidden">
                    <button
                        class="flex items-center px-3 py-2 text-blue-200 border border-blue-200 rounded dark:text-gray-400 hover:text-blue-300 hover:border-blue-300 lg:hidden"
                        @click="open =true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex">
                <a class="bg-blue-600 block px-5 py-3 text-sm font-bold text-center text-white transition duration-200 bg-white rounded md:inline-block hover:bg-yellow-400 hover:text-blue-600"
                            href="#"> Join With Us </a>
                </div>
            </nav>         
        </div>
    </section> 
    <!-- Contact Section -->
    <section class="mt-24">
    <div class="bg-[#f8e3a1] p-4">
  <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-white grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-gray-200 p-4 rounded-2xl">
      <h2 class="text-2xl font-semibold mb-4">Email:</h2>
      <p class="mb-2">info@skateboardschoolamsterdam.com</p>
      <h2 class="text-2xl font-semibold mb-4">Phone number:</h2>
      <p class="mb-2">+31 639028989</p>
      
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="text-green-500 w-8 h-8 mb-2"
      >
        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
        <path d="M12 18h.01"></path>
      </svg>
      <h2 class="text-2xl font-semibold mb-4">Available by telephone on:</h2>
      <p class="mb-1">Monday from 2:00 PM to 9:00 PM</p>
      <p class="mb-1">Wednesday from 1:00 PM to 6:00 PM</p>
      <p class="mb-1">Friday from 9:30 AM to 12:00 PM</p>
      <p class="mb-1">Saturday and Sunday from 8:30 AM to 1:00 PM</p>
    </div>
    <div>
      <div class="bg-[#ffed4a] p-4 text-center">
        <h2 class="text-2xl font-semibold">CONTACT</h2>
      </div>
      <form class="flex flex-col space-y-4 mt-4">
        <input
          class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
          placeholder="First name + Last name (required)"
          type="text"
        />
        <input
          class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
          placeholder="Email address (required)"
          type="email"
        />
        <textarea
          class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
          placeholder="Message (required)"
        ></textarea>
        <button class="bg-blue-600 text-white inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2  text-primary-foreground hover:bg-yellow-400 hover:text-blue-600 h-10 px-4 py-2">
          SEND
        </button>
      </form>
    </div>
  </div>
</div>
</section>
</body>
</html>