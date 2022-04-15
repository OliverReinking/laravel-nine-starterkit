<template>
    <div
        v-show="message"
        class="px-4 py-1 my-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
    >
        <span>
            {{ message }}
        </span>
    </div>
</template>

<script>
export default {
    name: "Form_InputError",
    props: {
        message: {
            tpye: String,
            default: "",
        },
    },
};
</script>
