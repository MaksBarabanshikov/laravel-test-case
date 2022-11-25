<script setup>
    import Article from "./Article.vue";
    import {getArticles} from "../services/article.service";
    import MySpinner from "./MySpinner.vue";

    const { data:articles, isLoading, error } = getArticles()
</script>

<template>
    <section class="container">
        <div class="row mt-5">
            <template v-if="isLoading">
                <MySpinner />
            </template>
            <template v-else>
                <div class="col-4 pb-3" v-for="article in articles.data" :key="article.title">
                    <Article
                        :img="article.img"
                        :title="article.title"
                        :preview="article.preview"
                        :created_at="article.created_at"
                        :state="article.state"
                        :tags="article.tags"
                    />
                </div>
            </template>
        </div>
    </section>
</template>
