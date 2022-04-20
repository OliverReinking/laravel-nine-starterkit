<template>
    <admin-layout>
        <div class="font-logo text-2xl text-extrabold">
            Herzlich Willkommen im Dashboard!
        </div>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";
import AdminLayout from "@/Pages/Application/Admin/Shared/Layout";

export default defineComponent({
    name: "Admin_Dashboard",

    components: {
        AdminLayout,
    },
});
</script>
