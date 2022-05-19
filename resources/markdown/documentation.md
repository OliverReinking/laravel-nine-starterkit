# Dokumentation

## Components

Verzeichnis: resources/js/Pages/Components

<details>
    <summary>ApplicationSwitch.vue</summary>

    components
    - DropdownLink
    - SidebarLink

    props:
    - displayType
      - { header, sidebar }
    - applicationName
      - { admin, employee, customer }

</details>

<details>
    <summary>Breadcrumb.vue</summary>

    props:
    - home
      - default: "Dashboard"
    - applicationName
      - { admin, employee, customer }
    - current
      - Name der aktuellen Position
    - breadcrumbs
      - Liste der Navigationspunkte
    - startPage
      - { true, false }

    Beispiel:
    ```js
    <breadcrumb
        :application-name="$page.props.applications.app_admin"
        current="Edit"
        :breadcrumbs="{
            Liste: route('admin.user.index'),
            Anzeige: route('admin.user.show', appuser.id),
        }"
    ></breadcrumb>
    ```

</details>

<details>
    <summary>ButtonChangeMode.vue</summary>

    props:
    - mode
      - { light, dark}

    events:
    - changeMode

</details>

<details>
    <summary>DialogModal.vue</summary>

    components:
    - Modal.vue

    props:
    - show
      - { true, false }
    - maxWidth
      - { sm, md, lg, xl, 2xl } 
    - closeable
      - { true, false }

    events:
    - close
</details>

<details>
    <summary>Dropdown.vue</summary>

    props:
    - align
      - { left, right }
    - width
      - { 48, 64, 96}
    - autoClose
      - { true, false }
    - contentClasses
</details>

<details>
    <summary>DropwdownLink.vue</summary>

    props:
    - routeName
    - Name der Route
    - withIcon
      - { true, false }
    - withRoute
      - { true, false }

</details>

<details>
    <summary>Modal.vue</summary>

    props:
    - show
      - { true, false }
    - maxWidth
      - { sm, md, lg, xl, 2xl } 
    - closeable
      - { true, false }
    
    events:
    - close

</details>

<details>
    <summary>Profile.vue</summary>

    props:
    - sessions

</details>

<details>
    <summary>SidebarLink.vue</summary>

    props:
    - icon
    - Name des Icons, falls ein Icon angezeigt werden soll
    - label
    - Beschriftung
    - routeName
    - Name der Route

</details>


## Components/Content

Verzeichnis: resources/js/Pages/Components/Content

<details>
    <summary>CompanyName.vue</summary>

    components:
    - Favicon

    props:
    - classes
    - withFavicon
      - { true, false }
    - withSlogan
      - { true, false }
    - withLink
      - { true, false }
    - routeName
    - Name der Route

</details>

<details>
    <summary>DisplayDate.vue</summary>

    props:
    - value
    - timeOn
    - { true, false }

</details>

<details>
    <summary>DisplayNumber.vue</summary>

    props:
    - value
    - afterDigits
    - Anzahl der Nachkommastellen
    - valueUnit
      - zum Beispiel: Euro
    - valueUnitClass

</details>

<details>
    <summary>DisplayRow.vue</summary>

    props:
    - label

</details>

<details>
    <summary>DisplayYesOrNo.vue</summary>

    props:
    - value

</details>

<details>
    <summary>Markdown.vue</summary>

    props
    - markdown

</details>

<details>
    <summary>PageTitle.vue</summary>

    props
    - title

</details>

<details>
    <summary>SectionBorder.vue</summary>

</details>


<details>
    <summary>SectionContent.vue</summary>

    components:
    - SectionTitle

    slots:
    - title
    - description
    - onlinehelp
    - content

</details>

<details>
    <summary>SectionForm.vue</summary>

    components:
    - SectionTitle

    emits:
    - submitted

    props:
    - loading
      - { true, false }

</details>

<details>
    <summary>StatisticValue.vue</summary>

    props:
    - withIcon
    - icon
    - color
    - withLink
    - routeName
    - label
    - valueType
    - value
    - afterDigits
    - valueUnit
    - valueUnitClass

</details>

<details>
    <summary>StatisticValueContent.vue</summary>

    components:
    - DisplayNumber
    - DisplayDate

    props:
    - withIcon
    - icon
    - color
    - withLink
    - routeName
    - label
    - valueType
    - value
    - afterDigits
    - valueUnit
    - valueUnitClass
  
</details>


<details>
    <summary>Toast.vue</summary>

    props:
    - show
      - { true, false }
    - type
      - { success, error}
    - message

</details>

## Components/Form

Verzeichnis: resources/js/Pages/Components/Form


<details>
    <summary>ButtonGroup.vue</summary>

    props:
    - align
      - default: "justify-center md:justify-end"

</details>


<details>
    <summary>ErrorList.vue</summary>

    props:
    - Errors

</details>

<details>
    <summary>InputButton.vue</summary>

    prosp:
    - type
      - { submit, button }

</details>

<details>
    <summary>InputCheckbox.vue</summary>

    events:
    - update:checked
  
    props:
    - name
    - modelValue
    - label

</details>

<details>
    <summary>InputContainer.vue</summary>

    prosp:
    - fullWith
      - { true, false }

</details>

<details>
    <summary>InputDangerButton.vue</summary>
 
    props:
    - type

</details>


<details>
    <summary>InputElement.vue</summary>

    emits:
    - update:modelValue
  
    props:
    - name
    - modelValue
    - placeholder
    - required
      - { true, false }

</details>

<details>
    <summary>InputError.vue</summary>

    props:
    - message

</details>

<details>
    <summary>InputGroup.vue</summary>

</details>

<details>
    <summary>InputLabel.vue</summary>

    props:
    - name
      - der Name, der auch für das Eingabeelement benutzt wird

</details>

<details>
    <summary>InputLoading.vue</summary>

    props:
    - loading
      - { true, false }
    - loadingText

</details>

<details>
    <summary>InputRadio.vue</summary>

    events:
    - update:modelValue

    props:
    - modelValue
    - options
    - vertical

</details>

<details>
    <summary>InputSelect.vue</summary>

    events:
    - update:modelValue

    props:
    - modelValue
    - options

</details>

<details>
    <summary>InputSubtitle.vue</summary>

    props:
    - title

</details>

<details>
    <summary>InputTextarea.vue</summary>

    events:
    - update:modelValue

     props:
    - name
    - modelValue
    - placeholder
    - rows

</details>

## Components/Icons

Verzeichnis: resources/js/Pages/Components/Icons

## Components/Lists

Verzeichnis: resources/js/Pages/Components/Lists

<details>
    <summary>ListContainer.vue</summary>

    components:
    - Pagination
    - searchFilter

    props: 
    - datarows
    - filter
    - noEntries
    - routeIndex
    - searchFilter
      - { true, false }
    - searchText
    - showOn
      - { true, false }
    - routeShow
    - editOn
      - { true, false }
    - routeEdit

</details>

<details>
    <summary>Pagination.vue</summary>

    props:
    - links

</details>

<details>
    <summary>SearchFilter.vue</summary>

    events:
    - update:modelvalue
    - reset

    props:
    - modelValue
    - searchText

</details>

## Components/Logo

Verzeichnis: resources/js/Pages/Components/Logo

<details>
    <summary>Favicon.vue</summary>

</details>

<details>
    <summary>Logo.vue</summary>

</details>


# Anwendungen

## Webseite

Verzeichnis: resources/js/Pages/Application/Homepage

## Administrator

Verzeichnis: resources/js/Pages/Application/Admin

## Mitarbeiter

Verzeichnis: resources/js/Pages/Application/Employee

## Kunde
Verzeichnis: resources/js/Pages/Application/Customer
