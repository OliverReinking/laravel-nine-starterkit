<template>
    <nav
        class="flex py-3 px-5 bg-white rounded-lg border border-gray-200 dark:bg-gray-900 dark:border-gray-700"
        aria-label="Breadcrumb"
    >
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li v-if="!startPage">
                <Link
                    :href="route(routeDashboard)"
                    class="flex items-center hover:text-gray-900 dark:hover:text-white underline"
                >
                    <icon-home class="w-5 h-5" />
                    <span
                        class="ml-1 text-sm font-medium md:ml-2"
                        >{{ home }}</span
                    >
                </Link>
            </li>
            <li v-if="startPage">
                <div class="flex items-center">
                    <icon-home class="w-5 h-5 text-gray-400 dark:text-gray-300" />
                    <span
                        class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-200"
                        >{{ home }}</span
                    >
                </div>
            </li>
            <li v-for="(value, key, index) in breadcrumbs" :key="index">
                <div class="flex items-center">
                    <icon-breadcrumb-divider
                        class="w-5 h-5 text-gray-400"
                    ></icon-breadcrumb-divider>
                    <Link
                        :href="value"
                        class="ml-1 text-sm font-medium hover:text-gray-900 md:ml-2 dark:hover:text-white underline"
                        >{{ key }}</Link
                    >
                </div>
            </li>
            <li aria-current="page" v-if="current">
                <div class="flex items-center">
                    <icon-breadcrumb-divider
                        class="w-5 h-5 text-gray-400"
                    ></icon-breadcrumb-divider>
                    <span
                        class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-300"
                        >{{ current }}</span
                    >
                </div>
            </li>
        </ol>
    </nav>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

import IconHome from "@/Pages/Components/Icons/Home.vue";
import IconBreadcrumbDivider from "@/Pages/Components/Icons/BreadcrumbDivider.vue";

export default {
    name: "Components_Breadcrumb",

    components: {
        Link,
        IconHome,
        IconBreadcrumbDivider,
    },

    props: {
        home: {
            type: String,
            default: "Dashboard",
        },
        applicationName: {
            type: String,
            default: "", // customer, employee or admin
        },
        current: {
            type: String,
        },
        breadcrumbs: {
            type: Object,
        },
        startPage: {
            type: Boolean,
            default: false,
        },
    },

    computed: {
        routeDashboard() {
            if (
                this.applicationName == this.$page.props.applications.app_admin
            ) {
                return "admin.dashboard";
            }
            if (
                this.applicationName ==
                this.$page.props.applications.app_employee
            ) {
                return "employee.dashboard";
            }
            if (
                this.applicationName ==
                this.$page.props.applications.app_customer
            ) {
                return "customer.dashboard";
            }
            return "customer.dashboard";
        },
    },
};
</script>
