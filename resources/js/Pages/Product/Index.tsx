import React from "react";
import Table from "@/Components/Table/Table";
import { Flex } from "@chakra-ui/react";

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
const Index = () => {
    return (
        <Flex direction="column" pt={{ base: "120px", md: "75px" }}>
            <Table
                title={"Authors Table"}
                captions={colums}
                data={dataProduct || []}
            />
        </Flex>
    );
};

export default Index;
