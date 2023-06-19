<script setup>
import axios from 'axios';
// fs

</script>

<template>
    <div>
        <h1>New Blog</h1>
        <!-- form with title, description use tailwind -->
        <form @submit.prevent="createBlog">
            <div class="mb-6">
                <label for="title"
                    class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Title</label>
                <input v-model="title" type="text" name="title" id="title"
                    placeholder="Your title"
                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
            </div>
            <div class="mb-6">
                <label for="description"
                    class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Description</label>
                <textarea v-model="description" rows="5" name="description"
                    id="description" placeholder="Your description"
                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent"></textarea>
            </div>
            <div class="mb-6">
                <button type="submit"
                    class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: '',
            description: '',
        }
    },
    methods: {
        checkAndSendNewBlog(blog) {
            /**
             * Plan:
             * The backup file is a json file with an array of blogs that were created but unable to be send the the webhook.site
             * First check if the backup file exists
             * If it does, read the file
             * If it doesn't, create the file
             * 
             * 
             * Then check if webhook.site is available
             * If it is, send the blog
             * If it isn't, add the blog to the backup file
             * 
             * If the backup file is not empty, try to send the blogs in the backup file
             * If it succeeds, delete the backup file
             * If it fails, keep the backup file
             * 
             * If the backup file is empty, do nothing
             */
            try {
                axios.post('https://webhook.site/be424fc7-9f17-42fd-b1fd-35ab50556bb3', blog)
                    .then(response => {
                        console.log(response);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            } catch (error) {
                console.error(error);
            }
        },
        createBlog() {
            const newBlog = {
                title: this.title,
                description: this.description,
                date: new Date().toISOString().slice(0, 10),
            }

            axios.post('/api/blog/create', {
                title: this.title,
                description: this.description,
            })
                .then(response => {
                    const blog = response.data;
                    console.log(blog);
                    this.checkAndSendNewBlog(newBlog);

                    this.$emit('close');
                })
                .catch(error => {
                    console.error(error);
                });
        },
    }
}
</script>
