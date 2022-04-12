<template>
    <homepage-layout>
        <h1
            class="font-logo text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-5xl sm:leading-none"
        >
            Seite nicht gefunden!
        </h1>
    </homepage-layout>
</template>
<script>
import { defineComponent } from "vue";
import HomepageLayout from "@/Pages/Application/Homepage/Shared/Layout";

export default defineComponent({
    name: "Homepage_NoPageFound",

    components: {
        HomepageLayout,
    },
});
</script>
