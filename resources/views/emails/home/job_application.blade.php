@component('mail::message')
# Neue Bewerbung

Es liegt eine neue Bewerbung vor.<br>

## Bewerberdaten

### Persönliche Daten
*{{ $job_application_values->first_name }} {{ $job_application_values->last_name }}*

Mail: {{ $job_application_values->email }}<br>
Telefon: {{ $job_application_values->phone }}<br>
Geschlecht: {{ $job_application_values->gender }}<br>
Kontinent: {{ $job_application_values->continent }}<br>

### Sprachen
Deutsch: {{ $job_application_values->german }}<br>
Englisch: {{ $job_application_values->english }}<br>
Französisch: {{ $job_application_values->french }}<br>
Spanisch: {{ $job_application_values->spanish }}<br>

### Lebenslauf
{{ $job_application_values->curriculum_vitae }}

## Dein Auftrag
Bitte beantworte die Bewerbung schnellstmöglich!
@endcomponent
