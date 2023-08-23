import "./bootstrap";
import "../css/app.css";
// @ts-ignore
import React from "react";
// @ts-ignore
import {createRoot} from "react-dom/client";
// @ts-ignore
import {createInertiaApp} from "@inertiajs/inertia-react";
// @ts-ignore
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";
import {InertiaProgress} from '@inertiajs/progress'


createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.tsx`,
            import.meta.glob("./Pages/**/*.tsx")
        ),
    setup({el, App, props}) {
        createRoot(el).render(<App {...props} />);
    },
});

InertiaProgress.init({
    // The delay after which the progress bar will
    // appear during navigation, in milliseconds.
    delay: 250,

    // The color of the progress bar.
    color: '#29d',

    // Whether to include the default NProgress styles.
    includeCSS: true,

    // Whether the NProgress spinner will be shown.
    showSpinner: false,
})
