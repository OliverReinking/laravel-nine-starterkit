<template>
    <Link
        :href="route(routeName)"
        class="flex items-center px-2 py-2 mt-2 transition duration-1000 transform"
        :class="[route().current(routeName) ? activeClass : inactiveClass]"
    >
        <component v-bind:is="icon" class="w-5 h-5 mr-2" />
        <span class="text-sm mx-2">{{ label }}</span>
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
import IconViewGrid from "@/Pages/Components/Icons/ViewGrid";
import IconDocumentText from "@/Pages/Components/Icons/DocumentText";

export default defineComponent({
    name: "Component_SidebarLink",
    //
    components: {
        Link,
        IconChartBar,
        IconChartPie,
        IconCollection,
        IconNewspaper,
        IconUsers,
        IconViewGrid,
        IconDocumentText
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
            "bg-gray-400 dark:bg-gray-900 border-l-4 border-green-500"
        );
        const inactiveClass = ref(
            "bg-gray-300 dark:bg-gray-900 border-l-4 border-transparent hover:bg-gray-400 dark:hover:bg-gray-500 hover:text-gray-900 dark:hover:text-white hover:border-green-500"
        );

        return {
            activeClass,
            inactiveClass,
        };
    },
});
</script>
