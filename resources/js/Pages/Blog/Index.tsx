import {Box, TableContainer, Tbody, Td, Table, Th, Thead, Tr} from "@chakra-ui/react";

const Index = () => {
    return (
        <Box __css={{
            bg: 'white',
            borderRadius: 'md',
        }}>
            <TableContainer>
                <Table variant='simple'>
                    <Thead>
                        <Tr>
                            <Th>Name</Th>
                            <Th>Email</Th>
                            <Th>Phone</Th>
                            <Th>Content</Th>
                        </Tr>
                    </Thead>
                    <Tbody>
                        <Tr>
                            <Td>inches</Td>
                            <Td>millimetres (mm)</Td>
                            <Td>25.4</Td>
                            <Td>25.4</Td>
                        </Tr>

                    </Tbody>
                </Table>
            </TableContainer>
        </Box>
    );
}
export default Index;
