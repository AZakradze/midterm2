<template>
    <div class="wrap">
        <div class="player">
            <iframe src="https://www.youtube.com/embed/_iH0UBYDI4g"  frameborder="0"></iframe>
        </div>
        <div class="about">
            <div class="left">
                <img :src="'/'+film.image" alt="">
            </div>
            <div class="right">
                <h2>{{ film.title }}</h2>
                <div class="meta">
                    <p>IMDB: {{ film.IMDB }}</p>
                    <p>Categories: <span v-for="cat in film.categories">{{ cat.title }}</span></p>
                </div>
                <p>
                    <p>DESCRIPTION: </p>
                    {{ film.desc }}
                </p>
            </div>
        </div>
        <film-comments :film_id="film.id"></film-comments>
    </div>
</template>

<script>
import FilmComments from "./FilmComments";

export default {
    props: ['film'],
    components: {
        FilmComments
    }
}
</script>

<style scoped>
iframe {
    width: 100%;
    height: 100%;
}
.wrap {
    width: 100%;
    padding: 0;
    margin: 20px 0;
}
.player {
    width: 100%;
    height: 70vh;
    background-color: grey;
}
.about {
    margin-top:20px;
    width: 100%;
    display: grid;
    grid-template-columns: 24% 65%;
    column-gap: 5%;
}
.right {
    padding: 0;
}
h2 {
    margin: 0 0 20px 0;
}
img {
    max-width: 100%;
    height: 40vh;
}
</style>
