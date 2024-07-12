<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First project</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <meta name="generator" content="STUDIO">
    <meta name="robots" content="all">
    <meta property="og:site_name" content="First project">
    <meta property="og:title" content="First project">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta name="description" content="">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:image" content="">
    <meta name="apple-mobile-web-app-title" content="First project">
    <meta property="og:url" content="https://salmon992750.studio.site/4">
    <link rel="icon" type="image/png" href="https://storage.googleapis.com/studio-front/favicon.png">
    <link rel="apple-touch-icon" type="image/png" href="https://storage.googleapis.com/studio-front/favicon.png">
    <link rel="canonical" href="https://salmon992750.studio.site/4">

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    @vite('resources/sass/app.scss')
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .page-enter-active {
            transition: .6s cubic-bezier(.4, .4, 0, 1)
        }

        .page-leave-active {
            transition: .3s cubic-bezier(.4, .4, 0, 1)
        }

        .page-enter-from,
        .page-leave-to {
            opacity: 0
        }
    </style>
    <style>
        .product-font-style[data-v-4b268d44] {
            transition: .4s cubic-bezier(.4, .4, 0, 1)
        }
    </style>
    <style>
        /*! * Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) * Copyright 2023 Fonticons, Inc. */
        .fa-brands,
        .fa-solid {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: var(--fa-display, inline-block);
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto
        }

        .fa-solid {
            font-family: Font Awesome\ 6 Free;
            font-weight: 900
        }

        .fa-brands {
            font-family: Font Awesome\ 6 Brands;
            font-weight: 400
        }

        :host,
        :root {
            --fa-style-family-classic: "Font Awesome 6 Free";
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free";
            --fa-style-family-brands: "Font Awesome 6 Brands";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands"
        }

        @font-face {
            font-display: block;
            font-family: Font Awesome\ 6 Free;
            font-style: normal;
            font-weight: 900;
            src: url(https://storage.googleapis.com/production-os-assets/assets/fontawesome/1629704621943/6.4.2/webfonts/fa-solid-900.woff2) format("woff2"), url(https://storage.googleapis.com/production-os-assets/assets/fontawesome/1629704621943/6.4.2/webfonts/fa-solid-900.ttf) format("truetype")
        }

        @font-face {
            font-display: block;
            font-family: Font Awesome\ 6 Brands;
            font-style: normal;
            font-weight: 400;
            src: url(https://storage.googleapis.com/production-os-assets/assets/fontawesome/1629704621943/6.4.2/webfonts/fa-brands-400.woff2) format("woff2"), url(https://storage.googleapis.com/production-os-assets/assets/fontawesome/1629704621943/6.4.2/webfonts/fa-brands-400.ttf) format("truetype")
        }
    </style>
    <style>
        .spinner[data-v-ea7b3a3a] {
            animation: loading-spin-ea7b3a3a 1s linear infinite;
            height: 16px;
            pointer-events: none;
            width: 16px
        }

        .spinner[data-v-ea7b3a3a]:before {
            border-bottom: 2px solid transparent;
            border-right: 2px solid transparent;
            border-color: transparent currentcolor currentcolor transparent;
            border-style: solid;
            border-width: 2px;
            opacity: .2
        }

        .spinner[data-v-ea7b3a3a]:after,
        .spinner[data-v-ea7b3a3a]:before {
            border-radius: 50%;
            box-sizing: border-box;
            content: "";
            height: 100%;
            position: absolute;
            width: 100%
        }

        .spinner[data-v-ea7b3a3a]:after {
            border-left: 2px solid transparent;
            border-top: 2px solid transparent;
            border-color: currentcolor transparent transparent currentcolor;
            border-style: solid;
            border-width: 2px;
            opacity: 1
        }

        @keyframes loading-spin-ea7b3a3a {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }
    </style>
    <style>
        @font-face {
            font-family: grandam;
            font-style: normal;
            font-weight: 400;
            src: url(https://storage.googleapis.com/studio-front/fonts/grandam.ttf) format("truetype")
        }

        @font-face {
            font-family: Material Icons;
            font-style: normal;
            font-weight: 400;
            src: url(https://storage.googleapis.com/production-os-assets/assets/material-icons/1629704621943/MaterialIcons-Regular.eot);
            src: local("Material Icons"), local("MaterialIcons-Regular"), url(https://storage.googleapis.com/production-os-assets/assets/material-icons/1629704621943/MaterialIcons-Regular.woff2) format("woff2"), url(https://storage.googleapis.com/production-os-assets/assets/material-icons/1629704621943/MaterialIcons-Regular.woff) format("woff"), url(https://storage.googleapis.com/production-os-assets/assets/material-icons/1629704621943/MaterialIcons-Regular.ttf) format("truetype")
        }

        .StudioCanvas {
            display: flex;
            height: auto;
            min-height: 100vh
        }

        .StudioCanvas>.sd {
            min-height: 100vh;
            overflow: hidden
        }

        a,
        abbr,
        address,
        article,
        aside,
        audio,
        b,
        blockquote,
        body,
        button,
        canvas,
        caption,
        cite,
        code,
        dd,
        del,
        details,
        dfn,
        div,
        dl,
        dt,
        em,
        fieldset,
        figcaption,
        figure,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup,
        html,
        i,
        iframe,
        img,
        input,
        ins,
        kbd,
        label,
        legend,
        li,
        main,
        mark,
        menu,
        nav,
        object,
        ol,
        p,
        pre,
        q,
        samp,
        section,
        select,
        small,
        span,
        strong,
        sub,
        summary,
        sup,
        table,
        tbody,
        td,
        textarea,
        tfoot,
        th,
        thead,
        time,
        tr,
        ul,
        var,
        video {
            border: 0;
            font-family: sans-serif;
            line-height: 1;
            list-style: none;
            margin: 0;
            padding: 0;
            text-decoration: none;
            -webkit-font-smoothing: antialiased;
            -webkit-backface-visibility: hidden;
            box-sizing: border-box;
            color: #333;
            transition: .3s cubic-bezier(.4, .4, 0, 1);
            word-spacing: 1px
        }

        a:focus:not(:focus-visible),
        summary:focus:not(:focus-visible) {
            box-shadow: none;
            outline: none
        }

        button:focus:not(:focus-visible) {
            outline: none
        }

        nav ul {
            list-style: none
        }

        blockquote,
        q {
            quotes: none
        }

        blockquote:after,
        blockquote:before,
        q:after,
        q:before {
            content: none
        }

        a,
        button {
            background: transparent;
            font-size: 100%;
            margin: 0;
            padding: 0;
            vertical-align: baseline
        }

        ins {
            text-decoration: none
        }

        ins,
        mark {
            background-color: #ff9;
            color: #000
        }

        mark {
            font-style: italic;
            font-weight: 700
        }

        del {
            text-decoration: line-through
        }

        abbr[title],
        dfn[title] {
            border-bottom: 1px dotted;
            cursor: help
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        hr {
            border: 0;
            border-top: 1px solid #ccc;
            display: block;
            height: 1px;
            margin: 1em 0;
            padding: 0
        }

        input,
        select {
            vertical-align: middle
        }

        textarea {
            resize: none
        }

        .clearfix:after {
            clear: both;
            content: "";
            display: block
        }

        [slot=after] button {
            overflow-anchor: none
        }
    </style>
    <style>
        .sd {
            display: flex;
            flex-wrap: nowrap;
            max-width: 100%;
            align-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
            pointer-events: all;
            z-index: 0;
            -webkit-overflow-scrolling: touch;
        }

        .sd::-webkit-scrollbar {
            display: none;
        }

        .sd,
        .sd.richText * {
            transition-property: all, --g-angle, --g-color-0, --g-position-0, --g-color-1, --g-position-1, --g-color-2, --g-position-2, --g-color-3, --g-position-3, --g-color-4, --g-position-4, --g-color-5, --g-position-5, --g-color-6, --g-position-6, --g-color-7, --g-position-7, --g-color-8, --g-position-8, --g-color-9, --g-position-9, --g-color-10, --g-position-10, --g-color-11, --g-position-11;
        }

        .sd[tabindex]:focus {
            outline: none;
        }

        .sd[tabindex]:focus-visible {
            outline: 1px solid Highlight;
        }

        input[type=email],
        input[type=tel],
        input[type=text],
        select,
        textarea {
            -webkit-appearance: none;
        }

        select {
            cursor: pointer;
        }

        .frame {
            display: block;
            overflow: hidden;
        }

        .frame>iframe {
            height: 100%;
            width: 100%;
        }

        .frame .formrun-embed>iframe:not(:first-child) {
            display: none !important;
        }

        .image {
            position: relative;
        }

        .image:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background-position: 50%;
            background-size: cover;
            border-radius: inherit;
            pointer-events: none;
            transition: inherit;
        }

        .sd.file {
            display: flex;
            flex-direction: row;
            cursor: pointer;
            outline: 2px solid transparent;
            outline-offset: -1px;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .sd.file:focus-within {
            outline-color: Highlight;
        }

        .file>input[type=file] {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .sd.icon,
        .sd.text {
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            overflow: visible;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .material-icons {
            display: inline-block;
            font-family: Material Icons;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            letter-spacing: normal;
            line-height: 1;
            text-transform: none;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
        }

        a,
        a.icon,
        a.text {
            -webkit-tap-highlight-color: rgba(0, 0, 0, .15);
        }

        .fixed {
            z-index: 2;
        }

        .button {
            transition: .4s cubic-bezier(.4, .4, 0, 1);
        }

        .button,
        .link {
            cursor: pointer;
        }

        .submitLoading {
            opacity: .5 !important;
            pointer-events: none !important;
        }

        .richText {
            display: block;
            word-break: break-word;
        }

        .richText [data-thread],
        .richText a,
        .richText blockquote,
        .richText em,
        .richText h1,
        .richText h2,
        .richText h3,
        .richText h4,
        .richText li,
        .richText ol,
        .richText p,
        .richText p>code,
        .richText pre,
        .richText pre>code,
        .richText s,
        .richText strong,
        .richText table tbody,
        .richText table tbody tr,
        .richText table tbody tr>td,
        .richText table tbody tr>th,
        .richText u,
        .richText ul {
            backface-visibility: visible;
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            letter-spacing: inherit;
            line-height: inherit;
            text-align: inherit;
        }

        .richText p {
            display: block;
            margin: 10px 0;
            min-height: 1em;
        }

        .richText img {
            max-width: 100%;
            height: auto;
            vertical-align: bottom;
        }

        .richText h1,
        .richText h2,
        .richText h3,
        .richText h4,
        .richText h5,
        .richText h6 {
            display: block;
            margin: 10px 0;
        }

        .richText h1 {
            font-size: 3em;
            font-weight: 700;
            margin: 20px 0;
        }

        .richText h2 {
            font-size: 2em;
            font-weight: 700;
        }

        .richText h3 {
            font-size: 1em;
            font-weight: 700;
        }

        .richText h4,
        .richText h5 {
            font-weight: 600;
            font-size: 1em;
        }

        .richText h6 {
            font-weight: 500;
            font-size: 1em;
        }

        .richText [data-type=table] {
            overflow-x: auto;
        }

        .richText [data-type=table] p {
            word-break: break-all;
            white-space: pre-line;
        }

        .richText table {
            margin: 10px 0;
            border-collapse: collapse;
            border-spacing: unset;
            border: 1px solid #f2f2f2;
            table-layout: auto;
            font-size: 14px;
            line-height: 1.4;
            color: #1a1a1a;
        }

        .richText table tr th {
            background: hsla(0, 0%, 96%, .5);
        }

        .richText table tr th,
        .richText table tr td {
            padding: 12px;
            border: 1px solid #f2f2f2;
            max-width: 240px;
            min-width: 100px;
        }

        .richText table tr th p,
        .richText table tr td p {
            margin: 0;
        }

        .richText blockquote {
            font-style: italic;
            margin: 10px 0;
            padding: 10px 15px;
            border-left: 3px solid rgba(0, 0, 0, .15);
        }

        .richText [data-type=embed_code] {
            margin: 20px 0;
            position: relative;
        }

        .richText [data-type=embed_code]>.height-adjuster>.wrapper {
            position: relative;
        }

        .richText [data-type=embed_code]>.height-adjuster>.wrapper[style*=padding-top] iframe,
        .richText [data-type=embed_code][data-embed-code-type=instagram]>.height-adjuster>.wrapper[style*=padding-top] blockquote,
        .richText [data-type=embed_code][data-embed-code-type=codepen]>.height-adjuster>.wrapper iframe,
        .richText [data-type=embed_code][data-embed-code-type=slideshare]>.height-adjuster>.wrapper iframe,
        .richText [data-type=embed_code][data-embed-code-type=speakerdeck]>.height-adjuster>.wrapper iframe,
        .richText [data-type=embed_code][data-embed-code-type=snapwidget]>.height-adjuster>.wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .richText [data-type=embed_code][data-embed-sandbox=true] {
            display: block;
            overflow: hidden;
        }

        .richText [data-type=embed_code][data-embed-code-type=instagram]>.height-adjuster>.wrapper[style*=padding-top] {
            padding-top: 50px !important;
        }

        .richText [data-type=embed_code][data-embed-code-type=instagram]>.height-adjuster>.wrapper[style*=padding-top] blockquote {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .richText .video>.height-adjuster>div {
            position: relative;
            display: block;
            overflow: hidden;
        }

        .richText .video>.height-adjuster>div:before {
            content: "";
            display: block;
            padding-top: 56.25%;
        }

        .richText .video>.height-adjuster>div>iframe,
        .richText .video>.height-adjuster>div>object,
        .richText .video>.height-adjuster>div>video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .richText .video[data-provider=kaltura] iframe {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

    <style>
        a[data-v-2a07820f] {
            align-content: center;
            align-items: center;
            background-color: #fff;
            border-radius: 4px;
            bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .14);
            display: flex;
            height: 28px;
            justify-content: center;
            left: 20px;
            padding: 0 12px;
            perspective: 300px;
            position: fixed;
            transition: 0s linear;
            width: auto;
            z-index: 2000
        }
    </style>
    <style>
        .TitleAnnouncer[data-v-d9645d67] {
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            clip: rect(0, 0, 0, 0);
            border-width: 0;
            white-space: nowrap
        }
    </style>
    <style>
        .publish-studio-style[data-v-52f3f575] {
            transition: .4s cubic-bezier(.4, .4, 0, 1)
        }
    </style>
    <style></style>
    <style>
        .snackbar[data-v-5a917894] {
            align-items: center;
            background: #fff;
            border: 1px solid #ededed;
            border-radius: 6px;
            box-shadow: 0 16px 48px -8px rgba(0, 0, 0, .08), 0 10px 25px -5px rgba(0, 0, 0, .11);
            display: flex;
            flex-direction: row;
            gap: 8px;
            justify-content: space-between;
            left: 50%;
            max-width: 90vw;
            padding: 16px 20px;
            position: fixed;
            top: 32px;
            transform: translateX(-50%);
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            width: 480px;
            z-index: 9999
        }

        .snackbar.v-enter-active[data-v-5a917894],
        .snackbar.v-leave-active[data-v-5a917894] {
            transition: .4s cubic-bezier(.4, .4, 0, 1)
        }

        .snackbar.v-enter-from[data-v-5a917894],
        .snackbar.v-leave-to[data-v-5a917894] {
            opacity: 0;
            transform: translate(-50%, -10px)
        }

        .snackbar .convey[data-v-5a917894] {
            align-items: center;
            display: flex;
            flex-direction: row;
            gap: 8px;
            padding: 0
        }

        .snackbar .convey .icon[data-v-5a917894] {
            background-position: 50%;
            background-repeat: no-repeat;
            flex-shrink: 0;
            height: 24px;
            width: 24px
        }

        .snackbar .convey .message[data-v-5a917894] {
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            white-space: pre-line
        }

        .snackbar .convey.error .icon[data-v-5a917894] {
            background-image: url(/_nuxt/close_circle.c7480f3c.svg)
        }

        .snackbar .convey.error .message[data-v-5a917894] {
            color: #f84f65
        }

        .snackbar .convey.success .icon[data-v-5a917894] {
            background-image: url(/_nuxt/round_check.0ebac23f.svg)
        }

        .snackbar .convey.success .message[data-v-5a917894] {
            color: #111
        }

        .snackbar .button[data-v-5a917894] {
            align-items: center;
            border-radius: 40px;
            color: #4b9cfb;
            display: flex;
            flex-shrink: 0;
            font-family: Inter;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            justify-content: center;
            line-height: 16px;
            padding: 4px 8px
        }

        .snackbar .button[data-v-5a917894]:hover {
            background: #f5f5f5
        }
    </style>
    <style>
        .design-canvas__modal {
            height: 100%;
            pointer-events: none;
            position: fixed;
            transition: none;
            width: 100%;
            z-index: 2
        }

        .design-canvas__modal:focus {
            outline: none
        }

        .design-canvas__modal.v-enter-active .studio-canvas,
        .design-canvas__modal.v-leave-active,
        .design-canvas__modal.v-leave-active .studio-canvas {
            transition: .4s cubic-bezier(.4, .4, 0, 1)
        }

        .design-canvas__modal.v-enter-active .studio-canvas *,
        .design-canvas__modal.v-leave-active .studio-canvas * {
            transition: none !important
        }

        .design-canvas__modal.isNone {
            transition: none
        }

        .design-canvas__modal .design-canvas__modal__base {
            height: 100%;
            left: 0;
            pointer-events: auto;
            position: fixed;
            top: 0;
            transition: .4s cubic-bezier(.4, .4, 0, 1);
            width: 100%;
            z-index: -1
        }

        .design-canvas__modal .studio-canvas {
            height: 100%;
            pointer-events: none
        }

        .design-canvas__modal .studio-canvas>* {
            background: none !important;
            pointer-events: none
        }
    </style>
    <style>
        .LoadMoreAnnouncer[data-v-2d07cb19] {
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            clip: rect(0, 0, 0, 0);
            border-width: 0;
            white-space: nowrap
        }
    </style>
    <style>
        .app[data-v-d12de11f] {
            align-items: center;
            flex-direction: column;
            height: 100%;
            justify-content: center;
            width: 100%
        }

        .title[data-v-d12de11f] {
            font-size: 34px;
            font-weight: 300;
            letter-spacing: 2.45px;
            line-height: 30px;
            margin: 30px
        }
    </style>
    <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Lato%3A400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Permanent+Marker%3A400" rel="stylesheet">
    <style id="fontawesome-styles">
        /*! * Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) * Copyright 2023 Fonticons, Inc. */
        .fa-brands,
        .fa-solid {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: var(--fa-display, inline-block);
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto
        }

        .fa-solid {
            font-family: Font Awesome\ 6 Free;
            font-weight: 900
        }

        .fa-brands {
            font-family: Font Awesome\ 6 Brands;
            font-weight: 400
        }

        :host,
        :root {
            --fa-style-family-classic: "Font Awesome 6 Free";
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free";
            --fa-style-family-brands: "Font Awesome 6 Brands";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands"
        }

        @font-face {
            font-display: block;
            font-family: Font Awesome\ 6 Free;
            font-style: normal;
            font-weight: 900;
            src: url(https://storage.googleapis.com/production-os-assets/assets/fontawesome/1629704621943/6.4.2/webfonts/fa-solid-900.woff2) format("woff2"), url(https://storage.googleapis.com/production-os-assets/assets/fontawesome/1629704621943/6.4.2/webfonts/fa-solid-900.ttf) format("truetype")
        }

        @font-face {
            font-display: block;
            font-family: Font Awesome\ 6 Brands;
            font-style: normal;
            font-weight: 400;
            src: url(https://storage.googleapis.com/production-os-assets/assets/fontawesome/1629704621943/6.4.2/webfonts/fa-brands-400.woff2) format("woff2"), url(https://storage.googleapis.com/production-os-assets/assets/fontawesome/1629704621943/6.4.2/webfonts/fa-brands-400.ttf) format("truetype")
        }

        .fa-house:before {
            content: "\f015";
        }

        .fa-mountain-city:before {
            content: "\e52e";
        }
    </style>
    <style name="modal-test"></style>
</head>

<body>
    <div id="__nuxt">
        <div class="">
            <div class="container">
                <style data-v-52f3f575="">
                    .sd[data-s-2f7ef5ff-31fb-40f2-969d-8f5a1f268f1e] {
                        background: #fff;
                        border-radius: 0;
                        box-shadow: ;
                        height: 100%;
                        margin: 0 0 0 0;
                        opacity: 1;
                        padding: 0 0 0 0;
                        width: 100%;
                        max-width: 100%;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-2f7ef5ff-31fb-40f2-969d-8f5a1f268f1e] {
                            align-content: center;
                            align-items: center;
                            flex-direction: column;
                            flex-wrap: nowrap;
                            justify-content: center;
                            padding: 0px 0px 0px 0px;
                        }
                    }

                    .sd[data-s-1079ebc7-0bea-478b-a7bc-c69be668ca65] {
                        height: 300px;
                        width: 200px;
                        max-width: 100%;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-1079ebc7-0bea-478b-a7bc-c69be668ca65] {
                            align-content: center;
                            align-items: center;
                            flex-direction: column;
                            flex-wrap: nowrap;
                            height: 845px;
                            justify-content: flex-start;
                            width: 100%;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-574f9cb8-0747-4432-8d63-e2780f8b301a] {
                        background: #EEEEEE;
                        height: 160px;
                        width: 200px;
                        --gap-uuid: 574f9cb8-0747-4432-8d63-e2780f8b301a;
                        --gap-h-574f9cb8-0747-4432-8d63-e2780f8b301a: 0px;
                        --gap-v-574f9cb8-0747-4432-8d63-e2780f8b301a: 0px;
                        max-width: 100%;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-574f9cb8-0747-4432-8d63-e2780f8b301a] {
                            align-content: center;
                            align-items: center;
                            background: rgba(0, 0, 0, 0);
                            border-radius: 0px;
                            flex: none;
                            flex-direction: column;
                            flex-wrap: nowrap;
                            gap: 0px;
                            height: 629px;
                            justify-content: flex-start;
                            width: 100%;
                            --gap-h-574f9cb8-0747-4432-8d63-e2780f8b301a: 0px;
                            --gap-v-574f9cb8-0747-4432-8d63-e2780f8b301a: 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-c650a751-ce3c-4957-b2bb-c90416f8bfe3] {
                        color: #333;
                        font-family: var(--s-font-209a6c7b);
                        font-size: 20px;
                        font-weight: 400;
                        height: auto;
                        line-height: 1.4;
                        text-align: left;
                        width: auto;
                        max-width: 100%;
                        justify-content: flex-start;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-c650a751-ce3c-4957-b2bb-c90416f8bfe3] {
                            color: #e18506;
                            font-family: var(--s-font-08aa3cb7);
                            font-size: 57px;
                            margin: 100px 0px 0px 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-813130a7-b013-49e4-ab40-923c54f7a71c] {
                        color: #333;
                        font-family: var(--s-font-209a6c7b);
                        font-size: 20px;
                        font-weight: 400;
                        height: auto;
                        line-height: 1.4;
                        text-align: left;
                        width: auto;
                        max-width: 100%;
                        justify-content: flex-start;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-813130a7-b013-49e4-ab40-923c54f7a71c] {
                            color: #ffffff;
                            font-size: 15px;
                            margin: 10px 0px 0px 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-b21045d0-935b-4d48-b398-d48887c06796] {
                        color: #333;
                        font-family: var(--s-font-209a6c7b);
                        font-size: 20px;
                        font-weight: 400;
                        height: auto;
                        line-height: 1.4;
                        text-align: left;
                        width: auto;
                        max-width: 100%;
                        justify-content: flex-start;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-b21045d0-935b-4d48-b398-d48887c06796] {
                            color: #ffffff;
                            font-size: 15px;
                        }
                    }

                    .sd[data-s-fd116922-4476-4204-9bb0-1d9ef16b40d1] {
                        align-content: center;
                        align-items: center;
                        flex-direction: row;
                        flex-wrap: nowrap;
                        justify-content: center;
                        padding: 0px;
                        --gap-uuid: fd116922-4476-4204-9bb0-1d9ef16b40d1;
                        --gap-h-fd116922-4476-4204-9bb0-1d9ef16b40d1: 0px;
                        --gap-v-fd116922-4476-4204-9bb0-1d9ef16b40d1: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-fd116922-4476-4204-9bb0-1d9ef16b40d1] {
                            gap: 0px;
                            margin: 200px 0px 0px 0px;
                            --gap-h-fd116922-4476-4204-9bb0-1d9ef16b40d1: 0px;
                            --gap-v-fd116922-4476-4204-9bb0-1d9ef16b40d1: 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-f753dbff-6297-4a70-b932-4a46edf09299] {
                        align-content: center;
                        align-items: center;
                        flex-direction: row;
                        flex-wrap: nowrap;
                        justify-content: center;
                        padding: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-f753dbff-6297-4a70-b932-4a46edf09299] {
                            flex-direction: row;
                            height: 180px;
                            margin: 0px 5px 0px 0px;
                            width: 180px;
                            max-width: calc(100% - 5px);
                        }
                    }

                    .sd[data-s-3d522929-8bb4-43aa-9f5f-6be0977e2d67] {
                        align-content: center;
                        align-items: center;
                        flex-direction: column;
                        flex-wrap: nowrap;
                        justify-content: center;
                        padding: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-3d522929-8bb4-43aa-9f5f-6be0977e2d67] {
                            margin: 0px 0px 0px 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-0278ccc8-f701-4f5d-b528-c6e6d09b94ef] {
                        font-size: 24px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-0278ccc8-f701-4f5d-b528-c6e6d09b94ef] {
                            color: rgb(255, 255, 255);
                            font-size: 95px;
                        }
                    }

                    .sd[data-s-a6a9595e-ce3e-4fde-aa8e-fa0aa9f530e9] {
                        font-size: 24px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-a6a9595e-ce3e-4fde-aa8e-fa0aa9f530e9] {
                            color: rgb(255, 255, 255);
                            font-size: 40px;
                            margin: 10px 0px 0px 50px;
                            transform: rotate(45deg);
                            max-width: calc(100% - 50px);
                        }
                    }

                    .sd[data-s-6facc88b-8f83-4923-aa78-91e1483d33e3] {
                        align-content: center;
                        align-items: center;
                        flex-direction: column;
                        flex-wrap: nowrap;
                        justify-content: center;
                        padding: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-6facc88b-8f83-4923-aa78-91e1483d33e3] {
                            margin: 80px 0px 0px 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-79d32078-2e43-4dc5-9099-9ef738d3d0ac] {
                        font-size: 24px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-79d32078-2e43-4dc5-9099-9ef738d3d0ac] {
                            color: rgb(255, 255, 255);
                            font-size: 40px;
                            margin: 0px 0px 10px 0px;
                            transform: rotate(225deg);
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-cf948463-db01-4202-9d50-9a3441ce36d6] {
                        font-size: 24px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-cf948463-db01-4202-9d50-9a3441ce36d6] {
                            color: rgb(255, 255, 255);
                            font-size: 35px;
                            margin: 0px 0px 25px 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-d1f79e10-0558-4183-a655-6cce7710d1ab] {
                        background: #EEEEEE;
                        height: 160px;
                        width: 200px;
                        max-width: 100%;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-d1f79e10-0558-4183-a655-6cce7710d1ab] {
                            background: rgba(255, 255, 255, 0.8);
                            height: 166px;
                            padding: 0px;
                            width: 1px;
                            margin: 14px 0px 0px 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-7ed8d73f-3fb6-462b-8ad4-079c4ed82e54] {
                        align-content: center;
                        align-items: center;
                        flex-direction: row;
                        flex-wrap: nowrap;
                        justify-content: center;
                        padding: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-7ed8d73f-3fb6-462b-8ad4-079c4ed82e54] {
                            height: 180px;
                            margin: 0px 0px 0px 0px;
                            width: 180px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-0601f4e4-d286-4bee-adf2-aece3bf7b076] {
                        align-content: center;
                        align-items: center;
                        flex-direction: row;
                        flex-wrap: nowrap;
                        justify-content: center;
                        padding: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-0601f4e4-d286-4bee-adf2-aece3bf7b076] {
                            height: 162px;
                            margin: 0px 0px 0px 5px;
                            max-width: calc(100% - 5px);
                        }
                    }

                    .sd[data-s-e8d4bd72-d4f3-4b56-a1c0-352f04175ea6] {
                        align-content: center;
                        align-items: center;
                        flex-direction: column;
                        flex-wrap: nowrap;
                        justify-content: center;
                        padding: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-e8d4bd72-d4f3-4b56-a1c0-352f04175ea6] {
                            margin: 0px 10px 10px 0px;
                            max-width: calc(100% - 10px);
                        }
                    }

                    .sd[data-s-8115fcac-19ea-4c68-bd7e-84c0ea8472f4] {
                        font-size: 24px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-8115fcac-19ea-4c68-bd7e-84c0ea8472f4] {
                            color: rgb(255, 255, 255);
                            font-size: 110px;
                            width: auto;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-7c2c4cd6-343c-4e79-8941-4a1c38b35646] {
                        font-size: 24px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-7c2c4cd6-343c-4e79-8941-4a1c38b35646] {
                            color: rgb(255, 255, 255);
                            font-size: 40px;
                            margin: 0px 0px 5px 65px;
                            transform: rotate(45deg);
                            max-width: calc(100% - 65px);
                        }
                    }

                    .sd[data-s-9ff21258-250b-41bf-906d-2172a2791961] {
                        align-content: center;
                        align-items: center;
                        flex-direction: column;
                        flex-wrap: nowrap;
                        justify-content: center;
                        padding: 0px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-9ff21258-250b-41bf-906d-2172a2791961] {
                            margin: 50px 0px 0px 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-4de8df47-1aaf-429d-aace-9bb3010d645e] {
                        font-size: 24px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-4de8df47-1aaf-429d-aace-9bb3010d645e] {
                            color: rgb(255, 255, 255);
                            font-size: 40px;
                            margin: 0px 0px 10px 0px;
                            transform: rotate(225deg);
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-3ad9208d-77a0-40e6-b978-6c3bb9a11bca] {
                        font-size: 24px;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-3ad9208d-77a0-40e6-b978-6c3bb9a11bca] {
                            color: rgb(255, 255, 255);
                            font-size: 40px;
                        }
                    }

                    .sd[data-s-55d25de1-1384-4f11-bb81-641a56805fbe] {
                        background: #EEEEEE;
                        height: 160px;
                        width: 200px;
                        max-width: 100%;
                        border-bottom:double;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-55d25de1-1384-4f11-bb81-641a56805fbe] {
                            background: rgb(255, 255, 255);
                            height: 1px;
                            margin: 10px 0px 0px 0px;
                            width: 340px;
                            max-width: 100%;
                            border-bottom: double;
                        }
                    }

                    .sd[data-s-e69f3636-5219-403c-ae24-164e43c92b71] {
                        flex-direction: row;
                        padding: 0px;
                        flex-wrap: nowrap;
                        align-items: center;
                        align-content: center;
                        justify-content: center;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-e69f3636-5219-403c-ae24-164e43c92b71] {
                            margin: 10px 0px 0px 0px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-efb5ba20-e9bb-4069-98fd-f047a2ceaa2e] {
                        flex-direction: row;
                        padding: 0px;
                        flex-wrap: nowrap;
                        align-items: center;
                        align-content: center;
                        justify-content: center;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-efb5ba20-e9bb-4069-98fd-f047a2ceaa2e] {
                            margin: 0px 50px 0px 0px;
                            max-width: calc(100% - 50px);
                        }
                    }

                    .sd[data-s-629aa4d2-59bb-41ab-b871-3c713c50d2c5] {
                        color: #333;
                        font-family: var(--s-font-209a6c7b);
                        font-size: 20px;
                        font-weight: 400;
                        height: auto;
                        line-height: 1.4;
                        text-align: left;
                        width: auto;
                        max-width: 100%;
                        justify-content: flex-start;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-629aa4d2-59bb-41ab-b871-3c713c50d2c5] {
                            color: #ffffff;
                            font-size: 20px;
                            margin: 0px 55px 0px 0px;
                            max-width: calc(100% - 55px);
                        }
                    }

                    .sd[data-s-0bdc6c11-0f71-464f-a5d5-a3215f9fb069] {
                        background: #EEEEEE;
                        height: 160px;
                        width: 200px;
                        max-width: 100%;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-0bdc6c11-0f71-464f-a5d5-a3215f9fb069] {
                            background: rgba(255, 255, 255, 0.8);
                            height: 40px;
                            padding: 0px;
                            width: 1px;
                            max-width: 100%;
                        }
                    }

                    .sd[data-s-e5e680b8-5a8b-4e70-8f17-064bc9c8f306] {
                        color: #333;
                        font-family: var(--s-font-209a6c7b);
                        font-size: 20px;
                        font-weight: 400;
                        height: auto;
                        line-height: 1.4;
                        text-align: left;
                        width: auto;
                        max-width: 100%;
                        justify-content: flex-start;
                    }

                    @media screen and (max-width: 480px) {
                        .sd[data-s-e5e680b8-5a8b-4e70-8f17-064bc9c8f306] {
                            color: #ffffff;
                            font-size: 20px;
                        }
                    }
                </style>
                <style data-v-52f3f575="">
                    body {
                        background: #fff;
                        transition: background 0.5s cubic-bezier(0.4, 0.4, 0, 1);
                    }
                </style><!---->
                <div data-v-d9645d67="" class="TitleAnnouncer" aria-live="assertive">First project 読み込まれました</div>
                <div data-v-2d07cb19="" class="LoadMoreAnnouncer" aria-live="assertive"></div><!---->
                <div>
                    <div class="modals"></div>
                    <div class="StudioCanvas" aria-hidden="false">
                        <div data-s-2f7ef5ff-31fb-40f2-969d-8f5a1f268f1e="" class="sd appear">
                            <div data-s-1079ebc7-0bea-478b-a7bc-c69be668ca65=""
                                data-r-0_1079ebc7-0bea-478b-a7bc-c69be668ca65="" class="image sd">
                                <div data-s-574f9cb8-0747-4432-8d63-e2780f8b301a="" class="sd appear">
                                    <p data-s-c650a751-ce3c-4957-b2bb-c90416f8bfe3=""
                                        data-r-0_0_0_c650a751-ce3c-4957-b2bb-c90416f8bfe3="" class="text sd appear">
                                        Sono Ideal</p>
                                    <p data-s-813130a7-b013-49e4-ab40-923c54f7a71c=""
                                        data-r-1_0_0_813130a7-b013-49e4-ab40-923c54f7a71c="" class="text sd appear">
                                    <p class="text-white"> {{ now()->format('Y年m月d日') }} <br></p>
                                    <p data-s-b21045d0-935b-4d48-b398-d48887c06796=""
                                        data-r-2_0_0_b21045d0-935b-4d48-b398-d48887c06796="" class="text sd appear">
                                        温度{{ (int) $data['temperature'] }}℃｜湿度{{ (int) $data['humidity'] }}％</p>
                                    <div data-s-fd116922-4476-4204-9bb0-1d9ef16b40d1="" class="sd appear">
                                        <div data-s-f753dbff-6297-4a70-b932-4a46edf09299="" class="switch-house sd appear">
                                            <div data-s-3d522929-8bb4-43aa-9f5f-6be0977e2d67="" class="sd appear"><i
                                                    data-s-0278ccc8-f701-4f5d-b528-c6e6d09b94ef=""
                                                    class="icon fa-solid fa-house sd appear"></i><i
                                                    data-s-a6a9595e-ce3e-4fde-aa8e-fa0aa9f530e9=""
                                                    class="icon material-icons sd appear">call_missed_outgoing</i>
                                            </div>
                                            <div data-s-6facc88b-8f83-4923-aa78-91e1483d33e3="" class="sd appear"><i
                                                    data-s-79d32078-2e43-4dc5-9099-9ef738d3d0ac=""
                                                    class="icon material-icons sd appear">call_missed_outgoing</i><i
                                                    data-s-cf948463-db01-4202-9d50-9a3441ce36d6=""
                                                    class="icon fa-solid fa-mountain-city sd appear"></i></div>
                                        </div>
                                        <div data-s-d1f79e10-0558-4183-a655-6cce7710d1ab="" class="sd appear"></div>
                                        <div data-s-7ed8d73f-3fb6-462b-8ad4-079c4ed82e54="" class="sd appear">
                                            <div data-s-0601f4e4-d286-4bee-adf2-aece3bf7b076="" class="switch-hotel sd appear">
                                                <div data-s-e8d4bd72-d4f3-4b56-a1c0-352f04175ea6="" class="sd appear">
                                                    <i data-s-8115fcac-19ea-4c68-bd7e-84c0ea8472f4=""
                                                        class="icon material-icons sd appear">hotel</i><i
                                                        data-s-7c2c4cd6-343c-4e79-8941-4a1c38b35646=""
                                                        class="icon material-icons sd appear">call_missed_outgoing</i>
                                                </div>
                                                <div data-s-9ff21258-250b-41bf-906d-2172a2791961="" class="sd appear">
                                                    <i data-s-4de8df47-1aaf-429d-aace-9bb3010d645e=""
                                                        class="icon material-icons sd appear">call_missed_outgoing</i><i
                                                        data-s-3ad9208d-77a0-40e6-b978-6c3bb9a11bca=""
                                                        class="icon material-icons sd appear">directions_run</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-s-55d25de1-1384-4f11-bb81-641a56805fbe="" class="sd appear"></div>
                                    <div data-s-e69f3636-5219-403c-ae24-164e43c92b71="" class="sd appear">
                                        <div data-s-efb5ba20-e9bb-4069-98fd-f047a2ceaa2e="" class="sd appear"><a
                                                href="{{ route('manualcontrol') }}"
                                                data-s-629aa4d2-59bb-41ab-b871-3c713c50d2c5=""
                                                data-r-0_0_5_0_0_629aa4d2-59bb-41ab-b871-3c713c50d2c5=""
                                                class="text link sd appear">手動調整</a>
                                            <div data-s-0bdc6c11-0f71-464f-a5d5-a3215f9fb069="" class="sd appear">
                                            </div>
                                        </div><a href="{{ route('setting') }}"
                                            data-s-e5e680b8-5a8b-4e70-8f17-064bc9c8f306=""
                                            data-r-1_5_0_0_e5e680b8-5a8b-4e70-8f17-064bc9c8f306=""
                                            class="text link sd appear">詳細設定</a>
                                    </div>
                                </div>
                                <style>
                                    .sd[data-r-0_1079ebc7-0bea-478b-a7bc-c69be668ca65]:before {
                                        background-image: url("https://images.unsplash.com/photo-1506305269769-53a5714a93be?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w2MzQ2fDB8MXxzZWFyY2h8MjF8fG5pZ2h0fGVufDB8fHx8MTcxODg3MjExNHww&ixlib=rb-4.0.3&q=80&w=1080")
                                    }
                                </style>
                            </div>
                        </div>
                        <div data-v-4b268d44="" class="product-font-style">
                            <style data-v-4b268d44=""></style>
                        </div>
                        <style>
                            :root {
                                --s-font-209a6c7b: Lato;
                                --s-font-37a49e23: 'Beau Rivage';
                                --s-font-08aa3cb7: 'Permanent Marker';
                            }
                        </style>
                    </div>
                </div>
            </div><!---->
        </div>
    </div>
    <script type="application/json" id="__NUXT_DATA__" data-ssr="true">[["Reactive",1],{"data":2,"state":4,"_errors":5,"serverRendered":6,"path":7,"pinia":8},{"dynamicData":3},null,{},{"dynamicData":3},true,"/",{"cmsContentStore":9,"indexStore":14,"projectStore":17,"productStore":26,"pageHeadStore":144},{"referenceMap":10,"listContentsMap":11,"contentMap":12,"clientLoaded":13},["Map"],["Map"],["Map"],false,{"routeType":15,"host":16},"publish","salmon992750.studio.site",{"project":18},{"id":19,"name":20,"type":21,"customDomain":22,"iconImage":22,"coverImage":3,"displayBadge":6,"integrations":23,"snapshot_path":24,"snapshot_id":25,"recaptchaSiteKey":-1},"xmaZvM1kaR","First project","web","",[],"https://storage.googleapis.com/studio-publish/projects/xmaZvM1kaR/6aoV9ZrmqR/","6aoV9ZrmqR",{"product":27,"isLoaded":6,"selectedModalIds":141,"redirectPage":3,"isInitializedRSS":13,"pageViewMap":142,"symbolViewMap":143},{"breakPoints":28,"colors":35,"fonts":36,"head":63,"info":65,"pages":72,"resources":125,"symbols":128,"style":129,"styleVars":131,"enablePassword":13},[29,32],{"maxWidth":30,"name":31},480,"mobile",{"maxWidth":33,"name":34},768,"tablet",[],[37,54,59],{"family":38,"subsets":39,"variants":42,"vendor":53},"Lato",[40,41],"latin","latin-ext",[43,44,45,46,47,48,49,50,51,52],"100","100italic","300","300italic","regular","italic","700","700italic","900","900italic","google",{"family":55,"subsets":56,"variants":58,"vendor":53},"Beau Rivage",[40,41,57],"vietnamese",[47],{"family":60,"subsets":61,"variants":62,"vendor":53},"Permanent Marker",[40],[47],{"favicon":22,"meta":64,"title":22},{"description":22,"og:image":22},{"baseWidth":66,"created_at":67,"screen":68,"type":21,"updated_at":70,"version":71},1280,1518591100346,{"height":69,"isAutoHeight":13,"width":66,"workingState":13},600,1518792996878,"4.1.3",[73,80,85,90,95,100,105,110,115,120],{"head":74,"id":76,"type":77,"uuid":78,"symbolIds":79},{"lang":75,"title":22},"ja","1","page","a4b03344-5a71-489d-9e74-a3b730598206",[],{"head":81,"id":82,"type":77,"uuid":83,"symbolIds":84},{"lang":75,"title":22},"2","3d3bdf57-29fe-4c00-a534-10e5cce26d80",[],{"head":86,"id":87,"type":77,"uuid":88,"symbolIds":89},{"lang":75,"title":22},"3","ca9f1a96-0071-450e-b2bd-7a2bcd1a8fe6",[],{"head":91,"id":92,"type":77,"uuid":93,"symbolIds":94},{"lang":75,"title":22},"4","645f0b24-2c74-42ad-bcaf-a0d30d200be0",[],{"head":96,"id":97,"type":77,"uuid":98,"symbolIds":99},{"lang":75,"title":22},"5","b3b1e7d9-9cf3-4f7e-afff-82f94411023a",[],{"head":101,"id":102,"type":77,"uuid":103,"symbolIds":104},{"lang":75,"title":22},"5-1","d303f906-9f72-4e33-b7f3-77878a627e24",[],{"head":106,"id":107,"type":77,"uuid":108,"symbolIds":109},{"lang":75,"title":22},"5-2","99401c48-d4cf-41b4-a899-5f90caa1373d",[],{"head":111,"id":112,"type":77,"uuid":113,"symbolIds":114},{"lang":75,"title":22},"5-3","4caca999-cb7d-46ac-b767-6425fe27a50d",[],{"head":116,"id":117,"type":77,"uuid":118,"symbolIds":119},{"lang":75,"title":22},"5-5","476b28b0-36d6-47f4-83c3-455b02c6d577",[],{"head":121,"id":122,"type":77,"uuid":123,"symbolIds":124},{"lang":75,"title":22},"5-4","5ecf939c-c154-446e-aa26-880a8b1847b2",[],{"rssList":126,"apiList":127,"cmsProjectId":22},[],[],[],{"fontFamily":130},[],{"fontFamily":132},[133,135,138],{"key":134,"name":22,"value":38},"209a6c7b",{"key":136,"name":22,"value":137},"37a49e23","'Beau Rivage'",{"key":139,"name":22,"value":140},"08aa3cb7","'Permanent Marker'",[],{},["Map"],{"googleFontMap":145,"typesquareLoaded":13},["Map"]]</script>
    <script>
        window.__NUXT__ = {};
        window.__NUXT__.config = {
            public: {
                apiBaseUrl: "https://api.studiodesignapp.com/api",
                cmsApiBaseUrl: "https://api.cms.studiodesignapp.com",
                previewBaseUrl: "https://preview.studio.site",
                facebookAppId: "569471266584583",
                firebaseApiKey: "AIzaSyBkjSUz89vvvl35U-EErvfHXLhsDakoNNg",
                firebaseProjectId: "studio-7e371",
                firebaseAuthDomain: "studio-7e371.firebaseapp.com",
                firebaseDatabaseURL: "https://studio-7e371.firebaseio.com",
                firebaseStorageBucket: "studio-7e371.appspot.com",
                firebaseMessagingSenderId: "373326844567",
                firebaseAppId: "1:389988806345:web:db757f2db74be8b3",
                studioDomain: ".studio.site",
                studioPublishUrl: "https://storage.googleapis.com/studio-publish",
                studioPublishIndexUrl: "https://storage.googleapis.com/studio-publish-index",
                rssApiPath: "https://rss.studiodesignapp.com/rssConverter",
                embedSandboxDomain: ".studioiframesandbox.com",
                apiProxyUrl: "https://studio-api-proxy-rajzgb4wwq-an.a.run.app/publish",
                isPublishSite: true,
                isDev: false
            },
            app: {
                baseURL: "/",
                buildAssetsDir: "/_nuxt/",
                cdnURL: ""
            }
        }
    </script>
    <deepl-input-controller></deepl-input-controller>
</body>
<div style="all: initial !important;"></div>

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    // Switch house icons
    $('.switch-house').click(function() {
        house = $(this).find('.fa-house');
        mountain = $(this).find('.fa-mountain-city');
        $(house).toggleClass('fa-house fa-mountain-city');
        $(mountain).toggleClass('fa-house fa-mountain-city');
    });

    // Switch hotel icons
    $('.switch-hotel').click(function() {
        let icons = $(this).find('.icon.material-icons.sd.appear');
        $(icons).each(function(index, icon) {
            if ($(icon).text() == 'hotel') {
                $(icon).text('directions_run');
            } else if ($(icon).text() == 'directions_run') {
                $(icon).text('hotel');
            }
        });
    });
});
</script>

</html>
