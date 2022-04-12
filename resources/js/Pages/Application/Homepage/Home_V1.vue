<template>
    <div class="flex flex-col justify-start" :class="mode">
        <header>
            <nav
                class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800"
            >
                <div
                    class="container flex flex-wrap justify-between items-center mx-auto"
                >
                    <a href="#" class="flex items-center">
                        <favicon class="h-8 w-8 md:h-12 md:w-12 mr-1" />
                        <span
                            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white font-logo"
                            >Newspilot</span
                        >
                    </a>
                    <div class="flex md:order-2">
                        <button
                            type="button"
                            class="hidden lg:block text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-800"
                        >
                            Jetzt registrieren!
                        </button>
                        <button
                            type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            v-on:click="toggleNavbar()"
                        >
                            <span class="sr-only">Menü öffnen</span>
                            <icon-menu
                                class="w-6 h-6"
                                v-if="!isOpen"
                            ></icon-menu>
                            <icon-close
                                class="w-6 h-6"
                                v-if="isOpen"
                            ></icon-close>
                        </button>
                    </div>
                    <div
                        class="justify-start items-start w-full md:flex md:w-auto md:order-1"
                        v-bind:class="{
                            hidden: !isOpen,
                            'min-h-screen block': isOpen,
                        }"
                    >
                        <ul
                            class="flex flex-col items-center mt-4 md:flex-row md:flex-nowrap md:space-x-8 md:mt-0 md:text-sm md:font-medium"
                        >
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <Link
                                    :href="route('home')"
                                    class="block py-2 pr-4 pl-3 cursor-pointer whitespace-nowrap"
                                    :class="[
                                        route().current('home')
                                            ? 'text-white bg-green-500 rounded md:bg-transparent md:text-green-500 md:p-0 dark:text-white'
                                            : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700',
                                    ]"
                                >
                                    Startseite</Link
                                >
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <Link
                                    :href="route('home')"
                                    class="block py-2 pr-4 pl-3 cursor-pointer whitespace-nowrap"
                                    :class="[
                                        route().current('about')
                                            ? 'text-white bg-green-500 rounded md:bg-transparent md:text-green-500 md:p-0 dark:text-white'
                                            : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700',
                                    ]"
                                >
                                    Über uns</Link
                                >
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <Link
                                    :href="route('home')"
                                    class="block py-2 pr-4 pl-3 cursor-pointer whitespace-nowrap"
                                    :class="[
                                        route().current('mission')
                                            ? 'text-white bg-green-500 rounded md:bg-transparent md:text-green-500 md:p-0 dark:text-white'
                                            : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700',
                                    ]"
                                >
                                    Unsere Mission</Link
                                >
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <Link
                                    :href="route('home')"
                                    class="block py-2 pr-4 pl-3 cursor-pointer whitespace-nowrap"
                                    :class="[
                                        route().current('contact')
                                            ? 'text-white bg-green-500 rounded md:bg-transparent md:text-green-500 md:p-0 dark:text-white'
                                            : 'text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700',
                                    ]"
                                >
                                    Kontakt</Link
                                >
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <button
                                    type="button"
                                    @click="changeMode"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >
                                    <span v-if="mode == 'light'">
                                        <icon-night
                                            class="w-5 h-5"
                                        ></icon-night>
                                    </span>
                                    <span v-else>
                                        <icon-sun class="w-5 h-5"></icon-sun>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <section>
            <div class="container mx-auto p-4">
                <div>Unsere erste VUE-Seite</div>
                <div>Version: {{ versionnr }}</div>
                <div>Datum: {{ versionsdatum }}</div>
                <div>Mode: {{ mode }}</div>
                <div>isOpen: {{ isOpen }}</div>
            </div>
        </section>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import Favicon from "@/Pages/Components/Logo/Favicon";
import IconNight from "@/Pages/Components/Icons/Night";
import IconSun from "@/Pages/Components/Icons/Sun";
import IconMenu from "@/Pages/Components/Icons/Menu";
import IconClose from "@/Pages/Components/Icons/Close";
export default {
    name: "Homepage_Home",

    components: {
        Link,
        Favicon,
        IconNight,
        IconSun,
        IconMenu,
        IconClose,
    },

    props: {
        versionnr: String,
        versionsdatum: String,
    },

    data() {
        return {
            mode: "light",
            isOpen: false,
        };
    },

    methods: {
        changeMode() {
            if (this.mode === "dark") {
                this.mode = "light";
            } else {
                this.mode = "dark";
            }
            //
            localStorage.theme = this.mode;
        },
        toggleNavbar() {
            this.isOpen = !this.isOpen;
        },
    },
};
</script>
