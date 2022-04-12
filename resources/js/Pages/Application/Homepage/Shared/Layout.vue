<template>
    <div class="relative flex flex-col justify-start" :class="mode">
        <!-- Header -->
        <header
            class="w-full bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-transparent px-2 sm:px-4"
        >
            <nav class="container mx-auto px-2 lg:px-8 py-2.5 rounded">
                <div
                    class="flex flex-wrap justify-between items-center mx-auto"
                >
                    <a href="#" class="flex items-center">
                        <favicon class="h-8 w-8 md:h-12 md:w-12 mr-1" />
                        <span
                            class="self-center text-xl font-semibold whitespace-nowrap dark:text-white font-logo"
                            >Newspilot</span
                        >
                    </a>
                    <div class="flex md:order-2 items-center">
                        <button-register-now></button-register-now>
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
                                <nav-link
                                    label="Startseite"
                                    route-name="home"
                                ></nav-link>
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <nav-link
                                    label="Über uns"
                                    route-name="about"
                                ></nav-link>
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <nav-link
                                    label="Unsere Mission"
                                    route-name="mission"
                                ></nav-link>
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <nav-link
                                    label="Kontakt"
                                    route-name="contact"
                                ></nav-link>
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                    'hidden': !isOpen
                                }"
                            >
                                <nav-link
                                    label="Login"
                                    route-name="login"
                                ></nav-link>
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                    'hidden': !isOpen
                                }"
                            >
                                <nav-link
                                    label="Registrierung"
                                    route-name="register"
                                ></nav-link>
                            </li>
                            <li
                                v-bind:class="{
                                    'w-full': isOpen,
                                }"
                            >
                                <button-change-mode
                                    :mode="mode"
                                    @changeMode="changeMode"
                                ></button-change-mode>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Content -->
        <section
            class="text-gray-800 dark:text-white bg-white dark:bg-gray-800 w-full min-h-screen px-2 sm:px-4 pb-48"
        >
            <div class="container mx-auto px-2 lg:px-8 pt-2 lg:pt-8">
                <toast></toast>
                <slot></slot>
            </div>
        </section>

        <!-- Footer -->
        <footer
            class="w-full bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-transparent px-2 sm:px-4 py-2"
        >
            <div class="container mx-auto px-2 lg:px-8 pt-2">
                <div class="lg:flex lg:items-center lg:justify-between md:p-3">
                    <ul
                        class="lg:order-2 flex flex-wrap flex-row items-center justify-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0"
                    >
                        <li class="mr-2 md:mr-6 hidden md:block">
                            <footer-link
                                label="Über uns"
                                route-name="about"
                            ></footer-link>
                        </li>
                        <li class="mr-2 md:mr-6">
                            <footer-link
                                label="Impressum"
                                route-name="imprint"
                            ></footer-link>
                        </li>
                        <li class="mr-2 md:mr-6">
                            <footer-link
                                label="Datenschutzerklärung"
                                route-name="privacy"
                            ></footer-link>
                        </li>
                        <li class="mr-2 md:mr-6 hidden md:block">
                            <footer-link
                                label="Login"
                                route-name="login"
                            ></footer-link>
                        </li>
                        <li class="mr-2 md:mr-6 hidden md:block">
                            <footer-link
                                label="Registrierung"
                                route-name="register"
                            ></footer-link>
                        </li>
                    </ul>
                    <div
                        class="mt-4 lg:mt-0 lg:order-1 text-xs md:text-sm text-gray-500 dark:text-gray-400 text-center lg:text-left"
                    >
                        © 2014 - {{ year }}
                        <footer-link
                            label="Newspilot"
                            route-name="home"
                        ></footer-link
                        >. All Rights Reserved.
                        <br />
                        <span class="hidden sm:inline-block">
                            Version: {{ $page.props.version.versionnr }} vom
                            {{ $page.props.version.versionsdatum }}
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
<script>
import { ref } from "vue";

import NavLink from "@/Pages/Application/Homepage/Shared/NavLink";
import ButtonRegisterNow from "@/Pages/Application/Homepage/Shared/ButtonRegisterNow";
import FooterLink from "@/Pages/Application/Homepage/Shared/FooterLink";

import Favicon from "@/Pages/Components/Logo/Favicon";

import IconMenu from "@/Pages/Components/Icons/Menu";
import IconClose from "@/Pages/Components/Icons/Close";

import ButtonChangeMode from "@/Pages/Components/ButtonChangeMode";

import Toast from "@/Pages/Components/Content/Toast";

export default {
    name: "Homepage_Layout",

    components: {
        NavLink,
        ButtonRegisterNow,
        FooterLink,
        Favicon,
        IconMenu,
        IconClose,
        ButtonChangeMode,
        Toast
    },

    setup() {
        const mode = ref();
        const isOpen = ref(false);
        const year = ref(new Date().getFullYear());
        //
        if (localStorage.theme) {
            mode.value = localStorage.theme;
        }
        //
        function changeMode(value) {
            mode.value = value;
            //
            localStorage.theme = mode.value;
        }
        //
        function toggleNavbar() {
            this.isOpen = !this.isOpen;
        }
        //
        return {
            mode,
            isOpen,
            year,
            changeMode,
            toggleNavbar,
        };
    },
};
</script>
