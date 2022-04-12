<template>
    <button
        type="button"
        @click="changeMode"
        class="block py-2 pr-4 pl-3 cursor-pointer whitespace-nowrap mt-2 text-gray-500 dark:text-gray-50 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-green-500 dark:hover:text-green-500 md:dark:hover:bg-transparent md:hover:bg-transparent md:p-0"
    >
        <span v-if="mode == 'light'">
            <icon-night class="w-5 h-5"></icon-night>
        </span>
        <span v-else>
            <icon-sun class="w-5 h-5"></icon-sun>
        </span>
    </button>
</template>
<script>
import { defineComponent } from "vue";

import IconNight from "@/Pages/Components/Icons/Night";
import IconSun from "@/Pages/Components/Icons/Sun";

export default defineComponent({
    name: "Component_ButtonChangeMode",

    components: {
        IconNight,
        IconSun,
    },

    emits: ["changeMode"],

    props: {
        mode: {
            type: String,
            required: true,
        },
    },

    setup(props) {
        function changeMode() {
            let value = "light";
            if (props.mode == "light") {
                value = "dark";
            }
            this.$emit("changeMode", value);
        }

        return {
            changeMode,
        };
    },
});
</script>
