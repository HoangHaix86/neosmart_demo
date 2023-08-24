import Table from "@/Components/Table/Table";
import { Flex } from "@chakra-ui/react";

const Index = () => {
    return (
        <Flex direction="column" pt={{ base: "120px", md: "75px" }}>
            <Table
                title={"Authors Table"}
                captions={["Author", "Function", "Status", "Employed", ""]}
                data={[]}
            />
            <div>sadasd</div>
        </Flex>
    );
};

export default Index;
