<template>
    <div class="mb-2 space-y-1">
        <label class="block font-thin text-xs text-gray-500 dark:text-gray-400 tracking-wider">
            <span v-if="label">{{ label }}</span>
            <span v-else><slot></slot></span>
        </label>

        <div class="font-medium text-sm md:text-base">
            <slot name="content"></slot>
        </div>
    </div>
</template>
<script>
export default {
    name: "Content_DisplayRow",

    props: {
        label: {
            type: String,
            default: ""
        },
    },
};
</script>
