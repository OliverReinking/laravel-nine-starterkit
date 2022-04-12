<template>
    <Link
        :href="route(routeName)"
        class="inline-block hover:underline"
    >
        {{ label }}</Link
    >
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    name: "Homepage_FooterLink",
    //
    components: {
        Link,
    },
    //
    props: {
        label: {
            type: String,
            required: true,
        },
        routeName: {
            type: String,
            required: true,
        },
    },
};
</script>
