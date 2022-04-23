<template>
    <div>
        <template v-if="displayType == $page.props.navtype.nav_header">
            <dropdown-link
                v-if="
                    $page.props.user.is_admin &&
                    applicationName != $page.props.applications.app_admin
                "
                route-name="admin.dashboard"
                :with-route="true"
            >
                {{ $page.props.applications.app_admin_name }}
            </dropdown-link>
            <dropdown-link
                v-if="
                    $page.props.user.is_employee &&
                    applicationName != $page.props.applications.app_employee
                "
                route-name="employee.dashboard"
                :with-route="true"
            >
                {{ $page.props.applications.app_employee_name }}
            </dropdown-link>
            <dropdown-link
                v-if="
                    $page.props.user.is_customer &&
                    applicationName != $page.props.applications.app_customer
                "
                route-name="customer.dashboard"
                :with-route="true"
            >
                {{ $page.props.applications.app_customer_name }}
            </dropdown-link>
        </template>
        <template v-else-if="displayType == $page.props.navtype.nav_sidebar">
            <sidebar-link
                v-if="
                    $page.props.user.is_admin &&
                    applicationName != $page.props.applications.app_admin
                "
                route-name="admin.dashboard"
                icon="icon-view-grid"
                :label="$page.props.applications.app_admin_name"
            >
            </sidebar-link>
            <sidebar-link
                v-if="
                    $page.props.user.is_employee &&
                    applicationName != $page.props.applications.app_employee
                "
                route-name="employee.dashboard"
                icon="icon-view-grid"
                :label="$page.props.applications.app_employee_name"
            >
            </sidebar-link>
            <sidebar-link
                v-if="
                    $page.props.user.is_customer &&
                    applicationName != $page.props.applications.app_customer
                "
                route-name="customer.dashboard"
                icon="icon-view-grid"
                :label="$page.props.applications.app_customer_name"
            >
            </sidebar-link>
        </template>
        <template v-else>
            <div>Unerlaubter Aufruf der Komponente ApplicationSwitch.</div>
        </template>
    </div>
</template>
<script>
import DropdownLink from "@/Pages/Components/DropdownLink.vue";
import SidebarLink from "@/Pages/Components/SidebarLink.vue";

export default {
    components: {
        DropdownLink,
        SidebarLink,
    },
    //
    props: {
        displayType: {
            type: String,
            default: "", // header or sidebar
        },
        applicationName: {
            type: String,
            default: "", // customer, employee or admin
        },
    },
};
</script>
