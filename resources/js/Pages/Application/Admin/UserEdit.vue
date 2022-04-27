<template>
    <admin-layout>
        <div class="mt-4 font-logo text-2xl text-extrabold">
            Aktualisierung der Anwenderdaten
        </div>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout";

export default defineComponent({
    name: "Admin_UserShow",

    components: {
        AdminLayout,
    },

    props: {
        appuser: {
            type: Object,
            default: () => ({}),
        },
    },
});
</script>
