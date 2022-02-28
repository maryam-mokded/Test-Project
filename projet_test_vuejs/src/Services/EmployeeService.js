import  axios  from "axios"

const apiEmploye = axios.create({
    baseURL: 'http://127.0.0.1:8000/api/employees',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
    }
})

export default {
    getEmployee() { 
        return apiEmploye.get()
    }
}