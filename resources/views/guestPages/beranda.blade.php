<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bersama Halal Madani</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <!-- <style>
        /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
        *,
        :before,
        :after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        *,
        :before,
        :after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        :before,
        :after {
            --tw-content: ""
        }

        html,
        :host {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            letter-spacing: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        input:where([type=button]),
        input:where([type=reset]),
        input:where([type=submit]) {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        button,
        [role=button] {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden]:where(:not([hidden=until-found])) {
            display: none
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0
        }

        .z-0 {
            z-index: 0
        }

        .\!row-span-1 {
            grid-row: span 1 / span 1 !important
        }

        .-mx-3 {
            margin-left: -.75rem;
            margin-right: -.75rem
        }

        .-ml-px {
            margin-left: -1px
        }

        .ml-3 {
            margin-left: .75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .table {
            display: table
        }

        .grid {
            display: grid
        }

        .\!hidden {
            display: none !important
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-5 {
            height: 1.25rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-5 {
            width: 1.25rem
        }

        .w-\[calc\(100\%_\+_8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .w-full {
            width: 100%
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .cursor-default {
            cursor: default
        }

        .resize {
            resize: both
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .\!flex-row {
            flex-direction: row !important
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .justify-items-center {
            justify-items: center
        }

        .gap-2 {
            gap: .5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: .5rem
        }

        .rounded-md {
            border-radius: .375rem
        }

        .rounded-sm {
            border-radius: .125rem
        }

        .rounded-l-md {
            border-top-left-radius: .375rem;
            border-bottom-left-radius: .375rem
        }

        .rounded-r-md {
            border-top-right-radius: .375rem;
            border-bottom-right-radius: .375rem
        }

        .border {
            border-width: 1px
        }

        .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: #ff2d201a
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .to-zinc-900 {
            --tw-gradient-to: #18181b var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #ff2d20
        }

        .object-cover {
            -o-object-fit: cover;
            object-fit: cover
        }

        .object-top {
            -o-object-position: top;
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-2 {
            padding-left: .5rem;
            padding-right: .5rem
        }

        .px-3 {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .pt-3 {
            padding-top: .75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: .875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-5 {
            line-height: 1.25rem
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity, 1))
        }

        .text-black\/50 {
            color: #00000080
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity, 1))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .underline {
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-black {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
        }

        .ring-gray-300 {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / .05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .filter {
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
            transition-duration: .15s
        }

        .duration-150 {
            transition-duration: .15s
        }

        .duration-300 {
            transition-duration: .3s
        }

        .ease-in-out {
            transition-timing-function: cubic-bezier(.4, 0, .2, 1)
        }

        .selection\:bg-\[\#FF2D20\] *::-moz-selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:text-white *::-moz-selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\]::-moz-selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
        }

        .selection\:text-white::-moz-selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity, 1))
        }

        .hover\:text-black\/70:hover {
            color: #000000b3
        }

        .hover\:text-gray-400:hover {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity, 1))
        }

        .hover\:text-gray-500:hover {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / .2)
        }

        .focus\:z-10:focus {
            z-index: 10
        }

        .focus\:border-blue-300:focus {
            --tw-border-opacity: 1;
            border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus\:ring:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
        }

        .active\:bg-gray-100:active {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
        }

        .active\:text-gray-500:active {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity, 1))
        }

        .active\:text-gray-700:active {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity, 1))
        }

        @media (min-width: 640px) {
            .sm\:flex {
                display: flex
            }

            .sm\:hidden {
                display: none
            }

            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:flex-1 {
                flex: 1 1 0%
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity, 1))
            }
        }

        .rtl\:flex-row-reverse:where([dir=rtl], [dir=rtl] *) {
            flex-direction: row-reverse
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:border-gray-600 {
                --tw-border-opacity: 1;
                border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
            }

            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-gray-300 {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .dark\:text-gray-600 {
                --tw-text-opacity: 1;
                color: rgb(75 85 99 / var(--tw-text-opacity, 1))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .dark\:text-white\/50 {
                color: #ffffff80
            }

            .dark\:text-white\/70 {
                color: #ffffffb3
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
            }

            .dark\:hover\:text-gray-300:hover {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .dark\:hover\:text-white\/70:hover {
                color: #ffffffb3
            }

            .dark\:hover\:text-white\/80:hover {
                color: #fffc
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
            }

            .dark\:focus\:border-blue-700:focus {
                --tw-border-opacity: 1;
                border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
            }

            .dark\:focus\:border-blue-800:focus {
                --tw-border-opacity: 1;
                border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .dark\:active\:bg-gray-700:active {
                --tw-bg-opacity: 1;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
            }

            .dark\:active\:text-gray-300:active {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity, 1))
            }
        }
    </style> -->
    @endif
</head>




<body>
    <!-- <header>

        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
            @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
            </a>

            @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header> -->


    <!-- 
    sm: 640px (small)
    md: 768px (medium)
    lg: 1024px (large)
    xl: 1280px (extra large)
    2xl: 1536px (2x extra large) 
    -->

    <header id="navbar" class="hidden">
        @include('layouts.navbar')
    </header>

    <main class="bg-white mx-auto max-w-screen-2xl">

        <section class=" bg-abu-99 grid grid-cols-10 items-center lg:items-start md:h-full">
            <div class=" md:h-full col-span-10 md:col-span-7 lg:col-span-6 ">
                <div class="  bg-gradient-to-br from-hijau-8 via-hijau-2 to-hijau-8  px-5 sm:px-8 pt-10 md:px-12 md:py-10 lg:px-16 lg:py-12 text-center md:text-left">
                    <div class="flex justify-self-center md:justify-self-start items-center text-mint-2 gap-1 mb-2 md:mb-3 lg:mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="currentColor" height="16" viewBox="0 0 256 256">
                            <path d="M216,96A88,88,0,1,0,72,163.83V240a8,8,0,0,0,11.58,7.16L128,225l44.43,22.21A8.07,8.07,0,0,0,176,248a8,8,0,0,0,8-8V163.83A87.85,87.85,0,0,0,216,96ZM56,96a72,72,0,1,1,72,72A72.08,72.08,0,0,1,56,96Zm16,0a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
                        </svg>

                        <p class=" font-semibold text-12  sm:text-14 italic">
                            LPH AKREDITASI UTAMA
                        </p>
                    </div>

                    <h1 class="hidden lg:block lg:text-h1 text-putih font-philosopher font-bold mb-4 ">
                        <div class="flex">
                            Raih
                            <span class="inline-block h-20 overflow-hidden relative flex w-3/4 ml-4">
                                <span class="block absolute top-0 animate-text-slide">Kepercayaan</span>
                                <span class="block absolute top-[100%] animate-text-slide">Kenyamanan</span>
                                <span class="block absolute top-[200%] animate-text-slide">Keberkahan</span>
                            </span>
                        </div>
                        Konsumen dengan Sertifikasi Halal
                    </h1>

                    <h1 class="lg:hidden text-32 sm:text-36 md:text-56 text-putih font-philosopher font-bold mb-2 sm:mb-4 ">
                        Raih Kepercayaan Konsumen dengan Sertifikasi Halal
                    </h1>

                    <p class="font-regular text-16 sm:text-20 text-mint-2 mb-3 sm:mb-8 md:mb-4">
                        Pastikan produk Anda memenuhi standar kehalalan dengan proses cepat, transparan, dan terpercaya. </p>
                    <div class=" hidden md:block ">
                        <p class="font-reguler text-putih text-12 sm:text-14 mb-1 sm:mb-2">
                            Bergabunglah dengan 700+ klien kami
                        </p>
                        <div class="flex">
                            <div class="flex relative ">
                                <img alt="Klien 5" class="rounded-full w-6 h-6 sm:w-8 sm:h-8  border-2 border-hijau-2 " src="{{ asset('images/fotoKlien/123.jpeg') }}" />
                                <img alt="Klien 1" class="rounded-full w-6 h-6 sm:w-8 sm:h-8  border-2 border-hijau-2 -ml-3" src="{{ asset('images/fotoKlien/Frame 520.png') }}" />
                                <img alt="Klien 2" class="rounded-full w-6 h-6 sm:w-8 sm:h-8  border-2 border-hijau-2 -ml-3" src="{{ asset('images/fotoKlien/Frame 521.png') }}" />
                                <img alt="Klien 3" class="rounded-full w-6 h-6 sm:w-8 sm:h-8  border-2 border-hijau-2 -ml-3" src="{{ asset('images/fotoKlien/Frame 522.png') }}" />
                                <img alt="Klien 4" class="rounded-full w-6 h-6 sm:w-8 sm:h-8  border-2 border-hijau-2 -ml-3" src="{{ asset('images/fotoKlien/Frame 524.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3 flex justify-center text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] mb-2 mt-6">
                            Daftar Sertifikasi Halal
                        </a>
                        <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-semibold rounded-full text-16 bg-transparent border border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                            Pelajari Selengkapnya
                        </a>

                        <div class="relative ">

                            <img alt="Seorang pria mendapatkan sertifikat halal" class="mt-8 h-full  w-auto" src="{{ asset('images/111.webp') }}" />
                            <div class="absolute text-center top-8 right-0 sm:top-14 sm:right-16 p-2 text-white text-12 ">
                                <p class="font-reguler"><span class="font-bold">99% </span>klien puas</p>
                                <p class=" font-reguler">dengan layanan kami</p>
                            </div>
                            <div class="absolute text-center top-1/4  left-1 sm:top-1/3 sm:left-6 p-2 text-white text-12">
                                <p class=" font-reguler">Proses lebih</p>
                                <p class="font-reguler"><span class="font-bold">mudah </span>dan <span class="font-bold">efisien</span></p>
                            </div>
                        </div>
                    </div>










                </div>

                <div class="hidden md:block mb-4 md:mb-0 md:flex items-center py-4 px-5 md:px-12 md:gap-3 md:py-10 lg:pl-16 lg:py-6  lg:gap-5 bg-hijau ">
                    <a href="#" class="hidden md:block bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] relative px-8 py-5 text-hitam font-semibold rounded-full text-16 
    outline-[7px] outline-transparent hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D]
   before:absolute before:inset-0 before:rounded-full before:border-[7px] before:border-transparent outline-offset-[7px]
   before:animate-[pulse-border_6s_ease-in-out_infinite]">
                        Daftar Sertifikasi Halal
                    </a>

                    <a href="#" class="group px-6 py-3 flex justify-center items-center gap-2 text-hitam  font-semibold rounded-full text-16 bg-putih  border-[1.5px] border-hijau-6
     transition duration-200 hover:bg-hijau-4 hover:text-putih active:bg-hijau-2 active:text-putih">
                        Pelajari Selengkapnya
                    </a>
                </div>
            </div>

            <div class="relative col-span-10 md:col-span-3 lg:col-span-4 h-full justify-center">

                <img alt="Seorang pria mendapatkan sertifikat halal" class=" hidden md:block  h-full w-auto object-cover rounded-bl-2xl" src="{{ asset('images/sertifikasi halal img.webp') }}" />
                <div class="absolute text-center top-12 right-0 p-4 text-white text-14 transition-transform transform animate-slide">
                    <p class="font-reguler"><span class="font-bold">99% </span>klien puas</p>
                    <p class=" font-reguler">dengan layanan kami</p>
                </div>
                <div class="absolute text-center top-1/4 left-4 p-4 text-white text-14 transition-transform transform animate-slide-reverse">
                    <p class=" font-reguler">Proses lebih</p>
                    <p class="font-reguler"><span class="font-bold">mudah </span>dan <span class="font-bold">efisien</span></p>
                </div>
            </div>

        </section>

        <section class="w-full py-8 sm:py-12 md:py-16  bg-abu-99 overflow-hidden">
            <p class="font-medium text-14 sm:text-16 md:text-20 px-6  md:px-10  text-mint-1 mb-4 md:mb-8 text-center transform translate-y-10 transition-all duration-20000" data-fade>
                Bersama Halal Madani terus berkomitmen memberikan layanan terbaik untuk mendukung industri halal.
            </p>

            <div class="relative w-full overflow-hidden transform translate-y-10 transition-all duration-20000" data-fade>
                <div class="marquee flex items-center  w-max">
                    <div class="flex items-center  gap-4 md:gap-8">
                        <img src="{{ asset('images/logoMitra/1.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Mercure klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/2.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Pangan dan Pertanian Kota Padang Panjang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/3.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Japfa klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/4.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Koperasi dan UKM Perindustrian dan Perdagangan Kabupaten Kepulauan Mentawai klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/5.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Bank Indonesia klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/6.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Perindustrian dan Perdagangan Provinsi Sumatera Barat klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/7.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Ibis Hotels klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/8.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Koperasi dan UKM Kota Payakumbuh klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/9.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Charoen Pokphand Indonesia klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/10.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Pariwisata Provinsi Sumatera Barat klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/11.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Sate Manangkabau Padang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/12.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Perdagangan Koperasi dan UKM Kota Solok klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/13.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Finna klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/14.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Peternakan dan Kesehatan Hewan Provinsi Sumatera Barat klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/15.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Aqiqah Padang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/16.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Tenaga Kerja dan Perindustrian Kota Padang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/17.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Pocha Padang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/18.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Pangan dan Pertanian Kota Padang Panjang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/19.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="PT Noah Logistik Indonesia klien Bersama Halal Madani" />

                    </div>

                    <div class="flex items-center  gap-4 md:gap-8">
                        <img src="{{ asset('images/logoMitra/1.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Mercure klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/2.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Pangan dan Pertanian Kota Padang Panjang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/3.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Japfa klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/4.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Koperasi dan UKM Perindustrian dan Perdagangan Kabupaten Kepulauan Mentawai klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/5.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Bank Indonesia klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/6.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Perindustrian dan Perdagangan Provinsi Sumatera Barat klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/7.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Ibis Hotels klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/8.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Koperasi dan UKM Kota Payakumbuh klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/9.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Charoen Pokphand Indonesia klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/10.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Pariwisata Provinsi Sumatera Barat klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/11.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Sate Manangkabau Padang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/12.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Perdagangan Koperasi dan UKM Kota Solok klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/13.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Finna klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/14.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Peternakan dan Kesehatan Hewan Provinsi Sumatera Barat klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/15.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Aqiqah Padang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/16.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Tenaga Kerja dan Perindustrian Kota Padang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/17.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="Pocha Padang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/18.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="DINAS Pangan dan Pertanian Kota Padang Panjang klien Bersama Halal Madani" />
                        <img src="{{ asset('images/logoMitra/19.png') }}" class="h-24 sm:28 md:h-32 w-auto" alt="PT Noah Logistik Indonesia klien Bersama Halal Madani" />

                    </div>
                </div>
            </div>
        </section>


        <section class="relative bg-gradient-to-br from-hijau-2 to-[#031207] ">
            <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto w-full md:gap-6 lg:gap-12 p-5 py-7 sm:p-8 md:p-12 lg:p-16">

                <div class="w-full mb-4 md:mb-0">
                    <div class="z-2 relative w-full aspect-[4/3] overflow-hidden rounded-2xl group border-2 md:border-4 border-hijau-3 ">
                        <video class="w-full h-full object-cover" controls id="video">
                            <source src="{{ asset('videos/video tes.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <div id="playButton" class="absolute inset-0 flex items-center justify-center bg-black/10 cursor-pointer group-hover:bg-black/20 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="white" class="opacity-80 group-hover:opacity-100 transition">
                                <path d="M7 6v12l10-6z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="md:my-3 lg:my-4 flex flex-col justify-between md:min-h-[250px] h-auto">
                    <div class="transform translate-y-10 transition-all duration-20000" data-fade>
                        <p class="text-white font-philosopher text-20 sm:text-24 md:text-32 lg:text-36 font-bold">
                            “…BHM stands out as a trusted and professional halal certification body…”
                        </p>
                        <p class="font-regular text-12-2 md:text-16-2 lg:text-20 text-mint-2 mt-2 md:mt-4">
                            “…BHM menonjol sebagai lembaga sertifikasi halal yang terpercaya dan profesional…”
                        </p>
                    </div>
                    <div class="md:mt-auto mt-4 sm:mt-6 transform translate-y-10 transition-all duration-20000" data-fade>
                        <p class="text-16 lg:text-24 text-putih font-bold font-philosopher">Michael Thompson</p>
                        <p class="text-12 md:text-14 lg:text-16 text-putih">Food Industry Consultant, USA</p>
                    </div>
                </div>

                <img src="{{ asset('images/Frame 813.webp') }}" class=" absolute bottom-0 right-0 h-auto w-1/3 sm:w-1/3 md:w-1/4 lg:w-1/5">
            </div>
        </section>

        <section class="bg-gradient-to-b from-emas-3 to-abu-99 py-16 sm:py-20 md:py-24 lg:py-36  px-5 sm:px-8 text-center justify-items-center">
            <div class=" mx-auto transform translate-y-10 transition-all duration-20000" data-fade>
                <h2 class="text-16 sm:text-24 md:text-h2 font-medium  capitalize leading-loose tracking-wide italic md:mb-2">Mengapa Memilih</h2>
                <h3 class="text-32 sm:text-40 md:text-56 font-bold text-hijau-2 font-philosopher  tracking-wide">Bersama Halal Madani</h3>
            </div>

            <div class="mt-16 md:mt-32 space-y-12 sm:space-y-24 md:space-y-32 md:w-3/4 lg:2/3 ">

                <div class="flex  flex-col items-center justify-center gap-1 sm:gap-2 md:gap-4">
                    <h4 class="text-20 sm:text-24 md:text-36 font-bold text-hijau-2 font-philosopher transform translate-y-10 transition-all duration-20000" data-fade>
                        Halalan Toyyiban
                    </h4>
                    <svg width="38" height="37" viewBox="0 0 38 37" class=" w-auto h-4 md:h-6 text-emas-2 transform translate-y-10 transition-all duration-20000" data-fade fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.1745 18.4995L26.9232 16.1342H29.9642L32.7129 18.4995L29.9642 20.8648H26.9232L24.1745 18.4995ZM34.4268 18.4995L30.3753 21.9852H27.417L29.5098 24.0792L29.9088 29.4077L24.5796 29.0088L22.4868 26.9158V29.8739L19.0005 33.9253L15.5142 29.8739V26.9158L13.4214 29.0088L8.09225 29.4077L8.49126 24.0792L10.584 21.9852H7.62573L3.57418 18.4995L7.62573 15.0128H10.584L8.49126 12.9198L8.09225 7.59031L13.4214 7.99023L15.5142 10.0832V7.12509L19.0005 3.07371L22.4868 7.12509V10.0832L24.5796 7.99023L29.9088 7.59031L29.5098 12.9198L27.417 15.0128H30.3753L34.4268 18.4995ZM19.0005 32.2121L16.6347 29.4629V26.4224L19.0005 23.6732L21.3653 26.4224V29.4629L19.0005 32.2121ZM19.0005 21.9601L16.2377 25.1704L16.5551 20.9452L12.3302 21.2617L15.5404 18.4995L12.3302 15.7373L16.5551 16.0538L16.2377 11.8286L19.0005 15.0389L21.7633 11.8286L21.4459 16.0538L25.6708 15.7373L22.4606 18.4995L25.6708 21.2617L21.4459 20.9452L21.7633 25.1704L19.0005 21.9601ZM19.0005 37L13.5816 31.5811C11.0274 31.5811 8.47312 31.5811 5.91886 31.5811V23.9184L0.5 18.4995L5.91886 13.0806V5.41793H13.5816L19.0005 0L24.4184 5.41793C26.9736 5.41793 29.5269 5.41793 32.0811 5.41793V13.0806L37.5 18.4995L32.0811 23.9184V31.5811H24.4184L19.0005 37ZM28.6956 28.1949L25.0793 27.9236L22.9311 25.7753L22.6601 22.159L26.2764 22.4293L28.4246 24.5786L28.6956 28.1949ZM5.2881 18.4995L8.03683 16.1342H11.0778L13.8265 18.4995L11.0778 20.8648H8.03683L5.2881 18.4995ZM9.3054 28.1949L9.57644 24.5786L11.7246 22.4293L15.3409 22.159L15.0709 25.7753L12.9217 27.9236L9.3054 28.1949ZM19.0005 13.3257L16.6347 10.5766V7.53505L19.0005 4.7869L21.3653 7.53505V10.5766L19.0005 13.3257ZM28.6956 8.80412L28.4246 12.4204L26.2764 14.5697L22.6601 14.84L22.9311 11.2237L25.0793 9.07541L28.6956 8.80412ZM9.3054 8.80412L12.9217 9.07541L15.0709 11.2237L15.3409 14.84L11.7246 14.5697L9.57644 12.4204L9.3054 8.80412Z" fill="#0A3E19" />
                    </svg>

                    <p class=" text-14-3 sm:text-16-2 md:text-18-2 text-hitam text-center transform translate-y-10 transition-all duration-20000" data-fade>
                        BHM memastikan setiap proses pemeriksaan halal dilakukan sesuai dengan prinsip halalan toyyiban—tidak hanya halal secara syariat, tetapi juga berkualitas, aman, dan baik untuk dikonsumsi. Kami berkomitmen membantu usaha Anda dalam menerapkan standar halal yang berkah dan bermanfaat.
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center gap-1 sm:gap-2 md:gap-4">
                    <h4 class="text-20 sm:text-24 md:text-36 font-bold text-hijau-2 font-philosopher transform translate-y-10 transition-all duration-20000" data-fade>
                        Independen dan Profesional
                    </h4>
                    <svg width="38" height="37" viewBox="0 0 38 37" class=" w-auto h-4 md:h-6 text-emas-2 transform translate-y-10 transition-all duration-20000" data-fade fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.1745 18.4995L26.9232 16.1342H29.9642L32.7129 18.4995L29.9642 20.8648H26.9232L24.1745 18.4995ZM34.4268 18.4995L30.3753 21.9852H27.417L29.5098 24.0792L29.9088 29.4077L24.5796 29.0088L22.4868 26.9158V29.8739L19.0005 33.9253L15.5142 29.8739V26.9158L13.4214 29.0088L8.09225 29.4077L8.49126 24.0792L10.584 21.9852H7.62573L3.57418 18.4995L7.62573 15.0128H10.584L8.49126 12.9198L8.09225 7.59031L13.4214 7.99023L15.5142 10.0832V7.12509L19.0005 3.07371L22.4868 7.12509V10.0832L24.5796 7.99023L29.9088 7.59031L29.5098 12.9198L27.417 15.0128H30.3753L34.4268 18.4995ZM19.0005 32.2121L16.6347 29.4629V26.4224L19.0005 23.6732L21.3653 26.4224V29.4629L19.0005 32.2121ZM19.0005 21.9601L16.2377 25.1704L16.5551 20.9452L12.3302 21.2617L15.5404 18.4995L12.3302 15.7373L16.5551 16.0538L16.2377 11.8286L19.0005 15.0389L21.7633 11.8286L21.4459 16.0538L25.6708 15.7373L22.4606 18.4995L25.6708 21.2617L21.4459 20.9452L21.7633 25.1704L19.0005 21.9601ZM19.0005 37L13.5816 31.5811C11.0274 31.5811 8.47312 31.5811 5.91886 31.5811V23.9184L0.5 18.4995L5.91886 13.0806V5.41793H13.5816L19.0005 0L24.4184 5.41793C26.9736 5.41793 29.5269 5.41793 32.0811 5.41793V13.0806L37.5 18.4995L32.0811 23.9184V31.5811H24.4184L19.0005 37ZM28.6956 28.1949L25.0793 27.9236L22.9311 25.7753L22.6601 22.159L26.2764 22.4293L28.4246 24.5786L28.6956 28.1949ZM5.2881 18.4995L8.03683 16.1342H11.0778L13.8265 18.4995L11.0778 20.8648H8.03683L5.2881 18.4995ZM9.3054 28.1949L9.57644 24.5786L11.7246 22.4293L15.3409 22.159L15.0709 25.7753L12.9217 27.9236L9.3054 28.1949ZM19.0005 13.3257L16.6347 10.5766V7.53505L19.0005 4.7869L21.3653 7.53505V10.5766L19.0005 13.3257ZM28.6956 8.80412L28.4246 12.4204L26.2764 14.5697L22.6601 14.84L22.9311 11.2237L25.0793 9.07541L28.6956 8.80412ZM9.3054 8.80412L12.9217 9.07541L15.0709 11.2237L15.3409 14.84L11.7246 14.5697L9.57644 12.4204L9.3054 8.80412Z" fill="#0A3E19" />
                    </svg>

                    <p class=" text-14-3 sm:text-16-2 md:text-18-2 text-hitam text-center transform translate-y-10 transition-all duration-20000" data-fade>
                        Sebagai institusi yang bergerak di bidang halal, BHM memiliki tiga divisi utama: Lembaga Pemeriksa Halal (LPH), Lembaga Pelatihan Kerja (LPK), dan Institut BHM. Dengan komitmen terhadap integritas dan objektivitas, BHM memastikan setiap layanan—baik pemeriksaan halal, pelatihan, maupun konsultasi—dilaksanakan secara profesional oleh tim yang kompeten dan tersertifikasi.
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center gap-1 sm:gap-2 md:gap-4">
                    <h4 class="text-20 sm:text-24 md:text-36 font-bold text-hijau-2 font-philosopher transform translate-y-10 transition-all duration-20000" data-fade>
                        Transparan dan Akuntabel
                    </h4>
                    <svg width="38" height="37" viewBox="0 0 38 37" class=" w-auto h-4 md:h-6 text-emas-2 transform translate-y-10 transition-all duration-20000" data-fade fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.1745 18.4995L26.9232 16.1342H29.9642L32.7129 18.4995L29.9642 20.8648H26.9232L24.1745 18.4995ZM34.4268 18.4995L30.3753 21.9852H27.417L29.5098 24.0792L29.9088 29.4077L24.5796 29.0088L22.4868 26.9158V29.8739L19.0005 33.9253L15.5142 29.8739V26.9158L13.4214 29.0088L8.09225 29.4077L8.49126 24.0792L10.584 21.9852H7.62573L3.57418 18.4995L7.62573 15.0128H10.584L8.49126 12.9198L8.09225 7.59031L13.4214 7.99023L15.5142 10.0832V7.12509L19.0005 3.07371L22.4868 7.12509V10.0832L24.5796 7.99023L29.9088 7.59031L29.5098 12.9198L27.417 15.0128H30.3753L34.4268 18.4995ZM19.0005 32.2121L16.6347 29.4629V26.4224L19.0005 23.6732L21.3653 26.4224V29.4629L19.0005 32.2121ZM19.0005 21.9601L16.2377 25.1704L16.5551 20.9452L12.3302 21.2617L15.5404 18.4995L12.3302 15.7373L16.5551 16.0538L16.2377 11.8286L19.0005 15.0389L21.7633 11.8286L21.4459 16.0538L25.6708 15.7373L22.4606 18.4995L25.6708 21.2617L21.4459 20.9452L21.7633 25.1704L19.0005 21.9601ZM19.0005 37L13.5816 31.5811C11.0274 31.5811 8.47312 31.5811 5.91886 31.5811V23.9184L0.5 18.4995L5.91886 13.0806V5.41793H13.5816L19.0005 0L24.4184 5.41793C26.9736 5.41793 29.5269 5.41793 32.0811 5.41793V13.0806L37.5 18.4995L32.0811 23.9184V31.5811H24.4184L19.0005 37ZM28.6956 28.1949L25.0793 27.9236L22.9311 25.7753L22.6601 22.159L26.2764 22.4293L28.4246 24.5786L28.6956 28.1949ZM5.2881 18.4995L8.03683 16.1342H11.0778L13.8265 18.4995L11.0778 20.8648H8.03683L5.2881 18.4995ZM9.3054 28.1949L9.57644 24.5786L11.7246 22.4293L15.3409 22.159L15.0709 25.7753L12.9217 27.9236L9.3054 28.1949ZM19.0005 13.3257L16.6347 10.5766V7.53505L19.0005 4.7869L21.3653 7.53505V10.5766L19.0005 13.3257ZM28.6956 8.80412L28.4246 12.4204L26.2764 14.5697L22.6601 14.84L22.9311 11.2237L25.0793 9.07541L28.6956 8.80412ZM9.3054 8.80412L12.9217 9.07541L15.0709 11.2237L15.3409 14.84L11.7246 14.5697L9.57644 12.4204L9.3054 8.80412Z" fill="#0A3E19" />
                    </svg>

                    <p class=" text-14-3 sm:text-16-2 md:text-18-2 text-hitam text-center transform translate-y-10 transition-all duration-20000" data-fade>
                        Kami menerapkan sistem yang terbuka dan dapat dipertanggungjawabkan dalam setiap aspek layanan. Mulai dari pemeriksaan halal yang sesuai regulasi, program pelatihan kerja yang berkualitas, hingga konsultasi halal yang komprehensif—semua informasi terkait prosedur, biaya, serta hasil layanan disampaikan dengan jelas, memastikan kemudahan dan kepercayaan bagi setiap pelanggan.
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center gap-1 sm:gap-2 md:gap-4">
                    <h4 class="text-20 sm:text-24 md:text-36 font-bold text-hijau-2 font-philosopher transform translate-y-10 transition-all duration-20000" data-fade>
                        Non-Diskriminatif
                    </h4>
                    <svg width="38" height="37" viewBox="0 0 38 37" class=" w-auto h-4 md:h-6 text-emas-2 transform translate-y-10 transition-all duration-20000" data-fade fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.1745 18.4995L26.9232 16.1342H29.9642L32.7129 18.4995L29.9642 20.8648H26.9232L24.1745 18.4995ZM34.4268 18.4995L30.3753 21.9852H27.417L29.5098 24.0792L29.9088 29.4077L24.5796 29.0088L22.4868 26.9158V29.8739L19.0005 33.9253L15.5142 29.8739V26.9158L13.4214 29.0088L8.09225 29.4077L8.49126 24.0792L10.584 21.9852H7.62573L3.57418 18.4995L7.62573 15.0128H10.584L8.49126 12.9198L8.09225 7.59031L13.4214 7.99023L15.5142 10.0832V7.12509L19.0005 3.07371L22.4868 7.12509V10.0832L24.5796 7.99023L29.9088 7.59031L29.5098 12.9198L27.417 15.0128H30.3753L34.4268 18.4995ZM19.0005 32.2121L16.6347 29.4629V26.4224L19.0005 23.6732L21.3653 26.4224V29.4629L19.0005 32.2121ZM19.0005 21.9601L16.2377 25.1704L16.5551 20.9452L12.3302 21.2617L15.5404 18.4995L12.3302 15.7373L16.5551 16.0538L16.2377 11.8286L19.0005 15.0389L21.7633 11.8286L21.4459 16.0538L25.6708 15.7373L22.4606 18.4995L25.6708 21.2617L21.4459 20.9452L21.7633 25.1704L19.0005 21.9601ZM19.0005 37L13.5816 31.5811C11.0274 31.5811 8.47312 31.5811 5.91886 31.5811V23.9184L0.5 18.4995L5.91886 13.0806V5.41793H13.5816L19.0005 0L24.4184 5.41793C26.9736 5.41793 29.5269 5.41793 32.0811 5.41793V13.0806L37.5 18.4995L32.0811 23.9184V31.5811H24.4184L19.0005 37ZM28.6956 28.1949L25.0793 27.9236L22.9311 25.7753L22.6601 22.159L26.2764 22.4293L28.4246 24.5786L28.6956 28.1949ZM5.2881 18.4995L8.03683 16.1342H11.0778L13.8265 18.4995L11.0778 20.8648H8.03683L5.2881 18.4995ZM9.3054 28.1949L9.57644 24.5786L11.7246 22.4293L15.3409 22.159L15.0709 25.7753L12.9217 27.9236L9.3054 28.1949ZM19.0005 13.3257L16.6347 10.5766V7.53505L19.0005 4.7869L21.3653 7.53505V10.5766L19.0005 13.3257ZM28.6956 8.80412L28.4246 12.4204L26.2764 14.5697L22.6601 14.84L22.9311 11.2237L25.0793 9.07541L28.6956 8.80412ZM9.3054 8.80412L12.9217 9.07541L15.0709 11.2237L15.3409 14.84L11.7246 14.5697L9.57644 12.4204L9.3054 8.80412Z" fill="#0A3E19" />
                    </svg>

                    <p class=" text-14-3 sm:text-16-2 md:text-18-2 text-hitam text-center transform translate-y-10 transition-all duration-20000" data-fade>
                        BHM melayani semua pelaku usaha dan mitra dari berbagai sektor, tanpa membedakan skala bisnis atau latar belakang. Kami berkomitmen memberikan layanan yang adil dan setara, baik untuk usaha mikro, kecil, menengah, maupun perusahaan besar, demi mendukung pertumbuhan ekosistem halal yang inklusif.
                    </p>
                </div>



            </div>
        </section>

        <section class="bg-abu-99 py-16 sm:py-20 md:py-24 lg:py-36 px-5 sm:px-14 justify-items-center text-center">
            <div class=" mx-auto md:w-3/4 lg:2/3 transform translate-y-10 transition-all duration-20000" data-fade>
                <h2 class="text-16 sm:text-24 md:text-h2 font-medium  capitalize leading-loose tracking-wide italic md:mb-2">Layanan Kami</h2>
                <h3 class="text-32 sm:text-40 md:text-56 font-bold text-hijau-2 font-philosopher  tracking-wide">Solusi Halal untuk Anda</h3>

            </div>

            <div class=" mt-16 md:mt-24 ">
                <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8 transform translate-y-10 transition-all duration-20000" data-fade>
                    <div class="group bg-putih  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-6 flex flex-col justify-between h-full transition">
                        <div class="mb-4 sm:mb-12 md:mb-16 justify-items-center">
                            <div class="mb-2 sm:mb-4">
                                <svg width="48" height="48" class="h-16 md:h-20 w-auto" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.625 25.5C23.625 25.7984 23.5065 26.0845 23.2955 26.2955C23.0845 26.5065 22.7984 26.625 22.5 26.625H13.5C13.2016 26.625 12.9155 26.5065 12.7045 26.2955C12.4935 26.0845 12.375 25.7984 12.375 25.5C12.375 25.2016 12.4935 24.9155 12.7045 24.7045C12.9155 24.4935 13.2016 24.375 13.5 24.375H22.5C22.7984 24.375 23.0845 24.4935 23.2955 24.7045C23.5065 24.9155 23.625 25.2016 23.625 25.5ZM22.5 18.375H13.5C13.2016 18.375 12.9155 18.4935 12.7045 18.7045C12.4935 18.9155 12.375 19.2016 12.375 19.5C12.375 19.7984 12.4935 20.0845 12.7045 20.2955C12.9155 20.5065 13.2016 20.625 13.5 20.625H22.5C22.7984 20.625 23.0845 20.5065 23.2955 20.2955C23.5065 20.0845 23.625 19.7984 23.625 19.5C23.625 19.2016 23.5065 18.9155 23.2955 18.7045C23.0845 18.4935 22.7984 18.375 22.5 18.375ZM43.125 30.1162V42C43.1255 42.1977 43.0738 42.392 42.9753 42.5634C42.8767 42.7348 42.7347 42.8772 42.5636 42.9762C42.3925 43.0753 42.1983 43.1275 42.0006 43.1276C41.803 43.1277 41.6087 43.0757 41.4375 42.9769L36.75 40.2956L32.0625 42.9769C31.8913 43.0757 31.6971 43.1277 31.4994 43.1276C31.3017 43.1275 31.1075 43.0753 30.9364 42.9762C30.7653 42.8772 30.6233 42.7348 30.5247 42.5634C30.4262 42.392 30.3745 42.1977 30.375 42V37.125H7.5C6.80381 37.125 6.13613 36.8484 5.64384 36.3562C5.15156 35.8639 4.875 35.1962 4.875 34.5V10.5C4.875 9.80381 5.15156 9.13613 5.64384 8.64384C6.13613 8.15156 6.80381 7.875 7.5 7.875H40.5C41.1962 7.875 41.8639 8.15156 42.3562 8.64384C42.8484 9.13613 43.125 9.80381 43.125 10.5V16.3837C44.0711 17.2598 44.8259 18.322 45.3421 19.5035C45.8583 20.6851 46.1247 21.9606 46.1247 23.25C46.1247 24.5394 45.8583 25.8149 45.3421 26.9965C44.8259 28.178 44.0711 29.2402 43.125 30.1162ZM36.75 16.125C35.3408 16.125 33.9633 16.5429 32.7916 17.3258C31.6199 18.1087 30.7066 19.2215 30.1674 20.5234C29.6281 21.8253 29.487 23.2579 29.7619 24.64C30.0368 26.0221 30.7154 27.2917 31.7119 28.2881C32.7083 29.2846 33.9779 29.9632 35.36 30.2381C36.7421 30.513 38.1747 30.3719 39.4766 29.8326C40.7785 29.2934 41.8913 28.3801 42.6742 27.2084C43.4571 26.0367 43.875 24.6592 43.875 23.25C43.875 21.3603 43.1243 19.5481 41.7881 18.2119C40.4519 16.8757 38.6397 16.125 36.75 16.125ZM30.375 34.875V30.1162C28.7334 28.5843 27.6962 26.514 27.452 24.2819C27.2078 22.0498 27.7729 19.8043 29.0443 17.9536C30.3158 16.1029 32.2093 14.77 34.3805 14.1973C36.5516 13.6247 38.8561 13.8503 40.875 14.8331V10.5C40.875 10.4005 40.8355 10.3052 40.7652 10.2348C40.6948 10.1645 40.5995 10.125 40.5 10.125H7.5C7.40054 10.125 7.30516 10.1645 7.23483 10.2348C7.16451 10.3052 7.125 10.4005 7.125 10.5V34.5C7.125 34.5995 7.16451 34.6948 7.23483 34.7652C7.30516 34.8355 7.40054 34.875 7.5 34.875H30.375ZM40.875 31.6669C39.5913 32.2973 38.1802 32.6251 36.75 32.6251C35.3198 32.6251 33.9087 32.2973 32.625 31.6669V40.0612L36.1875 38.0231C36.3585 37.9244 36.5525 37.8724 36.75 37.8724C36.9475 37.8724 37.1415 37.9244 37.3125 38.0231L40.875 40.0612V31.6669Z" fill="#165F2B" />
                                </svg>
                            </div>

                            <h4 class="text-24 md:text-36-2 font-bold text-hijau-4 font-philosopher ">Sertifikasi Halal</h4>
                        </div>
                        <a href="#" class="group-hover:bg-hijau-4 group-hover:text-putih 
         relative  px-7 py-3 flex justify-center items-center gap-2 text-hitam  font-semibold rounded-full text-16 bg-putih  border-[1.5px] border-hijau-6
     transition duration-200  hover:text-putih active:bg-hijau-2 active:text-putih">
                            Daftar SIHALAL
                            <svg width="16" height="16" viewBox="0 0 16 16"
                                class="w-4 h-4 fill-current icon "
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="ArrowUpRight">
                                    <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="group bg-putih  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-6 flex flex-col justify-between h-full transition">
                        <div class="mb-4 sm:mb-12 md:mb-16 justify-items-center">
                            <div>
                                <svg width="48" height="48" class="h-16 md:h-20 w-auto" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40.5 7.875H7.5C6.80381 7.875 6.13613 8.15156 5.64384 8.64384C5.15156 9.13613 4.875 9.80381 4.875 10.5V37.5C4.875 38.1962 5.15156 38.8639 5.64384 39.3562C6.13613 39.8484 6.80381 40.125 7.5 40.125H10.0106C10.2235 40.1249 10.432 40.0645 10.6119 39.9506C10.7918 39.8368 10.9357 39.6742 11.0269 39.4819C11.7866 37.8775 12.9862 36.5217 14.4862 35.5723C15.9861 34.623 17.7248 34.119 19.5 34.119C21.2752 34.119 23.0139 34.623 24.5139 35.5723C26.0138 36.5217 27.2134 37.8775 27.9731 39.4819C28.0643 39.6742 28.2082 39.8368 28.3881 39.9506C28.568 40.0645 28.7765 40.1249 28.9894 40.125H40.5C41.1962 40.125 41.8639 39.8484 42.3562 39.3562C42.8484 38.8639 43.125 38.1962 43.125 37.5V10.5C43.125 9.80381 42.8484 9.13613 42.3562 8.64384C41.8639 8.15156 41.1962 7.875 40.5 7.875ZM14.625 27C14.625 26.0358 14.9109 25.0933 15.4466 24.2916C15.9823 23.4899 16.7436 22.8651 17.6344 22.4961C18.5252 22.1271 19.5054 22.0306 20.4511 22.2187C21.3967 22.4068 22.2654 22.8711 22.9471 23.5529C23.6289 24.2346 24.0932 25.1033 24.2813 26.0489C24.4694 26.9946 24.3729 27.9748 24.0039 28.8656C23.6349 29.7564 23.0101 30.5177 22.2084 31.0534C21.4067 31.5891 20.4642 31.875 19.5 31.875C18.2071 31.875 16.9671 31.3614 16.0529 30.4471C15.1386 29.5329 14.625 28.2929 14.625 27ZM40.875 37.5C40.875 37.5995 40.8355 37.6948 40.7652 37.7652C40.6948 37.8355 40.5995 37.875 40.5 37.875H29.6756C28.3638 35.5205 26.2786 33.6916 23.7731 32.6981C24.9699 31.8012 25.8541 30.5503 26.3004 29.1228C26.7467 27.6954 26.7325 26.1636 26.2597 24.7447C25.787 23.3258 24.8798 22.0916 23.6665 21.217C22.4533 20.3424 20.9956 19.8717 19.5 19.8717C18.0044 19.8717 16.5467 20.3424 15.3335 21.217C14.1202 22.0916 13.213 23.3258 12.7403 24.7447C12.2675 26.1636 12.2533 27.6954 12.6996 29.1228C13.1459 30.5503 14.0301 31.8012 15.2269 32.6981C12.7214 33.6916 10.6362 35.5205 9.32438 37.875H7.5C7.40054 37.875 7.30516 37.8355 7.23483 37.7652C7.16451 37.6948 7.125 37.5995 7.125 37.5V10.5C7.125 10.4005 7.16451 10.3052 7.23483 10.2348C7.30516 10.1645 7.40054 10.125 7.5 10.125H40.5C40.5995 10.125 40.6948 10.1645 40.7652 10.2348C40.8355 10.3052 40.875 10.4005 40.875 10.5V37.5ZM37.125 15V33C37.125 33.2984 37.0065 33.5845 36.7955 33.7955C36.5845 34.0065 36.2984 34.125 36 34.125H33C32.7016 34.125 32.4155 34.0065 32.2045 33.7955C31.9935 33.5845 31.875 33.2984 31.875 33C31.875 32.7016 31.9935 32.4155 32.2045 32.2045C32.4155 31.9935 32.7016 31.875 33 31.875H34.875V16.125H13.125V18C13.125 18.2984 13.0065 18.5845 12.7955 18.7955C12.5845 19.0065 12.2984 19.125 12 19.125C11.7016 19.125 11.4155 19.0065 11.2045 18.7955C10.9935 18.5845 10.875 18.2984 10.875 18V15C10.875 14.7016 10.9935 14.4155 11.2045 14.2045C11.4155 13.9935 11.7016 13.875 12 13.875H36C36.2984 13.875 36.5845 13.9935 36.7955 14.2045C37.0065 14.4155 37.125 14.7016 37.125 15Z" fill="#165F2B" />
                                </svg>

                            </div>

                            <h4 class="text-24 md:text-36-2 font-bold text-hijau-4 font-philosopher ">Pelatihan (Halal)</h4>
                        </div>
                        <a href="#" class="group-hover:bg-hijau-4 group-hover:text-putih 
         relative  px-7 py-3 flex justify-center items-center gap-2 text-hitam  font-semibold rounded-full text-16 bg-putih  border-[1.5px] border-hijau-6
     transition duration-200  hover:text-putih active:bg-hijau-2 active:text-putih">
                            Lihat Daftar Program
                            <svg width="16" height="16" viewBox="0 0 16 16"
                                class="w-4 h-4 fill-current icon "
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="ArrowUpRight">
                                    <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="group bg-putih  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-6 flex flex-col justify-between h-full transition">
                        <div class="mb-4 sm:mb-12 md:mb-16 justify-items-center">
                            <div>

                                <svg width="48" height="48" class="h-16 md:h-20 w-auto" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M35.6943 31.9927C37.5943 30.4387 39.1156 28.4726 40.1432 26.2434C41.1707 24.0143 41.6774 21.5805 41.625 19.1265C41.4375 10.749 34.7325 3.84336 26.3737 3.40273C24.2093 3.28494 22.0433 3.60476 20.0053 4.34305C17.9673 5.08135 16.099 6.22297 14.5122 7.69968C12.9254 9.17638 11.6527 10.9579 10.77 12.9376C9.8873 14.9174 9.41284 17.0548 9.37496 19.2221L5.12058 27.3971C5.10746 27.4215 5.09621 27.4459 5.08496 27.4721C4.82332 28.0868 4.80586 28.778 5.03614 29.4051C5.26641 30.0322 5.72709 30.5479 6.32433 30.8471L6.35808 30.864L10.8731 32.9265V39.0015C10.8731 39.6977 11.1496 40.3654 11.6419 40.8576C12.1342 41.3499 12.8019 41.6265 13.4981 41.6265H22.4981C22.7965 41.6265 23.0826 41.508 23.2936 41.297C23.5046 41.086 23.6231 40.7999 23.6231 40.5015C23.6231 40.2031 23.5046 39.917 23.2936 39.706C23.0826 39.495 22.7965 39.3765 22.4981 39.3765H13.5C13.4005 39.3765 13.3051 39.337 13.2348 39.2666C13.1645 39.1963 13.125 39.1009 13.125 39.0015V32.2159C13.1252 32.0003 13.0634 31.7892 12.9471 31.6077C12.8307 31.4262 12.6647 31.2819 12.4687 31.1921L7.31246 28.8352C7.23508 28.7927 7.17516 28.7243 7.14327 28.642C7.11137 28.5597 7.10953 28.4688 7.13808 28.3852L11.49 20.0209C11.5762 19.8612 11.6225 19.683 11.625 19.5015C11.626 16.2771 12.7494 13.1535 14.8021 10.6669C16.8549 8.18037 19.7091 6.48577 22.875 5.87398V9.53398C21.9171 9.80552 21.0897 10.4143 20.5456 11.2481C20.0014 12.0819 19.7772 13.0844 19.9142 14.0705C20.0513 15.0567 20.5404 15.96 21.2914 16.6137C22.0423 17.2675 23.0043 17.6276 24 17.6276C24.9956 17.6276 25.9576 17.2675 26.7086 16.6137C27.4595 15.96 27.9486 15.0567 28.0857 14.0705C28.2228 13.0844 27.9985 12.0819 27.4544 11.2481C26.9102 10.4143 26.0829 9.80552 25.125 9.53398V5.63586C25.5 5.62648 25.875 5.62648 26.25 5.64711C29.0739 5.80857 31.7818 6.82594 34.0135 8.56392C36.2452 10.3019 37.8948 12.6781 38.7431 15.3765H34.5C34.335 15.3765 34.1721 15.4128 34.0227 15.4828C33.8733 15.5527 33.7412 15.6547 33.6356 15.7815L28.6762 21.7327C27.7645 21.3253 26.7361 21.2614 25.781 21.553C24.8258 21.8445 24.0084 22.4718 23.4797 23.3189C22.9509 24.1661 22.7465 25.176 22.9042 26.1621C23.0619 27.1482 23.571 28.044 24.3375 28.684C25.1041 29.3241 26.0763 29.6652 27.0748 29.6444C28.0732 29.6236 29.0304 29.2422 29.7696 28.5708C30.5088 27.8993 30.9801 26.9831 31.0966 25.9913C31.213 24.9995 30.9667 23.999 30.4031 23.1746L35.0268 17.6265H39.2456C39.317 18.1399 39.3589 18.657 39.3712 19.1752C39.4195 21.3832 38.9416 23.571 37.9773 25.5578C37.0129 27.5446 35.5896 29.2735 33.825 30.6015C33.6665 30.7205 33.5424 30.8792 33.465 31.0616C33.3876 31.244 33.3598 31.4436 33.3843 31.6402L34.8843 43.6402C34.9182 43.9123 35.0502 44.1627 35.2556 44.3443C35.4611 44.526 35.7258 44.6263 36 44.6265C36.047 44.6262 36.0939 44.623 36.1406 44.6171C36.2872 44.5988 36.4288 44.5518 36.5573 44.4787C36.6858 44.4057 36.7986 44.308 36.8893 44.1914C36.98 44.0747 37.0468 43.9413 37.086 43.7988C37.1251 43.6563 37.1358 43.5075 37.1175 43.3609L35.6943 31.9927ZM25.875 13.5015C25.875 13.8723 25.765 14.2348 25.559 14.5432C25.3529 14.8515 25.0601 15.0918 24.7175 15.2338C24.3749 15.3757 23.9979 15.4128 23.6342 15.3405C23.2705 15.2681 22.9364 15.0895 22.6741 14.8273C22.4119 14.5651 22.2333 14.231 22.161 13.8673C22.0886 13.5036 22.1258 13.1266 22.2677 12.7839C22.4096 12.4413 22.6499 12.1485 22.9583 11.9425C23.2666 11.7364 23.6291 11.6265 24 11.6265C24.4972 11.6265 24.9742 11.824 25.3258 12.1757C25.6774 12.5273 25.875 13.0042 25.875 13.5015ZM27 27.3765C26.6291 27.3765 26.2666 27.2665 25.9583 27.0605C25.6499 26.8545 25.4096 26.5616 25.2677 26.219C25.1258 25.8764 25.0886 25.4994 25.161 25.1357C25.2333 24.772 25.4119 24.4379 25.6741 24.1757C25.9364 23.9134 26.2705 23.7349 26.6342 23.6625C26.9979 23.5902 27.3749 23.6273 27.7175 23.7692C28.0601 23.9111 28.3529 24.1514 28.559 24.4598C28.765 24.7681 28.875 25.1306 28.875 25.5015C28.875 25.9988 28.6774 26.4757 28.3258 26.8273C27.9742 27.1789 27.4972 27.3765 27 27.3765Z" fill="#165F2B" />
                                </svg>

                            </div>

                            <h4 class="text-24 md:text-36-2 font-bold text-hijau-4 font-philosopher ">Riset & Konsultan</h4>
                        </div>
                        <a href="#" class="group-hover:bg-hijau-4 group-hover:text-putih 
         relative  px-7 py-3 flex justify-center items-center gap-2 text-hitam  font-semibold rounded-full text-16 bg-putih  border-[1.5px] border-hijau-6
     transition duration-200  hover:text-putih active:bg-hijau-2 active:text-putih">
                            Pelajari Lebih Lanjut
                            <svg width="16" height="16" viewBox="0 0 16 16"
                                class="w-4 h-4 fill-current icon "
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="ArrowUpRight">
                                    <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                                </g>
                            </svg>
                        </a>
                    </div>





                </div>
            </div>
        </section>


        <section class="bg-hijau-1 py-8 sm:py-20 md:py-24 px-5 sm:px-14   justify-between  flex flex-col lg:flex-row">
            <h2 class="text-emas-3 text-20 sm:text-24 md:text-h2 font-medium capitalize leading-loose tracking-wide italic mb-6 sm:mb-10 md:mb-12 lg:mb-0 transform translate-y-10 transition-all duration-20000" data-fade>Ruang Lingkup Bersama Halal Madani</h2>
            <div class="justify-between  flex flex-col md:flex-row md:space-x-8 gap-5 md:gap-0">

                <div class="bg-gradient-to-br from-[#072C11] via-hijau-2 to-[#072C11]  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-5 flex flex-col items-center w-auto md:grow lg:grow-0 transform translate-y-10 transition-all duration-20000" data-fade>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26 5H6C5.46957 5 4.96086 5.21071 4.58579 5.58579C4.21071 5.96086 4 6.46957 4 7V14C4 20.59 7.19 24.5837 9.86625 26.7738C12.7487 29.1313 15.6163 29.9312 15.7413 29.965C15.9131 30.0118 16.0944 30.0118 16.2663 29.965C16.3913 29.9312 19.255 29.1313 22.1413 26.7738C24.81 24.5837 28 20.59 28 14V7C28 6.46957 27.7893 5.96086 27.4142 5.58579C27.0391 5.21071 26.5304 5 26 5ZM21.71 13.7075L14.71 20.7075C14.6171 20.8005 14.5068 20.8742 14.3854 20.9246C14.264 20.9749 14.1339 21.0008 14.0025 21.0008C13.8711 21.0008 13.741 20.9749 13.6196 20.9246C13.4982 20.8742 13.3879 20.8005 13.295 20.7075L10.295 17.7075C10.1074 17.5199 10.0019 17.2654 10.0019 17C10.0019 16.7346 10.1074 16.4801 10.295 16.2925C10.4826 16.1049 10.7371 15.9994 11.0025 15.9994C11.2679 15.9994 11.5224 16.1049 11.71 16.2925L14 18.5863L20.2925 12.2925C20.3854 12.1996 20.4957 12.1259 20.6171 12.0756C20.7385 12.0253 20.8686 11.9994 21 11.9994C21.1314 11.9994 21.2615 12.0253 21.3829 12.0756C21.5043 12.1259 21.6146 12.1996 21.7075 12.2925C21.8004 12.3854 21.8741 12.4957 21.9244 12.6171C21.9747 12.7385 22.0006 12.8686 22.0006 13C22.0006 13.1314 21.9747 13.2615 21.9244 13.3829C21.8741 13.5043 21.8004 13.6146 21.7075 13.7075H21.71Z" fill="white" />
                    </svg>

                    <h4 class="mt-2 text-24 md:text-36-2 text-putih font-philosopher">Nasional</h4>
                </div>
                <div class="bg-gradient-to-br from-[#072C11] via-hijau-2 to-[#072C11]  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-5 flex flex-col items-center w-auto md:grow lg:grow-0 transform translate-y-10 transition-all duration-20000" data-fade>

                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 3C13.4289 3 10.9154 3.76244 8.77759 5.1909C6.63975 6.61935 4.97351 8.64968 3.98957 11.0251C3.00563 13.4006 2.74819 16.0144 3.2498 18.5362C3.75141 21.0579 4.98954 23.3743 6.80762 25.1924C8.6257 27.0105 10.9421 28.2486 13.4638 28.7502C15.9856 29.2518 18.5995 28.9944 20.9749 28.0104C23.3503 27.0265 25.3807 25.3603 26.8091 23.2224C28.2376 21.0846 29 18.5712 29 16C28.9964 12.5533 27.6256 9.24882 25.1884 6.81163C22.7512 4.37445 19.4467 3.00364 16 3ZM27 16C27.0011 17.4112 26.7295 18.8094 26.2 20.1175L20.6125 16.6813C20.3749 16.5347 20.1092 16.4397 19.8325 16.4025L16.98 16.0175C16.5869 15.9662 16.1875 16.0321 15.8317 16.2069C15.476 16.3817 15.1797 16.6576 14.98 17H13.89L13.415 16.0175C13.2837 15.7439 13.0915 15.504 12.8532 15.3162C12.6148 15.1283 12.3367 14.9975 12.04 14.9338L11.04 14.7175L12.0175 13H14.1063C14.4443 12.9993 14.7766 12.9133 15.0725 12.75L16.6038 11.905C16.7383 11.83 16.8641 11.7403 16.9788 11.6375L20.3425 8.595C20.6798 8.29277 20.9039 7.8846 20.978 7.43784C21.0521 6.99108 20.9717 6.53241 20.75 6.1375L20.705 6.05625C22.5873 6.94875 24.1778 8.35674 25.292 10.1168C26.4063 11.8769 26.9985 13.9169 27 16ZM5.00001 16C4.99834 14.365 5.36311 12.7505 6.06751 11.275L7.48501 15.0588C7.60314 15.372 7.79802 15.6506 8.0518 15.869C8.30558 16.0874 8.61012 16.2386 8.93751 16.3088L11.6163 16.885L12.0925 17.875C12.2578 18.2117 12.5139 18.4955 12.832 18.6943C13.1501 18.8931 13.5174 18.999 13.8925 19H14.0775L13.1738 21.0288C13.0145 21.386 12.9635 21.7821 13.0271 22.168C13.0906 22.5539 13.2659 22.9127 13.5313 23.2L13.5488 23.2175L16 25.7425L15.7575 26.9925C12.8848 26.9257 10.152 25.7387 8.14216 23.685C6.13236 21.6313 5.00477 18.8735 5.00001 16Z" fill="white" />
                    </svg>

                    <h4 class="mt-2 text-24 md:text-36-2 text-putih font-philosopher">Internasional</h4>
                </div>



            </div>
        </section>


        <section class="bg-hijau-1 pb-8 sm:pb-20 md:pb-24 px-5 sm:px-14 ">
            <div class=" mx-auto">
                <img alt="Nuansa pemandangan alam yang mengibaratkan kehalalan" class="w-full aspect-[4/3] md:aspect-[6/3] object-cover  rounded-2xl border-4 border-hijau-2 " src="{{ asset('images/gambaralam.webp') }}" />
                <div class="mt-16 sm:mt-20 md:mt-24 lg:mt-36">
                    <h2 class="text-16 md:text-20 text-putih mb-16 sm:mb-20 md:mb-24 transform translate-y-10 transition-all duration-20000" data-fade>
                        Hingga Saat Ini, Bersama Halal Madani Telah Dipercaya Oleh
                    </h2>
                    <div class="flex flex-wrap md:justify-end gap-8 sm:gap-16 md:gap-24 pr-8 transform translate-y-10 transition-all duration-20000" data-fade>
                        <div class="font-philosopher counter" id="counter1">
                            <h2 class="text-emas-3 text-32 sm:text-40 md:text-56 font-bold mb-2">0</h2>
                            <p class="text-putih text-20 sm:text-32 lg:text-40 mb-1 md:mb-2">Perusahaan dan UMKM</p>
                            <p class="text-putih text-20 sm:text-32 lg:text-40">Tersertifikasi Halal</p>
                        </div>
                        <div class="font-philosopher counter" id="counter2">
                            <h2 class="text-emas-3 text-32 sm:text-40 md:text-56 font-bold mb-2">0</h2>
                            <p class="text-putih text-20 sm:text-32 lg:text-40 mb-1 md:mb-2">Alumni Pelatihan</p>
                            <p class="text-putih text-20 sm:text-32 lg:text-40">Profesional</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-hijau-1 flex flex-col items-center justify-center pt-6 sm:pt-0 ">
            <div class="marquee-left w-full overflow-hidden">
                <div class="flex flex-nowrap gap-3 sm:gap-5 md:gap-8 py-1">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">

                </div>
            </div>

            <div class="marquee-right w-full overflow-hidden mt-3 sm:mt-5 md:mt-8">
                <div class="flex flex-nowrap gap-3 sm:gap-5 md:gap-8 py-1 items-end">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                </div>
            </div>
        </section>




        <section class="bg-gradient-to-b from-hijau-1 to-hijau-2 flex items-center justify-center  py-16 sm:py-20 md:py-24 lg:py-36 px-5 sm:px-14 mx-auto">
            <div class="text-center text-white">
                <h1 class="text-32 sm:text-40 md:text-56 font-bold font-philosopher mb-2 transform translate-y-10 transition-all duration-20000" data-fade>Saatnya Produk Anda Bersertifikat Halal</h1>
                <p class="items-center text-center text-16 md:text-20-2 mb-8 text-mint-2 px-5 sm:px-12 md:px-20 lg:px-36 transform translate-y-10 transition-all duration-20000" data-fade>Mulailah langkah Anda untuk memastikan kehalalan produk dengan proses pemeriksaan yang profesional dan terpercaya dari BHM</p>

                <div class="md:flex justify-center space-y-2 md:space-y-0 md:space-x-3 items-center transform translate-y-10 transition-all duration-20000" data-fade>
                    <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3 flex justify-center text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] ">
                        Daftar Sertifikasi Halal
                    </a>
                    <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-medium rounded-full text-16 bg-transparent  border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                        Daftar Pelatihan Halal
                        <svg width="16" height="16" viewBox="0 0 16 16"
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="ArrowUpRight">
                                <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-medium rounded-full text-16 bg-transparent  border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                        Konsultasi Gratis
                        <svg width="16" height="16" viewBox="0 0 16 16"
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="ArrowUpRight">
                                <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                            </g>
                        </svg>
                    </a>


                </div>



            </div>
        </section>



        <section class="bg-putih">
            <div class=" mx-auto py-16 sm:py-20 md:py-24 lg:py-36 px-5 sm:px-14">
                <div class="mx-auto md:w-3/4 lg:2/3 text-center transform translate-y-10 transition-all duration-20000" data-fade>
                    <h2 class="text-16 sm:text-24 md:text-h2 font-medium  capitalize leading-loose tracking-wide italic md:mb-2">Testimoni</h2>
                    <h3 class="text-32 sm:text-40 md:text-56 font-bold text-hijau-2 font-philosopher  tracking-wide">Apa Kata Mereka Tentang BHM</h3>

                </div>
                <div class="grid grid-cols-6 md:space-x-8 mt-16 md:mt-24 space-y-4 md:space-y-0">
                    <div class="bg-gradient-to-b from-emas-3 to-emas-2 p-3 sm:p-5 md:p-8 rounded-2xl col-span-6 md:col-span-4 lg:col-span-3 ">

                        <div class="w-full p-3 sm:p-5 md:p-8 bg-putih rounded-xl  flex flex-col justify-between">
                            <blockquote class="text-14-3 sm:text-16-2 md:text-18-2 text-hitam transform translate-y-10 transition-all duration-20000" data-fade id="quote">
                            </blockquote>
                            <div class="mt-4">
                                <p class="font-bold text-20 md:text-24 font-philosopher" id="name"></p>
                                <div class="flex">
                                    <p class="text-14-3 sm:text-16-2 md:text-16 text-hijau-2 font-medium" id="position"> <span class="text-hijau-4 font-semibold ml-1" id="perusahaan">

                                        </span></p>

                                </div>

                            </div>
                        </div>

                        <div class="flex gap-2 md:gap-4 mt-2 md:mt-6 justify-self-center">
                            <button class="px-4 py-4  bg-putih rounded-full transition duration-200 " id="prev">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-current hover:text-putih" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.0006 12.0004C21.0006 12.1993 20.9216 12.3901 20.7809 12.5307C20.6403 12.6714 20.4495 12.7504 20.2506 12.7504H5.5609L11.0312 18.2198C11.1009 18.2895 11.1562 18.3722 11.1939 18.4632C11.2316 18.5543 11.251 18.6519 11.251 18.7504C11.251 18.849 11.2316 18.9465 11.1939 19.0376C11.1562 19.1286 11.1009 19.2114 11.0312 19.281C10.9615 19.3507 10.8788 19.406 10.7878 19.4437C10.6967 19.4814 10.5991 19.5008 10.5006 19.5008C10.402 19.5008 10.3045 19.4814 10.2134 19.4437C10.1224 19.406 10.0396 19.3507 9.96996 19.281L3.21996 12.531C3.15023 12.4614 3.09491 12.3787 3.05717 12.2876C3.01943 12.1966 3 12.099 3 12.0004C3 11.9019 3.01943 11.8043 3.05717 11.7132C3.09491 11.6222 3.15023 11.5394 3.21996 11.4698L9.96996 4.71979C10.1107 4.57906 10.3016 4.5 10.5006 4.5C10.6996 4.5 10.8905 4.57906 11.0312 4.71979C11.1719 4.86052 11.251 5.05139 11.251 5.25042C11.251 5.44944 11.1719 5.64031 11.0312 5.78104L5.5609 11.2504H20.2506C20.4495 11.2504 20.6403 11.3294 20.7809 11.4701C20.9216 11.6107 21.0006 11.8015 21.0006 12.0004Z" fill="#1D211D" />
                                </svg>

                            </button>
                            <button class="px-4 py-4  bg-putih rounded-full transition duration-200 " id="next">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-current hover:text-putih" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.7806 12.531L14.0306 19.281C13.8899 19.4218 13.699 19.5008 13.5 19.5008C13.301 19.5008 13.1101 19.4218 12.9694 19.281C12.8286 19.1403 12.7496 18.9494 12.7496 18.7504C12.7496 18.5514 12.8286 18.3605 12.9694 18.2198L18.4397 12.7504H3.75C3.55109 12.7504 3.36032 12.6714 3.21967 12.5307C3.07902 12.3901 3 12.1993 3 12.0004C3 11.8015 3.07902 11.6107 3.21967 11.4701C3.36032 11.3294 3.55109 11.2504 3.75 11.2504H18.4397L12.9694 5.78104C12.8286 5.64031 12.7496 5.44944 12.7496 5.25042C12.7496 5.05139 12.8286 4.86052 12.9694 4.71979C13.1101 4.57906 13.301 4.5 13.5 4.5C13.699 4.5 13.8899 4.57906 14.0306 4.71979L20.7806 11.4698C20.8504 11.5394 20.9057 11.6222 20.9434 11.7132C20.9812 11.8043 21.0006 11.9019 21.0006 12.0004C21.0006 12.099 20.9812 12.1966 20.9434 12.2876C20.9057 12.3787 20.8504 12.4614 20.7806 12.531Z" fill="#1D211D" />
                                </svg>

                            </button>
                        </div>
                    </div>

                    <div class="bg-abu-98 rounded-2xl col-span-6 md:col-span-2 lg:col-span-3 content-center ">
                        <div class="marquee-left w-full overflow-hidden">
                            <div class="flex flex-nowrap gap-8 py-1">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                            </div>
                        </div>

                        <div class="marquee-right w-full overflow-hidden mt-6">
                            <div class="flex flex-nowrap gap-8 py-1">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 5" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 6" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 7" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 8" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="relative bg-gradient-to-r from-[#031207] via-hijau-2 to-[#031207] flex items-center justify-center py-12 sm:py-16 md:py-20 lg:py-24 px-5 sm:px-14 mx-auto">
            <div class="text-center text-white relative transform translate-y-10 transition-all duration-20000" data-fade>
                <h1 class=" text-24-2 sm:text-32-2 md:text-40-2 font-philosopher mb-12">“Halalan Thoyyiban bukan hanya tentang mematuhi perintah, tetapi juga menghadirkan keberkahan bagi diri, keluarga, dan bisnis Anda.”</h1>


                <div class="md:flex justify-center space-y-2 md:space-y-0 md:space-x-3 items-center transform translate-y-10 transition-all duration-20000" data-fade>

                    <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3 flex justify-center text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] ">
                        Daftar Sertifikasi Halal
                    </a>
                    <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-medium rounded-full text-16 bg-transparent  border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                        Daftar Pelatihan Halal
                        <svg width="16" height="16" viewBox="0 0 16 16"
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="ArrowUpRight">
                                <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-medium rounded-full text-16 bg-transparent  border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                        Konsultasi Gratis
                        <svg width="16" height="16" viewBox="0 0 16 16"
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="ArrowUpRight">
                                <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                            </g>
                        </svg>
                    </a>

                </div>
            </div>

            <!-- <img src="{{ asset('images/Frame 804.webp') }}" class="w-full absolute bottom-0 left-0 "> -->
        </section>


    </main>

    <footer id="footer">
        @include('layouts.footer')
    </footer>



</body>

<script>
    const testimonials = [{
            quote: "Terima kasih kepada tim BHM atas dukungan luar biasa dalam proses sertifikasi halal kami. Layanan yang memuaskan, tepat waktu, dan sangat membantu dalam administrasi serta kelengkapan dokumen. Kami berhasil mendapatkan sertifikat halal tahun ini berkat BHM. Sukses selalu, BHM!",
            name: "Feri Iswoyo",
            position: "Manajer Umum,",
            perusahaan: "Mercure Padang"
        },
        {
            quote: "Sebagai UMKM, sertifikasi halal penting untuk memperluas pasar dan memberi kenyamanan pembeli. Prosesnya mudah, tidak ribet, dan tim BHM sangat membantu dengan arahan yang jelas. Jangan ragu mengurus sertifikasi halal!",
            name: "Dewi Santika",
            position: "Pemilik Usaha,",
            perusahaan: "Rendang Madam"
        },
        {
            quote: "Pelatihan Penyelia Halal di Bersama Halal Madani sangat informatif, jelas, dan ringkas. Suasananya menyenangkan dengan ice breaking yang seru, membuat belajar lebih interaktif dan tidak membosankan. Sangat direkomendasikan!",
            name: "Tia Abkoria",
            position: "Penyelia Halal,",
            perusahaan: "Kaffa Aqiqah Padang"
        },
        {
            quote: "Sangat puas dengan layanan Bersama Halal Madani. Pematerinya luar biasa, disampaikan oleh dokter profesional. Fasilitasnya baik, termasuk konsumsi yang tersedia sejak kedatangan. Sesi praktik penyembelihan halal di akhir pelatihan sangat berkesan dan menambah wawasan.",
            name: "Ilham Zulfahmi",
            position: "Juru Sembelih Halal,",
            perusahaan: "Kaffa Aqiqah Padang"
        },
        {
            quote: "Testimoni kelimaa dengan konten yang berbeda.",
            name: "Nama keempaatt",
            position: "Jabatan Keeempatt,",
            perusahaan: "Jabatan Keeempatt,"
        }
    ];

    let currentIndex = 0;

    const quoteElement = document.getElementById('quote');
    const nameElement = document.getElementById('name');
    const positionElement = document.getElementById('position');
    const perusahaanElement = document.getElementById('perusahaan');

    const updateTestimonial = () => {
        const currentTestimonial = testimonials[currentIndex];
        quoteElement.textContent = currentTestimonial.quote;
        nameElement.textContent = currentTestimonial.name;
        positionElement.textContent = currentTestimonial.position;
        perusahaanElement.textContent = currentTestimonial.perusahaan;
    };

    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial();
    });

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial();
    });

    updateTestimonial(); // Initialize the first testimonial
</script>

<script>
    // Fungsi untuk memulai animasi fade dan transformasi
    const fadeInElements = document.querySelectorAll('[data-fade]');

    const fadeInOptions = {
        threshold: [0.2, 1.0], // Menambahkan threshold pada 30% dan 100%
    };

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Elemen sepenuhnya terlihat
                if (entry.intersectionRatio === 1) {
                    entry.target.classList.remove('opacity-10', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
                // Elemen sudah 30% terlihat
                // else if (entry.intersectionRatio >= 0.2) {
                //     entry.target.classList.remove('opacity-100', 'translate-y-0');
                //     entry.target.classList.add('opacity-10', 'translate-y-10');
                // }
            } else {
                // Elemen keluar dari viewport
                entry.target.classList.remove('opacity-100', 'opacity-10', 'translate-y-0', 'translate-y-10');
                entry.target.classList.add('opacity-10', 'translate-y-10');
            }
        });
    }, fadeInOptions);

    fadeInElements.forEach(element => {
        fadeInObserver.observe(element);
    });
</script>

<script>
    const video = document.getElementById("video");
    const playButton = document.getElementById("playButton");

    playButton.addEventListener("click", () => {
        video.play();
        playButton.style.display = "none"; // Sembunyikan tombol Play saat video mulai
    });

    video.addEventListener("pause", () => {
        playButton.style.display = "flex"; // Tampilkan tombol Play lagi saat video dijeda
    });
</script>


<script>
    // Fungsi untuk animasi counter
    function animateCounter(element, numbers, duration) {
        const counterElement = element.querySelector('h2');
        let index = 0;
        const stepTime = Math.abs(Math.floor(duration / numbers.length));

        const interval = setInterval(() => {
            if (index < numbers.length) {
                counterElement.textContent = numbers[index] + '+'; // Update angka
                index += 1;
            } else {
                clearInterval(interval);
            }
        }, stepTime);
    }

    // Fungsi untuk mendeteksi apakah elemen sudah muncul di layar minimal 10%
    function startAnimation(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter1 = document.getElementById('counter1');
                const counter2 = document.getElementById('counter2');

                if (!counter1.classList.contains('visible')) {
                    counter1.classList.add('visible');
                    animateCounter(counter1, [1, 78, 121, 198, 245, 300], 1500); // 300+ dalam 1.5 detik
                }

                setTimeout(() => {
                    if (!counter2.classList.contains('visible')) {
                        counter2.classList.add('visible');
                        animateCounter(counter2, [1, 87, 154, 247, 355, 400], 1500); // 400+ dalam 1.5 detik
                    }
                }, 500); // Delay untuk elemen kedua
            }
        });
    }

    // Setup Intersection Observer
    const observerOptions = {
        threshold: 0.1 // Animasi dimulai ketika elemen muncul 10% di layar
    };

    const observer = new IntersectionObserver(startAnimation, observerOptions);

    // Observasi elemen counter
    document.querySelectorAll('.counter').forEach(counter => {
        observer.observe(counter);
    });
</script>

<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');

    // Menyembunyikan navbar saat pertama kali dimuat
    window.addEventListener('load', function() {
        navbar.classList.add('hidden');
    });

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        // Jika pengguna berada di posisi scroll top (0), sembunyikan navbar
        if (currentScroll === 0) {
            navbar.classList.remove('visible');
            navbar.classList.add('hidden');
            return; // Keluar dari fungsi jika di posisi top
        }

        // if (currentScroll > lastScrollTop) {
        //     // Scroll ke bawah
        //     navbar.classList.remove('visible');
        //     navbar.classList.add('hidden');
        // } 
        else {
            // Scroll ke atas
            navbar.classList.remove('hidden');
            navbar.classList.add('visible');
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Untuk Mobile or negative scrolling
    });
</script>



<!-- <script>
    // Fungsi untuk memulai animasi fade dan transformasi
    const fadeInElements = document.querySelectorAll('[data-fade]');

    const fadeInOptions = {
        threshold: [0.2, 1.0], // Menambahkan threshold pada 30% dan 100%
    };

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.intersectionRatio === 1) {
                    entry.target.classList.remove('opacity-30', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }

            } else {

                entry.target.classList.remove('opacity-100', 'opacity-30', 'translate-y-0', 'translate-y-10');
                entry.target.classList.add('opacity-30', 'translate-y-10');
            }
        });
    }, fadeInOptions);

    fadeInElements.forEach(element => {
        fadeInObserver.observe(element);
    });
</script> -->



</html>