<template>
    <teleport to="body">
        <transition leave-active-class="duration-1000">
            <div
                v-show="show"
                class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                 :class="mode"
                scroll-region
            >
                <transition
                    enter-active-class="ease-out duration-1000"
                    enter-from-class="opacity-0"
                    enter-to-class="opacity-100"
                    leave-active-class="ease-in duration-1000"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                >
                    <div
                        v-show="show"
                        class="fixed inset-0 transform transition-all"
                        @click="close"
                    >
                        <div
                            class="absolute inset-0 bg-gray-900 dark:bg-gray-100 opacity-75"
                        ></div>
                    </div>
                </transition>

                <transition
                    enter-active-class="ease-out duration-1000"
                    enter-from-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    enter-to-class="opacity-100 translate-y-0 sm:scale-100"
                    leave-active-class="ease-in duration-1000"
                    leave-from-class="opacity-100 translate-y-0 sm:scale-100"
                    leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                >
                    <div>
                        <div
                            v-show="show"
                            class="mb-6 bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto"
                            :class="maxWidthClass"
                        >
                            <slot v-if="show"></slot>
                        </div>
                    </div>
                </transition>
            </div>
        </transition>
    </teleport>
</template>

<script>
import { onMounted, onUnmounted, ref } from "vue";

export default {
    name: "Component_Modal",

    emits: ["close"],

    props: {
        show: {
            default: false,
        },
        maxWidth: {
            default: "2xl",
        },
        closeable: {
            default: true,
        },
    },

    watch: {
        show: {
            immediate: true,
            handler: (show) => {
                if (show) {
                    document.body.style.overflow = "hidden";
                } else {
                    document.body.style.overflow = null;
                }
            },
        },
    },

    setup(props, { emit }) {
        const mode = ref("light");

        if (localStorage.theme) {
            mode.value = localStorage.theme;
        }

        const close = () => {
            if (props.closeable) {
                emit("close");
            }
        };

        const closeOnEscape = (e) => {
            if (e.key === "Escape" && props.show) {
                close();
            }
        };

        onMounted(() => document.addEventListener("keydown", closeOnEscape));
        onUnmounted(() => {
            document.removeEventListener("keydown", closeOnEscape);
            document.body.style.overflow = null;
        });

        return {
            mode,
            close,
        };
    },

    computed: {
        maxWidthClass() {
            return {
                sm: "sm:max-w-sm",
                md: "sm:max-w-md",
                lg: "sm:max-w-lg",
                xl: "sm:max-w-xl",
                "2xl": "sm:max-w-2xl",
            }[this.maxWidth];
        },
    },
};
</script>
