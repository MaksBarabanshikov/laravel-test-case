import axios from "axios";

const { BASE_URL } = import.meta.env;

const instance = axios.create({
    baseURL: BASE_URL,
    timeout: 1000,
    headers: {'X-Requested-With': 'XMLHttpRequest'},
    withCredentials: true,
});

export default instance
