<template>
    <Link
        :href="route(routeName)"
        class="block py-2 px-4 cursor-pointer whitespace-nowrap"
        :class="[
            route().current(routeName)
                ? 'text-green-500 dark:text-green-500 bg-green-200 dark:bg-gray-700 rounded md:bg-transparent dark:md:bg-transparent md:p-0'
                : 'text-gray-500 dark:text-gray-50 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-green-500 dark:hover:text-green-500 dark:md:hover:bg-transparent md:hover:bg-transparent md:p-0',
        ]"
    >
        {{ label }}</Link
    >
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    name: "Homepage_NavLink",
    //
    components: {
        Link,
    },
    //
    props: {
        label: {
            type: String,
            required: true,
        },
        routeName: {
            type: String,
            required: true,
        },
    },
};
</script>
