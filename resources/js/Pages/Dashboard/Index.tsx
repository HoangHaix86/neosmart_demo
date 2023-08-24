import {
    Flex,
    Grid,
    Image,
    SimpleGrid,
    useColorModeValue,
} from "@chakra-ui/react";
import React from "react";
import MiniStatistics from "./MiniStatistics";
import {
    CartIcon,
    DocumentIcon,
    GlobeIcon,
    WalletIcon,
} from "./../../Components/Icons/Icons";
import BuiltByDevelopers from "./BuiltByDevelopers";

// assets
import peopleImage from "../../../assets/img/people-image.png";
import logoChakra from "../../../assets/svg/logo-white.svg";
import WorkWithTheRockets from "./WorkWithTheRockets";
import ActiveUsers from "./ActiveUsers";
import SalesOverview from "./SalesOverview";
import BarChart from "@/Components/Charts/BarChart";
import LineChart from "@/Components/Charts/LineChart";

const Index: React.FC = () => {
    const iconBoxInside = useColorModeValue("white", "white");

    return (
        <Flex flexDirection="column" pt={{ base: "10px", md: "10px" }}>
            <SimpleGrid columns={{ sm: 1, md: 2, xl: 4 }} spacing="24px">
                <MiniStatistics
                    title={"Today's Moneys"}
                    amount={"$53,000"}
                    percentage={55}
                    icon={
                        <WalletIcon
                            h={"24px"}
                            w={"24px"}
                            color={iconBoxInside}
                        />
                    }
                />
                <MiniStatistics
                    title={"Today's Users"}
                    amount={"2,300"}
                    percentage={5}
                    icon={
                        <GlobeIcon
                            h={"24px"}
                            w={"24px"}
                            color={iconBoxInside}
                        />
                    }
                />
                <MiniStatistics
                    title={"New Clients"}
                    amount={"+3,020"}
                    percentage={-14}
                    icon={
                        <DocumentIcon
                            h={"24px"}
                            w={"24px"}
                            color={iconBoxInside}
                        />
                    }
                />
                <MiniStatistics
                    title={"Total Sales"}
                    amount={"$173,000"}
                    percentage={8}
                    icon={
                        <CartIcon h={"24px"} w={"24px"} color={iconBoxInside} />
                    }
                />
            </SimpleGrid>
            {/* 2222 */}
            <Grid
                templateColumns={{ md: "1fr", lg: "1.8fr 1.2fr" }}
                templateRows={{ md: "1fr auto", lg: "1fr" }}
                my="26px"
                gap="24px"
            >
                <BuiltByDevelopers
                    title={"Built by Developers"}
                    name={"Purity UI Dashboard"}
                    description={
                        "From colors, cards, typography to complex elements, you will find the full documentation."
                    }
                    image={
                        <Image
                            src={logoChakra}
                            alt="chakra image"
                            minWidth={{ md: "300px", lg: "auto" }}
                        />
                    }
                />
                <WorkWithTheRockets
                    backgroundImage={peopleImage}
                    title={"Work with the rockets"}
                    description={
                        "Wealth creation is a revolutionary recent positive-sum game. It is all about who takes the opportunity first."
                    }
                />
            </Grid>
            {/*   33333 */}
            <Grid
                templateColumns={{ sm: "1fr", lg: "1.3fr 1.7fr" }}
                templateRows={{ sm: "repeat(2, 1fr)", lg: "1fr" }}
                gap="24px"
                mb={{ lg: "26px" }}
            >
                <ActiveUsers
                    title={"Active Users"}
                    percentage={23}
                    chart={<BarChart />}
                />
                <SalesOverview
                    title={"Sales Overview"}
                    percentage={5}
                    chart={<LineChart />}
                />
            </Grid>
        </Flex>
    );
};

export default Index;
