<template>
    <!-- Anzeige der Liste -->
    <div class="np-dl-outer-container">
        <div class="mb-4" v-if="searchFilter">
            <div class="my-6 flex justify-between items-center">
                <search-filter
                    v-model="form.search"
                    class="w-full"
                    :searchText="searchText"
                    @reset="reset"
                >
                </search-filter>
            </div>
        </div>
        <div class="np-dl-data-container">
            <table class="np-dl-table">
                <thead class="np-dl-thead">
                    <slot name="header"></slot>
                </thead>
                <tbody>
                    <tr
                        v-for="datarow in datarows.data"
                        :key="datarow.id"
                        class="np-dl-tr"
                    >
                        <slot name="datarow" :datarow="datarow"></slot>
                        <td
                            v-if="editOn"
                            class="np-dl-td-edit"
                            @click.prevent="editDataRow(datarow.id)"
                        >
                            <icon-edit class="w-4 h-4" />
                        </td>
                        <td
                            v-if="showOn"
                            class="np-dl-td-edit"
                            @click.prevent="showDataRow(datarow.id)"
                        >
                            <icon-eye class="w-4 h-4" />
                        </td>
                    </tr>
                </tbody>
            </table>
            <div v-if="datarows.data.length === 0">
                <div class="np-dl-td-no-entries">
                    {{ noEntries }}
                </div>
            </div>
        </div>
        <pagination :links="datarows.links" />
    </div>
    <!-- ENDS Anzeige der Liste -->
</template>
<script>
import SearchFilter from "@/Pages/Components/Lists/SearchFilter";
import Pagination from "@/Pages/Components/Lists/Pagination";

import IconEdit from "@/Pages/Components/Icons/Edit";
import IconEye from "@/Pages/Components/Icons/Eye";

import mapValues from "lodash/mapValues";
import pickBy from "lodash/pickBy";
import throttle from "lodash/throttle";

export default {
    components: {
        SearchFilter,
        Pagination,
        IconEdit,
        IconEye,
    },
    //
    props: {
        datarows: {
            type: [Object, Array],
            default: () => [],
        },
        noEntries: {
            type: String,
            default: "Es wurden keine Datensätze gefunden.",
        },
        routeIndex: {
            type: String,
            required: true,
        },
        filters: {
            type: [Object, Array],
            default: () => [],
        },
        searchFilter: {
            type: Boolean,
            default: true,
        },
        searchText: {
            type: String,
        },
        showOn: {
            type: Boolean,
            default: false,
        },
        routeShow: {
            type: String,
        },
        editOn: {
            type: Boolean,
            default: false,
        },
        routeEdit: {
            type: String,
        },
    },
    //
    data() {
        return {
            form: {
                search: this.filters.search,
            },
        };
    },
    //
    watch: {
        form: {
            handler: throttle(function () {
                let query = pickBy(this.form);
                //
                this.$inertia.get(
                    this.route(
                        this.routeIndex,
                        Object.keys(query).length
                            ? query
                            : { remember: "forget" }
                    ),
                    this.form,
                    {
                        preserveState: true,
                    }
                );
            }, 150),
            deep: true,
        },
    },
    //
    methods: {
        reset() {
            this.form = mapValues(this.form, () => null);
        },
        //
        editDataRow(id) {
            this.$inertia.get(this.route(this.routeEdit, id));
        },
        //
        showDataRow(id) {
            this.$inertia.get(this.route(this.routeShow, id));
        },
    },
};
</script>
