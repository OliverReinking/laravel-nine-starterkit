<template>
    <admin-layout>
        <breadcrumb
            :application-name="$page.props.applications.app_admin"
            current="Edit"
            :breadcrumbs="{
                Liste: route('admin.user.index'),
                Anzeige: route('admin.user.show', appuser.id),
            }"
        ></breadcrumb>

        <div class="mt-4 mb-8 font-logo text-2xl text-extrabold">
            Aktualisierung der Anwenderdaten
        </div>

        <section-form>
            <template #title>Anwenderdaten</template>
            <template #description
                >Hier kannst du alle Daten des Anwenders ändern
                <!-- Loading -->
                <input-loading
                    :loading="loading"
                    :loading-text="loadingText"
                ></input-loading>
                <!-- ENDS Loading -->
            </template>

            <template #form>
                <!-- Liste der Fehler -->
                <error-list :errors="errors" />

                <input-subtitle>Persönliche Daten</input-subtitle>
                <input-group>
                    <input-container>
                        <input-label
                            name="email"
                            label="Mailadresse"
                        ></input-label>
                        <input-element
                            type="email"
                            name="email"
                            v-model="form.email"
                            placeholder="Gebe hier die Mailadresse ein"
                            :required="true"
                            ref="email"
                        ></input-element>
                        <input-error :message="errors.email" />
                    </input-container>
                    <input-container>
                        <input-label name="name" label="Name"></input-label>
                        <input-element
                            type="text"
                            name="name"
                            v-model="form.name"
                            placeholder="Gebe hier den Namen des Anwenders ein"
                            :required="true"
                            ref="name"
                        ></input-element>
                        <input-error :message="errors.name" />
                    </input-container>
                </input-group>

                <input-subtitle>Anwendungen</input-subtitle>
                <input-group>
                    <input-container>
                        <input-checkbox name="is_admin" v-model="form.is_admin">
                            Ist der Anwender ein Administrator?</input-checkbox
                        >
                    </input-container>
                    <input-container>
                        <input-checkbox
                            name="is_employee"
                            v-model="form.is_employee"
                        >
                            Ist der Anwender ein Mitarbeiter?</input-checkbox
                        >
                    </input-container>
                    <input-container>
                        <input-checkbox
                            name="is_customer"
                            v-model="form.is_customer"
                        >
                            Ist der Anwender ein Kunde?</input-checkbox
                        >
                    </input-container>
                </input-group>
            </template>

            <template #actions>
                <!-- Befehle -->
                <button-group>
                    <input-danger-button
                        type="button"
                        @click.prevent="confirmUserDeletion"
                    >
                        Anwenderdaten löschen
                    </input-danger-button>
                    <input-button
                        type="button"
                        @click.prevent="updateAppuserData"
                    >
                        Anwenderdaten ändern
                    </input-button>
                </button-group>
                <!-- ENDS Befehle -->
            </template>
        </section-form>

        <!-- Delete User Confirmation Modal -->
        <dialog-modal
            :show="confirmingUserDeletion"
            @close="close_confirmingUserDeletion"
        >
            <template #title> Anwender löschen </template>

            <template #content>
                Bist du sicher, dass du diesen Anwender löschen willst? Es
                werden alle Anwenderdaten gelöscht.
            </template>

            <template #footer>
                <button-group>
                    <input-button @click="close_confirmingUserDeletion">
                        Zurück
                    </input-button>

                    <input-danger-button @click="deleteUser">
                        Anwender jetzt löschen
                    </input-danger-button>
                </button-group>
            </template>
        </dialog-modal>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout";
import Breadcrumb from "@/Pages/Components/Breadcrumb";

import SectionForm from "@/Pages/Components/Content/SectionForm";
import SectionBorder from "@/Pages/Components/Content/SectionBorder";

import ButtonGroup from "@/Pages/Components/Form/ButtonGroup.vue";
import InputButton from "@/Pages/Components/Form/InputButton.vue";
import InputDangerButton from "@/Pages/Components/Form/InputDangerButton.vue";

import InputLoading from "@/Pages/Components/Form/InputLoading";

import ErrorList from "@/Pages/Components/Form/ErrorList";
import InputSubtitle from "@/Pages/Components/Form/InputSubtitle";
import InputGroup from "@/Pages/Components/Form/InputGroup";
import InputContainer from "@/Pages/Components/Form/InputContainer";
import InputLabel from "@/Pages/Components/Form/InputLabel";
import InputElement from "@/Pages/Components/Form/InputElement";
import InputCheckbox from "@/Pages/Components/Form/InputCheckbox";
import InputError from "@/Pages/Components/Form/InputError";

import DialogModal from "@/Pages/Components/DialogModal.vue";

export default defineComponent({
    name: "Admin_UserForm",

    components: {
        AdminLayout,
        Breadcrumb,
        SectionForm,
        SectionBorder,
        ButtonGroup,
        InputButton,
        InputDangerButton,
        InputLoading,
        ErrorList,
        InputSubtitle,
        InputGroup,
        InputContainer,
        InputLabel,
        InputElement,
        InputCheckbox,
        InputError,
        DialogModal,
    },

    props: {
        appuser: {
            type: Object,
            default: () => ({}),
        },
        errors: {
            type: Object,
            default: () => ({}),
        },
    },

    data() {
        return {
            loading: false,
            loadingText: null,
            //
            confirmingUserDeletion: false,
            //
            form: {
                name: this.appuser.name,
                email: this.appuser.email,
                is_admin: this.appuser.is_admin,
                is_employee: this.appuser.is_employee,
                is_customer: this.appuser.is_customer,
            },
        };
    },

    methods: {
        confirmUserDeletion() {
            this.confirmingUserDeletion = true;
        },

        deleteUser() {
            this.confirmingUserDeletion = false;
            //
            this.loading = true;
            this.loadingText = "Die Daten des Anwenders werden gelöscht!";
            //
            this.$inertia.delete(
                this.route("admin.user.delete", this.appuser.id),
                {
                    onSuccess: () => {
                        this.loading = false;
                    },
                    onError: () => {
                        this.loading = false;
                    },
                }
            );
        },

        close_confirmingUserDeletion() {
            this.confirmingUserDeletion = false;
        },

        updateAppuserData() {
            this.loading = true;
            this.loadingText =
                "Die geänderten Daten des Anwenders werden jetzt gespeichert!";
            //
            this.$inertia.put(
                this.route("admin.user.update", this.appuser.id),
                this.form,
                {
                    onSuccess: () => {
                        this.loading = false;
                    },
                    onError: () => {
                        this.loading = false;
                    },
                }
            );
        },
    },
});
</script>
