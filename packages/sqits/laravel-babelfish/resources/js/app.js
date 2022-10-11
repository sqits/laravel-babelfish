import { createApp } from 'vue'
import axios from 'axios';

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

const app = createApp({
    data() {
        return {
            // default data
        }
    }
}).mount('#babelfish')

app.config.globalProperties.$axios = axios.create();




