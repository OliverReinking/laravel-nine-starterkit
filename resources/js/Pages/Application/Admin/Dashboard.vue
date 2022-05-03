<template>
    <admin-layout>
        <div class="mt-4 font-logo text-2xl text-extrabold">
            Herzlich Willkommen im Dashboard für Administratoren!
        </div>
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
import StatisticValue from "@/Pages/Components/Content/StatisticValue";

export default defineComponent({
    name: "Admin_Dashboard",

    components: {
        AdminLayout,
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
