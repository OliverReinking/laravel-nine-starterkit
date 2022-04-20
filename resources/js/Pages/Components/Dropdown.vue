<template>
    <div class="relative w-full">
        <div @click="open = !open">
            <slot name="trigger"></slot>
        </div>

        <!-- Full Screen Dropdown Overlay -->
        <div
            v-show="open"
            class="fixed inset-0 z-40"
            @click="open = false"
        ></div>

        <transition
            enter-active-class="transition ease-out duration-200"
            enter-from-class="transform opacity-0 scale-95"
            enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75"
            leave-from-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95"
        >
            <div
                v-show="open"
                class="absolute z-50 mt-2 rounded-md shadow-lg"
                :class="[widthClass, alignmentClasses]"
                style="display: none"
                @click="closeDropdown"
            >
                <div
                    class="rounded-md ring-1 ring-black ring-opacity-5"
                    :class="contentClasses"
                >
                    <slot name="content"></slot>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
import { onMounted, onUnmounted, ref, computed } from "vue";

export default {
    name: "Component_DropDown",

    props: {
        align: {
            default: "right",
        },
        width: {
            default: "96",
        },
        autoClose: {
            type: Boolean,
            default: true,
        },
        contentClasses: {
            default: () => [
                "px-4",
                "py-2",
                "text-xs",
                "bg-white",
                "text-gray-900",
                "dark:bg-gray-900",
                "dark:text-gray-100",
            ],
        },
    },

    setup(props) {
        let open = ref(false);

        const closeOnEscape = (e) => {
            if (open.value && e.keyCode === 27) {
                open.value = false;
            }
        };

        function closeDropdown() {
            //console.log("closeDropdown");
            if (props.autoClose) {
                this.open = false;
            }
        }

        onMounted(() => document.addEventListener("keydown", closeOnEscape));

        onUnmounted(() =>
            document.removeEventListener("keydown", closeOnEscape)
        );

        const widthClass = computed(() => {
            return {
                48: "w-48",
                64: "w-64",
                96: "w-96",
            }[props.width.toString()];
        });

        const alignmentClasses = computed(() => {
            if (props.align === "left") {
                return "origin-top-left left-0";
            } else if (props.align === "right") {
                return "origin-top-right right-0";
            } else {
                return "origin-top";
            }
        });

        return {
            open,
            closeDropdown,
            widthClass,
            alignmentClasses
        };
    },
};
</script>
