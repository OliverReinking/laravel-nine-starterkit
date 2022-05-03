<template>
    <admin-layout>
        <breadcrumb
            :application-name="$page.props.applications.app_admin"
            current="Dokumentation"
        ></breadcrumb>

        <div class="mt-8">
            <markdown :markdown="documentation"></markdown>
        </div>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout";
import Breadcrumb from "@/Pages/Components/Breadcrumb";

import Markdown from "@/Pages/Components/Content/Markdown";

export default defineComponent({
    name: "Admin_Documentation",

    components: {
        AdminLayout,
        Breadcrumb,
        Markdown
    },

     props: {
        documentation: {
            type: String,
            required: true,
        },
    },

});
</script>
