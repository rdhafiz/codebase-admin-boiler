import axios from 'axios';

// Common headers for API requests
const headersJson = {'Content-Type': 'application/json; charset=utf-8'};
const headersMultiPart = {'Content-Type': 'multipart/form-data'};

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
        axios.post(url, param, {headers: headersJson})
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // POST method with FormData for file uploads
    POST_FORM_DATA: (url, formData, callback) => {
        axios.post(url, formData, {headers: headersMultiPart})
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // PUT method with JSON data
    PUT: (url, data, callback) => {
        axios.put(url, data, {headers: headersJson})
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // GET method
    GET: (url, callback) => {
        axios.get(url, {headers: headersJson})
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // POST method for file uploads
    UPLOAD: (url, media, callback) => {
        axios.post(url, media, {headers: headersMultiPart})
            .then((response) => responseHandler(response, callback))
            .catch((err) => errorHandler(err));
    },

    // Custom error handler for form validation errors
    ErrorHandler(errors) {
        const is_invalid = document.getElementsByClassName('is-invalid');
        const error_report = document.getElementsByClassName('error-report');
        const error_report_g = document.getElementsByClassName('error-report-g');
        is_invalid.classList = '';
        error_report.innerHtml = '';
        error_report_g.innerHtml = '';
        for (const field in errors) {
            const message = errors[field][0];
            if (field === 'error') {
                error_report_g.innerHtml = '<p class="alert alert-danger">' + message + '</p>';
            } else {
                const fInput = document.querySelector('[name=' + field + ']');
                fInput.classList += ' is-invalid';
                fInput.parentNode.querySelector('.error-report').innerHTML = message;
            }
        }
    },

    // Clear form validation errors
    ClearErrorHandler() {
        const is_invalid = document.getElementsByClassName('is-invalid');
        const error_report = document.getElementsByClassName('error-report');
        const error_report_g = document.getElementsByClassName('error-report-g');
        is_invalid.classList = '';
        error_report.innerHtml = '';
        error_report_g.innerHtml = '';
    }
};
export default ApiService;
