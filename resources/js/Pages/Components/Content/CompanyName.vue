<template>
    <div class="text-gray-800 dark:text-white" :class="classes">
        <div v-if="withLink">
            <Link :href="route(routeName)" class="flex items-center">
                <div v-if="withFavicon">
                    <favicon class="h-8 w-8 md:h-12 md:w-12 mr-1" />
                </div>
                <div class="flex flex-col items-center justify-center">
                    <div
                        class="font-logo text-xl leading-normal whitespace-nowrap tracking-widest"
                    >
                        Newspilot
                    </div>
                    <div
                        v-if="withSlogan"
                        class="font-sans font-thin text-xs text-primary leading-normal whitespace-nowrap tracking-wide"
                    >
                        For a sustainable earth
                    </div>
                </div>
            </Link>
        </div>
        <div v-else class="flex items-center">
            <div v-if="withFavicon">
                <favicon class="h-8 w-8 md:h-12 md:w-12 mr-1" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="font-logo text-xl leading-normal whitespace-nowrap tracking-widest">
                    Newspilot
                </div>
                <div
                    v-if="withSlogan"
                    class="font-sans font-thin text-xs text-primary leading-normal whitespace-nowrap tracking-wide"
                >
                    For a sustainable earth
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

import Favicon from "@/Pages/Components/Logo/Favicon";

export default {
    name: "Content_CompanyName",
    //
    components: {
        Link,
        Favicon,
    },
    //
    props: {
        classes: {
            type: String,
            default: "",
        },
        withFavicon: {
            type: Boolean,
            required: true,
        },
        withSlogan: {
            type: Boolean,
            required: true,
        },
        withLink: {
            type: Boolean,
            required: true,
        },
        routeName: {
            type: String,
            default: "",
        },
    },
};
</script>
