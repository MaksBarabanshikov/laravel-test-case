<script setup>
import Tag from "./Tag.vue";

defineProps({
    img: String,
    title: String,
    preview: String,
    created_at: String,
    state: Object,
    tags: Array,
})
</script>

<template>
    <div class="card">
        <img :src="img" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ title }}</h5>
            <p class="card-text">{{ preview }}</p>
            <p>{{ created_at }}</p>
            <a class="btn btn-primary">Подробнее</a>
            <div class="mt-3">
                <span class="badge bg-primary me-1">{{ state.likes }}<i class="bi bi-balloon-heart ms-1"></i></span>
                <span class="badge bg-danger">{{ state.views }}<i class="bi bi-eye ms-1"></i></span>
            </div>
            <div class="mt-4">
                Теги:
                <Tag v-for="tag in tags" :key="tag.label" :label="tag.label" />
            </div>
        </div>
    </div>
</template>
