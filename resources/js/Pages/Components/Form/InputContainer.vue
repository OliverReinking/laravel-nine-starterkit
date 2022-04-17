<template>
    <div class="mb-1" :class="[fullWith ? 'col-span-2' : '']">
        <slot></slot>
    </div>
</template>
<script>
export default {
    name: "Form_InputContainer",

    props: {
        fullWith: {
            type: Boolean,
            required: false,
        },
    },
};
</script>
