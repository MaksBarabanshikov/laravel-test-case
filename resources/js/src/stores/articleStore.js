import {ref} from "vue";
import {defineStore} from "pinia";

export const useArticleStore = defineStore('articleStore', () => {
    const test = ref(false);

    const changeTest = () => test.value = !test.value

    return {
        test,
        changeTest
    }
});

