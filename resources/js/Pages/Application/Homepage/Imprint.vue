<template>
    <homepage-layout>
        <div class="max-w-4xl p-6 mx-auto text-gray-700 dark:text-white bg-gray-50 dark:bg-gray-700 rounded-md shadow-md">
            <markdown :markdown="imprint"></markdown>
        </div>
    </homepage-layout>
</template>
<script>
import { defineComponent } from "vue";
import HomepageLayout from "@/Pages/Application/Homepage/Shared/Layout";

import Markdown from "@/Pages/Components/Content/Markdown";

export default defineComponent({
    name: "Homepage_Imprint",

    props: {
        imprint: {
            type: String,
            required: true,
        },
    },

    components: {
        HomepageLayout,
        Markdown,
    },
});
</script>
