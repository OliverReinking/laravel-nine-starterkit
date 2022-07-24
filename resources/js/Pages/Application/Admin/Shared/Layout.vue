<template>
    <div :class="mode">
        <div
            class="relative flex h-screen bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-100"
        >
            <admin-sidebar
                :is-sidebar-open="isSidebarOpen"
                @changeSidebarValue="changeSidebarOpen"
            ></admin-sidebar>
            <div class="flex-1 flex flex-col overflow-hidden">
                <admin-header
                    :mode="mode"
                    :is-sidebar-open="isSidebarOpen"
                    @changeSidebarValue="changeSidebarOpen"
                    @changeDarkLight="changeMode"
                ></admin-header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div class="container px-6 py-8">
                        <toast class="mb-6"></toast>
                        <div class="mb-6">
                            <slot />
                        </div>
                    </div>
                    <div
                        class="fixed bottom-0 left-0 right-0 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 border-t border-sunprimary"
                    >
                        <div
                            class="lg:mr-12 p-2 text-center lg:text-right text-xs"
                        >
                            Version: {{ $page.props.version.versionnr }} vom
                            {{ $page.props.version.versionsdatum }}
                            <br />
                            {{ $page.props.applications.app_admin_name }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>
<script>
import { defineComponent, ref } from "vue";

import AdminSidebar from "@/Pages/Application/Admin/Shared/Sidebar";
import AdminHeader from "@/Pages/Application/Admin/Shared/Header";

import Toast from "@/Pages/Components/Content/Toast";

export default defineComponent({
    name: "Admin_Layout",

    components: {
        AdminSidebar,
        AdminHeader,
        Toast,
    },

    setup() {
        const mode = ref("light");
        const isSidebarOpen = ref(false);
        //
        if (localStorage.theme) {
            mode.value = localStorage.theme;
        }
        //
        function changeSidebarOpen(newValue) {
            isSidebarOpen.value = newValue;
        }
        //
        function changeMode(newValue) {
            mode.value = newValue;
            //
            localStorage.theme = mode.value;
        }
        //
        return {
            mode,
            isSidebarOpen,
            changeSidebarOpen,
            changeMode,
        };
    },
});
</script>
