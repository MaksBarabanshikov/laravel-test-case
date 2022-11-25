<script setup>
defineProps({
    label: String
})
</script>

<template>
    <a href="#" class="badge bg-danger me-1">
        {{label}}
    </a>
</template>
