import React from "react";
import {Controller, useFormContext} from "react-hook-form";
import {FormControl, FormErrorMessage, FormLabel} from "@chakra-ui/react";
import {Input as InputBase} from "@chakra-ui/react";

interface IProps {
    name: string;
    label: string;
    type: string;
}

const InputFile: React.FC<IProps> = ({name, label, type}) => {
    const {control} = useFormContext()

    return <Controller
        control={control}
        name={name}
        render={({field: {onChange, name, value}, fieldState: {error}}) => {
            return (
                <FormControl isInvalid={!!error}>
                    <FormLabel htmlFor={name}>{label}</FormLabel>
                    <InputBase
                        name={name}
                        type={type}
                        onChange={onChange}
                        value={value}
                    />
                    <FormErrorMessage>
                        {error?.message}
                    </FormErrorMessage>
                </FormControl>)

        }}
    />
}

export default InputFile;
