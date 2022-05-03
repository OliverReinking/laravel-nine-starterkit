<template>
    <div class="mt-6 md:mt-2 md:grid md:grid-cols-3 md:gap-6">
        <section-title>
            <template #title><slot name="title"></slot></template>
            <template #description><slot name="description"></slot></template>
            <template #onlinehelp><slot name="onlinehelp"></slot></template>
        </section-title>

        <div class="mt-2 md:mt-0 md:col-span-2">
            <div class="md:px-4 md:py-5 bg-transparent sm:bg-gray-50 dark:sm:bg-gray-900 sm:p-6 sm:shadow sm:rounded-md">
                <slot name="content"></slot>
            </div>
        </div>
    </div>
</template>

<script>
import SectionTitle from "@/Pages/Components/Content/SectionTitle.vue";

export default {
    name: "Content_SectionContent",

    components: {
        SectionTitle,
    },
};
</script>
