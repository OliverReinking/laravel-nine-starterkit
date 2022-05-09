<template>
    <div :class="mode">
        <div
            class="relative flex h-screen bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-100"
        >
            <employee-sidebar
                :is-sidebar-open="isSidebarOpen"
                @changeSidebarValue="changeSidebarOpen"
            ></employee-sidebar>
            <div class="flex-1 flex flex-col overflow-hidden">
                <employee-header
                    :mode="mode"
                    :is-sidebar-open="isSidebarOpen"
                    @changeSidebarValue="changeSidebarOpen"
                    @changeDarkLight="changeMode"
                ></employee-header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div
                        class="container mx-auto w-full md:max-w-5xl px-2 py-4 md:px-6 md:py-8"
                    >
                        <toast class="mb-6"></toast>
                        <slot />
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
                            {{ $page.props.applications.app_employee_name }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>
<script>
import { defineComponent, ref } from "vue";

import EmployeeSidebar from "@/Pages/Application/Employee/Shared/Sidebar";
import EmployeeHeader from "@/Pages/Application/Employee/Shared/Header";

import Toast from "@/Pages/Components/Content/Toast";

export default defineComponent({
    name: "Employee_Layout",

    components: {
        EmployeeSidebar,
        EmployeeHeader,
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
