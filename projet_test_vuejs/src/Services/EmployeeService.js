import  axios  from "axios"

const apiEmploye = axios.create({
    baseURL: 'http://localhost:8000/api/',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
    }
})

export default {
    getEmployees() { 
        return apiEmploye.get('employees')
    },
    getEmployeeById(id) { 
        return apiEmploye.get('employee/'+id)
    },
    DeleteEmployee(id) { 
        return apiEmploye.delete('employee/'+id)
    },
    AddEmployee(employee) { 
        return apiEmploye.post('employee',employee)
    },
    UpdateEmployee(id,employee) { 
        return apiEmploye.put('employee/'+id,employee)
    }



}