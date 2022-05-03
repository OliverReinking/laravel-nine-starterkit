<template>
    <button
        type="button"
        @click="changeMode"
        class="w-full block py-2 px-3 cursor-pointer whitespace-nowrap text-gray-500 dark:text-gray-50 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-green-500 dark:hover:text-green-500 dark:md:hover:bg-transparent md:hover:bg-transparent"
    >
        <div v-if="mode == 'light'">
            <icon-night class="w-5 h-5"></icon-night>
        </div>
        <div v-else>
            <icon-sun class="w-5 h-5"></icon-sun>
        </div>
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
