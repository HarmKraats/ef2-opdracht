<script setup>
import BlogComponent from '@/components/BlogComponent.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import axios from 'axios';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <AppLayout title="Blogs">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <h2
                            class="font-semibold text-xl text-gray-800 leading-tight mb-8">
                            Blogs
                        </h2>
                        <!-- tille text for fun as description -->
                        <div>
                            <!-- Login knop -->
                            <p class="mt-4 text-sm">
                                <Link :href="route('login')"
                                    class="inline-flex items-center font-semibold text-indigo-700">
                                Log in
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    class="ml-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd"
                                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                                        clip-rule="evenodd" />
                                </svg>
                                </Link>
                                om een blog aan te maken en te verwijderen -
                                Email: admin@admin.nl |
                                Gebruikersnaam: Admin |
                                Wachtwoord: admin
                            </p>
                        </div>

                        <div class="flex items-center mb-4">
                            <label for="sort" class="mr-2">Sort by:</label>
                            <select id="sort" v-model="sortDirection"
                                @change="sortByDate">
                                <option value="n" disabled>Sorteren</option>
                                <option value="asc">Oud naar nieuw</option>
                                <option value="desc">Nieuw naar oud</option>
                            </select>
                        </div>


                        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4 mt-8"
                            v-auto-animate>
                            <BlogComponent v-for="blog in blogs" :key="blog.id"
                                :blog="blog" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    name: 'Blogs',
    data() {

        return {
            blogs: [],
            sortDirection: 'desc',
        }
    },

    async mounted() {
        try {
            const response = await axios.get('/api/blogs');
            this.blogs = response.data;
            this.sortByDate();
        } catch (error) {
            console.log(error);
        }
    },

    methods: {
        sortByDate() {
            this.blogs.sort((a, b) => {
                const dateA = this.parseDutchDate(a.date);
                const dateB = this.parseDutchDate(b.date);

                if (this.sortDirection === 'asc') {
                    return dateA - dateB;
                } else {
                    return dateB - dateA;
                }
            });
        },

        parseDutchDate(dateString) {
            const months = [
                'januari', 'februari', 'maart', 'april', 'mei', 'juni',
                'juli', 'augustus', 'september', 'oktober', 'november', 'december'
            ];

            const parts = dateString.split(' ');
            const day = parseInt(parts[1]);
            const month = months.indexOf(parts[2]);
            const year = parseInt(parts[3]);

            return new Date(year, month, day);
        }

    },
}
</script>
