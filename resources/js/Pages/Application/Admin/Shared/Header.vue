<template>
    <header
        class="flex items-center justify-between px-6 py-4 transition duration-1000 transform bg-gray-100 dark:bg-gray-900 border-b-2 border-gray-200 dark:border-gray-600"
    >
        <div class="flex items-center">
            <button
                @click="openSidebar"
                class="text-gray-500 focus:outline-none lg:hidden"
            >
                <icon-menu class="w-5 h-5 mt-2"></icon-menu>
            </button>
        </div>
        <div class="flex items-center">
            <ul
                class="flex flex-row items-center space-x-4 md:flex-row md:flex-nowrap md:space-x-8 md:text-sm md:font-medium"
            >
                <li>
                    <button-change-mode
                        :mode="mode"
                        @changeMode="changeDarkLight"
                    ></button-change-mode>
                </li>
                <li class="hidden md:block">
                    <header-link
                        label="Dashboard"
                        route-name="admin.dashboard"
                    ></header-link>
                </li>
            </ul>
        </div>
    </header>
</template>
<script>
import { defineComponent } from "vue";

import HeaderLink from "@/Pages/Application/Admin/Shared/HeaderLink";
import ButtonChangeMode from "@/Pages/Components/ButtonChangeMode";
import IconMenu from "@/Pages/Components/Icons/Menu";

export default defineComponent({
    name: "Admin_Header",

    components: {
        HeaderLink,
        ButtonChangeMode,
        IconMenu,
    },

    props: {
        mode: {
            type: String,
            required: true,
        },
        isSidebarOpen: {
            type: Boolean,
            required: true,
        },
    },

    emits: ["changeSidebarValue", "changeDarkLight"],

    setup(props, context) {

        function openSidebar() {
            console.log("Admin Header.vue openSidebar");
            context.emit("changeSidebarValue", true);
        }
        //
        function changeDarkLight(value) {
            console.log("Admin Header.vue changeDarkLight:", value);
            localStorage.theme = value;
            context.emit("changeDarkLight", value);
        }
        //
        return {
            openSidebar,
            changeDarkLight
        };
    },
});
</script>
