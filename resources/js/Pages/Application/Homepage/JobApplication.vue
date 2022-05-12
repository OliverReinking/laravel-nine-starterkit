<template>
    <homepage-layout>
        <div class="">
            <section
                class="max-w-4xl p-6 mx-auto text-gray-700 dark:text-white bg-gray-50 dark:bg-gray-700 rounded-md shadow-md"
            >
                <!-- Loading -->
                <input-loading
                    :loading="loading"
                    :loading-text="loadingText"
                ></input-loading>
                <!-- ENDS Loading -->

                <h2 class="text-xl font-semibold">Bewerbungsformular</h2>

                <form class="mt-4">
                    <!-- Liste der Fehler -->
                    <error-list :errors="errors" />

                    <input-subtitle>Name</input-subtitle>
                    <input-group>
                        <input-container>
                            <input-label
                                name="first_name"
                                label="Vorname"
                            ></input-label>
                            <input-element
                                type="text"
                                name="first_name"
                                v-model="form.first_name"
                                placeholder="Gebe hier deinen Vornamen ein"
                                :required="true"
                                ref="first_name"
                            ></input-element>
                            <input-error :message="errors.first_name" />
                        </input-container>
                        <input-container>
                            <input-label
                                name="last_name"
                                label="Nachname"
                            ></input-label>
                            <input-element
                                type="text"
                                name="last_name"
                                v-model="form.last_name"
                                placeholder="Gebe hier deinen Nachnamen ein"
                                :required="true"
                                ref="last_name"
                            ></input-element>
                            <input-error :message="errors.last_name" />
                        </input-container>
                    </input-group>

                    <input-subtitle>Kontakt</input-subtitle>
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
                                placeholder="Gebe hier deine Mailadresse ein"
                                :required="true"
                                ref="email"
                            ></input-element>
                            <input-error :message="errors.email" />
                        </input-container>
                        <input-container>
                            <input-label
                                name="phone"
                                label="Telefon-Nr"
                            ></input-label>
                            <input-element
                                type="text"
                                name="phone"
                                v-model="form.phone"
                                placeholder="Gebe hier deine Telefon-Nr ein"
                                :required="true"
                                ref="phone"
                            ></input-element>
                            <input-error :message="errors.phone" />
                        </input-container>
                    </input-group>

                    <input-subtitle>Persönliche Daten</input-subtitle>
                    <input-group>
                        <input-container>
                            <input-label
                                name="birthday"
                                label="Geburtsdatum"
                            ></input-label>
                            <input-element
                                type="date"
                                name="birthday"
                                v-model="form.birthday"
                                :required="false"
                                ref="birthday"
                            ></input-element>
                            <input-error :message="errors.birthday" />
                        </input-container>
                        <input-container>
                            <input-label
                                name="gender"
                                label="Geschlecht"
                            ></input-label>
                            <input-select
                                v-model="form.gender"
                                :options="genders"
                                ref="gender"
                            ></input-select>
                            <input-error :message="errors.gender" />
                        </input-container>
                        <input-container :full-width="true">
                            <input-label
                                name="continent"
                                label="In welchem Kontinent wohnst du?"
                            ></input-label>
                            <input-radio
                                v-model="form.continent"
                                :options="continents"
                                :vertical="false"
                            ></input-radio>
                            <input-error :message="errors.continent" />
                        </input-container>
                    </input-group>

                    <input-subtitle>Deine Sprachkenntnisse</input-subtitle>
                    <input-group>
                        <input-container>
                            <input-checkbox
                                name="german"
                                v-model="form.languages.german"
                            >
                                Kannst du Artikel in deutscher Sprache
                                verfassen?</input-checkbox
                            >
                        </input-container>
                        <input-container>
                            <input-checkbox
                                name="english"
                                v-model="form.languages.english"
                            >
                                Kannst du Artikel in englischer Sprache
                                verfassen?</input-checkbox
                            >
                        </input-container>
                        <input-container>
                            <input-checkbox
                                name="french"
                                v-model="form.languages.french"
                            >
                                Kannst du Artikel in französischer Sprache
                                verfassen?</input-checkbox
                            >
                        </input-container>
                        <input-container>
                            <input-checkbox
                                name="spanish"
                                v-model="form.languages.spanish"
                            >
                                Kannst du Artikel in spanischer Sprache
                                verfassen?</input-checkbox
                            >
                        </input-container>
                        <input-container :full-width="true">
                            <input-error :message="errors.languages" />
                        </input-container>
                    </input-group>

                    <input-subtitle>Dein Lebenslauf</input-subtitle>
                    <input-group>
                        <input-container :full-width="true">
                            <input-label
                                name="curriculum_vitae"
                                label="Bitte geben hier Deinen Lebenslauf in sehr kompakter Form ein:"
                            ></input-label>
                            <input-textarea
                                name="curriculum_vitae"
                                v-model="form.curriculum_vitae"
                                :rows="12"
                                placeholder="Bitte gebe hier Deinen Lebenslauf ein"
                            ></input-textarea>
                            <input-error :message="errors.curriculum_vitae" />
                        </input-container>
                    </input-group>

                    <input-button
                        type="button"
                        @click.prevent="sendJobApplicationData"
                    >
                        Bewerbungsdaten absenden
                    </input-button>
                </form>
            </section>
        </div>
    </homepage-layout>
</template>
<script>
import { defineComponent } from "vue";

import HomepageLayout from "@/Pages/Application/Homepage/Shared/Layout";

import ErrorList from "@/Pages/Components/Form/ErrorList";
import InputLoading from "@/Pages/Components/Form/InputLoading";
import InputSubtitle from "@/Pages/Components/Form/InputSubtitle";
import InputGroup from "@/Pages/Components/Form/InputGroup";
import InputContainer from "@/Pages/Components/Form/InputContainer";
import InputLabel from "@/Pages/Components/Form/InputLabel";
import InputElement from "@/Pages/Components/Form/InputElement";
import InputSelect from "@/Pages/Components/Form/InputSelect";
import InputRadio from "@/Pages/Components/Form/InputRadio";
import InputButton from "@/Pages/Components/Form/InputButton";
import InputCheckbox from "@/Pages/Components/Form/InputCheckbox";
import InputTextarea from "@/Pages/Components/Form/InputTextarea";
import InputError from "@/Pages/Components/Form/InputError";

export default defineComponent({
    name: "Homepage_JobApplication",

    components: {
        HomepageLayout,
        ErrorList,
        InputLoading,
        InputSubtitle,
        InputGroup,
        InputContainer,
        InputLabel,
        InputElement,
        InputSelect,
        InputRadio,
        InputCheckbox,
        InputButton,
        InputTextarea,
        InputError,
    },

    props: {
        errors: Object,
    },

    data() {
        return {
            loading: false,
            loadingText: null,
            //
            form: {
                first_name: null,
                last_name: null,
                email: null,
                phone: null,
                birthday: null,
                gender: "female",
                continent: "Africa",
                languages: {
                    german: false,
                    english: false,
                    french: false,
                    spanish: false,
                },
                curriculum_vitae: null,
            },
            //
            genders: [
                { label: "weiblich", value: "female" },
                { label: "männlich", value: "male" },
            ],
            //
            continents: [
                { label: "Afrika", value: "Africa" },
                { label: "Antartkis", value: "Antarctica" },
                { label: "Asien", value: "Asia" },
                { label: "Australien/Ozeanien", value: "Australia/Oceania" },
                { label: "Europa", value: "Europe" },
                { label: "Nordamerika", value: "North America" },
                { label: "Südamerika", value: "South America" },
            ],
        };
    },

    mounted() {
        this.$refs.first_name.focus();
    },

    methods: {
        sendJobApplicationData() {
            this.loading = true;
            this.loadingText =
                "Die Daten des Bewerbungsformulares werden jetzt verarbeitet!";
            //
            this.$inertia.post(
                this.route("home.job_application.send"),
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
