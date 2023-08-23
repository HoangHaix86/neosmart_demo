import React from "react";
import {
    Button,
    Drawer,
    DrawerBody,
    DrawerContent, DrawerHeader,
    DrawerOverlay,
    Radio,
    RadioGroup,
    Stack,
    useDisclosure,
    Image
} from "@chakra-ui/react";

const Sidebar = () => {
    const {isOpen, onOpen, onClose} = useDisclosure()
    return (
        <>
            <Button colorScheme='blue' onClick={onOpen}>
                Open
            </Button>
            <Drawer placement='left' onClose={onClose} isOpen={true}>
                <DrawerOverlay/>
                <DrawerContent>
                    <DrawerHeader borderBottomWidth='1px'>
                        <Image
                            objectFit='cover'
                            src='images/logo.png'
                            alt='NeoSmart'
                        />
                    </DrawerHeader>
                    <DrawerBody>
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                    </DrawerBody>
                </DrawerContent>
            </Drawer>
        </>
    )
}

export default Sidebar;
