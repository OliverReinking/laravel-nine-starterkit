<template>
    <button
        :type="type"
        class="inline-flex items-center px-4 py-2 text-white dark:text-red-900 bg-red-500 dark:bg-red-100 border border-transparent rounded-md font-semibold text-xs tracking-widest hover:bg-red-700 dark:hover:bg-red-400 active:bg-red-700 dark:active:bg-red-300 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-700 disabled:opacity-25 transition cursor-pointer"
    >
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: "Form_InputDangerButton",

    props: {
        type: {
            type: String,
            default: "button",
        },
    },
};
</script>
