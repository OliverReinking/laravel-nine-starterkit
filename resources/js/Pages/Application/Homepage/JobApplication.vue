<template>
    <homepage-layout>
        <div class="">
            <section
                class="max-w-4xl p-6 mx-auto text-gray-700 dark:text-white bg-gray-50
                       dark:bg-gray-700 rounded-md shadow-md"
            >
                <!-- Loading -->
                <div v-if="loading" class="p-4 mb-4 text-sm text-gray-700 dark:text-gray-200 bg-blue-100
                            dark:bg-blue-600 rounded-lg ease-in-out duration-1000" role="alert">
                    <div class="flex items-center">
                        <svg
                            role="status"
                            class="mr-2 w-8 h-8 text-blue-400 dark:text-blue-700 animate-spin
                                   dark:text-gray-600 fill-blue-800 dark:fill-blue-200"
                            viewBox="0 0 100 101"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                           Inhalt nicht angezeigt!!!!
                        </svg>
                        <div class="ml-2">{{ loadingText }}</div>
                    </div>
                </div>
                <!-- ENDS Loading -->

                <h2 class="text-xl font-semibold">Bewerbungsformular</h2>

                <form class="mt-4">
                    <button
                        type="button"
                        class="inline-flex items-center px-4 py-2 text-white dark:text-gray-800
                               bg-green-500 dark:bg-white border border-transparent rounded-md
                               font-semibold text-xs tracking-widest hover:bg-green-700
                               dark:hover:bg-gray-200 active:bg-green-700 dark:active:bg-gray-300
                               focus:outline-none focus:border-green-700 focus:ring focus:ring-green-700
                               disabled:opacity-25 transition cursor-pointer"
                        @click.prevent="sendJobApplicationData"
                    >
                        Bewerbungsdaten absenden
                    </button>
                </form>

            </section>
        </div>
    </homepage-layout>
</template>
<script>
import { defineComponent } from "vue";
import HomepageLayout from "@/Pages/Application/Homepage/Shared/Layout";

export default defineComponent({
    name: "Homepage_JobApplication",

    components: {
        HomepageLayout,
    },

    props: {
        errors: Object,
    },

    data() {
        return {
            loading: false,
            loadingText: null,
            //
            form: {
                first_name: null,
                last_name: null,
                email: null,
                phone: null,
            },
        };
    },

    methods: {
        sendJobApplicationData() {
            this.loading = true;
            this.loadingText =
                "Die Daten des Bewerbungsformulares werden jetzt verarbeitet!";
            //
            this.$inertia.post(
                this.route("home.job_application.send"),
                this.form,
                {
                    onSuccess: () => {
                        this.loading = false;
                    },
                    onError: () => {
                        this.loading = false;
                    },
                }
            );
        },
    },
});
</script>
