<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<template>
    <AppLayout title="Blogs">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ blog.title }}
                <span
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    {{ blog.date }}
                </span>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <div>
                            <div role="button" @click="$inertia.visit('/blogs')"
                                class="mb-4 text-gray-400 transition-all focus:outline-none">&#60; Terug naar alle blogs</div>

                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{ blog.title }}
                            </h5>
                            <p class="mb-2 text-sm font-medium text-gray-600 ">
                                {{ blog.date }}
                            </p>
                            <p class="font-normal text-gray-700">
                                {{ blog.description }}
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- delete button -->
                    <button @click="deleteBlog(blog.id)"
                        v-if="$page.props.auth.user"
                        class=" px-3 py-4 mt-5 text-white bg-red-500 rounded-md focus:bg-red-600 hover:bg-red-600 transition-all focus:outline-none">Verwijder
                        blog</button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    data() {
        return {
            blog: [],
            id: this.$page.props.id,
        }
    },
    async mounted() {
        try {
            const response = await axios.get('/api/blog/' + this.id);
            this.blog = response.data;
            console.log(response);
        } catch (error) {
            console.log(error);
        }
    },

    methods: {
        deleteBlog(id) {
            if (confirm("Weet je zeker dat je deze blog wilt verwijderen?")) {

                axios.delete('/api/blog/delete/' + id)
                    .then((response) => {
                        console.log(response);
                        this.$inertia.visit('/blogs');
                    }, (error) => {
                        console.log(error);
                    });
            }
        }
    }
}
</script>
