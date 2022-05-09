<template>
    <div class="mt-4 mb-8 font-logo text-2xl text-extrabold">
        <span v-if="title">{{ title }}</span>
        <span v-else><slot></slot></span>
    </div>
</template>
<script>
export default {
    name: "Content_PageTitle",

    props: {
        title: {
            type: String,
            default: "",
        },
    },
};
</script>
