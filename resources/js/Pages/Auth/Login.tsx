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
import React, {useEffect} from 'react'
import {usePage} from "@inertiajs/inertia-react";
import {FormProvider, useForm} from 'react-hook-form';
import Input from '../../Components/Form/Input';
import * as yup from "yup";
import {yupResolver} from '@hookform/resolvers/yup';
import {Inertia} from "@inertiajs/inertia";

interface IFormValues {
    username: string;
    password: string;
}

const schema = yup.object().shape({
    username: yup
        .string()
        .required('Required')
        .max(100),
    password: yup
        .string()
        .required('Required')
        .min(8)
        .max(100),
})

export default function Login() {
    let {errors} = usePage().props

    const methods = useForm<IFormValues>({
        defaultValues: {
            username: '',
            password: ''
        },
        mode: 'onSubmit',
        resolver: yupResolver(schema)
    });

    useEffect(() => {
        if (errors.username) {
            methods.setError("username", {
                type: "manual",
                message: errors.username,
            })
        }
        if (errors.password) {
            methods.setError("password", {
                type: "manual",
                message: errors.password,
            })
        }
    }, [errors])

    const onSubmit = async (value: any) => {
        Inertia.post('/auth/login', value)
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
