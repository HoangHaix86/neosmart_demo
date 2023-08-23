import React from "react";
import Sidebar from "../Components/Sidebar";

const Layout = ({children}: { children: React.ReactNode }) => {
    return (
        <>
            <button>Click</button>
            <Sidebar/>dd
            <main>
                {children}
            </main>
        </>
    )
}

export default Layout;
