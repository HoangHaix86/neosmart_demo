import React from "react";
import {Controller, useFormContext} from "react-hook-form";
import {FormControl, FormErrorMessage, FormLabel} from "@chakra-ui/react";

interface IProps {
    name: string;
}

const Input: React.FC<IProps> = ({}) => {
    const {control} = useFormContext()

    return 1
    // return <Controller
    //     control={control}
    //     name={name}
    //     render={() => {
    //         // <FormControl isInvalid={errors.name}>
    //         //     <FormLabel htmlFor='name'>First name</FormLabel>
    //         //     <Input
    //         //         id='name'
    //         //         placeholder='name'
    //         //         {...register('name', {
    //         //             required: 'This is required',
    //         //             minLength: { value: 4, message: 'Minimum length should be 4' },
    //         //         })}
    //         //     />
    //         //     <FormErrorMessage>
    //         //         {errors.name && errors.name.message}
    //         //     </FormErrorMessage>
    //         // </FormControl>
    //     }}
    // />
}

export default Input;
