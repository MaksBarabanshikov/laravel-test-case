<script setup>
import HeroImage from "../../assets/img/mateus-campos-felipe-OhThddppdnY-unsplash.jpg"

const background = `background-image: url(${HeroImage})`
</script>

<template>
    <div class="hero" :style="background">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero__content text-center">
                        <div class="hero__content-tag">
                            <a href="#">Laravel + Vue3 with Vite</a>
                        </div>
                        <h2><a href="#">Тестовое задание</a></h2>

                        <div class="hero__content-tag">
                            <a href="https://github.com/MaksBarabanshikov/laravel-test-case">laravel-test-case</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
