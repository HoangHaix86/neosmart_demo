import {FormControl, FormHelperText, FormLabel, Input as InputBase} from "@chakra-ui/react";
import React from "react";

interface IProps {
    name: string;
    label: string;
    isError: boolean;
    messageError?: string;
    onChange: (event: React.ChangeEvent<HTMLInputElement>) => void;
    value: string;
}

const Input: React.FC<IProps> = ({name, label, isError = false, onChange, value, messageError}) => {
    return (
        < FormControl
            isInvalid={isError}>
            <FormLabel>{label}</FormLabel>
            <InputBase type='text' id={name} value={value} onChange={onChange}/>
            {
                isError && <FormHelperText color='red'>{messageError}</FormHelperText>
            }
        </FormControl>)
}

export default Input;
