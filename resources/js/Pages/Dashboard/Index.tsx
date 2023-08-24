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
import LineChart from "./../../Components/Charts/LineChart";

const Index: React.FC = () => {
    return (
        <div>
            <h1>Dashboard</h1>
        </div>
    );
};

export default Index;
