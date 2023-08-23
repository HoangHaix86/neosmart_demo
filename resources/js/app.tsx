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
import {ChakraProvider} from "@chakra-ui/react";
import Layout from './Layouts/Layout'

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob('./Pages/**/*.tsx', {eager: true})
        let page = pages[`./Pages/${name}.tsx`]
        // @ts-ignore
        page.default.layout = name.startsWith('Auth/') ? undefined : page => <Layout children={page}/>
        return page
    },
    setup({el, App, props}) {
        createRoot(el).render(<ChakraProvider><App {...props} /></ChakraProvider>);
    },
});

InertiaProgress.init({color: "#4B5563"});
