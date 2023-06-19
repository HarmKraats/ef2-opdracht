<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">

            <h1 class="text-2xl font-medium text-gray-900">
                Welkom op deze Blog website!
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam est
                saepe beatae sapiente expedita quo quod quidem neque eos
                repudiandae? Porro fugit nostrum totam sunt molestiae magni minus ad
                beatae libero, dolorum cupiditate aliquid provident architecto
                quibusdam, enim nam laudantium ut praesentium numquam, nihil
                voluptatum. Facere architecto deserunt quasi suscipit.
            </p>
        </div>

        <div
            class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5"
                        class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900">
                        <Link :href="route('blogs')">Blogs</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Bekijk de blogs door naar blogs te gaan.
                </p>
                <p class="mt-4 text-sm">
                    <Link :href="route('blogs')" class="inline-flex items-center
                    font-semibold text-indigo-700">
                    Blogs bekijken!

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        class="ml-1 w-5 h-5 fill-indigo-500">
                        <path fill-rule="evenodd"
                            d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                            clip-rule="evenodd" />
                    </svg>
                    </Link>
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5"
                        class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900">
                        <Link :href="route('login')">Inloggen</Link>
                    </h2>
                </div>
                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Login om als Admin de blog te beheren.
                </p>
                <p class="mt-4 text-sm">
                    <Link :href="route('login')"
                        class="inline-flex items-center font-semibold text-indigo-700">
                    Log in
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        class="ml-1 w-5 h-5 fill-indigo-500">
                        <path fill-rule="evenodd"
                            d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                            clip-rule="evenodd" />
                    </svg>
                    </Link>
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5"
                        class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900">
                        <Link :href="route('register')">Registreren</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Registreren is er even tijdelijk voor de demo van deze
                    applicatie
                </p>



                <p class="mt-4 text-sm">

                    <Link :href="route('register')"
                        class="inline-flex items-center font-semibold text-indigo-700">
                    Registeren

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        class="ml-1 w-5 h-5 fill-indigo-500">
                        <path fill-rule="evenodd"
                            d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                            clip-rule="evenodd" />
                    </svg>
                    </Link>
                </p>
            </div>




        </div>
    </div>
</template>
