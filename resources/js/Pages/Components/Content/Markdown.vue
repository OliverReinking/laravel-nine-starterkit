<template>
    <div class="font-sans">
        <div
            v-html="markdown"
            class="prose prose-sm md:prose-md dark:prose-invert prose-headings:font-sans prose-headings:tracking-widest prose-h1:mt-8"
        ></div>
    </div>
</template>
<script>
export default {
    name: "Markdown",
    //
    props: {
        markdown: {
            type: String,
            required: true,
        },
    },
};
</script>
