<template>
    <div class="flex h-screen bg-gray-200 dark:bg-gray-700" :class="mode">
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
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white text-gray-900 dark:bg-gray-700 dark:text-gray-100">
                <div class="container px-6 py-8">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
<script>
import { defineComponent, ref } from "vue";

import AdminSidebar from "@/Pages/Application/Admin/Shared/Sidebar";
import AdminHeader from "@/Pages/Application/Admin/Shared/Header";

export default defineComponent({
    name: "Admin_Layout",

    components: {
        AdminSidebar,
        AdminHeader,
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
            console.log("Admin Layout.vue changeSidebarOpen:", newValue);
            isSidebarOpen.value = newValue;
        }
        //
        function changeMode(newValue) {
            console.log("Admin Layout.vue changeMode:", newValue);
            mode.value = newValue;
            //
            localStorage.theme = mode.value;
        }
        //
        return {
            mode,
            isSidebarOpen,
            changeSidebarOpen,
            changeMode
        };
    },
});
</script>
