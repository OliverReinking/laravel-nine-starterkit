<template>
    <div v-if="value == true || value == 1 || value == '1'">Ja</div>
    <div v-else>Nein</div>
</template>
<script>
export default {
    name: "Content_YesOrNo",

    props: {
        value: {
            type: [Boolean, Number, String],
            default: false,
        },
    },
};
</script>
