import instance from "../utils/axios";
import {useAxios} from "@vueuse/integrations/useAxios";

export const getArticles = () => {
    return useAxios('/api/article', instance)
}
