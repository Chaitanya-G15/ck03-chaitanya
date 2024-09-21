<x-layout title="Project">
<section class="bg-gray-100 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-dark mb-8">My Skills</h2>
            <div class="flex justify-center space-x-8">
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Frontend Development</h3>
                    <p class="text-gray-600">HTML, CSS, JavaScript, Tailwind CSS, React</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Backend Development</h3>
                    <p class="text-gray-600">Laravel, Node.js, PHP, RESTful APIs</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Cloud & DevOps</h3>
                    <p class="text-gray-600">AWS, Docker, CI/CD, Git</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-dark mb-8">Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project 1 -->
                <div class="bg-gray-50 p-6 shadow-lg rounded-lg">
                    <img src="https://via.placeholder.com/400x200" alt="Project 1" class="mb-4 rounded-lg">
                    <h3 class="text-2xl font-bold mb-4">Project 1</h3>
                    <p class="text-gray-600 mb-4">
                        A web application built with Laravel and Vue.js, featuring a dynamic dashboard and REST API integration.
                    </p>
                    <a href="#" class="text-primary hover:underline">Learn More</a>
                </div>
                <!-- Project 2 -->
                <div class="bg-gray-50 p-6 shadow-lg rounded-lg">
                    <img src="https://via.placeholder.com/400x200" alt="Project 2" class="mb-4 rounded-lg">
                    <h3 class="text-2xl font-bold mb-4">Project 2</h3>
                    <p class="text-gray-600 mb-4">
                        An eCommerce platform developed with React and Node.js, supporting payment integration and product management.
                    </p>
                    <a href="#" class="text-primary hover:underline">Learn More</a>
                </div>
                <!-- Project 3 -->
                <div class="bg-gray-50 p-6 shadow-lg rounded-lg">
                    <img src="https://via.placeholder.com/400x200" alt="Project 3" class="mb-4 rounded-lg">
                    <h3 class="text-2xl font-bold mb-4">Project 3</h3>
                    <p class="text-gray-600 mb-4">
                        A cloud-deployed microservice architecture for a scalable content management system using Docker and Kubernetes.
                    </p>
                    <a href="#" class="text-primary hover:underline">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    </x-layout>