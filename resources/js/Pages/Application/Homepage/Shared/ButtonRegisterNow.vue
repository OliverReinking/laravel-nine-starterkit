<template>
    <button
        type="button"
        class="hidden lg:block text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600
               hover:bg-gradient-to-br focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800
               font-medium rounded-lg text-sm px-5 py-2.5 text-center"
    >
        <Link
            :href="route('register')"
        >
            Jetzt registrieren</Link
        >
    </button>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: "Homepage_ButtonRegisterNow",
    //
    components: {
        Link,
    },
};
</script>
