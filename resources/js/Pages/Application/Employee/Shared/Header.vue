<template>
    <header
        class="flex items-center justify-between px-6 py-4 transition duration-1000 transform bg-gray-200 dark:bg-gray-800 border-b-2 border-gray-200 dark:border-gray-600"
    >
        <div class="flex items-center">
            <button
                @click="openSidebar"
                class="focus:outline-none"
            >
                <icon-menu class="w-5 h-5 mt-2"></icon-menu>
            </button>
        </div>
        <div
            class="flex items-center space-x-2 md:flex-nowrap text-sm font-medium"
        >
            <div>
                <button-change-mode
                    :mode="mode"
                    @changeMode="changeDarkLight"
                ></button-change-mode>
            </div>
            <div
                v-if="
                    $page.props.user.is_admin || $page.props.user.is_customer
                "
                class="hidden lg:block"
            >
                <!-- Application Dropdown -->
                <dropdown align="right" width="96">
                    <template #trigger>
                        <dropdown-link :with-icon="true" :with-route="false"
                            >Anwendung wechseln</dropdown-link
                        >
                    </template>

                    <template #content>
                        <!-- Application Management -->
                        <div class="block px-4 py-2 text-xs">
                            Anwendung wechseln
                        </div>
                        <application-switch
                            :display-type="$page.props.navtype.nav_header"
                            :application-name="$page.props.applications.app_employee"
                        />
                    </template>
                </dropdown>
            </div>
            <div>
                <dropdown align="right" width="96">
                    <template #trigger>
                        <dropdown-link
                            v-if="$page.props.jetstream.managesProfilePhotos"
                        >
                            <img
                                class="h-8 w-8 rounded-full object-cover"
                                :src="$page.props.user.profile_photo_url"
                                :alt="$page.props.user.name"
                            />
                        </dropdown-link>
                        <dropdown-link v-else with-icon="true">
                            {{ $page.props.user.name }}
                        </dropdown-link>
                    </template>

                    <template #content>
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Meine Daten
                        </div>

                        <dropdown-link route-name="employee.profile" :with-route="true">
                            Persönliche Einstellungen
                        </dropdown-link>

                        <div class="my-2 border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form @submit.prevent="logout">
                            <dropdown-link>
                                <button type="submit">Abmelden</button>
                            </dropdown-link>
                        </form>
                    </template>
                </dropdown>
            </div>
        </div>
    </header>
</template>
<script>
import { defineComponent } from "vue";
import { Inertia } from "@inertiajs/inertia";

import ButtonChangeMode from "@/Pages/Components/ButtonChangeMode";
import IconMenu from "@/Pages/Components/Icons/Menu";

import ApplicationSwitch from "@/Pages/Components/ApplicationSwitch.vue";
import Dropdown from "@/Pages/Components/Dropdown.vue";
import DropdownLink from "@/Pages/Components/DropdownLink.vue";

export default defineComponent({
    name: "Employee_Header",

    components: {
        ButtonChangeMode,
        IconMenu,
        ApplicationSwitch,
        Dropdown,
        DropdownLink
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
            context.emit("changeSidebarValue", true);
        }
        //
        function changeDarkLight(value) {
            localStorage.theme = value;
            context.emit("changeDarkLight", value);
        }
        //
        const logout = () => {
            Inertia.post(route("logout"));
        };
        //
        return {
            openSidebar,
            changeDarkLight,
            logout,
        };
    },
});
</script>
