<template>
    <homepage-layout>
        <div class="container px-6 py-16 mx-auto">
            <div class="items-center lg:flex lg:items-start">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1
                            class="font-logo text-2xl font-semibold uppercase lg:text-3xl"
                        >
                            Sie sind kein Mitarbeiter
                        </h1>
                        <div class="mt-2">
                            <span
                                class="text-lg font-extrabold text-primary dark:text-primary-dark"
                                >"Unbefugten ist der Zutritt gegens Schienbein verboten."
                            </span>
                            <br />
                            (Ulrich  Erckenbrecht)
                        </div>
                    </div>
                </div>

                <div
                    class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2"
                >
                    <undraw-notify
                        class="w-full h-full lg:max-w-2xl"
                    ></undraw-notify>
                </div>
            </div>
        </div>
    </homepage-layout>
</template>
<script>
import { defineComponent } from "vue";
import HomepageLayout from "@/Pages/Application/Homepage/Shared/Layout";

import UndrawNotify from "@/Pages/Components/UnDraw/Notify";

export default defineComponent({
    name: "Homepage_UserIsNoEmployee",

    components: {
        HomepageLayout,
        UndrawNotify,
    },
});
</script>
