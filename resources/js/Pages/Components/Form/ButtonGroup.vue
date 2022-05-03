<template>
    <div class="w-full flex flex-wrap items-center gap-4" :class="align">
        <slot></slot>
    </div>
</template>
<script>
export default {
    name: "Form_ButtonGroup",

    props: {
        align: {
            type: String,
            default: "justify-center md:justify-end",
        },
    },
};
</script>
