// Chakra imports
import {
    Card,
    CardBody,
    CardHeader,
    Tbody,
    Text,
    Th,
    Thead,
    Tr,
    useColorModeValue,
} from "@chakra-ui/react";
// Custom components
import React from "react";
import TablesTableRow from "./TablesTableRow1";

const dataProduct = [
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
];

const colums = ["STT", "Tên", "Giá", "Ngày tạo", "Ngày cập nhật"];
const Table = ({ title, captions, data }: any) => {
    console.log({ captions });
    const textColor = useColorModeValue("gray.700", "white");
    return (
        <Card overflowX={{ sm: "scroll", xl: "hidden" }}>
            <CardHeader p="6px 0px 22px 0px">
                <Text fontSize="xl" color={textColor} fontWeight="bold">
                    {title}
                </Text>
            </CardHeader>
            <CardBody>
                <Table variant="simple" color={textColor}>
                    <Thead>
                        <Tr my=".8rem" pl="0px" color="gray.400">
                            {colums.map((caption: any, idx: any) => {
                                return (
                                    <Th color="gray.400" key={idx}>
                                        {caption}
                                    </Th>
                                );
                            })}
                        </Tr>
                    </Thead>
                    <Tbody>
                        {dataProduct.map((row: any) => {
                            return (
                                <TablesTableRow
                                    key={`${row.email}-${row.name}`}
                                    name="đasad"
                                    logo={row.logo}
                                    email={row.email}
                                    subdomain={row.subdomain}
                                    domain={row.domain}
                                    status={row.status}
                                    date={row.date}
                                />
                            );
                        })}
                    </Tbody>
                </Table>
            </CardBody>
        </Card>
    );
};

export default Table;
