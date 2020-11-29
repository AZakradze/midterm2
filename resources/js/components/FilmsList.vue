<template>
    <div class="wrap">
        <div class="film" v-for="film in list">
            <h2>{{ film.title }}</h2>
            <img :src="film.image" alt="">
            <p>{{ film.desc }}</p>
            <p>imdb: <span>{{ film.IMDB }}</span></p>
            <p>categories: <span v-for="cat in film.categories">{{ cat.title }}</span></p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            list: []
        }
    },
    mounted() {
        fetch('http://127.0.0.1:8000/api/films')
        .then(response => response.json())
        .then(data => this.list = data)
    }
}
</script>

<style scoped>
img{
    max-width:100%;
}
</style>
