import React from "react";
import {Box, TableContainer, Tbody, Td, Th, Thead, Tr, Table} from "@chakra-ui/react";

const Index = () => {
    const dataProduct = React.useMemo(() => [
        {
            id: 1,
            name: "tets",
            price: "10000",
            create_at: "2021-01-01",
            update_at: "2021-01-01",
        },
        {
            id: 1,
            name: "tets1",
            price: "10000",
            create_at: "2021-01-01",
            update_at: "2021-01-01",
        },
        {
            id: 1,
            name: "tets2",
            price: "10000",
            create_at: "2021-01-01",
            update_at: "2021-01-01",
        },
        {
            id: 1,
            name: "tets3",
            price: "10000",
            create_at: "2021-01-01",
            update_at: "2021-01-01",
        },
        {
            id: 1,
            name: "tets4",
            price: "10000",
            create_at: "2021-01-01",
            update_at: "2021-01-01",
        },
        {
            id: 1,
            name: "tets5",
            price: "10000",
            create_at: "2021-01-01",
            update_at: "2021-01-01",
        },
        {
            id: 1,
            name: "tets6",
            price: "10000",
            create_at: "2021-01-01",
            update_at: "2021-01-01",
        },
    ], []);
    const columns = React.useMemo(() => ["STT", "Tên", "Giá", "Ngày tạo", "Ngày cập nhật"], []);


    return (
        <Box __css={{
            bg: 'white',
            borderRadius: 'md',
        }}>
            <TableContainer>
                <Table variant='simple'>
                    <Thead>
                        <Tr>
                            {
                                columns.map((column, index) => (
                                    <Th key={index}>{column}</Th>
                                ))

                            }
                        </Tr>
                    </Thead>
                    <Tbody>
                        {
                            dataProduct.map((product, index) => (
                                <Tr key={index}>
                                    <Td>{index + 1}</Td>
                                    <Td>{product.name}</Td>
                                    <Td>{product.price}</Td>
                                    <Td>{product.create_at}</Td>
                                    <Td>{product.update_at}</Td>
                                </Tr>
                            ))
                        }
                    </Tbody>
                </Table>
            </TableContainer>
        </Box>
    );
};

export default Index;
