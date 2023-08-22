import {ChakraProvider} from '@chakra-ui/react'
import Layout from "./Layout";
import React from 'react';

const App =
    () => {
        return (
            <ChakraProvider>
                <Layout/>
            </ChakraProvider>
        )
    }
export default App;
