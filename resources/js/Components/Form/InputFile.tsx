import React from "react";
import {Box, useToast} from "@chakra-ui/react";
import {Icon} from '@chakra-ui/react'
import {IconTrash} from '@tabler/icons-react';
import axios from "axios";
import {Image} from '@chakra-ui/react'
import {getStatus} from "@/Pages/Utils/common";

interface IProps {
    name: string;
    label: string;
    values: Record<string, any>
}


const InputFile: React.FC<IProps> = ({name, label, values}) => {
    const toast = useToast()

    const [srcImage, setSrcImage] = React.useState<string>('')
    const handleClickRemove = async () => {
        const response = await axios.post(route('remove-image', {
            path: srcImage,
            _method: 'DELETE'
        }))
        const {status, message} = await response.data;

        toast({
            title: message,
            isClosable: true,
            status: getStatus(status),
        })
        setSrcImage('')
        values[name] = '';

    }
    const handleChangeInput = async (event: React.ChangeEvent<HTMLInputElement>) => {
        const file = event.target.files?.[0];
        if (file) {
            if (file.size > 5 * 1024 * 1024) {
                alert('File size cannot exceed more than 5mb');
                return;
            }
            const response = await axios.postForm(route('upload-image'), {
                image: file,
            })
            const {path, status, message} = await response.data;
            setSrcImage(path);
            values[name] = path;
            toast({
                title: message,
                isClosable: true,
                status: getStatus(status),
            })
        }
    }

    return (<Box __css={{
        display: 'inline-block',
        border: '1px dashed #000',
        w: '124px',
        h: '124px',
        borderRadius: '4px',
        position: 'relative',
    }}>

        <Icon as={IconTrash} boxSize={6} color={'red'} __css={{
            position: 'absolute',
            top: '0',
            right: '0',
            cursor: 'pointer',
        }} onClick={handleClickRemove}/>
        <label style={{
            display: 'block',
            width: '100%',
            height: '100%',
        }}>
            <input onChange={handleChangeInput} accept='image/png,image/jpg,image/jpeg' type="file" hidden/>
            <input value={srcImage} readOnly type="text" id={name} name={name} hidden/>
            <Image src={srcImage} loading={'lazy'} w={'100%'} h={'100%'}/>
        </label>
    </Box>)

}

export default InputFile;
