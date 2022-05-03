<template>
    <div>
        <div
            class="flex flex-col md:flex-row items-center justify-center md:items-center md:justify-between bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-md"
        >
            <div class="w-full md:flex-1 p-1 flex justify-start items-center">
                <div>
                    <icon-search class="block mx-2 w-5" />
                </div>
                <div class="flex-1 w-full">
                    <input
                        type="text"
                        class="w-full border-none px-4 pt-2 pb-1 bg-transparent focus:bg-gray-300 dark:focus:bg-gray-600 focus:outline-none"
                        autocomplete="off"
                        name="search"
                        placeholder="Suchen…"
                        :value="modelValue"
                        @input="$emit('update:modelValue', $event.target.value)"
                    />
                </div>
            </div>
            <div class="flex items-center justify-end md:items-end md:w-1/4">
                <div class="p-2">
                    <button
                        class="inline-block px-4 py-2 bg-gray-800 dark:bg-white dark:text-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 dark:hover:bg-gray-400 dark:active:bg-gray-400 dark:focus:outline-none dark:focus:border-gray-400 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                        @click.prevent="$emit('reset')"
                    >
                        Suche zurücksetzen
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full mt-4">
            <div
                class="p-1 text-sm my-2 text-gray-600 dark:text-gray-400 text-left font-medium tracking-wide"
                v-if="searchText"
            >
                <span v-html="searchText"></span>
            </div>
        </div>
    </div>
</template>

<script>
import IconChevronDown from "@/Pages/Components/Icons/ChevronDown";
import IconSearch from "@/Pages/Components/Icons/Search";
//
export default {
    name: "SearchFilter",
    //
    emits: ["update:modelValue", "reset"],
    //
    components: {
        IconChevronDown,
        IconSearch,
    },
    //
    props: {
        modelValue: {
            type: String,
            default: null,
        },
        searchText: {
            type: String,
        },
    },
};
</script>
