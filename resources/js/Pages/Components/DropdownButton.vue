<template>
    <button
        type="button"
        class="inline-flex rounded-md items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900 dark:text-gray-100 bg-transparent transition active:bg-white dark:active:bg-gray-700 hover:bg-white hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-gray-100 focus:bg-white focus:text-gray-900 focus:ountline-none dark:focus:bg-gray-800 dark:focus:text-gray-100 dark:focus:ountline-none"
    >
        {{ label }}
        <icon-chevron-down class="ml-2 h-4 w-h" />
    </button>
</template>

<script>
import IconChevronDown from "@/Pages/Components/Icons/ChevronDown";

export default {
    name: "Component_DropDownButton",

    props: {
        label: {
            type: String,
            required: true,
        },
    },

    components: {
        IconChevronDown,
    },
};
</script>
