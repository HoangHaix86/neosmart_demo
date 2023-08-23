import React from "react";
import { Controller, useFormContext } from "react-hook-form";
import { FormControl, FormErrorMessage, FormLabel } from "@chakra-ui/react";
import { Input as InputBase } from "@chakra-ui/react";

interface IProps {
    name: string;
    label: string;
    type: string;
}

const Input: React.FC<IProps> = ({ name, label, type }) => {
    const { control } = useFormContext()

    return <Controller
        control={control}
        name={name}
        render={({ field: { onChange, name, value }, fieldState: { error }, formState }) => {
            return (
                <FormControl>
                    <FormLabel htmlFor={name}>{label}</FormLabel>
                    <InputBase
                        name={name}
                        type={type}
                        onChange={onChange}
                        value={value}
                    />
                    <FormErrorMessage>
                        {/* {errors.name && errors.name.message} */}
                    </FormErrorMessage>
                </FormControl >)

        }}
    />
}

export default Input;
