import { Card } from "@chakra-ui/react";
import React, { Component } from "react";
import Chart from "react-apexcharts";

interface BarChartState {
    chartData: any[]; // Kiểu dữ liệu cho dữ liệu biểu đồ
    chartOptions: any; // Kiểu dữ liệu cho tùy chọn biểu đồ
}

interface BarChartProps {
    // Các props của BarChart (nếu có)
}

class BarChart extends Component<BarChartProps, BarChartState> {
    constructor(props: BarChartProps) {
        super(props);
        this.state = {
            chartData: [],
            chartOptions: {},
        };
    }

    componentDidMount() {
        const barChartData: any = []; // Thay bằng dữ liệu biểu đồ thực tế
        const barChartOptions = {}; // Thay bằng tùy chọn biểu đồ thực tế
        this.setState({
            chartData: barChartData,
            chartOptions: barChartOptions,
        });
    }

    render() {
        return (
            <Card
                py="1rem"
                height={{ sm: "200px" }}
                width="100%"
                bg="linear-gradient(81.62deg, #313860 2.25%, #151928 79.87%)"
                position="relative"
            >
                <Chart
                    options={this.state.chartOptions}
                    series={this.state.chartData}
                    type="bar"
                    width="100%"
                    height="100%"
                />
            </Card>
        );
    }
}

export default BarChart;
