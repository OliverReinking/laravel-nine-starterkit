<template>
    <span>{{ displaynumber }} <span v-if="valueUnit" :class="valueUnitClass">{{ valueUnit }}</span></span>
</template>
<script>
export default {
    name: "Content_Number",

    props: {
        value: {
            type: Number,
            default: "-",
        },
        afterDigits: {
            type: Number,
            default: 2,
        },
        valueUnit: {
            type: String,
            default: "",
        },
        valueUnitClass: {
            type: String,
            default: "text-xs font-medium text-gray-800 dark:text-gray-200"
        }
    },
    //
    computed: {
        displaynumber() {
            if (
                this.value == null ||
                this.value == undefined ||
                this.value == 0
            ) {
                return 0;
            }
            var formatNumber = new Intl.NumberFormat("de-DE", {
                minimumFractionDigits: this.afterDigits,
            }).format(this.value);
            //
            return formatNumber;
        },
    },
};
</script>
