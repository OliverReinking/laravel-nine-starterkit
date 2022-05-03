<template>
    <div
        class="flex items-center justify-center flex-wrap mt-6 -mb-1 text-xs md:text-base bg-transparent text-gray-700 dark:text-gray-300"
    >
        <template v-for="(link, key) in links" :key="key">
            <div
                v-if="link.url === null"
                :key="key"
                class="flex items-center px-3 py-1 md:py-1 mx-1 mb-1 rounded-md cursor-not-allowed"
            >
                <span v-html="link.label"></span>
            </div>
            <Link
                v-if="link.url !== null"
                :key="key"
                class="flex items-center px-3 py-1 md:py-1 mx-1 mb-1 transition-colors duration-200 transform rounded-md hover:bg-gray-200 hover:text-gray-800 dark:hover:bg-gray-600 dark:hover:text-gray-100 "
                :class="{
                    'bg-sunprimary text-on-sunprimary dark:bg-nightprimary dark:text-on-nightprimary': link.active,
                }"
                :href="link.url"
            >
                <span v-html="link.label"></span>
            </Link>
        </template>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

import IconChevronDoubleLeft from "@/Pages/Components/Icons/ChevronDoubleLeft";
import IconChevronDoubleRight from "@/Pages/Components/Icons/ChevronDoubleRight";
//
export default {
    //
    components: {
        Link,
        IconChevronDoubleLeft,
        IconChevronDoubleRight,
    },
    //
    props: {
        links: Array,
    },
};
</script>
