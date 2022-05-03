<template>
    <div class="md:col-span-1">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <slot name="title"></slot>
        </h3>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            <slot name="description"></slot>
        </p>
        <p class="mt-1 text-sm text-gray-400 dark:text-gray-600">
            <slot name="onlinehelp"></slot>
        </p>
    </div>
</template>
<script>
export default {
    name: "Content_SectionTitle",
};
</script>
