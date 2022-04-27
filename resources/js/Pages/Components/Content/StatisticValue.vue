<template>
    <div>
        <div
            v-if="withLink"
            class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-gray-100 dark:bg-gray-800"
        >
            <Link
                :href="route(routeName)"
                class="block hover:bg-gray-300 dark:hover:bg-gray-600 transition duration-1000"
            >
                <statistic-value-content
                    :with-icon="withIcon"
                    :icon="icon"
                    :color="color"
                    :with-link="withLink"
                    :route-name="routeName"
                    :label="label"
                    :value-type="valueType"
                    :value="value"
                    :after-digits="afterDigits"
                    :value-unit="valueUnit"
                    :value-unit-class="valueUnitClass"
                ></statistic-value-content>
            </Link>
        </div>
        <div
            v-else
            class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-gray-100 dark:bg-gray-800"
        >
            <statistic-value-content
                :with-icon="withIcon"
                :icon="icon"
                :color="color"
                :with-link="withLink"
                :route-name="routeName"
                :label="label"
                :value-type="valueType"
                :value="value"
                :after-digits="afterDigits"
                :value-unit="valueUnit"
                :value-unit-class="valueUnitClass"
            ></statistic-value-content>
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

import StatisticValueContent from "@/Pages/Components/Content/StatisticValueContent";

export default {
    name: "Content_StatisticValue",
    //
    components: {
        Link,
        StatisticValueContent
    },
    //
    props: {
        withIcon: {
            type: Boolean,
            required: true,
        },
        icon: {
            type: String,
            default: null,
        },
        color: {
            type: String,
            default: "green",
        },
        withLink: {
            type: Boolean,
            required: true,
        },
        routeName: {
            type: String,
            default: "",
        },
        label: {
            type: String,
            required: true,
        },
        valueType: {
            type: String,
            default: "number",
        },
        value: {
            type: [String, Number],
            required: true,
        },
        afterDigits: {
            type: Number,
            default: 0,
        },
        valueUnit: {
            type: String,
            default: "",
        },
        valueUnitClass: {
            type: String,
            default: "text-xs",
        },
    },
};
</script>
