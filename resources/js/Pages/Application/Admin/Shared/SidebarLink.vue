<template>
    <Link
        :href="route(routeName)"
        class="flex items-center px-6 py-2 mt-2 transition duration-1000 transform"
        :class="[route().current(routeName) ? activeClass : inactiveClass]"
    >
        <component v-bind:is="icon" class="w-5 h-5" />
        <span class="mx-4">{{ label }}</span>
    </Link>
</template>
<script>
import { defineComponent, ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

import IconChartBar from "@/Pages/Components/Icons/ChartBar";
import IconChartPie from "@/Pages/Components/Icons/ChartPie";
import IconCollection from "@/Pages/Components/Icons/Collection";
import IconNewspaper from "@/Pages/Components/Icons/Newspaper";
import IconUsers from "@/Pages/Components/Icons/Users";

export default defineComponent({
    name: "Admin_SidebarLink",
    //
    components: {
        Link,
        IconChartBar,
        IconChartPie,
        IconCollection,
        IconNewspaper,
        IconUsers,
    },

    props: {
        icon: {
            type: String,
            default: null,
        },
        label: {
            type: String,
            required: true,
        },
        routeName: {
            type: String,
            required: true,
        },
    },

    setup(props) {
        const activeClass = ref(
            "bg-gray-500 dark:bg-gray-600 text-gray-200 dark:text-gray-200 border-l-4 border-green-500"
        );
        const inactiveClass = ref(
            "bg-gray-200 dark:bg-gray-800 text-gray-500 dark:text-white border-l-4 border-transparent hover:bg-gray-500 dark:hover:bg-gray-500 hover:text-white dark:hover:text-white hover:border-green-500"
        );

        return {
            activeClass,
            inactiveClass,
        };
    },
});
</script>
