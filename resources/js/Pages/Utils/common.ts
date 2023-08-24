export const getStatus = (status: number) => {
    switch (status) {
        case 200:
        case 201:
            return 'success'
        case 404:
            return 'error'
        default:
            return 'info'
    }
}
