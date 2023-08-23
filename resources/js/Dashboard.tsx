import React from 'react';
import {ChakraProvider} from '@chakra-ui/react'
import MainLayout from "./Layouts/MainLayout";
import {RouterProvider} from 'react-router-dom';
import router from "./router";

const Dashboard =
    () => {
        return (
            <ChakraProvider>
                <RouterProvider router={router}/>
            </ChakraProvider>
        )
    }
export default Dashboard;
