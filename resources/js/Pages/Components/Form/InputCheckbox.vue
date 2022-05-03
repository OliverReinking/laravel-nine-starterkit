<template>
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input
                :id="name"
                type="checkbox"
                class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                :checked="modelValue"
                @change="$emit('update:modelValue', $event.target.checked)"
            />
        </div>
        <div class="ml-3 text-sm">
            <label
                :for="name"
                class="font-medium text-gray-700 dark:text-gray-300"
            >
                <span v-if="label">{{ label }}</span>
                <span v-else><slot></slot> </span>
            </label>
        </div>
    </div>
</template>

<script>
export default {
    name: "Form_InputCheckbox",

    emits: ["update:checked"],

    props: {
        name: {
            type: String,
            required: true,
        },
        modelValue: {
            type: [Boolean, Number],
            default: false,
        },
        label: {
            type: String,
            default: "",
        },
    },
};
</script>
