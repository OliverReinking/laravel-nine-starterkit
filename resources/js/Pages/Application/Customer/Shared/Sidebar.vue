<template>
    <div class="flex">
        <!-- Backdrop -->
        <div
            :class="isSidebarOpen ? 'block' : 'hidden'"
            @click="closeSidebar"
            class="fixed inset-0 z-20 transition-opacity bg-green-500 opacity-50"
        ></div>
        <!-- End Backdrop -->

        <transition name="slide-fade">
            <div
                v-if="isSidebarOpen"
                class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto bg-gray-200 dark:bg-gray-800"
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
                        route-name="customer.dashboard"
                        label="Dashboard"
                    ></sidebar-link>
                    <application-switch
                        v-if="
                            $page.props.user.is_admin ||
                            $page.props.user.is_customer
                        "
                        :display-type="$page.props.navtype.nav_sidebar"
                        :application-name="
                            $page.props.applications.app_customer
                        "
                    />
                </nav>
            </div>
        </transition>
    </div>
</template>

<script>
import { defineComponent } from "vue";

import SidebarLink from "@/Pages/Components/SidebarLink";
import ApplicationSwitch from "@/Pages/Components/ApplicationSwitch.vue";

import CompanyName from "@/Pages/Components/Content/CompanyName";

export default defineComponent({
    name: "Customer_Sidebar",

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
<style>
.slide-fade-enter-active {
    transition: all 0.8s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.8s ease-in;
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(-100%);
    opacity: 1;
}
</style>
