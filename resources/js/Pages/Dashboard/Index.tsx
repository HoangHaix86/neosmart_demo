import React from "react";
import Input from "@/Components/Form/Input";
import {usePage} from "@inertiajs/react";
import InputFile from "@/Components/Form/InputFile";

interface IFormValues {
    name: string;
    price: string;
    image_cover: string;
    image_1: string;
    image_2: string;
    image_3: string;
    image_4: string;
    image_5: string;
}

const Index: React.FC = () => {
    const errors = usePage().props

    const [values, setValues] = React.useState<IFormValues>({
        name: 'Name',
        price: '1000000',
        image_cover: '',
        image_1: '',
        image_2: '',
        image_3: '',
        image_4: '',
        image_5: '',
    })

    const handleChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        const key = event.target.id;
        const value = event.target.value
        setValues(values => ({
            ...values,
            [key]: value,
        }))
    }

    const handleSubmit = (event: React.FormEvent<HTMLFormElement>) => {
        event.preventDefault()
        console.log(values)
    }
    return (
        <div>
            <form onSubmit={handleSubmit}>
                <Input name='name' label='Name' isError={!!errors.name} messageError={errors.name as string}
                       value={values.name}
                       onChange={handleChange}/>

                <Input name='price' label='Price' isError={!!errors.price} messageError={errors.price as string}
                       value={values.price}
                       onChange={handleChange}/>

                <InputFile name={'image_cover'} label={'Image Cover'} values={values}/>

                <button type="submit">Click</button>
            </form>
        </div>
    );
}

export default Index;
