import './bootstrap';
import {createApp} from 'vue';
import App from './App.vue';
import router from "./src/router";
import {createPinia} from "pinia";

const app = createApp(App);
const pinia = createPinia()

app.use(router);
app.use(pinia);

app.mount("#app");
