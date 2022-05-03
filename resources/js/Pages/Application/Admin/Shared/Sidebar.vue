<template>
    <div class="flex">
        <!-- Backdrop -->
        <div
            :class="isSidebarOpen ? 'block' : 'hidden'"
            @click="closeSidebar"
            class="fixed inset-0 z-20 transition-opacity bg-green-500 opacity-50 lg:hidden"
        ></div>
        <!-- End Backdrop -->

        <div
            :class="
                isSidebarOpen
                    ? 'translate-x-0 ease-out'
                    : '-translate-x-full ease-in'
            "
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-1000 transform bg-gray-200 dark:bg-gray-800 lg:translate-x-0 lg:static lg:inset-0"
        >
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <company-name
                        :with-favicon="true"
                        :with-link="true"
                        :with-slogan="false"
                        route-name="home"
                    ></company-name>
                </div>
            </div>

            <nav class="mt-10">
                <sidebar-link
                    icon="icon-chart-bar"
                    route-name="admin.dashboard"
                    label="Dashboard"
                ></sidebar-link>
                <sidebar-link
                    icon="icon-users"
                    route-name="admin.user.index"
                    label="Anwender"
                ></sidebar-link>
                <sidebar-link
                    icon="icon-collection"
                    route-name="admin.processes"
                    label="Prozesse"
                ></sidebar-link>
                <sidebar-link
                    icon="icon-newspaper"
                    route-name="admin.blog"
                    label="Blog"
                ></sidebar-link>
                <sidebar-link
                    icon="icon-chart-pie"
                    route-name="admin.statistics"
                    label="Statistik"
                ></sidebar-link>
                <sidebar-link
                    icon="icon-document-text"
                    route-name="admin.documentation"
                    label="Dokumentation"
                ></sidebar-link>
                <application-switch
                    class="lg:hidden"
                    :display-type="$page.props.navtype.nav_sidebar"
                    :application-name="$page.props.applications.app_admin"
                />
            </nav>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";

import SidebarLink from "@/Pages/Components/SidebarLink";
import ApplicationSwitch from "@/Pages/Components/ApplicationSwitch.vue";

import CompanyName from "@/Pages/Components/Content/CompanyName";

export default defineComponent({
    name: "Admin_Sidebar",

    components: {
        SidebarLink,
        ApplicationSwitch,
        CompanyName,
    },

    props: {
        isSidebarOpen: {
            type: Boolean,
            required: true,
        },
    },

    emits: ["changeSidebarValue"],

    setup(props) {
        function closeSidebar() {
            if (props.isSidebarOpen) {
                this.$emit("changeSidebarValue", false);
            }
        }
        //
        return {
            closeSidebar,
        };
    },
});
</script>
