<template>
    <homepage-layout>
        <div class="container px-6 py-16 mx-auto">
            <div class="items-center lg:flex lg:items-start">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1
                            class="font-logo text-2xl font-semibold text-gray-800 uppercase dark:text-white lg:text-3xl"
                        >
                            Unsere Mission
                        </h1>
                        <div class="mt-2 text-gray-600 dark:text-gray-400">
                            Die Welt offen und ehrlich informieren!
                        </div>
                    </div>
                </div>

                <div
                    class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2"
                >
                    <undraw-shared-goals class="w-full h-full lg:max-w-2xl"></undraw-shared-goals>
                </div>
            </div>
        </div>
    </homepage-layout>
</template>
<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import HomepageLayout from "@/Pages/Application/Homepage/Shared/Layout";

import UndrawSharedGoals from "@/Pages/Components/UnDraw/SharedGoals";

export default defineComponent({
    name: "Homepage_About",

    components: {
        Link,
        HomepageLayout,
        UndrawSharedGoals
    },
});
</script>
