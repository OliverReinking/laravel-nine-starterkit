<template>
    <admin-layout>

        <breadcrumb
            :application-name="$page.props.applications.app_admin"
            :start-page="true"
        ></breadcrumb>

        <page-title>
            Herzlich Willkommen im Dashboard für Administratoren!
        </page-title>

        <div class="mt-8 grid gap-6 mb-8 md:grid-cols-2 2xl:grid-cols-4 items-stretch">
            <statistic-value
                :with-link="false"
                :with-icon="true"
                icon="icon-users"
                label="Anzahl der Anwender"
                value-type="number"
                :after-digits="0"
                value-unit="Anwender"
                :value="counts.users"
            ></statistic-value>
            <statistic-value
                :with-link="false"
                :with-icon="true"
                icon="icon-users"
                label="Anzahl der Kunden"
                value-type="number"
                :after-digits="0"
                value-unit="Kunden"
                :value="counts.customers"
            ></statistic-value>
            <statistic-value
                :with-link="false"
                :with-icon="true"
                icon="icon-users"
                label="Anzahl der Mitarbeiter"
                value-type="number"
                :after-digits="0"
                value-unit="Mitarbeiter"
                :value="counts.employees"
            ></statistic-value>
            <statistic-value
                :with-link="false"
                :with-icon="true"
                icon="icon-users"
                label="Anzahl der Administratoren"
                value-type="number"
                :after-digits="0"
                value-unit="Administratoren"
                :value="counts.admins"
            ></statistic-value>
        </div>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout";
import Breadcrumb from "@/Pages/Components/Breadcrumb";

import PageTitle from "@/Pages/Components/Content/PageTitle";

import StatisticValue from "@/Pages/Components/Content/StatisticValue";

export default defineComponent({
    name: "Admin_Dashboard",

    components: {
        AdminLayout,
        Breadcrumb,
        PageTitle,
        StatisticValue,
    },

    props: {
        counts: {
            type: Object,
            default: () => ({}),
        },
    },
});
</script>
