<template>
    <h3 class="mt-4 text-lg font-semibold">
        <span v-if="title">{{ title }}</span>
        <span v-else><slot></slot></span>
    </h3>
</template>

<script>
export default {
    name: "Form_InputSubtitle",
    props: {
        title: {
            type: String,
            default: "",
        },
    },
};
</script>
