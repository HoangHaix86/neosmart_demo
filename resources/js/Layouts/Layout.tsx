import React from "react";
import {Link} from "@chakra-ui/react";

const Layout = ({children}: { children: React.ReactNode }) => {
    return (
        <main>
            <article>{children}</article>
        </main>
    )
}

export default Layout;
