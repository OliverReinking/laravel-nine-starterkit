<template>
    <admin-layout>
        <breadcrumb
            :application-name="$page.props.applications.app_admin"
            current="Anzeige"
            :breadcrumbs="{
                Liste: route('admin.user.index'),
                Edit: route('admin.user.edit', appuser.id),
            }"
        ></breadcrumb>

        <page-title>
            Anzeige Anwender
        </page-title>

        <section-content>
            <template #title>Anwenderdaten</template>
            <template #description
                >Hier werden alle Daten des Anwenders angezeigt</template
            >
            <template #content>
                <display-row label="Name">
                    <template #content>
                        {{ appuser.name }}
                    </template>
                </display-row>
                <display-row label="Mailadresse">
                    <template #content>
                        {{ appuser.email }}
                    </template>
                </display-row>
                <display-row label="Letzte Anmeldung">
                    <template #content>
                        <display-date
                            :value="appuser.last_login_at"
                            :time-on="true"
                        />
                    </template>
                </display-row>
            </template>
        </section-content>

        <section-border></section-border>

        <section-content>
            <template #title>Anwendungen</template>
            <template #description
                >Hier wird angezeigt, welche Anwendungen der Anwender nutzen
                darf und welche nicht.</template
            >
            <template #content>
                <display-row label="Anwendung Administrator">
                    <template #content>
                        <display-yes-or-no
                            :value="appuser.is_admin"
                        ></display-yes-or-no>
                    </template>
                </display-row>
                <display-row label="Anwendung Mitarbeiter">
                    <template #content>
                        <display-yes-or-no
                            :value="appuser.is_employee"
                        ></display-yes-or-no>
                    </template>
                </display-row>
                <display-row label="Anwendung Kunde">
                    <template #content>
                        <display-yes-or-no
                            :value="appuser.is_customer"
                        ></display-yes-or-no>
                    </template>
                </display-row>
            </template>
        </section-content>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout";
import Breadcrumb from "@/Pages/Components/Breadcrumb";

import PageTitle from "@/Pages/Components/Content/PageTitle";

import SectionContent from "@/Pages/Components/Content/SectionContent";
import SectionBorder from "@/Pages/Components/Content/SectionBorder";

import DisplayRow from "@/Pages/Components/Content/DisplayRow";
import DisplayDate from "@/Pages/Components/Content/DisplayDate";
import DisplayYesOrNo from "@/Pages/Components/Content/DisplayYesOrNo";

export default defineComponent({
    name: "Admin_UserShow",

    components: {
        AdminLayout,
        Breadcrumb,
        PageTitle,
        SectionContent,
        SectionBorder,
        DisplayRow,
        DisplayDate,
        DisplayYesOrNo,
    },

    props: {
        appuser: {
            type: Object,
            default: () => ({}),
        },
    },
});
</script>
