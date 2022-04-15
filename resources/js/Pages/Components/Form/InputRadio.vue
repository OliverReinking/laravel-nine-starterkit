<template>
    <div class="flex mb-1" :class="styleRadio">
        <div
            v-for="option in options"
            :key="option.value"
            class="flex items-center"
        >
            <input
                :id="option.value"
                type="radio"
                :name="option.value"
                :value="option.value"
                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                :checked="option.value === modelValue"
                @change="$emit('update:modelValue', option.value)"
            />
            <label
                :for="option.value"
                class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
                {{ option.label }}
            </label>
        </div>
    </div>
</template>
<script>
import { computed } from "vue";
export default {
    name: "InputRadio",

    props: {
        modelValue: {
            type: [String, Number],
            default: "",
        },
        options: {
            type: [Array, Object],
            required: true,
        },
        vertical: {
            type: Boolean,
            required: false,
        },
    },

    emits: ["update:modelValue"],

    setup(props) {
        const styleRadio = computed(function () {
            if (props.vertical) {
                return "flex-col items-start gap-4";
            }
            //
            return "flex-wrap flex-row items-start gap-4";
        });

        return {
            styleRadio
        };
    },
};
</script>
