<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-2 text-white dark:text-gray-800 bg-green-500 dark:bg-white border border-transparent rounded-md font-semibold text-xs tracking-widest hover:bg-green-700 dark:hover:bg-gray-400 active:bg-green-700 dark:active:bg-gray-300 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-700 disabled:opacity-25 transition cursor-pointer"
    >
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: "Form_InputButton",

    props: {
        type: {
            type: String,
            default: "submit",
        },
    },
};
</script>
