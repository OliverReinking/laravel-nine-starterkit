<template>
    <div :class="classes">
        <template v-if="withRoute">
            <Link :href="route(routeName)">
                <div>
                    <slot></slot>
                </div>
                <div v-if="withIcon">
                    <icon-chevron-down class="ml-2 h-4 w-h" />
                </div>
            </Link>
        </template>
        <template v-else>
            <div>
                <slot></slot>
            </div>
            <div v-if="withIcon">
                <icon-chevron-down class="ml-2 h-4 w-h" />
            </div>
        </template>
    </div>
</template>

<script>
import { computed } from "vue";

import { Link } from "@inertiajs/inertia-vue3";

import IconChevronDown from "@/Pages/Components/Icons/ChevronDown";

export default {
    name: "Component_DropdownLink",

    components: {
        Link,
        IconChevronDown,
    },

    props: {
        routeName: {
            type: String,
            default: "",
        },
        withIcon: {
            type: Boolean,
            default: false,
        },
        withRoute: {
            type: Boolean,
            default: false,
        },
    },

    setup() {
        const classes = computed(() => {
            return `flex items-center flex-nowrap
            cursor-pointer
            rounded-md px-3 py-2
            border border-transparent
            text-sm leading-4 font-medium
            text-gray-900 dark:text-gray-100
            bg-transparaent
            transition
            active:bg-white
            dark:active:bg-gray-700
            hover:bg-white hover:text-gray-900
            dark:hover:bg-gray-700 dark:hover:text-gray-100
            focus:bg-white focus:text-gray-900 focus:ountline-none
            dark:focus:bg-gray-800 dark:focus:text-gray-100 dark:focus:ountline-none`;
        });

        return {
            classes,
        };
    },
};
</script>
