<template>
    <!-- Toast -->
    <div v-if="message && show" class="max-w-4xl mx-auto">
        <div
            class="flex items-center w-full p-4 mb-4 rounded-lg shadow text-gray-800 dark:text-gray-200"
            :class="[type == 'success' ? 'bg-green-100 dark:bg-green-800' : 'bg-red-100 dark:bg-red-800']"
            role="alert"
        >
            <div
                v-if="type == 'success'"
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg text-gray-900 dark:text-white bg-green-200 dark:bg-green-500"
            >
                <icon-done class="w-5 h-5"></icon-done>
            </div>
            <div
                v-if="type == 'error'"
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg text-gray-900 dark:text-white bg-red-500 dark:bg-red-500"
            >
                <icon-exclamation class="w-5 h-5"></icon-exclamation>
            </div>
            <div class="ml-3 text-sm font-normal">
                <span v-html="message"></span>
            </div>
            <button
                type="button"
                class="ml-auto -mx-1.5 -my-1.5 text-gray-800 dark:text-gray-200 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:hover:text-white dark:hover:bg-gray-700"
                :class="[type == 'success' ? 'bg-green-200 dark:bg-green-500' : 'bg-red-200 dark:bg-red-500']"
                @click.prevent="show = false"
            >
                <span class="sr-only">Close</span>
                <icon-close class="w-5 h-5"></icon-close>
            </button>
        </div>
    </div>
    <!-- ENDS Toast -->
</template>
<script>
import IconDone from "@/Pages/Components/Icons/Done";
import IconExclamation from "@/Pages/Components/Icons/Exclamation";
import IconClose from "@/Pages/Components/Icons/Close";

export default {
    name: "Content_Toast",

    components: {
        IconDone,
        IconExclamation,
        IconClose,
    },

    data() {
        return {
            show: true,
            type: "success",
            message: null,
        };
    },
    //
    watch: {
        "$page.props.flash": {
            handler() {
                if (this.$page.props.flash.error) {
                    this.show = true;
                    this.type = "error";
                    this.message = this.$page.props.flash.error;
                }
                if (this.$page.props.flash.success) {
                    this.show = true;
                    this.type = "success";
                    this.message = this.$page.props.flash.success;
                }
            },
            deep: true,
        },
    },
};
</script>
