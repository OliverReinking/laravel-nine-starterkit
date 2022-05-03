<template>
    <admin-layout>
        <breadcrumb
            :application-name="$page.props.applications.app_admin"
            current="Liste"
       ></breadcrumb>

        <!-- Anzeige der Anwenderlisteliste -->
        <section class="mt-4">
            <list-container
                title="Liste der Anwender"
                route-index="admin.user.index"
                :datarows="users"
                :filters="filters"
                :search-filter="true"
                search-text="Gesucht werden alle Anwender, die den Suchbegriff im Namen bzw. in der Mailadresse enthalten."
                :show-on="true"
                route-show="admin.user.show"
                :edit-on="true"
                route-edit="admin.user.edit"
            >
                <template #header>
                    <tr>
                        <th class="np-dl-th-normal">Name</th>
                        <th class="np-dl-th-normal">Mail</th>
                        <th class="np-dl-th-center">Admin?</th>
                        <th class="np-dl-th-center">Mitarbeiter?</th>
                        <th class="np-dl-th-center">Kunde?</th>
                        <th class="np-dl-th-normal">Letzte Anmeldung</th>
                    </tr>
                </template>
                <template v-slot:datarow="data">
                    <td class="np-dl-td-normal">
                        {{ data.datarow.name }}
                    </td>
                    <td class="np-dl-td-normal">
                        {{ data.datarow.email }}
                    </td>
                    <td class="np-dl-td-center">
                        <display-yes-or-no
                            :value="data.datarow.is_admin"
                        ></display-yes-or-no>
                    </td>
                    <td class="np-dl-td-center">
                        <display-yes-or-no
                            :value="data.datarow.is_employee"
                        ></display-yes-or-no>
                    </td>
                    <td class="np-dl-td-center">
                        <display-yes-or-no
                            :value="data.datarow.is_customer"
                        ></display-yes-or-no>
                    </td>
                    <td class="np-dl-td-normal">
                        <display-date
                            :value="data.datarow.last_login_at"
                            :time-on="true"
                        />
                    </td>
                </template>
            </list-container>
        </section>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout";
import Breadcrumb from "@/Pages/Components/Breadcrumb";

import ListContainer from "@/Pages/Components/Lists/ListContainer";
import DisplayDate from "@/Pages/Components/Content/DisplayDate";
import DisplayYesOrNo from "@/Pages/Components/Content/DisplayYesOrNo";

export default defineComponent({
    name: "Admin_UserList",

    components: {
        AdminLayout,
        Breadcrumb,
        ListContainer,
        DisplayDate,
        DisplayYesOrNo,
    },

    props: {
        users: {
            type: Object,
            default: () => ({}),
        },
        filters: {
            type: Object,
            default: () => ({}),
        },
    },
});
</script>
