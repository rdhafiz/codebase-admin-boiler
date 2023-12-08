import axios from 'axios';

// Common headers for API requests
const headersTypeJson = { 'Content-Type': 'application/json; charset=utf-8' };
const headersTypeMultiPart = { 'Content-Type': 'multipart/form-data' };

// Handle successful API responses
const responseHandler = (response, callback) => {
    if (response.status === 200) {
        callback(response.data);
    }
};

// Handle API errors
const errorHandler = (err) => {
    const errorCode = parseInt(err.toLocaleString().replace(/\D/g, ""));
    if (errorCode === 401) {
        window.location.reload();
    }
};

// ApiService object with various HTTP request methods
const ApiService = {
    // POST method with JSON data
    POST: (url, param, callback) => {
        axios.post(url, param, { headers: headersTypeJson })
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // POST method with FormData for file uploads
    POST_FORM_DATA: (url, formData, callback) => {
        axios.post(url, formData, { headers: headersTypeMultiPart })
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // PUT method with JSON data
    PUT: (url, data, callback) => {
        axios.put(url, data, { headers: headersTypeJson })
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // GET method
    GET: (url, callback) => {
        axios.get(url, { headers: headersTypeJson })
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // POST method for file uploads
    UPLOAD: (url, media, callback) => {
        axios.post(url, media, { headers: headersTypeMultiPart })
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // Custom error handler for form validation errors
    ErrorHandler(errors) {

    },

    // Clear form validation errors
    ClearErrorHandler() {

    }
};

export default ApiService;
