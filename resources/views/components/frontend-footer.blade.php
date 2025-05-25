<footer class="bg-[var(--primary)] text-white pt-8 pb-4">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="text-xl font-bold mb-4">About Us</h3>
                <img src="{{ asset($company->logo) }}" alt="Company Logo" class="h-16 mb-4">
                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:underline">गृहपृष्ठ (Home)</a></li>
                    @foreach($categories->take(5) as $cat)
                    <li><a href="{{ route('category', $cat->slug) }}" class="hover:underline">{{ $cat->title }}</a></li>
                    @endforeach
                    <li><a href="{{ route('login') }}" class="hover:underline">Login</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2">
                        <i class="fas fa-map-marker-alt mt-1"></i>
                        <span>123 Main Street, Kathmandu, Nepal</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-phone"></i>
                        <span>+977 1-1234567</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-envelope"></i>
                        <span>info@example.com</span>
                    </li>
                </ul>

                <!-- Social Media Links -->
                <div class="mt-4">
                    <h4 class="font-semibold mb-2">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-facebook-f text-xl"></i></a>
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-youtube text-xl"></i></a>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-xl font-bold mb-4">Newsletter</h3>
                <p class="text-sm mb-4">Subscribe to our newsletter to get the latest updates.</p>
                <form class="flex flex-col gap-2">
                    <input type="email" placeholder="Your Email" class="px-4 py-2 rounded text-gray-800">
                    <button type="submit" class="bg-white text-[var(--primary)] px-4 py-2 rounded-md hover:bg-opacity-90 transition font-medium">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-white border-opacity-20 mt-8 pt-4 text-center text-sm">
            <p>&copy; {{ date('Y') }} {{ $company->name ?? 'Company Name' }}. All rights reserved.</p>
        </div>
    </div>
</footer>
