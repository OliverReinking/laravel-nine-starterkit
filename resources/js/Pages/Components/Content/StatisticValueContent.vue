<template>
    <div class="p-4 flex items-center">
        <div
            v-if="withIcon"
            :class="`p-3 rounded-full text-${color}-500 dark:text-${color}-100 bg-${color}-100 dark:bg-${color}-800 mr-4`"
        >
            <component v-bind:is="icon" class="w-5 h-5" />
        </div>
        <div>
            <p
                class="mb-2 text-sm font-medium text-gray-800 dark:text-gray-200"
            >
                {{ label }}
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">
                <span v-if="valueType == 'number'">
                    <display-number
                        :value="value"
                        :after-digits="afterDigits"
                        :value-unit="valueUnit"
                    ></display-number>
                </span>
                <span v-else-if="valueType == 'date'">
                    <display-date
                        :value="value"
                        :time-on="false"
                    ></display-date>
                </span>
                <span v-else-if="valueType == 'datetime'">
                    <display-date :value="value" :time-on="true"></display-date>
                </span>
            </p>
        </div>
    </div>
</template>
<script>
import IconUsers from "@/Pages/Components/Icons/Users";

import DisplayNumber from "@/Pages/Components/Content/DisplayNumber";
import DisplayDate from "@/Pages/Components/Content/DisplayDate";

export default {
    name: "Content_StatisticValueContent",
    //
    components: {
        IconUsers,
        DisplayNumber,
        DisplayDate,
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
