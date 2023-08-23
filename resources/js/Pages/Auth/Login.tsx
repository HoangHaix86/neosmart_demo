import {
    Flex,
    Box,
    Checkbox,
    Stack,
    Button,
    Heading,
    Text,
    useColorModeValue,
} from '@chakra-ui/react'
import React, {useState} from 'react'
import {usePage} from "@inertiajs/inertia-react";
import {FormProvider, useForm} from 'react-hook-form';
import Input from '../../Components/Form/Input';

interface IFormValues {
    username: string;
    password: string;
}

export default function Login() {
    const {errors} = usePage().props
    const methods = useForm<IFormValues>();
    const onSubmit = (value: IFormValues) => {
        console.log(value)
    }
    return (
        <Flex
            minH={'100vh'}
            align={'center'}
            justify={'center'}
            bg={useColorModeValue('gray.50', 'gray.800')}>
            <Stack spacing={8} mx={'auto'} maxW={'lg'} py={12} px={6}>
                <Stack align={'center'}>
                    <Heading fontSize={'4xl'}>Sign in to your account</Heading>
                    <Text fontSize={'lg'} color={'gray.600'}>
                        to enjoy all of our cool features
                    </Text>
                </Stack>
                <Box
                    rounded={'lg'}
                    bg={useColorModeValue('white', 'gray.700')}
                    boxShadow={'lg'}
                    p={8}>
                    <FormProvider {...methods}>
                        <form onSubmit={methods.handleSubmit(onSubmit)}>
                            <Stack spacing={4}>
                                <Input name='username' type='text' label='Username'/>
                                <Input name='password' type='password' label='Password'/>
                                <Stack spacing={10}>
                                    <Stack
                                        direction={{base: 'column', sm: 'row'}}
                                        align={'start'}
                                        justify={'space-between'}>
                                        <Checkbox>Remember me</Checkbox>
                                        <Text color={'blue.400'}>Forgot password?</Text>
                                    </Stack>
                                    <Button
                                        bg={'blue.400'}
                                        color={'white'}
                                        _hover={{
                                            bg: 'blue.500',
                                        }} type={'submit'}>
                                        Sign in
                                    </Button>
                                </Stack>
                            </Stack>
                        </form>
                    </FormProvider>
                </Box>
            </Stack>
        </Flex>
    )
}
