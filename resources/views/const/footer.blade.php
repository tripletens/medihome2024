<div class="bg-gray-900 py-4">
    <div class="container mx-auto flex items-center justify-between px-4">
        <div class="logo">
            <a href="/">
                <img src="{{asset('images/medihome_logo.png')}}" alt="Logo" class="h-10">
            </a>
        </div>
        
        <ul class="flex space-x-4">
            <li>
                <a href="#" class="text-white hover:text-gray-400 text-xl">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="#" class="text-white hover:text-gray-400 text-xl">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#" class="text-white hover:text-gray-400 text-xl">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
        </ul>
    </div>
</div>

<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="space-y-4">
                <h4 class="text-2xl font-semibold">About</h4>
                <p class="text-lg">Lorem ipsum dolor sit amet <br>consectetur adipiscing elit sollicit udin <br> netus quis ornare. Massa pharetra in <br> nec sed nunc.</p>
                <p class="text-lg">nisl viverra massa imperdiet. Dui <br> mattis quis congue fames.</p>
            </div>
            
            <div class="space-y-4 ">
                <h4 class="text-2xl font-semibold">Quick Link</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline text-lg">About Us</a></li>
                    <li><a href="#" class="hover:underline text-lg">Services</a></li>
                    <li><a href="#" class="hover:underline text-lg">Case</a></li>
                    <li><a href="#" class="hover:underline text-lg">Pricing</a></li>
                    <li><a href="#" class="hover:underline text-lg">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="space-y-4">
                <h4 class="text-2xl font-semibold">Useful Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline text-lg">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline text-lg">Terms & Condition</a></li>
                    <li><a href="#" class="hover:underline text-lg">Support</a></li>
                    <li><a href="#" class="hover:underline text-lg">Disclaimer</a></li>
                    <li><a href="#" class="hover:underline text-lg">FAQ</a></li>
                </ul>
            </div>
            
            <div class="space-y-4">
                <h4 class="text-xl font-semibold">Contact Us</h4>
                <p>Tincidunt neque pretium lectus donec risus.</p>
                <ul class="space-y-2">
    <li class="flex items-center space-x-2 text-lg">
    <img class="w-4" src="{{asset('images/location-dot-solid.svg')}}">
        <span>Lagos, Nigeria</span>
    </li>
    <li class="flex items-center space-x-2 text-lg">
    <img class="w-4" src="{{asset('images/envelope-solid.svg')}}">
        <a href="mailto:info@medihomecare.com" class="hover:underline">info@medihomecare.com</a>
    </li>
    <li class="flex items-center space-x-2 text-lg">
    <img class="w-4" src="{{asset('images/phone-solid.svg')}}">
        <a href="tel:+2349015222109" class="hover:underline">+234 901 522 2109</a>
    </li>
</ul>

            </div>
            
        </div>
    </div>
    <div class="p-5">
    <p class="text-lg text-center"> All rights Reserved &copy; <?php echo date('Y');?></p>
    <div>
</footer>
