<template>
    <admin-layout>
        <profile :sessions="sessions"></profile>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";
import AdminLayout from "@/Pages/Application/Admin/Shared/Layout";
import Profile from "@/Pages/Components/Profile";

export default defineComponent({
    name: "Admin_Profile",

    components: {
        AdminLayout,
        Profile
    },

    props: {
        sessions: {
            type: Object,
            default: () => ({}),
        }
    }
});
</script>
