@component('mail::message')
# Neue Bewerbung

Es liegt eine neue Bewerbung vor.
Die Daten dieser Bewerbung lauten:

## Bewerberdaten

### Persönliche Daten
{{ $job_application_values->first_name }} {{ $job_application_values->last_name }}

Mail: {{ $job_application_values->email }}

Telefon: {{ $job_application_values->phone }}

Geschlecht: {{ $job_application_values->gender }}

Kontinent: {{ $job_application_values->continent }}


### Sprachen
Deutsch: {{ $job_application_values->languages['german'] }}

Englisch: {{ $job_application_values->languages['english'] }}

Französisch: {{ $job_application_values->languages['french'] }}

Spanisch: {{ $job_application_values->languages['spanish'] }}


### Lebenslauf
{{ $job_application_values->curriculum_vitae }}

## Dein Auftrag
Bitte beantworte die Bewerbung schnellstmöglich!

@endcomponent
