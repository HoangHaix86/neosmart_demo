import { Card } from "@chakra-ui/react";
import React, { Component } from "react";
import Chart from "react-apexcharts";

interface LineChartState {
    chartData: {
        series: {
            name: string;
            data: number[];
        }[];
    };
    chartOptions: {
        xaxis: {
            categories: number[];
        };
    };
}

interface LineChartProps {
    // Các props của LineChart (nếu có)
}

class LineChart extends Component<LineChartProps, LineChartState> {
    constructor(props: LineChartProps) {
        super(props);
        this.state = {
            chartOptions: {
                xaxis: {
                    categories: [
                        1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999,
                    ],
                },
            },
            chartData: {
                series: [
                    {
                        name: "series-1",
                        data: [30, 40, 35, 50, 49, 60, 70, 91, 125],
                    },
                ],
            },
        };
    }

    componentDidMount() {
        // Thay thế phần này bằng dữ liệu biểu đồ thực tế
        // const LineChartData: any = [];
        // const LineChartOptions = {};
        // this.setState({
        //     chartData: LineChartData,
        //     chartOptions: LineChartOptions,
        // });
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
                    series={this.state.chartData.series}
                    type="line" // Đổi type thành "line" cho biểu đồ đường
                    width="100%"
                    height="100%"
                />
            </Card>
        );
    }
}

export default LineChart;
