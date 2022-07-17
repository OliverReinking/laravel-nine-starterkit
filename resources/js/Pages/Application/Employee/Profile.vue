<template>
    <admin-layout>
        <profile :sessions="sessions"></profile>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";
import AdminLayout from "@/Pages/Application/Employee/Shared/Layout";
import Profile from "@/Pages/Components/Profile";

export default defineComponent({
    name: "Employee_Profile",

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
