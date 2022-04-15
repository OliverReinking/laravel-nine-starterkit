<template>
    <label
        :for="name"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
    >
        <span v-if="label">{{ label }}</span>
        <span v-else><slot></slot></span>
    </label>
</template>

<script>
export default {
    name: "Form_InputLabel",
    props: {
        name: {
            type: String,
            required: true,
        },
        label: {
            type: String,
            default: "",
        },
    },
};
</script>
