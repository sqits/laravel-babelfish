import { createApp } from 'vue'
import axios from 'axios';
import TranslationTable from '../js/components/TranslationTable';

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
    },
})
app.config.globalProperties.$axios = axios.create();
app.component('TranslationTable',TranslationTable)

app.mount('#babelfish')

