<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import NewBlog from '@/components/NewBlog.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">

                        <!-- Create new blog button -->

                        <div class="flex items-center">
                            <button @click="createBlog = true; blogCreated = false"
                                v-if="createBlog == false"
                                class="px-3 py-4 mr-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Create
                                new blog</button>
    
                            <div v-if="blogCreated == true">
                                Blog succesvol aangemaakt!
                            </div>
                        </div>

                        <div v-if="createBlog == true">

                            <NewBlog
                                @close="createBlog = false; blogCreated = true">
                            </NewBlog>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>

export default {
    name: 'Dashboard',
    data() {
        return {
            createBlog: false,
            blogCreated: false,
        }
    },


    methods: {
    }
}


</script>
