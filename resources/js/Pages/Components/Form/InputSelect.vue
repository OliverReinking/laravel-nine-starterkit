<template>
    <select
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        :value="modelValue"
        @change="$emit('update:modelValue', $event.target.value)"
        ref="input"
    >
        <option
            v-for="option in options"
            :value="option.value"
            :key="option.value"
            :selected="option.value === modelValue"
        >
            {{ option.label }}
        </option>
    </select>
</template>
<script>
export default {
    name: "InputSelect",

    props: {
        modelValue: {
            type: [String, Number],
            default: "",
        },
        options: {
            type: [Array, Object],
            required: true,
        },
    },

    emits: ["update:modelValue"],

    methods: {
        focus() {
            this.$refs.input.focus();
        },
    },
};
</script>
