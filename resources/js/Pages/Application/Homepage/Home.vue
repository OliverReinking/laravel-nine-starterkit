<template>
    <homepage-layout>
         <div
            class="px-4 py-6 mx-auto md:px-24 lg:px-8 lg:py-12"
        >
            <div class="sm:p-16">
                <div class="flex flex-col lg:flex-row">
                    <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                        <h2
                            class="font-logo text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none"
                        >
                            "Man erkennt den
                            <br class="hidden md:block" />Irrtum daran, dass
                            <br class="hidden md:block" />alle Welt ihn
                            teilt."<br class="hidden md:block" />
                            <span
                                class="mt-4 text-xl inline-block text-primary"
                                >Jean Giraudoux</span
                            >
                        </h2>
                    </div>
                    <div class="lg:w-1/2">
                        <p class="mb-4 text-base">
                            Nur mit verantwortungsvoll agierenden Medien
                            funktionieren Demokratien. Und nur mit
                            verantwortungsvoll agierenden Journalisten und
                            Journalistinnen können die Medien, kann die Presse
                            ihre Funktion in der Demokratie und in der
                            Zivilgesellschaft wahrnehmen.
                        </p>
                        <Link
                            :href="route('job_application')"
                            class="inline-flex items-center font-semibold transition-colors duration-200 text-green-400 hover:text-green-500"
                        >
                            Jetzt mitmachen!
                        </Link>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20"
        >
            <div
                class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12"
            >
                <div>
                    <p
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider uppercase rounded-full bg-green-400 text-gray-900 "
                    >
                        Jetzt bewerben!
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-logo text-3xl font-bold leading-none tracking-tight text-green-500 sm:text-4xl md:mx-auto"
                >
                    <span class="relative inline-block">
                        <svg
                            viewBox="0 0 52 24"
                            fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block"
                        >
                            <defs>
                                <pattern
                                    id="34f481be-159a-4846-821d-9ca19fb6bcc5"
                                    x="0"
                                    y="0"
                                    width=".135"
                                    height=".30"
                                >
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect
                                fill="url(#34f481be-159a-4846-821d-9ca19fb6bcc5)"
                                width="52"
                                height="24"
                            ></rect>
                        </svg>
                        <span class="relative">Journalismus</span>
                    </span>
                    kann abdanken, wenn er harmlos wird.
                </h2>
                <p class="text-base md:text-lg">
                    sagte Willy Brandt. Bewirb dich jetzt, damit Journalismus
                    nicht harmlos wird.
                </p>
            </div>
            <div
                class="grid gap-8 row-gap-5 mb-8 md:row-gap-8 lg:grid-cols-4 sm:grid-cols-2"
            >
                <div
                    class="duration-300 transform bg-gray-100 dark:bg-gray-900 border-l-4 border-green-500 hover:-translate-y-2"
                >
                    <div
                        class="h-full p-5 border border-l-0 rounded-r shadow-sm"
                    >
                        <h6
                            class="mb-2 font-semibold leading-5"
                        >
                            Matthew Arnold
                        </h6>
                        <p class="text-sm">
                            Journalismus ist Literatur in Eile
                        </p>
                    </div>
                </div>
                <div
                    class="duration-300 transform bg-gray-100 dark:bg-gray-900 border-l-4 border-green-500 hover:-translate-y-2"
                >
                    <div
                        class="h-full p-5 border border-l-0 rounded-r shadow-sm"
                    >
                        <h6
                            class="mb-2 font-semibold leading-5"
                        >
                            Werner Mitsch
                        </h6>
                        <p class="text-sm">
                            Journalismus ist der Pegasus mit der Deichsel.
                        </p>
                    </div>
                </div>
                <div
                    class="duration-300 transform bg-gray-100 dark:bg-gray-900 border-l-4 border-green-500 hover:-translate-y-2"
                >
                    <div
                        class="h-full p-5 border border-l-0 rounded-r shadow-sm"
                    >
                        <h6
                            class="mb-2 font-semibold leading-5"
                        >
                            Oscar Wilde
                        </h6>
                        <p class="text-sm">
                            Journalismus ist unlesbar, und Literatur wird nicht
                            gelesen.
                        </p>
                    </div>
                </div>
                <div
                    class="duration-300 transform bg-gray-100 dark:bg-gray-900 border-l-4 border-green-500 hover:-translate-y-2"
                >
                    <div
                        class="h-full p-5 border border-l-0 rounded-r shadow-sm"
                    >
                        <h6
                            class="mb-2 font-semibold leading-5"
                        >
                            Roebert Hochner
                        </h6>
                        <p class="text-sm">
                            Journalismus ist, wie ich zu sagen pflege, ein
                            Charakterdefekt, mit dem man Geld verdienen kann.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <Link
                    :href="route('job_application')"
                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded-lg shadow-md md:w-auto bg-green-500 hover:bg-green-600 focus:shadow-outline focus:outline-none"
                >
                    Zum Bewerbungsformular
                </Link>
            </div>
        </div>
    </homepage-layout>
</template>
<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import HomepageLayout from "@/Pages/Application/Homepage/Shared/Layout";

export default defineComponent({
    name: "Homepage_Home",

    components: {
        Link,
        HomepageLayout,
    },
});
</script>
