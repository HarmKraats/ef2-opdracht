<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <Link :href="route('blog.detail', blog.id)"
        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ blog.title }}
        </h5>
        <!-- small subtitle -->
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            {{ blog.date }}
        </p>
        <p class="font-normal text-gray-700 dark:text-gray-400">
            {{ blog.description }}
        </p>
    </Link>
</template>

<script>
export default {
    data() {
        return {
        }
    },
    props: {
        blog: {
            type: Object,
            required: true
        }
    },
}
</script>
