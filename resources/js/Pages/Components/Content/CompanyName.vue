<template>
    <div
        class="flex flex-col items-center justify-center text-gray-800 dark:text-white"
        :class="classes"
    >
        <div v-if="withLink">
            <Link :href="route(routeName)">
                <div class="font-logo text-xl leading-normal whitespace-nowrap">
                    Newspilot
                </div>
                <div
                    v-if="withSlogan"
                    class="font-sans font-thin text-xs text-primary leading-normal whitespace-nowrap"
                >
                    For a sustainable earth
                </div>
            </Link>
        </div>
        <div v-else>
            <div class="font-logo text-xl leading-normal whitespace-nowrap">
                Newspilot
            </div>
            <div
                v-if="withSlogan"
                class="font-sans font-thin text-xs text-primary leading-normal whitespace-nowrap"
            >
                For a sustainable earth
            </div>
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    name: "Content_CompanyName",
    //
    components: {
        Link,
    },
    //
    props: {
        classes: {
            type: String,
            default: "",
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
