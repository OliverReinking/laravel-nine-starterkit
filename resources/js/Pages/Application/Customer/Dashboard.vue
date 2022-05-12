<template>
    <customer-layout>
        <breadcrumb
            :application-name="$page.props.applications.app_customer"
            :start-page="true"
        ></breadcrumb>

        <page-title>
            Herzlich Willkommen im Dashboard für Kunden!
        </page-title>
    </customer-layout>
</template>
<script>
import { defineComponent } from "vue";

import CustomerLayout from "@/Pages/Application/Customer/Shared/Layout";
import Breadcrumb from "@/Pages/Components/Breadcrumb";

import PageTitle from "@/Pages/Components/Content/PageTitle";

export default defineComponent({
    name: "Customer_Dashboard",

    components: {
        CustomerLayout,
        Breadcrumb,
        PageTitle
    },
});
</script>
