import './bootstrap';
import '../css/app.css';

import {createRoot} from 'react-dom/client';
import {createInertiaApp} from '@inertiajs/react';
import {ChakraProvider} from "@chakra-ui/react";
import LayoutDashboard from "@/Layouts/LayoutDashboard";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const pages = import.meta.glob('./Pages/**/*.tsx', {eager: true})
        let page = pages[`./Pages/${name}.tsx`]
        const isNotLayout = name.startsWith('Auth/')
        // @ts-ignore
        page.default.layout = isNotLayout ? undefined : page => <LayoutDashboard children={page}/>
        return page
    },
    setup({el, App, props}) {
        const root = createRoot(el);

        root.render(<ChakraProvider><App {...props} /></ChakraProvider>);
    },
    progress: {
        color: '#4B5563',
    },
});
