<template>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <section-title>
            <template #title><slot name="title"></slot></template>
            <template #description><slot name="description"></slot></template>
            <template #onlinehelp><slot name="onlinehelp"></slot></template>
        </section-title>

        <div class="mt-2 md:mt-0 md:col-span-2">
            <form @submit.prevent="$emit('submitted')">
                <div
                    class="px-4 py-5 bg-transparent sm:bg-gray-50 dark:sm:bg-gray-900 sm:p-6 shadow"
                    :class="
                        hasActions
                            ? 'sm:rounded-tl-md sm:rounded-tr-md'
                            : 'sm:rounded-md'
                    "
                >
                    <div class="grid grid-cols-1 gap-6">
                        <slot name="form"></slot>
                    </div>
                </div>

                <div
                    class="flex items-center justify-end px-4 py-3 bg-gray-100 dark:bg-gray-800 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"
                    v-if="hasActions"
                >
                    <slot name="actions"></slot>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import SectionTitle from "@/Pages/Components/Content/SectionTitle.vue";

export default {
    name: "Content_SectionForm",

    emits: ["submitted"],

    props: {
        loading: {
            type: Boolean,
            default: false,
        },
    },

    components: {
        SectionTitle,
    },

    computed: {
        hasActions() {
            return !!this.$slots.actions;
        },
    },
};
</script>
