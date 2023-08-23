import "./bootstrap";
import "../css/app.css";
// @ts-ignore
import React from "react";
// @ts-ignore
import { createRoot } from "react-dom/client";
// @ts-ignore
import { createInertiaApp } from "@inertiajs/inertia-react";
// @ts-ignore
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { InertiaProgress } from '@inertiajs/progress'

import { ChakraProvider } from "@chakra-ui/react";

createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.tsx`,
            import.meta.glob("./Pages/**/*.tsx")
        ),
    setup({ el, App, props }) {
        createRoot(el).render(<ChakraProvider><App {...props} /></ChakraProvider>);
    },
});

InertiaProgress.init({ color: "#4B5563" });