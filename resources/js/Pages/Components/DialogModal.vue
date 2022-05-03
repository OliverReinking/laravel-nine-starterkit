<template>
    <modal
        :show="show"
        :max-width="maxWidth"
        :closeable="closeable"
        @close="close"
    >
        <div class="px-6 py-4">
            <div class="text-lg">
                <slot name="title"> </slot>
            </div>

            <slot name="loading"> </slot>

            <div class="mt-4">
                <slot name="content"> </slot>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-100 dark:bg-gray-800 text-right">
            <slot name="footer"> </slot>
        </div>
    </modal>
</template>

<script>
import Modal from "@/Pages/Components/Modal.vue";

export default {
    name: "Component_DialogModal",

    emits: ["close"],

    components: {
        Modal,
    },

    props: {
        show: {
            default: false,
        },
        maxWidth: {
            default: "2xl",
        },
        closeable: {
            default: true,
        },
    },

    methods: {
        close() {
            this.$emit("close");
        },
    },
};
</script>
