<template>
    <employee-layout>
        <breadcrumb
            :application-name="$page.props.applications.app_employee"
            :start-page="true"
        ></breadcrumb>

        <page-title>
            Herzlich Willkommen im Dashboard für Mitarbeiter!
        </page-title>
    </employee-layout>
</template>
<script>
import { defineComponent } from "vue";

import EmployeeLayout from "@/Pages/Application/Employee/Shared/Layout";
import Breadcrumb from "@/Pages/Components/Breadcrumb";

import PageTitle from "@/Pages/Components/Content/PageTitle";

export default defineComponent({
    name: "Employee_Dashboard",

    components: {
        EmployeeLayout,
        Breadcrumb,
        PageTitle
    },
});
</script>
